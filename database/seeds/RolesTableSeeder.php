<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
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
                'id' => 1,
                'name' => 'Super Admin',
                'guard_name' => 'web',
                'created_at' => '2020-03-10 11:40:47',
                'updated_at' => '2020-03-10 11:40:47'
            ],
            [
                'id' => 2,
                'name' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2020-03-10 12:39:23',
                'updated_at' => '2020-03-10 12:39:23'
            ],
            [
                'id' => 3,
                'name' => 'Project Manager',
                'guard_name' => 'web',
                'created_at' => '2020-03-12 12:11:50',
                'updated_at' => '2020-03-12 12:11:50'
            ],
            [
                'id' => 4,
                'name' => 'Content Manager',
                'guard_name' => 'web',
                'created_at' => '2020-03-12 12:12:07',
                'updated_at' => '2020-03-12 12:12:07'
            ],
        ];

        foreach ($data as $key => $value) {
            DB::table('roles')->insert($value);
        }
    }
}
