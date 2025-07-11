<?php

namespace Database\Seeders;

use App\Models\Mentor;
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
                'no_hp' => '082134560099',
                'pendidikan' => 'SMKN 1 Karawang',
                'instansi' => 'National University of Singapore',
                'description' => 'mentor is very experienced, especially in the field of technology, so he can provide a lot of interesting inside for you',
                'user_id' => 2,
                'category_id' => 1,
            ],
            [
                'no_hp' => '081234567890',
                'pendidikan' => 'MAN 2 SUbang',
                'instansi' => 'Institut Teknologi Bandung',
                'description' => 'Jaki is a very experienced mentor in the field of anime',
                'user_id' => 4,
                'category_id' => 1,
            ],
        ];

        foreach ($mentors as $mentor) {
            Mentor::create($mentor);
        }
    }
}
