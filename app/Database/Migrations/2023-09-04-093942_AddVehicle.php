<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddVehicle extends Migration
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

            'model' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],

            'plate' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],

            'uf' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],

            'locate' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],

            'obs' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],

            'available' => [
                'type' => 'BOOLEAN',
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
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('vehicles');
          
    }

    public function down()
    {
        $this->forge->dropTable('vehicles');
    }
}
