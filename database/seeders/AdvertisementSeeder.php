<?php

namespace Database\Seeders;

use App\Models\Advertisement;
use Illuminate\Database\Seeder;

class AdvertisementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $advertisements = [
            [
                'title' => 'Test Iklan',
                'image' => 'https://ik.imagekit.io/rafidhp/kangru/advertise_default.png?updatedAt=1752730458376',
                'description' => 'this is a dummy data advertising test',
                'upload_date' => '2025-07-17',
                'category_id' => 1,
                'advertiser_id' => 1,
            ],
        ];

        foreach ($advertisements as $advertisement) {
            Advertisement::create($advertisement);
        }
    }
}
