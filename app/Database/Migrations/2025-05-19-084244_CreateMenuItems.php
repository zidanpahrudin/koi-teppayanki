<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMenuItems extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'menu_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'item_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'default' => date('Y-m-d H:i:s'),
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'default' => date('Y-m-d H:i:s'),
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('menu_id', 'menu_master', 'menu_id', '', '');
        $this->forge->addForeignKey('item_id', 'item', 'id', '', '');
        $this->forge->createTable('menu_items');
    }

    public function down()
    {
        $this->forge->dropForeignKey('menu_items', 'menu_id');
        $this->forge->dropForeignKey('menu_items', 'item_id');
        $this->forge->dropTable('unit');
        $this->forge->dropTable('menu_items');
        $this->forge->dropTable('menu_master');
        $this->forge->dropTable('item');
    }
}
