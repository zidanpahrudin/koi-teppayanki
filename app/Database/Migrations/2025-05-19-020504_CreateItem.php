<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateItem extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'item_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'item_code' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'unit_id' => [
                'type' => 'INT',
                'constraint' => 11,
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
        $this->forge->addForeignKey('unit_id', 'unit', 'id', '', '');
        $this->forge->createTable('item');
    }

    public function down()
    {
        $this->forge->dropForeignKey('item', 'unit_id');
        $this->forge->dropTable('item');
        $this->forge->dropTable('unit');
    }
}
