<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPops extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],

            'city' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'population' => [
                'type' => 'INT',
                'constraint' => 11,
            ],

            'ibge_code' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'uf' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'carrier' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'plan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'nas' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'user' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'active' => [
                'type' => 'BOOLEAN',
                'default' => true,
            ],

            'created_at timestamp DEFAULT current_timestamp NOT NULL',	

            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('pops');
    }

    public function down()
    {
        $this->forge->dropTable('pops');
    }
}
