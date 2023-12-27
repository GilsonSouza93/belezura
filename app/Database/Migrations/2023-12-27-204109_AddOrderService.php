<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddOrderService extends Migration
{
    public function up()
    {
        
        
        
        
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('company_id', 'companies', 'id');
        $this->forge->addForeignKey('pop_id', 'pops', 'id');
        $this->forge->createTable('tower');
    }

    public function down()
    {
        //
    }
}
