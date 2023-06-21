<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InitSeeder extends Seeder
{
    public function run()
    {
        $accountType = [
            'id' => 1,
            'account_type_name' => 'Administrador',
        ];

        $this->db->table('account_types')->insert($accountType);

        $user = [
            'name' => 'Gilson',
            'account_type_id' => 1,
            'email' => 'gigio@email.com',
            'password' => password_hash('123456', PASSWORD_DEFAULT),
            'phone' => '11999999999',
        ];

        $this->db->table('users')->insert($user);

        $user = [
            'name' => 'Sérgio',
            'account_type_id' => 1,
            'email' => 'sergio@email.com',
            'password' => password_hash('123456', PASSWORD_DEFAULT),
            'phone' => '11999999999',
        ];

        $this->db->table('users')->insert($user);
    }
}
