<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleHasPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'permission_id' => 4,
                'role_id' => 2,
            ],
            [
                'permission_id' => 5,
                'role_id' => 2,
            ],
            [
                'permission_id' => 5,
                'role_id' => 4,
            ],
            [
                'permission_id' => 6,
                'role_id' => 2,
            ],
            [
                'permission_id' => 6,
                'role_id' => 3,
            ],
        ];

        foreach ($data as $key => $value) {
            DB::table('role_has_permissions')->insert($value);
        }
    }
}
