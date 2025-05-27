<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPriceToMenuPackages extends Migration
{
    public function up()
    {
        $this->forge->addColumn('menu_packages', [
            'price' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'default'    => 0.00,
                'after'      => 'max_qty', // Letakkan setelah kolom max_qty
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('menu_packages', 'price');
    }
}
