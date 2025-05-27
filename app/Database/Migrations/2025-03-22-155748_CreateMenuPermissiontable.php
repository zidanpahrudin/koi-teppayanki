<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMenuPermissiontable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'       => 'CHAR',
                'constraint' => 26, // ULID Length
                'null'       => false,
            ],
            'role_id' => [
                'type'       => 'CHAR',
                'constraint' => 26, // ULID Length
                'null'       => false,
            ],
            'menu_id' => [
                'type'       => 'CHAR',
                'constraint' => 26, // ULID Length
                'null'       => false,
            ],
            'created_at'
            => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at'
            => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('role_id', 'roles', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('menu_id', 'menus', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('menu_permission');
    }

    public function down()
    {
        $this->forge->dropTable('menu_permission');
    }
}
