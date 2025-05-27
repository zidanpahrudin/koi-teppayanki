<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateUsersTable extends Migration
{
    public function up()
    {
        // Ensure 'roles' table has at least one record
        $db = \Config\Database::connect();
        $query = $db->query("SELECT COUNT(*) AS total FROM roles");
        $result = $query->getRow();

        if ($result->total == 0) {
            $db->query("INSERT INTO roles (id, name) VALUES ('01HNW3X5Z6V1A5GFG9H2M7JQKX', 'Admin'), ('01HNW3X5Z6V1A5GFG9H2M7JQKY', 'User')");
        }

        // Add 'role_id' column if it does not exist
        if (!$this->db->fieldExists('role_id', 'users')) {
            $this->forge->addColumn('users', [
                'role_id' => [
                    'type'       => 'CHAR',
                    'constraint' => 26, // ULID Length
                    'null'       => false,
                ],
            ]);

            // Add foreign key constraint
            $this->db->query('ALTER TABLE users ADD CONSTRAINT fk_users_roles FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE CASCADE ON UPDATE CASCADE');
        }
    }



    public function down()
    {
        // Check if the foreign key exists before dropping it
        $db = \Config\Database::connect();
        $query = $db->query("SELECT CONSTRAINT_NAME 
                         FROM INFORMATION_SCHEMA.KEY_COLUMN_USAGE 
                         WHERE TABLE_NAME = 'users' 
                         AND COLUMN_NAME = 'role_id' 
                         AND REFERENCED_TABLE_NAME = 'roles'");

        $result = $query->getRow();
        if ($result) {
            $this->db->query('ALTER TABLE users DROP FOREIGN KEY fk_users_roles');
        }

        // Check if 'role_id' exists before dropping it
        if ($this->db->fieldExists('role_id', 'users')) {
            $this->forge->dropColumn('users', 'role_id');
        }

        // Restore old 'role' column if needed
        if (!$this->db->fieldExists('role', 'users')) {
            $this->forge->addColumn('users', [
                'role' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 50,
                    'null'       => true,
                ],
            ]);
        }
    }
}
