<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DropItemsTable extends Migration
{
    public function up()
    {
        $this->forge->dropTable('items');
    }

    public function down()
    {
        //
    }
}
