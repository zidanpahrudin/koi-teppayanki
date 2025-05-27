<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\RelatedMenuMaster;
use App\Models\MenuMaster;

class RelatedMenuMasterController extends BaseController
{
    protected $relatedMenuMasterModel;
    protected $menuMasterModel;

    public function __construct()
    {
        $this->relatedMenuMasterModel = new RelatedMenuMaster();  // Menggunakan model RelatedMenuMaster
        $this->menuMasterModel = new MenuMaster();  // Menggunakan model MenuMaster
    }

    public function index()
    {
        $header['title'] = 'Related Menu Master';  // Judul halaman

        $menus = $this->menuMasterModel->findAll(); // Ambil semua menu items

        $data = [
            'menus' => $menus
        ];
        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('pages/related_menu_master/index', $data); // Tampilkan view untuk daftar related menu master
        echo view('partials/footer');
    }

    public function read()
    {
        $data = $this->relatedMenuMasterModel
            ->join('menu_master', 'menu_master.menu_id = related_menu_master.menu_id', 'left')
            ->join('menu_master as related_menu', 'related_menu.menu_id = related_menu_master.related_menu_id', 'left')
            ->findAll(); // Ambil semua data related menu master

        $total = count($data);  // Total data related menu master
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
        $menus = $this->menuMasterModel->findAll(); // Ambil semua menu items

        $data = [
            'menus' => $menus
        ];

        return view('pages/related_menu_master/create', $data); // Tampilkan form untuk tambah related menu master baru
    }

    public function store()
    {
        // Validasi input data di controller
        $validation = \Config\Services::validation();
        
        if (!$this->validate([
            'menu_id' => [
                'rules' => 'required|is_natural_no_zero',
                'errors' => [
                    'required' => 'Menu ID is required',
                    'is_natural_no_zero' => 'Menu ID must be a positive integer',
                ]
            ],
            'related_menu_id' => [
                'rules' => 'required|is_natural_no_zero',
                'errors' => [
                    'required' => 'Related Menu ID is required',
                    'is_natural_no_zero' => 'Related Menu ID must be a positive integer',
                ]
            ]
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        // Simpan data related menu master baru
        $this->relatedMenuMasterModel->save([
            'menu_id' => $this->request->getPost('menu_id'),
            'related_menu_id' => $this->request->getPost('related_menu_id'),
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Related menu master berhasil ditambahkan'
        ]);
    }

    public function readById($id)
    {
        $relatedMenu = $this->relatedMenuMasterModel->find($id); // Ambil data berdasarkan ID related menu master

        if ($relatedMenu) {
            return $this->response->setJSON([
                'success' => true,
                'data' => $relatedMenu
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Related menu master tidak ditemukan'
            ]);
        }
    }

    public function update($id)
    {
        // Validasi input data di controller
        $validation = \Config\Services::validation();
        
        if (!$this->validate([
            'menu_id' => [
                'rules' => 'required|is_natural_no_zero',
                'errors' => [
                    'required' => 'Menu ID is required',
                    'is_natural_no_zero' => 'Menu ID must be a positive integer',
                ]
            ],
            'related_menu_id' => [
                'rules' => 'required|is_natural_no_zero',
                'errors' => [
                    'required' => 'Related Menu ID is required',
                    'is_natural_no_zero' => 'Related Menu ID must be a positive integer',
                ]
            ]
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        // Update data related menu master berdasarkan ID
        $this->relatedMenuMasterModel->update($id, [
            'menu_id' => $this->request->getPost('menu_id'),
            'related_menu_id' => $this->request->getPost('related_menu_id'),
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Related menu master berhasil diupdate'
        ]);
    }

    public function delete($id)
    {
        // Hapus data related menu master berdasarkan ID
        $this->relatedMenuMasterModel->delete($id);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Related menu master berhasil dihapus'
        ]);
    }
}
