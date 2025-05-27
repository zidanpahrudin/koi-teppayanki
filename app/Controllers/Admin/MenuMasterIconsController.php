<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MenuMasterIcons;
use App\Models\MenuMaster;

class MenuMasterIconsController extends BaseController
{
    protected $menuMasterIconsModel;
    protected $menuMasterModel;

    public function __construct()
    {
        $this->menuMasterIconsModel = new MenuMasterIcons();  // Menggunakan model MenuMasterIcons
        $this->menuMasterModel = new MenuMaster();  // Menggunakan model MenuMaster
    }

    public function index()
    {
        $header['title'] = 'Menu Master Icons';  // Judul halaman

        $menus = $this->menuMasterModel->findAll(); // Ambil semua menu items

        $data = [
            'menus' => $menus
        ];
        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('pages/menu_master_icons/index', $data); // Tampilkan view untuk daftar menu master icons
        echo view('partials/footer');
    }

    public function read()
    {
        $data = $this->menuMasterIconsModel
            ->join('menu_master', 'menu_master.menu_id = menu_master_icons.menu_id', 'left')
            ->findAll(); // Ambil semua data menu master icons

        $total = count($data);  // Total data menu master icons
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

        return view('pages/menu_master_icons/create', $data); // Tampilkan form untuk tambah menu master icon baru
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
            'menu_icon_name' => [
                'rules' => 'required|string|max_length[255]',
                'errors' => [
                    'required' => 'Icon name is required',
                    'string' => 'Icon name must be a string',
                    'max_length' => 'Icon name cannot exceed 255 characters',
                ]
            ],
            'menu_icon_url' => [
                'rules' => 'required|valid_url',
                'errors' => [
                    'required' => 'Icon URL is required',
                    'valid_url' => 'Icon URL must be a valid URL',
                ]
            ]
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        // Simpan data menu master icon baru
        $this->menuMasterIconsModel->save([
            'menu_id' => $this->request->getPost('menu_id'),
            'menu_icon_name' => $this->request->getPost('menu_icon_name'),
            'menu_icon_url' => $this->request->getPost('menu_icon_url'),
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Menu master icon berhasil ditambahkan'
        ]);
    }

    public function readById($id)
    {
        $menuIcon = $this->menuMasterIconsModel->find($id); // Ambil data berdasarkan ID menu master icon

        if ($menuIcon) {
            return $this->response->setJSON([
                'success' => true,
                'data' => $menuIcon
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Menu master icon tidak ditemukan'
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
            'menu_icon_name' => [
                'rules' => 'required|string|max_length[255]',
                'errors' => [
                    'required' => 'Icon name is required',
                    'string' => 'Icon name must be a string',
                    'max_length' => 'Icon name cannot exceed 255 characters',
                ]
            ],
            'menu_icon_url' => [
                'rules' => 'required|valid_url',
                'errors' => [
                    'required' => 'Icon URL is required',
                    'valid_url' => 'Icon URL must be a valid URL',
                ]
            ]
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        // Update data menu master icon berdasarkan ID
        $this->menuMasterIconsModel->update($id, [
            'menu_id' => $this->request->getPost('menu_id'),
            'menu_icon_name' => $this->request->getPost('menu_icon_name'),
            'menu_icon_url' => $this->request->getPost('menu_icon_url'),
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Menu master icon berhasil diupdate'
        ]);
    }

    public function delete($id)
    {
        // Hapus data menu master icon berdasarkan ID
        $this->menuMasterIconsModel->delete($id);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Menu master icon berhasil dihapus'
        ]);
    }
}
