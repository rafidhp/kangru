<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'category_name' => 'Kuliah',
            ],
            [
                'category_name' => 'Kerja',
            ],
            [
                'category_name' => 'Wirausaha',
            ],
            [
                'category_name' => 'Kerja dan Kuliah',
            ],
            [
                'category_name' => 'Kuliah dan Wirausaha',
            ],
            [
                'category_name' => 'Kerja dan Wirausaha',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
