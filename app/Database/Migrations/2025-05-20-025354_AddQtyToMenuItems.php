<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddQtyToMenuItems extends Migration
{
    public function up()
    {
         $this->forge->addColumn('menu_items', [
            'qty' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 1,
                'after'      => 'item_id', // optional: posisi field
            ],
        ]);
    }

    public function down()
    {
         $this->forge->dropColumn('menu_items', 'qty');
    }
}
