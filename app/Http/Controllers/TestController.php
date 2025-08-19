<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Parsedown;

class TestController extends Controller
{
    public function index()
    {
        return view('mbti_test.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'answer_1' => 'required',
            'answer_2' => 'required',
            'answer_3' => 'required',
            'answer_4' => 'required',
            'answer_5' => 'required',
            'answer_6' => 'required',
            'answer_7' => 'required',
            'answer_8' => 'required',
            'answer_9' => 'required',
            'answer_10' => 'required',
            'answer_11' => 'required',
            'answer_12' => 'required',
            'answer_13' => 'required',
            'answer_14' => 'required',
            'answer_15' => 'required',
        ], [
            'answer_1.required' => 'This answer is required!',
            'answer_2.required' => 'This answer is required!',
            'answer_3.required' => 'This answer is required!',
            'answer_4.required' => 'This answer is required!',
            'answer_5.required' => 'This answer is required!',
            'answer_6.required' => 'This answer is required!',
            'answer_7.required' => 'This answer is required!',
            'answer_8.required' => 'This answer is required!',
            'answer_9.required' => 'This answer is required!',
            'answer_10.required' => 'This answer is required!',
            'answer_11.required' => 'This answer is required!',
            'answer_12.required' => 'This answer is required!',
            'answer_13.required' => 'This answer is required!',
            'answer_14.required' => 'This answer is required!',
            'answer_15.required' => 'This answer is required!',
        ]);

        if (Auth::user()->age >= 6 && Auth::user()->age <= 16) {
            $question_13 = 'Apa mata pelajaran favoritmu di sekolah? mengapa?';
        } elseif (Auth::user()->age > 16 && Auth::user()->age <= 18) {
            $question_13 = 'Setelah lulus SMA/SMK/MA (sederajat), apakah kamu lebih tertarik untuk langsung bekerja, kuliah, atau memulai bisnis?';
        } else {
            $question_13 = 'Kamu lebih tertarik untuk bekerja, melanjutkan studi, atau memulai bisnis sendiri?';
        }

        $questions = [
            1 => 'Saya merasa nyaman berbicara di depan banyak orang',
            2 => 'Saya lebih suka menghabiskan waktu sendiri untuk merenung',
            3 => 'Saya lebih suka bekerja dengan fakta dan data yang jelas',
            4 => 'Saya sering memikirkan kemungkinan masa depan daripada fokus pada saat ini',
            5 => 'Saya membuat keputusan berdasarkan analisis logis dan objektif',
            6 => 'Saya mempertimbangkan perasaan orang lain saat membuat keputusan',
            7 => 'Saya suka membuat rencana dan mengikuti jadwal yang ketat',
            8 => 'Saya lebih suka tetap fleksibel dan menyesuaikan diri dengan situasi baru',
            9 => 'Bidang apa yang paling menarik untuk kamu pelajari atau kerjakan?',
            10 => 'Apakah kamu lebih suka bekerja di perusahaann besar, startup, atau membangun bisnis sendiri?',
            11 => 'Seberapa penting bagi kamu untuk bekerja di bidang yang membantu lingkungan?',
            12 => 'Apakah kamu ingin pekerjaan yang memungkinkan kamu membantu orang lain secara langsung?',
            13 => $question_13,
            14 => 'Apakah kamu tertarik bekerja di sektor yang mendukung energi terbarukan atau pelestarian lingkungan?',
            15 => 'Seberapa besar kamu ingin bisnis atau pekerjaanmu di masa depan berdampak positif pada masyarakat?',
        ];

        $articles = Article::all();
        $categoryMap = [
            1 => 'Kuliah',
            2 => 'Kerja',
            3 => 'Wirausaha',
            4 => 'Kerja dan Kuliah',
            5 => 'Kuliah dan Wirausaha',
            6 => 'Kerja dan Wirausaha',
        ];

        $articlesText = '';
        foreach ($articles as $index => $article) {
            $category = $categoryMap[$article->category_id] ?? 'Tidak diketahui';

            $articlesText .= ($index + 1) . ". ID: {$article->id}\n";
            $articlesText .= "   Judul: {$article->title}\n";
            $articlesText .= "   Kategori: {$category}\n";
            $articlesText .= '   Isi: ' . Str::limit(strip_tags($article->content), 150) . "\n\n";
        }

        $answersText = '';
        foreach ($questions as $key => $question) {
            $answer = $request->input("answer_$key");

            if ($key == 9 && $answer == 'lainnya') {
                $other = trim($request->input('answer_9_other'));
                if ($other) {
                    $answer = $other;
                }
            }

            $answersText .= "{$key}. {$question} → {$answer}\n";
        }

        $apiKey = env('GEMINI_API_KEY');
        $api_url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=$apiKey";

        // prompt and response 1
        $prompt1 = "Berdasarkan jawaban berikut:\n\n{$answersText}\n\nJawab hanya satu kata, tipe MBTI saya (contohnya seperti INFJ-T, ESTP-A, dst.) tanpa penjelasan.";
        $response1 = Http::post($api_url, [
            'contents' => [['parts' => [['text' => $prompt1]]]],
        ]);
        $mbtiType = trim($response1->json('candidates.0.content.parts.0.text'));

        // prompt and response 2
        $prompt2 = "Jelaskan secara singkat apa itu tipe MBTI {$mbtiType}, berikan juga julukannya dan diberi BOLD pada julukannya (misalnya ISFP-T(Adventurer), INFJ-A(Advocate), dst). Langsung penjelasannya saja tanpa kata pengantar. Jangan bandingkan dengan tipe MBTI lainnya dan berikan penjelasan tentang kelebihannya saja dalam bentuk naratif paragraf";
        $response2 = Http::post($api_url, [
            'contents' => [['parts' => [['text' => $prompt2]]]],
        ]);
        $description = trim($response2->json('candidates.0.content.parts.0.text'));

        // prompt and response 3
        $prompt3 = "Berdasarkan tipe MBTI {$mbtiType}, \n {$answersText} dan data yang saya miliki terutama pada pertanyaan nomor 9-15, berikan saran dan rekomendasi lebih baik saya bekerja, berwirausaha, atau melanjutkan studi? (contohnya jika terdapat unsur olahraga, tidak menutup kemungkinan untuk menjadi atlet, dan untuk unsur yang lainnya pun begitu). Jelaskan alasannya, dan sebutkan juga contoh pekerjaan, jurusan, atau usaha yang cocok. Sebutkan secara singkat, jelas dan tidak perlu ada kata pengantar";
        $response3 = Http::post($api_url, [
            'contents' => [['parts' => [['text' => $prompt3]]]],
        ]);
        $recommendation = trim($response3->json('candidates.0.content.parts.0.text'));

        // prompt and response 4
        $prompt4 = <<<PROMPT
            Saya memiliki tipe MBTI {$mbtiType} dan telah mengisi jawaban sebagai berikut:

            {$answersText}

            Saya juga memiliki beberapa referensi artikel berikut:

            {$articlesText}

            Berdasarkan tipe MBTI saya, jawaban saya, dan referensi artikel tersebut, tolong berikan saya rekomendasi artikel yang bisa saya baca dan jadikan referensi ke depannya. Rekomendasi bisa didasarkan pada:
            1. Kategori artikel (lebih utama)
            2. Isi artikel (jika kategori kurang relevan)
            3. Judul artikel (jika isi juga tidak membantu)

            Saya hanya membutuhkan **maksimal 3 artikel saja** (boleh kurang dari 3 jika data tidak cukup, atau jika tidak ada yang relevan kemablikan "null" saja). Kembalikan hanya ID-nya dalam bentuk array tanpa penjelasan lain. Contoh format:
            [1, 4, 7]

            Jangan gunakan huruf atau karakter lain selain angka dan tanda kurung siku.
            PROMPT;

        $response4 = Http::post($api_url, [
            'contents' => [['parts' => [['text' => $prompt4]]]],
        ]);
        $responseText = trim($response4->json('candidates.0.content.parts.0.text'));

        if (strtolower($responseText) === 'null') {
            $array_articles = [];
        } else {
            $array_articles = json_decode($responseText, true) ?? [];
        }

        if (empty($array_articles)) {
            $recommended_articles = collect();
        } else {
            $recommended_articles = Article::whereIn('id', $array_articles)->get();
        }

        $parsedown = new Parsedown;
        $descriptionHtml = $parsedown->text($description);
        $recommendationHtml = $parsedown->text($recommendation);

        $user = User::where('id', Auth::user()->id)->first();

        $user->update([
            'mbti_type' => $mbtiType,
            'mbti_desc' => $descriptionHtml,
            'recommendation_career' => $recommendationHtml,
            'recommended_articles' => json_encode($array_articles),
        ]);

        return redirect()->route('mbti_test.result')->with([
            'mbtiType' => $mbtiType,
            'description' => $descriptionHtml,
            'recommendation' => $recommendationHtml,
            'recommendedArticles' => $recommended_articles,
        ]);
    }

    public function result()
    {
        $user = User::where('id', Auth::user()->id)->get();
        $mbtiType = $user[0]->mbti_type;
        $description = $user[0]->mbti_desc;
        $recommendation = $user[0]->recommendation_career;
        $recommendedArticlesIds = json_decode($user[0]->recommended_articles, true);

        if (is_array($recommendedArticlesIds) && count($recommendedArticlesIds)) {
            $recommendedArticles = Article::whereIn('id', $recommendedArticlesIds)->get();
        } else {
            $recommendedArticles = collect();
        }

        return view('mbti_test.result', compact('mbtiType', 'description', 'recommendation', 'recommendedArticles'));
    }
}