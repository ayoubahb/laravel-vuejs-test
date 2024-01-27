<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        $readPermission = Permission::create(['name' => 'read']);
        $writePermission = Permission::create(['name' => 'write']);

        $adminRole->givePermissionTo($readPermission, $writePermission);
        $userRole->givePermissionTo($readPermission);

    }
}
