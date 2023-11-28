<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRouter extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id"=> [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],

            'router_font'=> [
                'type'=> 'VARCHAR',
                'constrait'=> 255,
            ],
            
            'router_code'=> [
                'type'=> 'VARCHAR',
                'constrait'=> 255,
            ],
            
            'router_discription'=> [
                'type'=> 'VARCHAR',
                'constrait'=> 255,
            ],
      
            'router_port'=> [
                'type'=> 'VARCHAR',
                'constrait'=> 255,
            ],

            'router_parameter'=> [
                'type'=> 'VARCHAR',
                'constrait'=> 255,
            ],

            'router_olt'=> [
                'type'=> 'VARCHAR',
                'constrait'=> 255,
            ],

            'company_id' => [
                'type' => 'INT',
                'constraint' => 30,
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
        $this->forge->addForeignKey('router_olt', 'olts', 'id');
        $this->forge->createTable('router');

    }

    public function down()
    {
        $this->forge->dropTable('router');
    }
}
