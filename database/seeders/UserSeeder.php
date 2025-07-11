<?php

namespace Database\Seeders;

use App\Models\User;
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
                'username' => 'admin',
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'age' => 18,
                'role' => 'admin',
            ],
            [
                'username' => 'mentor',
                'name' => 'mentor',
                'email' => 'mentor@gmail.com',
                'password' => bcrypt('mentor'),
                'age' => 19,
                'role' => 'mentor',
            ],
            [
                'username' => 'user',
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('user'),
                'age' => 17,
                'role' => 'user',
            ],
            [
                'username' => 'jaki',
                'name' => 'Zaky-Kun',
                'email' => 'jaki@wibu.com',
                'password' => bcrypt('mentor'),
                'age' => 16,
                'role' => 'mentor',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
