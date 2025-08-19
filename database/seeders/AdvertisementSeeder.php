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
            // kerja
            [
                'title' => 'Lowongan Staff Administrasi - Jakarta',
                'image' => 'bekerja_ads1.jpeg',
                'description' => 'Perusahaan logistik nasional membuka lowongan Staff Administrasi. Kandidat diharapkan teliti, mampu mengelola data, dan fasih menggunakan Microsoft Office.',
                'upload_date' => '2025-08-19',
                'category_id' => 2,
                'advertiser_id' => 1,
            ],
            [
                'title' => 'Software Engineer - Bandung',
                'image' => 'bekerja_ads2.jpeg',
                'description' => 'Startup teknologi mencari Software Engineer yang menguasai PHP, Laravel, dan React. Pengalaman minimal 1 tahun di bidang pengembangan aplikasi.',
                'upload_date' => '2025-08-19',
                'category_id' => 2,
                'advertiser_id' => 2,
            ],
            [
                'title' => 'Marketing Executive - Surabaya',
                'image' => 'bekerja_ads3.jpeg',
                'description' => 'Kami mencari Marketing Executive dengan kemampuan komunikasi yang baik, mampu menjalin relasi dengan klien, serta siap bekerja dengan target.',
                'upload_date' => '2025-08-19',
                'category_id' => 2,
                'advertiser_id' => 1,
            ],
            // wirausaha
            [
                'title' => 'Peluang Usaha Franchise Minuman Kekinian',
                'image' => 'wirausaha_ads1.jpeg',
                'description' => 'Gabung menjadi mitra franchise minuman populer dengan modal terjangkau. Cocok untuk pemula yang ingin berwirausaha di bidang F&B.',
                'upload_date' => '2025-08-19',
                'category_id' => 3,
                'advertiser_id' => 1,
            ],
            [
                'title' => 'Kemitraan Usaha Laundry Kiloan',
                'image' => 'wirausaha_ads2.webp',
                'description' => 'Bergabung dalam bisnis laundry kiloan yang sedang naik daun. Sistem manajemen sudah teruji dengan ROI cepat.',
                'upload_date' => '2025-08-19',
                'category_id' => 3,
                'advertiser_id' => 2,
            ],
            [
                'title' => 'Peluang Usaha Toko Online Fashion',
                'image' => 'wirausaha_ads3.jpg',
                'description' => 'Bangun bisnis toko online fashion dengan dukungan supplier terpercaya dan sistem dropship. Cocok untuk generasi muda yang ingin memulai usaha.',
                'upload_date' => '2025-08-19',
                'category_id' => 3,
                'advertiser_id' => 1,
            ],
            // kuliah
            [
                'title' => 'Beasiswa S1 Teknik Informatika 2025',
                'image' => 'kuliah_ads1.png',
                'description' => 'Universitas ternama membuka pendaftaran beasiswa penuh untuk program S1 Teknik Informatika. Tersedia fasilitas laboratorium modern dan dosen berpengalaman.',
                'upload_date' => '2025-08-19',
                'category_id' => 1,
                'advertiser_id' => 1,
            ],
            [
                'title' => 'Program Diploma Perhotelan dan Pariwisata',
                'image' => 'kuliah_ads2.avif',
                'description' => 'Sekolah tinggi perhotelan menawarkan program diploma dengan kurikulum internasional dan peluang magang di hotel bintang lima.',
                'upload_date' => '2025-08-19',
                'category_id' => 1,
                'advertiser_id' => 2,
            ],
            [
                'title' => 'Kursus Singkat Digital Marketing',
                'image' => 'kuliah_ads3.jpeg',
                'description' => 'Belajar strategi digital marketing mulai dari SEO, Google Ads, hingga Social Media Management. Durasi 3 bulan, tersedia kelas online.',
                'upload_date' => '2025-08-19',
                'category_id' => 1,
                'advertiser_id' => 1,
            ],
        ];

        foreach ($advertisements as $advertisement) {
            Advertisement::create($advertisement);
        }
    }
}
