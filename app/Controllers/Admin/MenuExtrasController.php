<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MenuExtras;

class MenuExtrasController extends BaseController
{
    protected $menuExtrasModel;

    public function __construct()
    {
        $this->menuExtrasModel = new MenuExtras(); // Menggunakan model MenuExtras
    }

    public function index()
    {
        $header['title'] = 'Menu Extras';  // Judul halaman

        $menuMasterModel = new \App\Models\MenuMaster();
        $menus = $menuMasterModel->findAll(); // Ambil semua menu dari menu_master


        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('pages/menu_extras/index', ['menus' => $menus]); // Tampilkan view untuk daftar menu extras
        echo view('partials/footer');
    }

    public function read()
    {
        $data = $this->menuExtrasModel->findAll(); // Ambil semua data menu extras

        $total = count($data);  // Total data menu extras
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
         // Ambil semua menu yang ada untuk dropdown list
    $menuMasterModel = new \App\Models\MenuMaster();
    $menus = $menuMasterModel->findAll(); // Ambil semua menu dari menu_master

    // Kirim data menu ke view
    return view('pages/menu_extras/create', ['menus' => $menus]);
    }

    public function store()
    {
        // Validasi input data
        $validation = \Config\Services::validation();
        if (!$this->validate([
            'menu_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Menu ID harus diisi',
                ]
            ],
            'extra_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama extra harus diisi',
                ]
            ],
            'price' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Harga harus diisi',
                    'decimal' => 'Harga harus berupa angka desimal'
                ]
            ]
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        // Simpan data menu extra baru
        $this->menuExtrasModel->save([
            'menu_id' => $this->request->getPost('menu_id'),
            'extra_name' => $this->request->getPost('extra_name'),
            'price' => $this->request->getPost('price'),
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Menu extra berhasil ditambahkan'
        ]);
    }

    public function readById($id)
    {
        $extra = $this->menuExtrasModel->find($id); // Ambil data berdasarkan ID menu extra

        if ($extra) {
            return $this->response->setJSON([
                'success' => true,
                'data' => $extra
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Menu extra tidak ditemukan'
            ]);
        }
    }

    public function update($id)
    {
        // Validasi input data
        $validation = \Config\Services::validation();
        if (!$this->validate([
            'menu_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Menu ID harus diisi',
                ]
            ],
            'extra_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama extra harus diisi',
                ]
            ],
            'price' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Harga harus diisi',
                    'decimal' => 'Harga harus berupa angka desimal'
                ]
            ]
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        // Update data menu extra berdasarkan ID
        $this->menuExtrasModel->update($id, [
            'menu_id' => $this->request->getPost('menu_id'),
            'extra_name' => $this->request->getPost('extra_name'),
            'price' => $this->request->getPost('price'),
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Menu extra berhasil diupdate'
        ]);
    }

    public function delete($id)
    {
        // Hapus data menu extra berdasarkan ID
        $this->menuExtrasModel->delete($id);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Menu extra berhasil dihapus'
        ]);
    }
}
