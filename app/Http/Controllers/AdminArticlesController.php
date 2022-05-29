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
}
