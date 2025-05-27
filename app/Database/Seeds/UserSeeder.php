<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;
use App\Models\RoleModel;

class UserSeeder extends Seeder
{
    public function run()
    {

        $roleModel = new RoleModel();
        $role = $roleModel->where('name', 'Admin')->first();
        echo "Role ID: ". $role['id']; 
        $data = [
            'name'     => 'Admin User',
            'email'    => 'admin@example.com',
            'password' => 123456,
            'role_id'  => $role['id'],
        ];
        $userModel = new UserModel();
        $userModel->insert($data);

    }
}
