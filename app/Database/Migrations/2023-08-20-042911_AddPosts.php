<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPosts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],

            'latitude' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'longitude' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'pop' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'localizacao' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'djson' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'observacao' => [
                'type' => 'VARCHAR',
                'constraint' => '500',
            ],

            'cto' => [
                'type' => 'boolean',
                'default' => false,
            ],

            'caixa_hermetica' => [
                'type' => 'boolean',
                'default' => false,
            ],

            'radio' => [
                'type' => 'boolean',
                'default' => false,
            ],

            'active' => [
                'type' => 'boolean',
                'default' => true,
            ],

            'caixa_subterranea' => [
                'type' => 'boolean',
                'default' => false,
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

            "company_id" => [
                "type" => "int",
                "constraint" => 5,
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey('company_id', 'companies', 'id');

        $this->forge->createTable('posts');
    }

    public function down()
    {
        $this->forge->dropTable('posts');
    }
}
