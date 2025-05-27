<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UnitModel;

class UnitController extends BaseController
{
    protected $unitModel;
    public function __construct()
    {
        $this->unitModel = new UnitModel();
    }
    public function index()
    {
        $header['title'] = 'Unit';
        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('pages/unit/index');
        echo view('partials/footer');
    }

    public function read()
    {
        $unitModel = new UnitModel();
        $data = $unitModel->findAll();

        $total = count($data);
        $filterRecords = count($data);

        return $this->response->setJSON([
            "draw" => intval($this->request->getGet('draw')),
            "recordsTotal" => $total,
            "recordsFiltered" => $filterRecords,
            "data" => $data
        ]);
    }
    

    public function readById($id)
    {
       $unitModel = new UnitModel();
        $data = $unitModel->find($id);

        if ($data) {
            return $this->response->setJSON([
                'success' => true,
                'data' => $data
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ]);
        }
    }

    public function create()
    {
        $unitModel = new UnitModel();
        $validation = \Config\Services::validation();
        if (!$this->validate([
            'unit_name' => [
                'rules' => 'required|is_unique[unit.unit_name]',
                'errors' => [
                    'required' => 'Nama unit harus diisi',
                    'is_unique' => 'Nama unit sudah terdaftar'
                ]
            ],
            'unit_code' => [
                'rules' => 'required|is_unique[unit.unit_code]',
                'errors' => [
                    'required' => 'Kode unit harus diisi',
                    'is_unique' => 'Kode unit sudah terdaftar'
                ]
            ],
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        $unitModel->save([
            'unit_name' => $this->request->getPost('unit_name'),
            'unit_code' => $this->request->getPost('unit_code')
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Unit berhasil ditambahkan'
        ]);
    }

    public function update($id)
    {
        $unitModel = new UnitModel();
        $validation = \Config\Services::validation();

        if (!$this->validate([
            'unit_name' => [
                'rules' => 'required|is_unique[unit.unit_name,id,' . $id . ']',
                'errors' => [
                    'required' => 'Nama unit harus diisi',
                    'is_unique' => 'Nama unit sudah terdaftar'
                ]
            ],
            'unit_code' => [
                'rules' => 'required|is_unique[unit.unit_code,id,' . $id . ']',
                'errors' => [
                    'required' => 'Kode unit harus diisi',
                    'is_unique' => 'Kode unit sudah terdaftar'
                ]
            ],
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        $unitModel->update($id, [
            'unit_name' => $this->request->getPost('unit_name'),
            'unit_code' => $this->request->getPost('unit_code')
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Unit berhasil diupdate'
        ]);
    }


    public function delete($id)
    {
         $unitModel = new UnitModel();
        $unitModel->delete($id);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Unit berhasil dihapus'
        ]);
    }
}
