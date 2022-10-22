<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Articles;
use App\Models\ArticleUsers;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $articles = Articles::where('article_users.u_id', '=', Auth::id())
            ->join('article_users', 'articles.id', '=', 'article_users.a_id')
            ->select('articles.title', 'articles.authors', 'articles.received', 'articles.approved', 'articles.full_article_link')
            ->orderBy('articles.received', 'desc')
            ->paginate(15);

        return view('user.article.index', compact('articles'));
    }

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
        $article->revised_u_id = null;
        $article->public_publish = 0;

        $article->save();
        
        $a_id = $article->id;

        $articleUser->a_id = $a_id;
        $articleUser->u_id = Auth::id();  
        $articleUser->save();

        return redirect()->route('user.articles');
    }

    public function delete($id)
    {
        $article = Articles::find($id);
        $file = $article->file;

        if ($article->revised == null)
        {
            unlink($file);
            Articles::find($id)->delete();
        }

        return Redirect()->back()->with('success', 'Өгүүлэл устлаа');
    }
}
