<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MovementTypes extends Seeder
{
    public function run()
    {
        $data = [
            ['type' => "Compra",'company_id'=>1],
            ['type' => "Venda",'company_id'=>1],
            ['type' => "Comodato",'company_id'=>1],
            ['type' => "Correção",'company_id'=>1],
            ['type' => "Transferência",'company_id'=>1],
        ];

        $this->db->table("movement_type")->insertBatch($data);
    }
}
