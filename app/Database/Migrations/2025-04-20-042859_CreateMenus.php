<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMenuMaster extends Migration
{
    public function up()
    {
        // Tabel menu_master
        $this->forge->addField([
            'menu_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'menu_code'        => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'menu_name'        => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'menu_short_name'  => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'price'            => [
                'type'           => 'DECIMAL',
                'constraint'     => '10,2',
            ],
            'description'      => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'menu_image'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => true,
            ],
            'flag_tax'         => [
                'type'           => 'BOOLEAN',
                'default'        => false,
            ],
            'flag_other_tax'   => [
                'type'           => 'BOOLEAN',
                'default'        => false,
            ],
            'flag_open_price'  => [
                'type'           => 'BOOLEAN',
                'default'        => false,
            ],
            'print_zero_value' => [
                'type'           => 'BOOLEAN',
                'default'        => true,
            ],
            'theme_menu_on_pos'=> [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => true,
            ],
            'sales_account'    => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => true,
            ],
            'cogs_account'     => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => true,
            ],
            'discount_account' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => true,
            ],
        ]);
        $this->forge->addPrimaryKey('menu_id');
        $this->forge->createTable('menu_master');

        // Tabel menu_extras
        $this->forge->addField([
            'menu_extra_id'    => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'menu_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'extra_name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'min_extra_qty'    => [
                'type'           => 'DECIMAL',
                'constraint'     => '10,2',
            ],
            'max_extra_qty'    => [
                'type'           => 'DECIMAL',
                'constraint'     => '10,2',
            ],
            'price'            => [
                'type'           => 'DECIMAL',
                'constraint'     => '10,2',
            ],
        ]);
        $this->forge->addPrimaryKey('menu_extra_id');
        $this->forge->addForeignKey('menu_id', 'menu_master', 'menu_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('menu_extras');
    }

    public function down()
    {
        $this->forge->dropTable('menu_master');
        $this->forge->dropTable('menu_extras');
    }
}
