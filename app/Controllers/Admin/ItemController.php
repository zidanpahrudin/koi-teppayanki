<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ItemModel;
use App\Models\UnitModel;

class ItemController extends BaseController
{
    protected $itemModel;
    protected $unitModel;

    public function __construct()
    {
        $this->itemModel = new ItemModel();
        $this->unitModel = new UnitModel();
    }

    public function index()
    {
        // unit model
        $unitModel = new UnitModel();
        // find all unit
        $unit = $unitModel->findAll();

        $header['title'] = 'Item';
        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('pages/item/index', ['units' => $unit]);
        echo view('partials/footer');
    }

    public function read()
    {
        $itemModel = new itemModel();
        // find all and join with unit table
        $data = $itemModel->select('item.*, unit.unit_name, item.id as item_id')
            ->join('unit', 'unit.id = item.unit_id')
            ->findAll();

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
        $itemModel = new ItemModel();
        $data = $itemModel->find($id);

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
        $itemModel = new ItemModel();
        $validation = \Config\Services::validation();

        if (!$this->validate([
            'item_name' => [
                'rules' => 'required|is_unique[item.item_name]',
                'errors' => [
                    'required' => 'Nama item harus diisi',
                    'is_unique' => 'Nama item sudah terdaftar'
                ]
            ],
            'unit_id' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Unit harus dipilih',
                    'numeric' => 'Unit tidak valid'
                ]
            ],
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }
        
        $itemModel->save([
            'item_name' => $this->request->getPost('item_name'),
            'unit_id' => $this->request->getPost('unit_id'),
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Item berhasil ditambahkan'
        ]);
    }

    public function update($id)
    {
        $itemModel = new ItemModel();
        $validation = \Config\Services::validation();

        if (!$this->validate([
            'item_name' => [
                'rules' => 'required|is_unique[item.item_name,id,' . $id . ']',
                'errors' => [
                    'required' => 'Nama item harus diisi',
                    'is_unique' => 'Nama item sudah terdaftar'
                ]
            ],
            'unit_id' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Unit harus dipilih',
                    'numeric' => 'Unit tidak valid'
                ]
            ],
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        $itemModel->update($id, [
            'item_name' => $this->request->getPost('item_name'),
            'unit_id' => $this->request->getPost('unit_id'),
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Item berhasil diupdate'
        ]);
    }

    public function delete($id)
    {
        $itemModel = new ItemModel();
        $itemModel->delete($id);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Item berhasil dihapus'
        ]);
    }
}
