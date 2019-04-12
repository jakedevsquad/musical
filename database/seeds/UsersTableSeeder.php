<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        factory(User::class)->create(['name' => 'Admin', 'email' => 'admin@email.com', 'password' => bcrypt('secret'), 'role' => App\UserRole::ADMIN]);

        factory(User::class)->create(['name' => 'Customer', 'email' => 'customer@email.com', 'password' => bcrypt('secret'), 'role' => App\UserRole::CUSTOMER]);
    }
}
