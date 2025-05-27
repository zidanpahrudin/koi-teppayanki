<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'       => 'CHAR',
                'constraint' => 26, // ULID Length
                'null'       => false,
            ],
            'product_id' => [
                'type'       => 'INTEGER',
                'constraint' => 20,
                'null'       => false,
            ],
            'product_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'product_code'  => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'category_id' => [
                'type'       => 'INTEGER',
                'constraint' => 20,
                'null'       => false,
            ],
            'sub_category_id' => [
                'type'       => 'INTEGER',
                'constraint' => 20,
                'null'       => false,
            ],
            'bom_id' => [
                'type'       => 'INTEGER',
                'constraint' => 20,
                'null'       => false,
            ],
            'bom_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'category_type_id' => [
                'type'       => 'INTEGER',
                'constraint' => 20,
                'null'       => false,
            ],
            'category_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'flag_active'   => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'null'       => false,
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => false,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => false,
            ]
        ]);
        $this->forge->addKey('id');
        $this->forge->createTable('product');

    }

    public function down()
    {
        $this->forge->dropTable('product');
    }
}
