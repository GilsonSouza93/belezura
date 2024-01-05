<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddMovements extends Migration
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

            'optionType' => [
                'type' => 'INT',
                'constraint' => 3,
                'unsigned' => true,
            ],
            
            'supplier_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'company_buy' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'invoice_buy' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'obs_buy' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'customer' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'contract_sell' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'os_sell' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'shipping' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'delivery_date' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'seller_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'companyInvoice' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'obs_sell' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'contract_comodato' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'os_comodato' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'invoice_comodato' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'obs_comodato' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'local_storage' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'movement_type_correcao' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'amount' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'reference' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'obs_correcao' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'origin' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'destiny' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'responsible' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            
            'obs_transferencia' => [
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

            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'created_at timestamp DEFAULT current_timestamp NOT NULL',
        ]);
        $this->forge->addKey('id', true);

        $this->forge->addForeignKey('optionType', 'movement_type', 'id');
        $this->forge->addForeignKey('company_id', 'companies', 'id');

        $this->forge->createTable('movements');
    }


    public function down()
    {
        $this->forge->dropTable('movements');
    }
}
