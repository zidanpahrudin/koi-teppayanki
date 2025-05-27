<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMenuMasterTags extends Migration
{
    public function up()
    {
        // Tabel menu_master_tags
        $this->forge->addField([
            'menu_tag_id'      => [
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
            'tag_name'         => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
        ]);
        $this->forge->addPrimaryKey('menu_tag_id');
        $this->forge->addForeignKey('menu_id', 'menu_master', 'menu_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('menu_master_tags');
    }

    public function down()
    {
        $this->forge->dropTable('menu_master_tags');
    }
}
