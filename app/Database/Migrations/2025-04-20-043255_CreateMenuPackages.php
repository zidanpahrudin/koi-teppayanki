<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMenuPackages extends Migration
{
    public function up()
    {
        // Tabel menu_packages
        $this->forge->addField([
            'package_id'        => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'menu_id'           => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'package_name'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'min_qty'           => [
                'type'           => 'DECIMAL',
                'constraint'     => '10,2',
            ],
            'max_qty'           => [
                'type'           => 'DECIMAL',
                'constraint'     => '10,2',
            ],
            'notes'             => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'flag_separate_print_package' => [
                'type'           => 'BOOLEAN',
                'default'        => false,
            ],
            'flag_separate_tax_calculation' => [
                'type'           => 'BOOLEAN',
                'default'        => false,
            ],
        ]);
        $this->forge->addPrimaryKey('package_id');
        $this->forge->addForeignKey('menu_id', 'menu_master', 'menu_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('menu_packages');
    }

    public function down()
    {
        $this->forge->dropTable('menu_packages');
    }
}
