<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'permission.index',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'user.index',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'user.create',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'user.edit',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'user.delete',
            'guard_name' => 'web'
        ]);
    }
}
