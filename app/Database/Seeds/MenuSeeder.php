<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Ulid\Ulid;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $menuModel = new \App\Models\MenuModel();

        $data = [
            [
                'id' => Ulid::generate(),
                'name' => 'Dashboard',
                'slug' => 'dashboard',
                'description' => 'Dashboard',
                'icon' => 'fas fa-tachometer-alt',
                'url' => 'dashboard',
                'menu_group' => 'main',
                'order' => 1,
                'is_active' => 1
            ],
            [
                'id' => Ulid::generate(),
                'name' => 'User',
                'slug' => 'user',
                'description' => 'User',
                'icon' => 'fas fa-users',
                'url' => 'user',
                'menu_group' => 'main',
                'order' => 2,
                'is_active' => 1
            ],
            [
                'id' => Ulid::generate(),
                'name' => 'Role',
                'slug' => 'role',
                'description' => 'Role',
                'icon' => 'fas fa-user-tag',
                'url' => 'role',
                'menu_group' => 'main',
                'order' => 3,
                'is_active' => 1
            ],
            [
                'id' => Ulid::generate(),
                'name' => 'Menu',
                'slug' => 'menu',
                'description' => 'Menu',
                'icon' => 'fas fa-bars',
                'url' => 'menu',
                'menu_group' => 'configuration',
                'order' => 1,
                'is_active' => 1
            ],
            [
                'id' => Ulid::generate(),
                'name' => 'Setting',
                'slug' => 'setting',
                'description' => 'Setting',
                'icon' => 'fas fa-cogs',
                'url' => 'setting',
                'menu_group' => 'configuration',
                'order' => 2,
                'is_active' => 1
            ]
        ];

        $menuModel->insertBatch($data);
    }
}
