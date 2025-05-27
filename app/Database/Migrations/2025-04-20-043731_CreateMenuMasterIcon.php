<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMenuMasterIcon extends Migration
{
    public function up()
    {
        // Tabel menu_master_icons
        $this->forge->addField([
            'menu_icon_id'     => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'menu_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'menu_icon_name'   => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'menu_icon_url'    => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
        ]);
        $this->forge->addPrimaryKey('menu_icon_id');
        $this->forge->addForeignKey('menu_id', 'menu_master', 'menu_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('menu_master_icons');
    }

    public function down()
    {
        $this->forge->dropTable('menu_master_icons');
    }
}
