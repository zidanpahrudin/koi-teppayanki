<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use App\Models\RoleModel;

class UserController extends BaseController
{
    public function index()
    {
        $header['title'] = 'User';
        
        $roleModel = new RoleModel();
        $data['roles'] = $roleModel->select('id, name')->findAll();

        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('pages/user/index', $data);
        echo view('partials/footer');
    }

    public function read() {
        $userModel = new UserModel();
        $data = $userModel->select(
            'users.id, users.name, users.email, roles.name as role_name'
            )->join('roles', 'roles.id = users.role_id')->findAll();
        $total = count($data);
        $filterRecords = count($data);
        return $this->response->setJSON([
            "draw" => intval($this->request->getGet('draw')),
            "recordsTotal" => $total,
            "recordsFiltered" => $filterRecords,
            "data" => $data
        ]);
    }

    public function create() {
        $userModel = new UserModel();
        $validation = \Config\Services::validation();
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'Email harus diisi',
                    'valid_email' => 'Email tidak valid',
                    'is_unique' => 'Email sudah terdaftar'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi'
                ]
            ],
            'role_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Role harus diisi'
                ]
            ]
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }


        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'role_id' => $this->request->getPost('role_id')
        ];
        $userModel->insert($data);
        
        return $this->response->setJSON([
            'success' => true,
            'message' => 'User berhasil ditambahkan'
        ]);
        
    }

    public function update($id) {
        $userModel = new UserModel();
        $validation = \Config\Services::validation();
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi'
                ]
            ],
            'email' => [
                'errors' => [
                    'valid_email' => 'Email tidak valid'
                ]
            ],
            'role_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Role harus diisi'
                ]
            ]
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }
        
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'role_id' => $this->request->getPost('role_id')
        ];
        if($this->request->getPost('password')) {
            $data['password'] = $this->request->getPost('password');
        }

        $userModel->update($id, $data);
        
        return $this->response->setJSON([
            'success' => true,
            'message' => 'User berhasil diupdate'
        ]);
    }

    public function readById($id) {
        $userModel = new UserModel();
        $data = $userModel->find($id);
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

    public function delete($id) {
        $userModel = new UserModel();
        $userModel->delete($id);
        return $this->response->setJSON([
            'success' => true,
            'message' => 'User berhasil dihapus'
        ]);
    }
}
