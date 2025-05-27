<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateItemTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'       => 'CHAR',
                'constraint' => 26, // ULID Length
                'null'       => false,
                'after'      => 'is_active',
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'item_code' => [
                'type' => 'VARCHAR',
                'constraint' => 35,
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'is_active' => [
                'type' => 'BOOLEAN',
                'default' => true,
            ],
            'category_id' => [
                'type'       => 'CHAR',
                'constraint' => 26, // ULID Length
                'null'       => false,
                'after'      => 'is_active',
            ],
            'description' => [
                'type' => 'TEXT',
            ],
            'price' => [
                'type' => 'FLOAT',
                'constraint' => '10,2',
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id');
        $this->forge->createTable('items');
    }

    public function down()
    {
        $this->forge->dropTable('items');
    }
}
