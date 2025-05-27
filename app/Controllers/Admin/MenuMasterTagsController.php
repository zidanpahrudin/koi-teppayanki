<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MenuMasterTags;
use App\Models\MenuMaster;

class MenuMasterTagsController extends BaseController
{
    protected $menuMasterTagsModel;
    protected $menuMasterModel;

    public function __construct()
    {
        $this->menuMasterTagsModel = new MenuMasterTags();  // Menggunakan model MenuMasterTags
        $this->menuMasterModel = new MenuMaster();  // Menggunakan model MenuMaster
    }

    public function index()
    {
        $header['title'] = 'Menu Master Tags';  // Judul halaman

        $menus = $this->menuMasterModel->findAll(); // Ambil semua menu items

        $data = [
            'menus' => $menus
        ];
        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('pages/menu_master_tags/index', $data); // Tampilkan view untuk daftar menu master tags
        echo view('partials/footer');
    }

    public function read()
    {
        $data = $this->menuMasterTagsModel
            ->join('menu_master', 'menu_master.menu_id = menu_master_tags.menu_id', 'left')
            ->findAll(); // Ambil semua data menu master tags

        $total = count($data);  // Total data menu master tags
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

        return view('pages/menu_master_tags/create', $data); // Tampilkan form untuk tambah menu master tag baru
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
            'tag_name' => [
                'rules' => 'required|string|max_length[255]',
                'errors' => [
                    'required' => 'Tag name is required',
                    'string' => 'Tag name must be a string',
                    'max_length' => 'Tag name cannot exceed 255 characters',
                ]
            ]
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        // Simpan data menu master tag baru
        $this->menuMasterTagsModel->save([
            'menu_id' => $this->request->getPost('menu_id'),
            'tag_name' => $this->request->getPost('tag_name'),
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Menu master tag berhasil ditambahkan'
        ]);
    }

    public function readById($id)
    {
        $menuTag = $this->menuMasterTagsModel->find($id); // Ambil data berdasarkan ID menu master tag

        if ($menuTag) {
            return $this->response->setJSON([
                'success' => true,
                'data' => $menuTag
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Menu master tag tidak ditemukan'
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
            'tag_name' => [
                'rules' => 'required|string|max_length[255]',
                'errors' => [
                    'required' => 'Tag name is required',
                    'string' => 'Tag name must be a string',
                    'max_length' => 'Tag name cannot exceed 255 characters',
                ]
            ]
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        // Update data menu master tag berdasarkan ID
        $this->menuMasterTagsModel->update($id, [
            'menu_id' => $this->request->getPost('menu_id'),
            'tag_name' => $this->request->getPost('tag_name'),
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Menu master tag berhasil diupdate'
        ]);
    }

    public function delete($id)
    {
        // Hapus data menu master tag berdasarkan ID
        $this->menuMasterTagsModel->delete($id);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Menu master tag berhasil dihapus'
        ]);
    }
}
