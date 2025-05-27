<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMenuPackageItems extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'package_item_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'package_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'item_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
        ]);

        $this->forge->addKey('package_item_id', true);
        $this->forge->addForeignKey('package_id', 'menu_packages', 'package_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('item_id', 'menu_items_in_group', 'item_id', 'CASCADE');
        $this->forge->createTable('menu_package_items');
    }

    public function down()
    {
        $this->forge->dropTable('menu_package_items');
    }
}
