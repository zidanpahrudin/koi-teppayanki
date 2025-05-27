<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSlider extends Migration
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
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'description' => [
                'type' => 'TEXT',
            ],
            'is_active' => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 1,
            ],
            'image_url' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
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
        $this->forge->createTable('sliders');

    }

    public function down()
    {
        $this->forge->dropTable('sliders');
    }
}
