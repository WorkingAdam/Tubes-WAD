<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@mail.com',
                'is_admin'=>'1',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'email'=>'user@mail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }

    }
}