<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFinanceMovement extends Migration
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

            'Recive_point' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'register_date' => [
                'type' => 'DATETIME',
                'null' => false,
            ],

            'date_competence' => [
                'type' => 'DATE',
                'null' => false,
            ],

            'payment_method' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],

            'history' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],

            'user' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => false,
            ],
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
            'enter' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],

            'exit' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],

            'actions' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
<<<<<<< Updated upstream

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
        $this->forge->addPrimaryKey('id', true);

        $this->forge->addForeignKey('company_id', 'companies', 'id');

        $this->forge->CreateTable('FinanceMovement');
=======
            "company_id" => [
                "type" => "int",
                "constraint" => 5,
            ],
            'created_at timestamp DEFAULT current_timestamp NOT NULL',	
        ]);
        $this->forge->addPrimaryKey('id');
>>>>>>> Stashed changes

        $this->forge->addForeignKey('company_id', 'companies', 'id');

        $this->forge->CreateTable('FinanceMovement');
    }

    public function down()
    {
        $this->forge->DropTable('FinanceMovement');
    }
}
