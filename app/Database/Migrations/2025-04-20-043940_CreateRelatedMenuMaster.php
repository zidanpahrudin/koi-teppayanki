<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRelatedMenuMaster extends Migration
{
    public function up()
    {
        // Tabel related_menu_master
        $this->forge->addField([
            'related_menu_id'  => [
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
        ]);
        $this->forge->addPrimaryKey('related_menu_id');
        $this->forge->addForeignKey('menu_id', 'menu_master', 'menu_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('related_menu_id', 'menu_master', 'menu_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('related_menu_master');
    }

    public function down()
    {
        $this->forge->dropTable('related_menu_master');
    }
}
