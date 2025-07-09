<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'admin',
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'role' => 'admin'
            ],
            [
                'username' => 'mentor',
                'name' => 'mentor',
                'email' => 'mentor@gmail.com',
                'password' => bcrypt('mentor'),
                'role' => 'mentor'
            ],
            [
                'username' => 'user',
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('user'),
                'role' => 'user'
            ],
            [
                'username' => 'jaki',
                'name' => 'Zaky-Kun',
                'email' => 'jaki@wibu.com',
                'password' => bcrypt('mentor'),
                'role' => 'mentor'
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
