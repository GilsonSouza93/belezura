<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddOnuForeignKeyToCustomers extends Migration
{
    public function up()
    {
        $this->db->query('ALTER TABLE customers ADD COLUMN onu_Id INT constraint 5');
        $this->db->query('ALTER TABLE customers ADD CONSTRAINT fk_customer_onu FOREIGN KEY (onu_Id) REFERENCES onus(id)');
    }

    public function down()
    {
        $this->db->query('ALTER TABLE customers DROP FOREIGN KEY fk_customer_onu');
        $this->db->query('ALTER TABLE customers DROP COLUMN onu_Id');
    }
}
