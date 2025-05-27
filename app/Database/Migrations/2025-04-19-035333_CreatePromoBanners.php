<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePromoBanners extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title'       => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'image_url' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'orientation' => [
                'type'       => 'ENUM',
                'constraint' => ['portrait', 'landscape', 'square'],
                'default'    => 'portrait',
            ],
            'redirect_url' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'display_position' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'sort_order' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 0,
            ],
            'is_active' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 1,
            ],
            'notes' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'pic' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
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
        $this->forge->createTable('promo_banners');

    }

    public function down()
    {
        $this->forge->dropTable('promo_banners');
    }
}
