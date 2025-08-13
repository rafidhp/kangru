<?php

namespace Database\Seeders;

use App\Models\Advertiser;
use Illuminate\Database\Seeder;

class AdvertiserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $advertisers = [
            [
                'no_telepon' => '081122334455',
                'instansi' => 'Universitas Pendidikan Indonesia',
                'NPWP/SIUP' => 'template_pdf.pdf',
                'status' => 'active',
                'user_id' => 1,
            ],
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
