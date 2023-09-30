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
        $permissions = [
            'dashboard',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'permission-list',
            'permission-create',
            'permission-edit',
            'permission-delete',
            'admin-list',
            'admin-create',
            'admin-edit',
            'admin-delete',
            'employee-list',
            'employee-create',
            'employee-edit',
            'employee-delete',
            'fish-list',
            'fish-create',
            'fish-edit',
            'fish-delete',
            'customer-list',
            'customer-create',
            'customer-edit',
            'customer-delete',
            'ticket-list',
            'ticket-create',
            'ticket-edit',
            'ticket-delete',

        ];

        foreach ($permissions as $permission) {
            Permission::updateOrCreate(['name' => $permission]);
        }
    }
}
