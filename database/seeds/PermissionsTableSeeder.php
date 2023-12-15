<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
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
                'name' => 'manage_role',
                'guard_name' => 'web',
                'created_at' => '2020-03-10 12:10:57',
                'updated_at' => '2020-03-10 12:10:57'
            ],
            [
                'id' => 2,
                'name' => 'manage_role',
                'guard_name' => 'web',
                'created_at' => '2020-03-10 12:10:57',
                'updated_at' => '2020-03-10 12:10:57'
            ],
            [
                'id' => 3,
                'name' => 'manage_permission',
                'guard_name' => 'web',
                'created_at' => '2020-03-10 12:11:09',
                'updated_at' => '2020-03-10 12:11:09'
            ],
            [
                'id' => 4,
                'name' => 'manage_user',
                'guard_name' => 'web',
                'created_at' => '2020-03-10 12:11:41',
                'updated_at' => '2020-03-10 12:11:41'
            ],
            [
                'id' => 5,
                'name' => 'manage_content',
                'guard_name' => 'web',
                'created_at' => '2020-03-12 09:46:39',
                'updated_at' => '2020-03-12 09:46:39'
            ],
            [
                'id' => 6,
                'name' => 'manage_projects',
                'guard_name' => 'web',
                'created_at' => '2020-03-12 09:46:54',
                'updated_at' => '2020-03-12 09:46:54'
            ],
        ];

        foreach ($data as $key => $value) {
            DB::table('permissions')->insert($value);
        }
    }
}
