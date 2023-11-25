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

<<<<<<< Updated upstream


            'billstoreceiver_emissiondate' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'billstoreceiver_invoice' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'billstoreceiver_payout' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'billstoreceiver_potiontype' => [
=======
            'potion_type' => [
>>>>>>> Stashed changes
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'timeout_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'create_at' => [
                'type' => 'DATETIME',
                'null' => true,
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

            'created_at timestamp DEFAULT current_timestamp NOT NULL',

<<<<<<< Updated upstream
=======
            'pop_id' => [
                "type" => "int",
                "constraint" => 5,
            ],

            'supplier_id' => [
                "type" => "int",
                "constraint" => 5,
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
>>>>>>> Stashed changes

        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey('pop_id', 'pops', 'id');
        $this->forge->addForeignKey('supplier_id', 'suppliers', 'id');
        $this->forge->addForeignKey('company_id', 'companies', 'id');

        $this->forge->createTable('billsToReceiver');
    }

    public function down()
    {
        $this->forge->DropTable('billstoReceiver');
    }
}
