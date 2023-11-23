<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPaymentPlains extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],

            'type' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'financialCode' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'description' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'plainAccount' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'dreType' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'siciAccount' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'ticket' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'suspend' => [
                'type' => 'boolean',
                'default' => false,
            ],

            'colection' => [
                'type' => 'boolean',
                'default' => false,
            ],

            'dre' => [
                'type' => 'boolean',
                'default' => false,
            ],

            'sped' => [
                'type' => 'boolean',
                'default' => false,
            ],

            'visibility' => [
                'type' => 'boolean',
                'default' => false,
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

        
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey('company_id');

        $this->forge->createTable('paymentPlains');
    
    }

    public function down()
    {
        $this->forge->DropTable('paymentPlains');
    }
}
