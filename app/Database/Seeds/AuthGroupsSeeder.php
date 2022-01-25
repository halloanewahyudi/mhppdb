<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthGroupsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'  => 'Santri',
                'description'  => 'Role Untuk Santri',
            ],
            [
                'name'  => 'Admin',
                'description'  => 'Role Untuk Admin',
            ],
            [
                'name'  => 'Bendahara',
                'description'  => 'Role Untuk Bendahara',
            ],
            [
                'name'  => 'SuperAdmin',
                'description'  => 'Role Untuk Super Admin',
            ],
        ];

        $this->db->table('auth_groups')->insertBatch($data);

    }
}
