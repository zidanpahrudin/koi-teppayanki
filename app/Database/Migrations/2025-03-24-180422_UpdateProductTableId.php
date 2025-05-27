<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateProductTableId extends Migration
{
    public function up()
    {
        $this->forge->modifyColumn('product', [
            'id' => [
                'type' => 'INT',
                'constraint' => 20,
                'null' => true,
            ]
        ]);

        $this->forge->addPrimaryKey('id');
    }

    public function down()
    {
        $this->forge->dropPrimaryKey('product');
        $this->forge->modifyColumn('product', [
            'id' => [
                'type' => 'INT',
                'constraint' => 20,
                'null' => false,
            ]
        ]);

        $this->forge->addPrimaryKey('id');
    }
}
