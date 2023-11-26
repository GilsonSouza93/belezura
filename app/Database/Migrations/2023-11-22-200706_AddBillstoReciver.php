<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BillstoReceiver extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'form' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'value_fixed' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'value' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'description' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'doctype' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'emission_date' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'invoice' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'payout' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'emissiondate' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'invoice' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'payout' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'potion_type' => [

                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'timeout_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            "company_id" => [
                "type" => "int",
                "constraint" => 5,
            ],

            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'pop_id' => [
                "type" => "int",
                "constraint" => 5,
            ],
            
            'supplier_id' => [
                "type" => "int",
                "constraint" => 5,
            ],

            'created_at timestamp DEFAULT current_timestamp NOT NULL',
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey('pop_id', 'pops', 'id');
        $this->forge->addForeignKey('supplier_id', 'suppliers', 'id');
        $this->forge->addForeignKey('company_id', 'companies', 'id');

        $this->forge->createTable('bills_to_receive');
    }

    public function down()
    {
        $this->forge->DropTable('bills_to_receive');
    }
}
