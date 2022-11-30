<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed the default permissions
        $permissions = \App\Models\Permission\Permission::defaultPermissions();

        foreach ($permissions as $permission) {
            \App\Models\Permission\Permission::firstOrCreate(['name' => $permission]);
        }

        $this->command->info('Default Permissions added.');

        // Seed the default roles
        $roles = \App\Models\Permission\Role::defaultRoles();
        foreach ($roles as $role) {
            $role = \App\Models\Permission\Role::firstOrCreate(['name' => $role]);
            if ($role->name == 'admin') {
                // Assign all permissions
                $role->syncPermissions(\App\Models\Permission\Permission::all());
                $this->command->info('Admin granted all the permissions');
            } else if ($role->name == 'user') {
                // For users by default only read access
                $role->syncPermissions(\App\Models\Permission\Permission::where('name', 'LIKE', 'view_%')->get());
            } else if ($role->name == 'manager') {
                // For manager by default only read and write access
                $role->syncPermissions(\App\Models\Permission\Permission::where('name', 'LIKE', 'view_%')->orWhere('name', 'LIKE', 'add_%')->orWhere('name', 'LIKE', 'edit_%')->get());
            }
        }

        // If only one user exists, assign the admin role to it
        if (\App\Models\User::count() == 1) {
            \App\Models\User::first()->assignRole('admin');
            $this->command->info('Admin granted to only user');
        }

        // If no user exists, create one with admin role
        if (\App\Models\User::count() == 0) {
            \App\Models\User::factory()->create([
                'name' => 'Admin',
                'email' => 'tek2991@gmail.com',
            ])->assignRole('admin');
            $this->command->info('Admin created with default credentials');
        }
    }
}
