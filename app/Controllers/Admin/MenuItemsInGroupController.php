<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MenuItemsInGroup;
use App\Models\MenuGroup;
use App\Models\MenuMaster;

class MenuItemsInGroupController extends BaseController
{
    protected $menuItemsInGroupModel;
    protected $menuGroupsModel;
    protected $menuMasterModel;

    public function __construct()
    {
        $this->menuItemsInGroupModel = new MenuItemsInGroup();  // Menggunakan model MenuItemsInGroup
        $this->menuGroupsModel = new MenuGroup();  // Menggunakan model MenuGroups
        $this->menuMasterModel = new MenuMaster();  // Menggunakan model MenuMaster
    }

    public function index()
    {
        $header['title'] = 'Menu Items in Group';  // Judul halaman

        $menuGroups = $this->menuGroupsModel->findAll(); // Ambil semua menu group
        $menuItems = $this->menuMasterModel->findAll(); // Ambil semua menu item

        $data = [
            'menuGroups' => $menuGroups,
            'menuItems' => $menuItems
        ];
        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('pages/menu_items_in_group/index', $data); // Tampilkan view untuk daftar menu items in group
        echo view('partials/footer');
    }

    public function read()
    {
        $data = $this->menuItemsInGroupModel
            ->join('menu_group', 'menu_group.menu_group_id = menu_items_in_group.menu_group_id', 'left')
            ->join('menu_master', 'menu_master.menu_id = menu_items_in_group.menu_id', 'left')
            ->findAll(); // Ambil semua data menu items in group

        $total = count($data);  // Total data menu items in group
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
        $menuGroups = $this->menuGroupsModel->findAll(); // Ambil semua menu group
        $menuItems = $this->menuMasterModel->findAll(); // Ambil semua menu item

        $data = [
            'menuGroups' => $menuGroups,
            'menuItems' => $menuItems
        ];

        return view('pages/menu_items_in_group/create', $data); // Tampilkan form untuk tambah menu item in group baru
    }

    public function store()
    {
        // Validasi input data di controller
        $validation = \Config\Services::validation();
        
        if (!$this->validate([
            'menu_group_id' => [
                'rules' => 'required|is_natural_no_zero',
                'errors' => [
                    'required' => 'Menu group ID is required',
                    'is_natural_no_zero' => 'Menu group ID must be a positive integer',
                ]
            ],
            'menu_id' => [
                'rules' => 'required|is_natural_no_zero',
                'errors' => [
                    'required' => 'Menu ID is required',
                    'is_natural_no_zero' => 'Menu ID must be a positive integer',
                ]
            ],
            'additional_price' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Additional price is required',
                    'decimal' => 'Additional price must be a decimal number',
                ]
            ]
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        // Simpan data menu item in group baru
        $this->menuItemsInGroupModel->save([
            'menu_group_id' => $this->request->getPost('menu_group_id'),
            'menu_id' => $this->request->getPost('menu_id'),
            'additional_price' => $this->request->getPost('additional_price'),
            'default_item' => $this->request->getPost('default_item') ? true : false,
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Menu item in group berhasil ditambahkan'
        ]);
    }

    public function readById($id)
    {
        $itemInGroup = $this->menuItemsInGroupModel->find($id); // Ambil data berdasarkan ID menu item in group

        if ($itemInGroup) {
            return $this->response->setJSON([
                'success' => true,
                'data' => $itemInGroup
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Menu item in group tidak ditemukan'
            ]);
        }
    }

    public function update($id)
    {
        // Validasi input data di controller
        $validation = \Config\Services::validation();
        
        if (!$this->validate([
            'menu_group_id' => [
                'rules' => 'required|is_natural_no_zero',
                'errors' => [
                    'required' => 'Menu group ID is required',
                    'is_natural_no_zero' => 'Menu group ID must be a positive integer',
                ]
            ],
            'menu_id' => [
                'rules' => 'required|is_natural_no_zero',
                'errors' => [
                    'required' => 'Menu ID is required',
                    'is_natural_no_zero' => 'Menu ID must be a positive integer',
                ]
            ],
            'additional_price' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Additional price is required',
                    'decimal' => 'Additional price must be a decimal number',
                ]
            ]
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        // Update data menu item in group berdasarkan ID
        $this->menuItemsInGroupModel->update($id, [
            'menu_group_id' => $this->request->getPost('menu_group_id'),
            'menu_id' => $this->request->getPost('menu_id'),
            'additional_price' => $this->request->getPost('additional_price'),
            'default_item' => $this->request->getPost('default_item') ? true : false,
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Menu item in group berhasil diupdate'
        ]);
    }

    public function delete($id)
    {
        // Hapus data menu item in group berdasarkan ID
        $this->menuItemsInGroupModel->delete($id);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Menu item in group berhasil dihapus'
        ]);
    }
}
