<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTeste extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'teste' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'company_id' => [
                'type' => 'int',
                'constraint' => 5,
            ],
        ]);

        // data, valor, tipo, enum, company, forma 

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('company_id', 'companies', 'id');

        $this->forge->createTable('teste');
    }

    public function down()
    {
        $this->forge->dropTable('teste');
    }
}
