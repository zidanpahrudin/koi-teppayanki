<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\MenuPermissionModel;
use App\Models\RoleModel;
use App\Models\MenuModel;
class MenuPermissionSeeder extends Seeder
{
    public function run()
    {
        $role = new RoleModel();
        $menu = new MenuModel();
        $menu_permission = new MenuPermissionModel();

        $role_id = $role->where('name', 'Admin')->first()['id'];
        $menu_id = $menu->get()->getResultArray();

        foreach ($menu_id as $key => $value) {
            $data = [
                'role_id' => $role_id,
                'menu_id' => $value['id'],
            ];
            $menu_permission->insert($data);
        }
        
    }
}
