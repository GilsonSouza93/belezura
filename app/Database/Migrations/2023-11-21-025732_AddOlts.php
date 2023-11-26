<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddOlts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'serial_number' => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],

            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'ip' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'port' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'latitude' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'longitude' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'created_by' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],

            'updated_by' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],

            "company_id" => [
                "type" => "int",
                "constraint" => 5,
            ],

            'created_at timestamp DEFAULT current_timestamp NOT NULL',	
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey('created_by', 'users', 'id');
        $this->forge->addForeignKey('updated_by', 'users', 'id');

        $this->forge->addForeignKey('company_id', 'companies', 'id');

        $this->forge->createTable('olts');

    }

    public function down()
    {
        $this->forge->dropTable('olts');
    }
}
