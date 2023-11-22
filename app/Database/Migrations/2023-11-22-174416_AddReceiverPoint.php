<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddReceiverPoint extends Migration
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

            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'carrier' => [
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

            'company' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],

            'availability' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            
            'active' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => false,
            ],
           
           ]); 
           $this->forge->addPrimaryKey('id'); 

           $this->forge->CreateTable('receiverPoint');

    }

    public function down()
    {
        $this->forge->DropTable('receiverPoint');
    }
}
