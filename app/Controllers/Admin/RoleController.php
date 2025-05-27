<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\RoleModel;
use App\Models\MenuModel;
use App\Models\MenuPermissionModel;

class RoleController extends BaseController
{
    public function index()
    {
        $header['title'] = 'Role';

        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('pages/role/index');
        echo view('partials/footer');
    }

    public function read()
    {
        $roleModel = new RoleModel();
        $data = $roleModel->findAll();

        $total = count($data);
        $filterRecords = count($data);

        return $this->response->setJSON([
            "draw" => intval($this->request->getGet('draw')),
            "recordsTotal" => $total,
            "recordsFiltered" => $filterRecords,
            "data" => $data
        ]);
    }

    public function create()
    {
        $roleModel = new RoleModel();
        $validation = \Config\Services::validation();
        if (!$this->validate([
            'name' => [
                'rules' => 'required|is_unique[roles.name]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'is_unique' => 'Nama sudah terdaftar'
                ]
            ],
            'description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi'
                ]
            ]
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        $roleModel->save([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description')
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Role berhasil ditambahkan'
        ]);
    }

    public function readById($id)
    {
        $roleModel = new RoleModel();
        $data = $roleModel->find($id);

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

    public function update($id)
    {
        $roleModel = new RoleModel();
        $validation = \Config\Services::validation();
        if (!$this->validate([
            'name' => [
                'rules' => 'required|is_unique[roles.name,id,' . $id . ']',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'is_unique' => 'Nama sudah terdaftar'
                ]
            ],
            'description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi'
                ]
            ]
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        $roleModel->update($id, [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description')
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Role berhasil diupdate'
        ]);
    }

    public function delete($id)
    {
        $roleModel = new RoleModel();
        $roleModel->delete($id);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Role berhasil dihapus'
        ]);
    }

    public function permission_menu($id){
        $menuModel = new MenuModel();
        $menuPermissionModel = new MenuPermissionModel();

        $menus = $menuModel->findAll();

        $data = [];
        foreach ($menus as $menu) {
            $menuPermission = $menuPermissionModel->where(['role_id' => $id,'menu_id' => $menu['id']])->first();
            $data[] = [
                'id' => $menu['id'],
                'name' => $menu['name'],
                'description' => $menu['description'],
                'is_granted' => $menuPermission ? true : false
            ];

        }

        return $this->response->setJSON([
            'success' => true,
             'data' => $data
        ]);
    }

    public function update_permission()
    {
        
        $role_id = $this->request->getPost('role_id');
        $permission_id = $this->request->getPost('permission_id');
        $status = $this->request->getPost('status');

        $menuPermissionModel = new MenuPermissionModel();
        $menuModel = new MenuModel();

        $menu_role = $menuModel->where(['id' => $permission_id])->first();
        // pengecualian untuk role Admin tidak dapat diubah izin untuk mengubah role
        // Admin
        
        $roleModel = new RoleModel();
        $role_admin = $roleModel->where(['name' => 'Admin'])->first();
        if ($role_admin['id'] == $role_id && $menu_role['slug'] == 'role') {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Izin untuk mengubah role Admin tidak dapat diubah'
            ]);
        }

        if ($status == 1) {
            $menuPermissionModel->save([
                'role_id' => $role_id,
                'menu_id' => $permission_id
            ]);
        } else {
            $menuPermissionModel->where([
                'role_id' => $role_id,
                'menu_id' => $permission_id
            ])->delete();
        }

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Izin berhasil diperbarui'
        ]);
    }
}
