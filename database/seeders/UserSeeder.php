<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    protected $resources = [
        'user',
        'role',
        'post',
        'category',
        'message',
        'library',
        'organizer',
        'period',
        'position',
        'volunteer',
        'slider',
        'gallery',
        'achievements',
    ];

    protected $permissions = [
        'view',
        'view_any',
        'create',
        'update',
        'delete',
        'delete_any',
        'restore',
        'restore_any',
        'replicate',
        'reorder',
        'force_delete',
        'force_delete_any',
    ];

    public function run(): void
    {
        $superAdmin = Role::firstOrCreate(['name' => 'super_admin']);

        foreach ($this->resources as $resource) {
            foreach ($this->permissions as $permission) {
                $permName = "{$permission}_{$resource}";
                Permission::firstOrCreate(['name' => $permName]);
                $superAdmin->givePermissionTo($permName);
            }
        }

        $this->command->info('✅ Permissions created and assigned to super_admin.');
    }
}