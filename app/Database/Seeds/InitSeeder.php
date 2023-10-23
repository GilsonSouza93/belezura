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

        $accountType = [
            'id' => 2,
            'account_type_name' => 'Funcionário',
        ];

        $this->db->table('account_types')->insert($accountType);

        $user = [
            'name' => 'Gilson',
            'account_type_id' => 1,
            'email' => 'gilson@email.com',
            'password' => password_hash('123456', PASSWORD_DEFAULT),
        ];

        $this->db->table('users')->insert($user);

        $user = [
            'name' => 'Sérgio',
            'account_type_id' => 1,
            'email' => 'sergio@email.com',
            'password' => password_hash('123456', PASSWORD_DEFAULT),
        ];

        $this->db->table('users')->insert($user);

        $user = [
            'name' => 'Nathan',
            'account_type_id' => 1,
            'email' => 'nathan@email.com',
            'password' => password_hash('creatina', PASSWORD_DEFAULT),
        ];

        $this->db->table('users')->insert($user);
    }
}
