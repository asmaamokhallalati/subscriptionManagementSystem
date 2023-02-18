<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'Home' , 'guard_name' => 'admin']);

        Permission::create(['name' => 'Create-Role ' , 'guard_name' => 'admin']);
        Permission::create(['name' => 'Read-Roles' , 'guard_name' => 'admin']);
        Permission::create(['name' => 'Update-Role' , 'guard_name' => 'admin']);
        Permission::create(['name' => 'Delete-Role' , 'guard_name' => 'admin']);
        

        Permission::create(['name' => 'Create-User' , 'guard_name' => 'admin']);
        Permission::create(['name' => 'Read-Users' , 'guard_name' => 'admin']);
        Permission::create(['name' => 'Update-User' , 'guard_name' => 'admin']);
        Permission::create(['name' => 'Delete-User' , 'guard_name' => 'admin']);


        Permission::create(['name' => 'Create-Enterprise' , 'guard_name' => 'admin']);
        Permission::create(['name' => 'Read-Enterprises' , 'guard_name' => 'admin']);
        Permission::create(['name' => 'Update-Enterprise' , 'guard_name' => 'admin']);
        Permission::create(['name' => 'Delete-Enterprise' , 'guard_name' => 'admin']);
    }
}
