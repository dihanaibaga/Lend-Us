<?php

namespace Database\Seeders;

use App\Models\User;
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
        $admin = User::create([
            'name' => 'Biasa Role',
            'email' => 'biasa@gmail.com',
            'password' => bcrypt('11111111')
        ]);
        $admin->assignRole('layer1');

        $user = User::create([
            'name' => 'User Role',
            'email' => 'user@gmail.com',
            'password' => bcrypt('11111111')
        ]);
        $user->assignRole('user');

        $user = User::create([
            'name' => 'Admin Role',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('11111111')
        ]);
        $user->assignRole('admin');

        $user = User::create([
            'name' => 'Pimpinan Role',
            'email' => 'pimpinan@gmail.com',
            'password' => bcrypt('11111111')
        ]);
        $user->assignRole('pimpinan');
    }
}
