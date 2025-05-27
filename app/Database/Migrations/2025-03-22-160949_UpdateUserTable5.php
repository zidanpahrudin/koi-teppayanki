<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateUserTable5 extends Migration
{
    public function up()
    {
        if (!$this->db->fieldExists('is_active', 'users')) {
            $this->forge->addColumn('users', [
                'is_active' => [
                    'type'       => 'TINYINT',
                    'constraint' => 1,
                    'default'    => 1,
                    'null'       => false,
                ],
            ]);
        }
        if (!$this->db->fieldExists('role_id', 'users')) {
            $this->forge->addColumn('users', [
                'role_id' => [
                    'type'       => 'CHAR',
                    'constraint' => 26, // ULID Length
                    'null'       => false,
                    'after'      => 'is_active',
                ],
            ]);
            $this->forge->addForeignKey('role_id', 'roles', 'id', 'CASCADE', 'CASCADE');
        }
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'is_active');
        $this->forge->dropColumn('users', 'role_id');
        $this->forge->dropForeignKey('users', 'role_id');
    }
}
