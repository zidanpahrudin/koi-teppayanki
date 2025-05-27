<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateItemsInGroup extends Migration
{
    public function up()
    {
        // Tabel menu_items_in_group
        $this->forge->addField([
            'item_id'           => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'menu_group_id'     => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'menu_id'           => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'additional_price'  => [
                'type'           => 'DECIMAL',
                'constraint'     => '10,2',
                'default'        => 0.00,
            ],
            'default_item'      => [
                'type'           => 'BOOLEAN',
                'default'        => false,
            ],
        ]);
        $this->forge->addPrimaryKey('item_id');
        $this->forge->addForeignKey('menu_group_id', 'menu_group', 'menu_group_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('menu_id', 'menu_master', 'menu_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('menu_items_in_group');
    }

    public function down()
    {
        $this->forge->dropTable('menu_items_in_group');
    }
}
