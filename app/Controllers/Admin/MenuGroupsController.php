<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MenuGroup;

class MenuGroupsController extends BaseController
{
    protected $menuGroupsModel;

    public function __construct()
    {
        $this->menuGroupsModel = new MenuGroup();  // Menggunakan model MenuGroups
    }

    public function index()
    {
        $header['title'] = 'Menu Groups';  // Judul halaman

        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('pages/menu_groups/index'); // Tampilkan view untuk daftar menu groups
        echo view('partials/footer');
    }

    public function read()
    {
        $data = $this->menuGroupsModel->findAll(); // Ambil semua data menu groups

        $total = count($data);  // Total data menu groups
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
        return view('pages/menu_groups/create'); // Tampilkan form untuk tambah menu group baru
    }

    public function store()
    {
        // Validasi input data di controller
        $validation = \Config\Services::validation();

        if (!$this->validate([
            'menu_group_name' => [
                'rules' => 'required|string|max_length[255]',
                'errors' => [
                    'required' => 'Group name is required',
                    'string' => 'Group name must be a string',
                    'max_length' => 'Group name cannot exceed 255 characters',
                ]
            ],
            'min_qty' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Minimum quantity is required',
                    'decimal' => 'Minimum quantity must be a decimal number',
                ]
            ],
            'max_qty' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Maximum quantity is required',
                    'decimal' => 'Maximum quantity must be a decimal number',
                ]
            ],
            'order_id' => [
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'Order ID is required',
                    'integer' => 'Order ID must be an integer',
                ]
            ]
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        // Simpan data menu group baru
        $this->menuGroupsModel->save([
            'menu_group_name' => $this->request->getPost('menu_group_name'),
            'order_id' => $this->request->getPost('order_id'),
            'min_qty' => $this->request->getPost('min_qty'),
            'max_qty' => $this->request->getPost('max_qty'),
            'notes' => $this->request->getPost('notes'),
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Menu group berhasil ditambahkan'
        ]);
    }


    public function readById($id)
    {
        $group = $this->menuGroupsModel->find($id); // Ambil data berdasarkan ID menu group

        if ($group) {
            return $this->response->setJSON([
                'success' => true,
                'data' => $group
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Menu group tidak ditemukan'
            ]);
        }
    }

    public function update($id)
    {
        // Validasi input data di controller
        $validation = \Config\Services::validation();
        
        if (!$this->validate([
            'menu_group_name' => [
                'rules' => 'required|string|max_length[255]',
                'errors' => [
                    'required' => 'Group name is required',
                    'string' => 'Group name must be a string',
                    'max_length' => 'Group name cannot exceed 255 characters',
                ]
            ],
            'min_qty' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Minimum quantity is required',
                    'decimal' => 'Minimum quantity must be a decimal number',
                ]
            ],
            'max_qty' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Maximum quantity is required',
                    'decimal' => 'Maximum quantity must be a decimal number',
                ]
            ]
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        // Update data menu group berdasarkan ID
        $this->menuGroupsModel->update($id, [
            'menu_group_name' => $this->request->getPost('menu_group_name'),
            'order_id' => $this->request->getPost('order_id'),
            'min_qty' => $this->request->getPost('min_qty'),
            'max_qty' => $this->request->getPost('max_qty'),
            'notes' => $this->request->getPost('notes'),
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Menu group berhasil diupdate'
        ]);
    }

    public function delete($id)
    {
        // Hapus data menu group berdasarkan ID
        $this->menuGroupsModel->delete($id);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Menu group berhasil dihapus'
        ]);
    }
}
