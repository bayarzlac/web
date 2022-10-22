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
        $article = Articles::where('articles.id', '=', $id)->first();

        return view('admin.articles.details', compact('article'));
    }

    public function edit($id)
    {
        $article = Articles::where('articles.id', '=', $id)->first();

        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request)
    {
        if ($request->hasFile('file'))
        {
            unlink($request->old_file);

            $file = $request->file('file');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('articles'), $filename);

            Articles::find($request->id)->update([
                'title' => $request->title,
                'authors' => $request->authors,
                'abstract_mn' => $request->abstract_mn,
                'abstract_en' => $request->abstract_en,
                'keywords' => $request->keywords,
                'full_article_link' => 'articles/' . $filename
            ]);
        }
        else 
        {
            Articles::find($request->id)->update([
                'title' => $request->title,
                'authors' => $request->authors,
                'abstract_mn' => $request->abstract_mn,
                'abstract_en' => $request->abstract_en,
                'keywords' => $request->keywords
            ]);

            return Redirect()->back()->with('success', 'Өгүүллийн мэдээлэл засварлагдлаа');
        }

        return view('admin.articles.details', $request->id);
    }
}
