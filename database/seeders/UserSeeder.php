<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => '12345678',
            ],
            [
                'name' => 'dennis',
                'email' => 'dennis@gmail.com',
                'password' => '12345678',
            ],
            [
                'name' => 'alek',
                'email' => 'alek@gmail.com',
                'password' => '12345678',
            ],
            [
                'name' => 'jojo',
                'email' => 'jojo@gmail.com',
                'password' => '12345678',
            ],
            [
                'name' => 'ali',
                'email' => 'ali@gmail.com',
                'password' => '12345678',
            ],
        ];

        User::insert($users);
    }
}
