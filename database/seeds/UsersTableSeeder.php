<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $user = factory(User::class)->create(['name' => 'Admin', 'email' => 'admin@email.com', 'password' => bcrypt('secret')]);
    }
}
