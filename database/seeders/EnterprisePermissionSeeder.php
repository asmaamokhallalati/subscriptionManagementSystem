<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class EnterprisePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::query()->insert([
            ['name' => 'Home' , 'guard_name' => 'user'],
            ['name' => 'Create-Role ' , 'guard_name' => 'user'],
            ['name' => 'Read-Roles' , 'guard_name' => 'user'],
            ['name' => 'Update-Role' , 'guard_name' => 'user'],
            ['name' => 'Delete-Role' , 'guard_name' => 'user'],
            ['name' => 'Create-User' , 'guard_name' => 'user'],
            ['name' => 'Read-Users' , 'guard_name' => 'user'],
            ['name' => 'Update-User' , 'guard_name' => 'user'],
            ['name' => 'Delete-User' , 'guard_name' => 'user'],
        ]);
    }
}
