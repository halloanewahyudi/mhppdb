<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthPermissions extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'  => 'untuk_santri',
                'description'  => 'Role Untuk Santri',
            ],
            [
                'name'  => 'untuk_admin',
                'description'  => 'Role Untuk Admin',
            ],
            [
                'name'  => 'untuk_bendahara',
                'description'  => 'Role Untuk Bendahara',
            ],
            [
                'name'  => 'untuk_super_admin',
                'description'  => 'Role Untuk Super Admin',
            ],
        ];

        $this->db->table('auth_permissions')->insertBatch($data);
    }
}
