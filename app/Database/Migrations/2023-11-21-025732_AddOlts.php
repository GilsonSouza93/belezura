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

            'olt_serial_number' => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],

            'olt_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'olt_ip' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'olt_port' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'olt_username' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'olt_password' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'olt_status' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'olt_latitude' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'olt_longitude' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'olt_created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'olt_updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'olt_created_by' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],

            'olt_updated_by' => [
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

        $this->forge->addForeignKey('olt_created_by', 'users', 'id');
        $this->forge->addForeignKey('olt_updated_by', 'users', 'id');

        $this->forge->addForeignKey('company_id', 'companies', 'id');

        $this->forge->createTable('olts');

    }

    public function down()
    {
        $this->forge->dropTable('olts');
    }
}
