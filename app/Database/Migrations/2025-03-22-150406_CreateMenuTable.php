<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMenuTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'CHAR',
                'constraint' => 26,
                'null' => false,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'icon' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'url' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'menu_group' => [
                'type' => 'CHAR',
                'constraint' => 26,
                'null' => true,
            ],
            'order' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'is_active' => [
                'type' => 'INT',
                'constraint' => 1,
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id');
        $this->forge->createTable('menus');
    }

    public function down()
    {
        $this->forge->dropTable('menus');
    }
}
