<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateUserTable3 extends Migration
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
                'constraint' => 255,
                'null' => false,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'role_id' => [
                'type'       => 'CHAR',
                'constraint' => 26, // ULID Length
                'null'       => false,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
        ]);

        // Add foreign key constraint
        $this->forge->addForeignKey('role_id', 'roles', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users');
    }

    public function down()
    {
        // Drop foreign key constraint
        $this->forge->dropForeignKey('users', 'users_role_id_foreign');

        // Drop 'role_id' column
        $this->forge->dropColumn('users', 'role_id');

        // Drop table
        $this->forge->dropTable('users');
    }
}
