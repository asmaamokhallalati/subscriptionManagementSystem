<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            # Admin
//            PermissionSeeder::class,
//            AdminSeeder::class,

            # User
//            EnterprisePermissionSeeder::class,
            EnterpriseSeeder::class,
        ]);
    }
}
