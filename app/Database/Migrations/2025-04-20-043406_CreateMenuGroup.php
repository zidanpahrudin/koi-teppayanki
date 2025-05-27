<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMenuGroup extends Migration
{
    public function up()
    {
        // Tabel menu_group
        $this->forge->addField([
            'menu_group_id'     => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'menu_group_name'   => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'order_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'default'        => 0,
            ],
            'min_qty'           => [
                'type'           => 'DECIMAL',
                'constraint'     => '10,2',
            ],
            'max_qty'           => [
                'type'           => 'DECIMAL',
                'constraint'     => '10,2',
            ],
            'notes'             => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
        ]);
        $this->forge->addPrimaryKey('menu_group_id');
        $this->forge->createTable('menu_group');
    }

    public function down()
    {
        $this->forge->dropTable('menu_group');
    }
}
