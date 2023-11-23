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

            'company_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'pop_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],


            'suplier_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'billstoreceiver_form' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'billstoreceiver_valuefixed' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],


            'billstoreceiver_value' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'billstoreceiver_description' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'billstoreceiver_doctype' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'billstoreceiver_description' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

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
            
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            
            "company_id" => [
                "type" => "int",
                "constraint" => 5,
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,

             'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            

    
        ]);
        $this->forge->addKey('id', true);

        $this->forge->addForeignKey('company_id', 'companies', 'id');

        $this->forge->createTable('billstoReceiver');

    }

    public function down()
    {
        $this->forge->DropTable('billstoReceiver');
    }
}
