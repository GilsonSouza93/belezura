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
           'constraint' => 255,
       ],

       'license' => [
           'type' => 'VARCHAR',
           'constraint' => 255,
       ],

       'uf' => [
           'type' => 'VARCHAR',
           'constraint' => 255,
       ],

       'local' => [
           'type' => 'VARCHAR',
           'constraint' => 255,
       ],

       'obs' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
           
       ],

       'available' => [
        'type' => 'boolean',
        'default' => false,
    ],

    'company_id'=> [
        'type'=> 'int',
        'constraint'=> 30,
        ],
        'created_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],

        'updated_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],

        'deleted_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],

    ]);

            $this->forge->addPrimaryKey('id'); 
           
           $this->forge->addForeignKey('company_id', 'companies', 'id');
           
           $this->forge->CreateTable('vehicle');
    }
    public function down()
    {
        $this->forge->DropTable('vehicle');
    }
}
