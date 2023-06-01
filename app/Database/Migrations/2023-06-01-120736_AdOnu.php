<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AdOnu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'onu_serial_number' => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],

            'onu_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'onu_ip' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'onu_port' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'onu_username' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'onu_password' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'onu_status' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'onu_created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'onu_updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'onu_deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);


        $this->forge->addKey('id', true);

        $this->forge->createTable('onus');
    }

    public function down()
    {
        $this->forge->dropTable('onus');
    }
}
