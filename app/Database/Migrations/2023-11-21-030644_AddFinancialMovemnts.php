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
           ]); 
           $this->forge->addPrimaryKey('id'); 

           $this->forge->CreateTable('AddFinanceMovement');

    }

    public function down()
    {
        $this->forge->DropTable('AddFinanceMovement');
    }
}
