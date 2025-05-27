<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RemoveMenuImageFromMenuMaster extends Migration
{
    public function up()
    {
        $this->forge->dropColumn('menu_master', 'menu_image');
    }

    public function down()
    {
        $this->forge->addColumn('menu_master', [
            'menu_image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
        ]);
    }
}
