<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBillstoPayModel extends Migration
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
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'suplier_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'payment_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'fixvalue_id' => [
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

            'timeout_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            
            
            "company_id" => [
                "type" => "int",
                "constraint" => 5,
            ],

    
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey('company_id', 'companies', 'id');

        $this->forge->createTable('billstoPay');
    
    }

    public function down()
    {
        $this->forge->DropTable('billstoPay');
    }
}
