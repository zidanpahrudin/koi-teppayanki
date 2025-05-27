<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateUserTable4 extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'is_active' => [
                'type' => 'BOOLEAN',
                'null' => false,
                'default' => true,
                'after' => 'email',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'is_active');
    }
}
