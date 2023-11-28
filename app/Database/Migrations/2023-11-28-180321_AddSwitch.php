<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSwitch extends Migration
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

            'switch_fonte' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'switch_cod' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'switch_discription' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'switch_port' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'switch_parameter' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'switch_olt' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],

            'company_id' => [
                'type' => 'INT',
                'constraint' => 5,
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
        $this->forge->addForeignKey('company_id', 'companies', 'id');
        $this->forge->addForeignKey('switch_olt', 'olts', 'id');
        $this->forge->createTable('switch');




    }

    public function down()
    {
        $this->forge->DropTable('switch');
    }
}
