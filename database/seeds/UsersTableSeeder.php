<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
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
                'email' => 'admin@test.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VyZs28.Ea8sbucL4KEpcP.to6OKzzQzmq4ZdIMlwcgMrCzrHoc7Ni',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-03-12 12:28:44'
            ],
            [
                'id' => 2,
                'name' => 'Project Manager',
                'email' => 'pm@test.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VyZs28.Ea8sbucL4KEpcP.to6OKzzQzmq4ZdIMlwcgMrCzrHoc7Ni',
                'remember_token' => NULL,
                'created_at' => '2020-03-12 12:18:59',
                'updated_at' => '2020-03-12 12:18:59'
            ],
            [
                'id' => 3,
                'name' => 'Content Manager',
                'email' => 'cm@test.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VyZs28.Ea8sbucL4KEpcP.to6OKzzQzmq4ZdIMlwcgMrCzrHoc7Ni',
                'remember_token' => NULL,
                'created_at' => '2020-03-12 12:20:15',
                'updated_at' => '2020-03-12 12:20:15'
            ],
            [
                'id' => 4,
                'name' => 'HR',
                'email' => 'hr@test.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VyZs28.Ea8sbucL4KEpcP.to6OKzzQzmq4ZdIMlwcgMrCzrHoc7Ni',
                'remember_token' => NULL,
                'created_at' => '2020-03-12 12:25:25',
                'updated_at' => '2020-03-12 12:25:25'
            ],
        ];

        foreach ($data as $key => $value) {
            User::create($value);
        }
    }
}
