<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCustomerCnpj extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],

            "contract" => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            "service" => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            "company" => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            "user" => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            "type" => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            "origin" => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            "status" => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            "name" => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            "phone" => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            "obs" => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            "obsin" => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            "deposit" => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            "available" => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],

            "notification" => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],

            "company_id" => [
                "type" => "int",
                "constraint" => 5,
            ],



            'created_at timestamp DEFAULT current_timestamp NOT NULL',
            
        ]);
        
        
        
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('company_id', 'companies', 'id');
        $this->forge->createTable('order_service');
    }

    public function down()
    {
        //
    }
}
