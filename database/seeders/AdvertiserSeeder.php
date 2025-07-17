<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Advertiser;

class AdvertiserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $advertisers = [
            [
                'no_telepon' => '081234567890',
                'instansi' => 'Universitas Indonesia',
                'NPWP/SIUP' => 'template_pdf.pdf',
                'status' => 'inactive',
                'user_id' => 5,
            ],
        ];

        foreach ($advertisers as $advertiser) {
            Advertiser::create($advertiser);
        }
    }
}
