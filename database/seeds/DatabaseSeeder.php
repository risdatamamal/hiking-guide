<?php

use Database\Seeders\BlogsTableSeeder;
use Database\Seeders\ContactsTableSeeder;
use Database\Seeders\ModelHasRolesTableSeeder;
use Database\Seeders\PermissionsTableSeeder;
use Database\Seeders\RoleHasPermissionsTableSeeder;
use Database\Seeders\RolesTableSeeder;
use Database\Seeders\UsersTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // ModelHasRolesTableSeeder::class,
            // PermissionsTableSeeder::class,
            // RolesTableSeeder::class,
            // RoleHasPermissionsTableSeeder::class,
            // UsersTableSeeder::class,
            // ContactsTableSeeder::class,
            BlogsTableSeeder::class,
        ]);
    }
}
