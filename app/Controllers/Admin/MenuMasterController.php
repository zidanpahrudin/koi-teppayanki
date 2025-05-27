<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MenuMaster;
use App\Models\MenuItemsModel;
use App\Models\ItemModel;
use CodeIgniter\HTTP\ResponseInterface;

class MenuMasterController extends BaseController
{
    protected $menuMaster;
    protected $menuItemsModel;
    protected $itemModel;
    public function __construct()
    {
        $this->menuMaster = new MenuMaster();
        $this->menuItemsModel = new MenuItemsModel();
        $this->itemModel = new ItemModel();
    }

    public function index()
    {
        $header['title'] = 'Menu Master';  // Judul halaman

        // ambil data menu items
        $items = $this->itemModel->findAll();

        $data['items'] = $items;
        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('pages/menu_master/index', $data); // Tampilkan view untuk daftar menu
        echo view('partials/footer');
    }

    public function read()
    {
        $data = $this->menuMaster->findAll(); // Ambil semua data menu

        $total = count($data);  // Total data menu
        $filterRecords = count($data); // Filtered records

        return $this->response->setJSON([
            "draw" => intval($this->request->getGet('draw')),
            "recordsTotal" => $total,
            "recordsFiltered" => $filterRecords,
            "data" => $data
        ]);
    }

    public function create()
    {
        return view('pages/menu_master/create'); // Tampilkan form untuk tambah menu baru
    }

    public function store()
    {
        // Validasi input data dan gambar
        $validation = \Config\Services::validation();
        if (!$this->validate([
            'menu_code' => [
                'rules' => 'required|is_unique[menu_master.menu_code]',
                'errors' => [
                    'required' => 'Kode menu harus diisi',
                    'is_unique' => 'Kode menu sudah ada'
                ]
            ],
            'menu_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama menu harus diisi'
                ]
            ],
            'price' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Harga menu harus diisi',
                    'decimal' => 'Harga menu harus berupa angka desimal'
                ]
            ],
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }


        // Simpan data menu baru
        $this->menuMaster->save([
            'menu_code' => $this->request->getPost('menu_code'),
            'menu_name' => $this->request->getPost('menu_name'),
            'price' => $this->request->getPost('price'),
            'description' => $this->request->getPost('description'),
        ]);

        // Ambil ID items yang dipilih
        $menu_id = $this->menuMaster->insertID();
        $item_ids = $this->request->getPost('item_ids');      // array of item IDs
        $qtys     = $this->request->getPost('qty');           // array: [item_id => qty]

        if (is_array($item_ids)) {
            foreach ($item_ids as $item_id) {
                $qty = isset($qtys[$item_id]) ? (int)$qtys[$item_id] : 1; // default 1
                $this->menuItemsModel->insert([
                    'menu_id' => $menu_id,
                    'item_id' => $item_id,
                    'qty'     => $qty,
                ]);
            }
        }


        return $this->response->setJSON([
            'success' => true,
            'message' => 'Menu berhasil ditambahkan'
        ]);
    }


    public function readById($id)
    {
        $menu = $this->menuMaster->find($id); // Ambil data berdasarkan ID menu
        $menu['items'] = $this->menuItemsModel->where('menu_id', $id)->join('item', 'item.id = menu_items.item_id')->findAll();
        if ($menu) {
            return $this->response->setJSON([
                'success' => true,
                'data' => $menu
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Menu tidak ditemukan'
            ]);
        }
    }

    public function update($id)
    {
        // Validasi input data
        $validation = \Config\Services::validation();
        if (!$this->validate([
            
            'menu_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama menu harus diisi'
                ]
            ],
            'price' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Harga menu harus diisi',
                    'decimal' => 'Harga menu harus berupa angka desimal'
                ]
            ]
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        
        // delete menu items
        $this->menuItemsModel->where('menu_id', $id)->delete();
        // Ambil ID items yang dipilih
        $item_ids = $this->request->getPost('item_ids');      // array of item IDs
        $qtys     = $this->request->getPost('qty');           // array: [item_id => qty]
        if (is_array($item_ids)) {
            foreach ($item_ids as $item_id) {
                $qty = isset($qtys[$item_id]) ? (int)$qtys[$item_id] : 1; // default 1
                $this->menuItemsModel->insert([
                    'menu_id' => $id,
                    'item_id' => $item_id,
                    'qty'     => $qty,
                ]);
            }
        }

        // Update data menu
        $this->menuMaster->update($id, [
            'menu_code' => $this->request->getPost('menu_code'),
            'menu_name' => $this->request->getPost('menu_name'),
            'price' => $this->request->getPost('price'),
            'description' => $this->request->getPost('description'),
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Menu berhasil diupdate'
        ]);
    }


    public function delete($id)
    {
        // Hapus data menu berdasarkan ID
        $this->menuMaster->delete($id);

        // Hapus data menu items terkait
        $this->menuItemsModel->where('menu_id', $id)->delete();

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Menu berhasil dihapus'
        ]);
    }
}
