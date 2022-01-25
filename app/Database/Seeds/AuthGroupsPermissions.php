<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthGroupsPermissions extends Seeder
{
    public function run()
    {
        $data = [
            [
                'group_id'  => 5,
                'permission_id'  => 1,
            ],
            [
                'group_id'  => 6,
                'permission_id'  => 2,
            ],
            [
                'group_id'  => 7,
                'permission_id'  => 3,
            ],
            [
                'group_id'  => 8,
                'permission_id'  => 4,
            ],
        ];

        $this->db->table('auth_groups_permissions')->insertBatch($data);
    }
}
