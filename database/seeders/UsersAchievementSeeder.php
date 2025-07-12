<?php

namespace Database\Seeders;

use App\Models\UsersAchievement;
use Illuminate\Database\Seeder;

class UsersAchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $achievements = [
            [
                'achievement_name' => 'Test Achievement',
                'image' => 'https://ik.imagekit.io/rafidhp/kangru/achievement_template.svg?updatedAt=1751997382665',
                'user_id' => 2,
            ],
            [
                'achievement_name' => "Mentor's Achievement",
                'image' => 'https://ik.imagekit.io/rafidhp/kangru/achievement_template.svg?updatedAt=1751997382665',
                'user_id' => 2,
            ],
            [
                'achievement_name' => "Jaki's Achievement",
                'image' => 'https://ik.imagekit.io/rafidhp/kangru/achievement_template.svg?updatedAt=1751997382665',
                'user_id' => 4,
            ],
        ];

        foreach ($achievements as $achievement) {
            UsersAchievement::create($achievement);
        }
    }
}
