<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateWilayahTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'group' => [
                'type' => 'ENUM',
                'constraint' => ['provinsi', 'kota', 'kecamatan'],
            ],
            'parent_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
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
        
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('parent_id', 'wilayah', 'id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('wilayah');
        
    }

    public function down()
    {
        $this->forge->dropTable('wilayah');
    }
}
