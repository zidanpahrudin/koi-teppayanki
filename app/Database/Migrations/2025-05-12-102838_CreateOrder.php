<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrder extends Migration
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
            'order_no' => [
                'type' => 'VARCHAR',
                'constraint' => 255, // Defining the length of the VARCHAR
            ],
            'full_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255, // Defining the length of the VARCHAR
            ],
            'phone_no' => [
                'type' => 'VARCHAR',
                'constraint' => 20, // Assuming phone numbers are not too long
            ],
            'order_date' => [
                'type' => 'DATE',
            ],
            'city' => [
                'type' => 'VARCHAR',
                'constraint' => 100, // Defining a reasonable length for city names
            ],
            'address' => [
                'type' => 'TEXT', // Use TEXT for longer addresses
            ],
            'event_type' => [
                'type' => 'VARCHAR',
                'constraint' => 100, // Defining a reasonable length for event type
            ],
            'know_from' => [
                'type' => 'VARCHAR',
                'constraint' => 100, // Defining a reasonable length for know_from
            ],
            'remarks' => [
                'type' => 'TEXT', // Use TEXT for potentially long remarks
            ],
            'order_status' => [
                'type' => 'VARCHAR',
                'constraint' => 50, // Defining a reasonable length for order status
            ],
            'order_total' => [
                'type' => 'DECIMAL',  // Use DECIMAL for financial values
                'constraint' => '10,2', // 10 digits in total, 2 decimal places
            ],
        ]);

        $this->forge->addKey('id', true); // Primary key on the 'id' column
        $this->forge->createTable('orders'); // Creates the 'orders' table
    }

    public function down()
    {
        $this->forge->dropTable('orders'); // Drops the 'orders' table
    }
}
