<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('article.index', compact('articles'));
    }

    public function create()
    {
        return view('article.create');
    }
}
