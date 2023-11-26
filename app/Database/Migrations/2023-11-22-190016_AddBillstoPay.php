<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBillstoPay extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],

            'company' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'description' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'pop_id' => [
                "type" => "int",
                "constraint" => 5,
            ],

            'supplier_id' => [
                "type" => "int",
                "constraint" => 5,
            ],

            'payment_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'fixvalue_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'value_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'obs_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'tipododocumento_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'descricao_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'notaFiscal_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'dataDeEmissao_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'timeout_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            
            'tipoDeParcela_id' => [
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

            'created_at timestamp DEFAULT current_timestamp NOT NULL',
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey('pop_id', 'pops', 'id');
        $this->forge->addForeignKey('supplier_id', 'suppliers', 'id');
        $this->forge->addForeignKey('company_id', 'companies', 'id');

        $this->forge->createTable('bills_to_pay');
    }

    public function down()
    {
        $this->forge->DropTable('bills_to_pay');
    }
}
