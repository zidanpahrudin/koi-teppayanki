<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateProductTableId2 extends Migration
{
    public function up()
    {
        // Add the new id column with auto_increment and primary key
        $this->forge->addColumn('product', [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false,

            ]
        ]);
        $this->forge->addPrimaryKey('id');
    
    }
    

    public function down()
    {
        $this->forge->dropColumn('product', 'id');
    }
}
