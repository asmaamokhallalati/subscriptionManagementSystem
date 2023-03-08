<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

/**
 * Seeder
 * before u run the project
 * to create the first role and user of admin level.
 */

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::query()->create(
            [
                'name'      => 'Admin',
                'email'     => 'admin@admin.com',
                'password'  => bcrypt("123456"),
            ]
        );

        $role = Role::query()->create(
            [
                'name'          => 'SuperAdmin',
                'guard_name'    => 'admin',
                'user_level_id' => 1,
            ]
        );

        $permissions = Permission::query()->where(['guard_name' => 'admin'])->get();

        $role->syncPermissions($permissions);

        $admin->assignRole([$role->id]);
    }
}
