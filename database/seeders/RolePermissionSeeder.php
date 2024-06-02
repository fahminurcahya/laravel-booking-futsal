<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat permissions
        $permissions = [
            'view fields',
            'create fields',
            'edit fields',
            'delete fields',
            'view bookings',
            'create bookings',
            'edit bookings',
            'delete bookings'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Membuat roles dan memberikan permissions
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Memberikan semua permissions kepada admin
        $adminRole->givePermissionTo(Permission::all());

        // Memberikan permissions tertentu kepada user
        $userRole->givePermissionTo(['view fields', 'create bookings', 'view bookings']);

        // Membuat user admin
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '1234567890',
        ]);

        // Memberikan role admin kepada user
        $admin->assignRole($adminRole);
    }
}