<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@mdev.com',
            'password' => '$2y$10$2yUY2VeAcuHyPEsw7k5aFun8hzsh6YrM7uVxAA6uDLMEAQJaZcpoW'
        ]);

        $permissions = Permission::all()->pluck('name')->toArray();
        $user->givePermissionTo($permissions);
    }
}
