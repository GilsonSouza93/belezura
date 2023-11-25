<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPaymentPoint extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],

            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'carrier' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'portdores' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'companies' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'active' => [
                'type' => 'boolean',
                'default' => false,

            ],

<<<<<<< Updated upstream:app/Database/Migrations/2023-11-23-172345_AddPaymentPoint.php
            'billsDiscount' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'adminDiscount' => [
=======
            'bills_discount' => [
>>>>>>> Stashed changes:app/Database/Migrations/2023-11-23-172345_AddReceiverPoint.php
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'admin_discount' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'allow_aiscount' => [
                'type' => 'boolean',
                'default' => false,
            ],

            'refinance' => [
                'type' => 'boolean',
                'default' => false,
            ],

            'method' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'receiver' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'pops' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'canceled' => [
                'type' => 'boolean',
                'default' => false,
            ],

            'plan' => [
                'type' => 'boolean',
                'default' => false,
            ],

            'return_release' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'card_release' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'debit_release' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'generate_fiscal_note' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'fiscal_note' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'send_fiscal_note' => [
                'type' => 'boolean',
                'default' => false,
            ],

            'filter' => [
                'type' => 'boolean',
                'default' => false,
            ],

            'cash_reports' => [
                'type' => 'boolean',
                'default' => false,
            ],

            'schedule' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            "company_id" => [
                "type" => "int",
                "constraint" => 5,
            ],
        ]);

<<<<<<< Updated upstream:app/Database/Migrations/2023-11-23-172345_AddPaymentPoint.php
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

           
           ]); 
           $this->forge->addPrimaryKey('id'); 
           
           $this->forge->addForeignKey('company_id', 'companies', 'id');
           
           $this->forge->CreateTable('paymentPoint');
=======
        $this->forge->addPrimaryKey('id');

        $this->forge->addForeignKey('company_id', 'companies', 'id');
>>>>>>> Stashed changes:app/Database/Migrations/2023-11-23-172345_AddReceiverPoint.php

        $this->forge->CreateTable('receiverPoint');
    }

    public function down()
    {
        $this->forge->DropTable('paymentPoint');
    }
}
