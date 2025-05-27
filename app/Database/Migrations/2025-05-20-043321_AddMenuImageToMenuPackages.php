<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddMenuImageToMenuPackages extends Migration
{
    public function up()
    {
        $this->forge->addColumn('menu_packages', [
            'menu_image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
                'after'      => 'package_name' // opsional: untuk menaruh setelah kolom tertentu
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('menu_packages', 'menu_image');
    }
}
