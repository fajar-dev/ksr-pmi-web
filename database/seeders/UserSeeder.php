<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Buat role super_admin jika belum ada
        $superAdminRole = Role::firstOrCreate(['name' => 'super_admin']);

        // Buat user admin
        $admin = User::firstOrCreate([
            'email' => 'admin@example.com',
        ], [
            'name' => 'Super Admin',
            'password' => Hash::make('password'), // ganti password sesuai kebutuhan
        ]);

        // Beri role super_admin ke user
        $admin->assignRole($superAdminRole);
    }
}