<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Test Article',
                'image' => 'python.png',
                'content' => 'This is test article content
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda molestiae culpa repudiandae excepturi voluptates iure beatae rem aspernatur qui, impedit consequatur doloremque nulla magni amet optio sit, distinctio, praesentium corrupti.',
                'upload_date' => '2025-07-12',
                'category_id' => 1,
            ],
            [
                'title' => 'Kuliah Bro',
                'image' => 'images.jpeg',
                'content' => 'kuliah bro kuliah bro kuliah bro kuliah bro kuliah bro kuliah bro kuliah bro kuliah bro kuliah bro kuliah bro kuliah bro kuliah bro',
                'upload_date' => '2025-07-17',
                'category_id' => 1,
            ],
            [
                'title' => 'kerja hahaha',
                'content' => 'kerja hahaha kerja hahaha kerja hahaha kerja hahaha kerja hahaha kerja hahaha kerja hahaha kerja hahaha kerja hahaha kerja hahaha kerja hahaha kerja hahaha kerja hahaha',
                'upload_date' => '2025-07-17',
                'category_id' => 2,
            ],
        ];

        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}
