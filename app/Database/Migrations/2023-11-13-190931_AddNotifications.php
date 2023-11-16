<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNotifications extends Migration
{
    public function up()
    {
        // $this->forge->addField([
        //     'id' => [
        //         'type' => 'BIGINT',
        //         'constraint' => 20,
        //         'unsigned' => true,
        //         'auto_increment' => true,
        //     ],
        //     'customer_id' => [
        //         'type' => 'BIGINT',
        //         'constraint' => 20,
        //         'unsigned' => true,
        //     ],
        //     'title' => [
        //         'type' => 'VARCHAR',
        //         'constraint' => 255,
        //     ],
        //     'message' => [
        //         'type' => 'TEXT',
        //     ],
        //     'is_read' => [
        //         'type' => 'BOOLEAN',
        //         'default' => false,
        //     ],
        //     'created_at' => [
        //         'type' => 'DATETIME',
        //     ],
        //     'updated_at' => [
        //         'type' => 'DATETIME',
        //     ],
        //     'deleted_at' => [
        //         'type' => 'DATETIME',
        //         'null' => true,
        //     ],
        // ]);

        // $this->forge->addKey('id', true);
        // $this->forge->addForeignKey('customer_id', 'customers', 'id');
        // $this->forge->createTable('notifications');
    }

    public function down()
    {
        // $this->forge->dropTable('notifications');
    }
}
