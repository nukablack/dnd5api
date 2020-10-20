<?php

use App\User;
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
        User::create(array(
            'nickname' => 'SuperAdmin',
            'email' => 'superadmin@gmail.com',
            'user_role' => 'superadmin',
            'password' => bcrypt('123456789'),
        ));
    }
}
