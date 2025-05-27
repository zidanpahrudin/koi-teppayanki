<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCustomer extends Migration
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
            'full_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255, // Defining the length of the VARCHAR
            ],
            'phone_no' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('customers');
    }

    public function down()
    {
        $this->forge->dropTable('customers');
    }
}
