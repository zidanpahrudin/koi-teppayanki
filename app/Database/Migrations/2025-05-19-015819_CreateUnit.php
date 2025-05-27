<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUnit extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'unit_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'unit_code' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
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
        $this->forge->createTable('unit');
    }

    public function down()
    {
        $this->forge->dropTable('unit');
    }
}
