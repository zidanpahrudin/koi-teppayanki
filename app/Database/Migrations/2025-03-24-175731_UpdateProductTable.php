<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateProductTable extends Migration
{
    public function up()
    {
        // update id column to INT

        $this->forge->modifyColumn('product', [
            'id' => [
                'type' => 'INT',
                'constraint' => 20,
                'null' => true,
            ]
        ]);

        $this->forge->addKey('id');
    }

    public function down()
    {
        // revert id column to INT
        $this->forge->modifyColumn('product', [
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
                'auto_increment' => true,
            ]
        ]);

        $this->forge->dropKey('product', 'id');
    }
}
