<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRouterBoard extends Migration
{
    public function up()
    {
        // $this->forge->addField([
        //     'id' => [
        //         'type' => 'INT',
        //         'constraint' => 5,
        //         'auto_increment' => true,
        //     ],

        //     'name' => [
        //         'type' => 'VARCHAR',
        //         'constraint' => '100',
        //     ],

        //     'ip_address' => [
        //         'type' => 'VARCHAR',
        //         'constraint' => '100',
        //     ],

        //     'login' => [
        //         'type' => 'VARCHAR',
        //         'constraint' => '100',
        //     ],

        //     'password' => [
        //         'type' => 'VARCHAR',
        //         'constraint' => '100',
        //     ],

        //     'description' => [
        //         'type' => 'TEXT',
        //         'null' => true,
        //     ],
        //     'created_at' => [
        //         'type' => 'DATETIME',
        //         'null' => true,
        //     ],
        //     'updated_at' => [
        //         'type' => 'DATETIME',
        //         'null' => true,
        //     ],

        //     'deleted_at' => [
        //         'type' => 'DATETIME',
        //         'null' => true,
        //     ],

        //     'deleted_by' => [
        //         'type' => 'INT',
        //         'constraint' => 5,
        //         'unsigned' => true,
        //         'null' => true,
        //     ],

        //     'updated_by' => [
        //         'type' => 'INT',
        //         'constraint' => 5,
        //         'unsigned' => true,
        //         'null' => true,
        //     ],

        //     'created_by' => [
        //         'type' => 'INT',
        //         'constraint' => 5,
        //         'unsigned' => true,
        //         'null' => true,
        //     ],

        //     'company_id' => [
        //         'type' => 'INT',
        //         'constraint' => 5,
        //         'unsigned' => true,
        //     ],

        // ]);

        // $this->forge->addKey('id', true);
        // $this->forge->addForeignKey('deleted_by', 'users', 'id');
        // $this->forge->addForeignKey('updated_by', 'users', 'id');
        // $this->forge->addForeignKey('created_by', 'users', 'id');
        
        // $this->forge->addForeignKey('company_id', 'companies', 'id');

        // $this->forge->createTable('router_boards');
    }

    public function down()
    {
        // $this->forge->dropTable('router_boards');
    }
}
