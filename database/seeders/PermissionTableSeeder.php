<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'view_category', 'create_category', 'edit_category', 'delete_category',
            'view_product', 'create_product', 'edit_product', 'delete_product',
            'view_role', 'create_role', 'edit_role', 'delete_role',
            'view_permission', 'create_permission', 'edit_permission', 'delete_permission',
            'view_user', 'create_user', 'edit_user', 'delete_user'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
