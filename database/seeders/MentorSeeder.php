<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mentors = [
            [
                'no_hp' => '081234567890',
                'pendidikan' => 'SMKN 1 Karawang',
                'instansi' => 'Institut Teknologi Bandung',
                'description' => 'Jaki is a very experienced mentor in the field of anime',
                'user_id' => 2,
                'category_id' => 1,
            ],
        ];
    }
}
