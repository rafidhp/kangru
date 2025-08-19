<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Services\HashidsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index(HashidsService $hashids)
    {
        $articles = Article::all();
        $bekerja_articles = Article::where('category_id', 2)->get();
        $wirausaha_articles = Article::where('category_id', 3)->get();
        $kuliah_articles = Article::where('category_id', 1)->get();

        return view('article.index', compact('articles', 'bekerja_articles', 'wirausaha_articles', 'kuliah_articles'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('article.create', compact('categories'));
    }

    public function store(Request $request, HashidsService $hashids)
    {
        $request->validate([
            'title' => 'required|string|max:100|min:3|regex:/^[A-Za-z\s]+$/',
            'image' => 'image|mimes:png,jpg,jpeg,gif,svg,webp|max:10240',
            'content' => 'required|min:10',
            'category_id' => 'required|integer',
            'upload_date' => 'required|date',
        ]);

        if ($request->image != null) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $directory = storage_path('app/public/article');

            if (! File::exists($directory)) {
                File::makeDirectory($directory, 0755, true);
            }

            $article = Article::create([
                'title' => $request->title,
                'image' => $image_name,
                'content' => $request->content,
                'category_id' => $request->category_id,
                'upload_date' => $request->upload_date,
            ]);

            $image->storeAs('public/article/'.$hashids->encode($article->id).'_'.$image_name);
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

    public function edit($article_id, HashidsService $hashids)
    {
        $id = $hashids->decode($article_id);
        $article = Article::findOrFail($id);

        return view('article.edit', compact('article'));
    }

    public function update($article_id, Request $request, HashidsService $hashids)
    {
        $request->validate([
            'title' => 'required|string|max:100|min:3|regex:/^[A-Za-z\s]+$/',
            'image' => 'image|mimes:png,jpg,jpeg,gif,svg,webp|max:10240',
            'content' => 'required|min:10',
            'category_id' => 'required|integer',
        ]);

        $id = $hashids->decode($article_id);
        $article = Article::findOrFail($id);

        if ($request->image != null) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $directory = storage_path('app/public/article');

            if (! File::exists($directory)) {
                File::makeDirectory($directory, 0755, true);
            }

            $image_path = 'article/'.$article_id.'_'.$article->image;

            if (Storage::disk('public')->exists($image_path)) {
                Storage::disk('public')->delete($image_path);
            }

            $article->update([
                'title' => $request->title,
                'image' => $image_name,
                'content' => $request->content,
                'category_id' => $request->category_id,
            ]);

            $image->storeAs('public/article/'.$article_id.'_'.$image_name);
        } else {
            $article->update([
                'title' => $request->title,
                'content' => $request->content,
                'category_id' => $request->category_id,
            ]);
        }

        return redirect()->route('article.index')->withSuccess('Article updated successfully!');
    }

    public function destroy($article_id, HashidsService $hashids)
    {
        $id = $hashids->decode($article_id);
        $article = Article::findOrFail($id);

        if ($article->image) {
            $image_path = 'article/'.$article_id.'_'.$article->image;

            if (Storage::disk('public')->exists($image_path)) {
                Storage::disk('public')->delete($image_path);
            }
        }
        $article->delete();

        return redirect()->route('article.index')->withSuccess('Article deleted successfully!');
    }

    public function imageDestroy($article_id, HashidsService $hashids)
    {
        $id = $hashids->decode($article_id);
        $article = Article::findOrFail($id);

        if ($article->image) {
            $image_path = 'article/'.$article_id.'_'.$article->image;

            if (Storage::disk('public')->exists($image_path)) {
                Storage::disk('public')->delete($image_path);
            }
        }

        $article->update([
            'image' => null,
        ]);

        return back()->withSuccess('Image deleted successfully!');
    }
}
