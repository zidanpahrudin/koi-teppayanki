<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\WilayahModel;
use CodeIgniter\HTTP\ResponseInterface;

class WilayahController extends BaseController
{
    public function index()
    {
        $header['title'] = 'Wilayah';

        // wilayah
        $wilayahModel = new WilayahModel();
        $wilayah = $wilayahModel->where('group', 'provinsi')->findAll();

        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('pages/wilayah/index', ['wilayah' => $wilayah]);
        echo view('partials/footer');
    }

    public function read(): ResponseInterface
    {
        $request = \Config\Services::request();
        $wilayahModel = new WilayahModel();

        $draw = $request->getGet('draw');
        $searchValue = $request->getGet('search')['value'];

        $query = $wilayahModel->select('id, name, group, parent_id');

        if ($searchValue) {
            $query->like('name', $searchValue)->orLike('group', $searchValue);
        }

        $totalRecords = $wilayahModel->countAll();
        $filteredRecords = $searchValue ? $query->countAllResults(false) : $totalRecords;

        // jika kondisi ada parent_id
        $data = $query
            ->withParent()
            ->orderBy('group', 'asc')
            ->orderBy('name', 'asc')
            ->findAll();
        

            $total = count($data);
            return $this->response->setJSON([
                "draw" => $draw,
                "recordsTotal" => $total,
                "recordsFiltered" => $filteredRecords,
                "data" => $data
            ]);
    }

    public function readById($id): ResponseInterface
    {
        $wilayahModel = new WilayahModel();
        $data = $wilayahModel->find($id);
        return $this->response->setJSON($data);
    }
    public function create(): ResponseInterface
    {
        $wilayahModel = new WilayahModel();
        $validation = \Config\Services::validation();
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi'
                ]
            ],
            'group' => [
                'rules' => 'required|in_list[provinsi, kota, kecamatan]',
                'errors' => [
                    'required' => 'Group harus diisi',
                    'in_list' => 'Group tidak valid'
                ],
            ],
            'parent_id' => [
                'rules' => 'permit_empty|is_natural_no_zero',
                'errors' => [
                    'is_natural_no_zero' => 'Parent ID harus berupa angka'
                ]
            ],
            'created_at' => [
                'rules' => 'permit_empty|valid_date',
                'errors' => [
                    'valid_date' => 'Tanggal tidak valid'
                ]
            ],
            'updated_at' => [
                'rules' => 'permit_empty|valid_date',
                'errors' => [
                    'valid_date' => 'Tanggal tidak valid'
                ]
            ],
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        $parentId = $this->request->getPost('parent_id');
        $parentId = ($parentId === '' || $parentId === null) ? null : (int)$parentId;

        $data = [
            'name' => $this->request->getPost('name'),
            'group' => $this->request->getPost('group'),
            'parent_id' => $parentId,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        
        $wilayahModel->insert($data);
        return $this->response->setJSON([
            'success' => true,
            'message' => 'Wilayah berhasil ditambahkan'
        ]);
    }
    public function update($id): ResponseInterface
    {
        $wilayahModel = new WilayahModel();
        $validation = \Config\Services::validation();
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi'
                ]
            ],
            'group' => [
                'rules' => 'required|in_list[provinsi, kota, kecamatan]',
                'errors' => [
                    'required' => 'Group harus diisi',
                    'in_list' => 'Group tidak valid'
                ],
            ],
            'parent_id' => [
                'rules' => 'permit_empty|is_natural_no_zero',
                'errors' => [
                    'is_natural_no_zero' => 'Parent ID harus berupa angka'
                ]
            ],
            'created_at' => [
                'rules' => 'permit_empty|valid_date',
                'errors' => [
                    'valid_date' => 'Tanggal tidak valid'
                ]
            ],
            'updated_at' => [
                'rules' => 'permit_empty|valid_date',
                'errors' => [
                    'valid_date' => 'Tanggal tidak valid'
                ]
            ],
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }
        $parentId = $this->request->getPost('parent_id');
        $parentId = ($parentId === '' || $parentId === null) ? null : (int)$parentId;
        $data = [
            'name' => $this->request->getPost('name'),
            'group' => $this->request->getPost('group'),
            'parent_id' => $parentId,
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $wilayahModel->update($id, $data);
        return $this->response->setJSON([
            'success' => true,
            'message' => 'Wilayah berhasil diupdate'
        ]);
    }
    public function delete($id): ResponseInterface
    {
        $wilayahModel = new WilayahModel();
        $wilayahModel->delete($id);
        return $this->response->setJSON([
            'success' => true,
            'message' => 'Wilayah berhasil dihapus'
        ]);
    }


}
