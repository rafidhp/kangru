<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Services\HashidsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('article.index', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('article.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100|min:3|regex:/^[A-Za-z\s]+$/',
            'image' => 'image|mimes:png,jpg,jpeg,gif,svg,webp|max:10240',
            'content' => 'required|min:10',
            'category_id' => 'required|integer',
            'upload_date' => 'required|date',
        ]);

        $image = $request->file('image');
        $image_name = $image->getClientOriginalName();
        $directory = storage_path('app/public/article');

        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        $image->storeAs('public/article/' . $image_name);

        if ($request->image != null) {
            Article::create([
                'title' => $request->title,
                'image' => $image_name,
                'content' => $request->content,
                'category_id' => $request->category_id,
                'upload_date' => $request->upload_date,
            ]);
        } else {
            Article::create([
                'title' => $request->title,
                'content' => $request->content,
                'category_id' => $request->category_id,
                'upload_date' => $request->upload_date,
            ]);
        }

        return redirect()->route('article.index')->withSuccess('Article successfully created!');
    }

    public function show($article_id, HashidsService $hashids)
    {
        $id = $hashids->decode($article_id);
        $article = Article::findOrFail($id);

        return view('article.show', compact('article'));
    }
}
