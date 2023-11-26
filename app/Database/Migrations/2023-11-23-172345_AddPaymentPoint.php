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

            'billsDiscount' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'adminDiscount' => [
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

            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'created_at timestamp DEFAULT current_timestamp NOT NULL',
        ]);

        $this->forge->addPrimaryKey('id');

        $this->forge->addForeignKey('company_id', 'companies', 'id');

        $this->forge->CreateTable('paymentPoint');
    }

    public function down()
    {
        $this->forge->DropTable('paymentPoint');
    }
}
