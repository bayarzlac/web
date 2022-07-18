<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Articles;
use App\Models\ArticleUsers;

class ArticleController extends Controller
{
    //
    public function new()
    {
        return view('user.article.new');
    }

    public function add(Request $request)
    {
        $article = new Articles();
        $articleUser = new ArticleUsers();

        $file = $request->file('file');
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('articles'), $filename);
        
        $article->title = $request->title;
        $article->authors = $request->authors;
        $article->abstract_mn = $request->abstract_mn;
        $article->abstract_en = $request->abstract_en;
        $article->keywords = $request->keywords;
        $article->full_article_link = 'articles/' . $filename;
        $article->received = Carbon::now();
        // $article->revised = Carbon::now();
        // $article->approved = Carbon::now();
        $article->revised_u_id = null;
        $article->public_publish = 0;
        
        $article->save();

        return redirect()->route('user.article.new');
    }
}
