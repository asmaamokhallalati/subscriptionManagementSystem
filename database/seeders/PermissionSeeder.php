<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

/**
 * Seeder
 * for permissions of Admin level
 * run before use the project
 */

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::query()->insert([
            ['name' => 'Home' , 'guard_name' => 'admin'],
            ['name' => 'Create-Role ' , 'guard_name' => 'admin'],
            ['name' => 'Read-Roles' , 'guard_name' => 'admin'],
            ['name' => 'Update-Role' , 'guard_name' => 'admin'],
            ['name' => 'Delete-Role' , 'guard_name' => 'admin'],
            ['name' => 'Create-Admin' , 'guard_name' => 'admin'],
            ['name' => 'Read-Admins' , 'guard_name' => 'admin'],
            ['name' => 'Update-Admin' , 'guard_name' => 'admin'],
            ['name' => 'Delete-Admin' , 'guard_name' => 'admin'],
            ['name' => 'Create-Enterprise' , 'guard_name' => 'admin'],
            ['name' => 'Read-Enterprises' , 'guard_name' => 'admin'],
            ['name' => 'Update-Enterprise' , 'guard_name' => 'admin'],
            ['name' => 'Delete-Enterprise' , 'guard_name' => 'admin'],
        ]);
    }
}
