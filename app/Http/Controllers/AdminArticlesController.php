<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
use App\Models\ArticleUsers;

class AdminArticlesController extends Controller
{
    //
    public function index()
    {
        $articles = Articles::latest()->paginate(10);

        return view('admin.articles.index', compact('articles'));
    }

    public function details($id)
    {
        $article = Articles::where('articles.id', '=', $id)->get();

        return view('admin.articles.details', compact('article'));
    }

    public function edit($id)
    {
        $article = Articles::where('articles.id', '=', $id)->get();

        return view('admin.articles.edit', compact('article'));
    }
}
