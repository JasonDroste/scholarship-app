<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Define permissions
       Permission::create(['name' => 'view app']);
        Permission::create(['name' => 'create app']);
        Permission::create(['name' => 'edit app']);
        Permission::create(['name' => 'delete app']);

        // Create roles
        $admin = Role::create(['name' => 'admin']);
        $reviewer = Role::create(['name' => 'reviewer']);
        $applicant = Role::create(['name' => 'applicant']);

        // Assign permissions to roles
        $admin->givePermissionTo(Permission::all());
        $reviewer->givePermissionTo(['view app', 'create app', 'edit app']);
        $applicant->givePermissionTo(['view app']);
    }
}
