<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Articles;
use App\Models\ArticleUsers;
use App\Models\JournalEdition;
use App\Models\JournalEditionContents;
use App\Models\Chapters;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AdminArticlesController extends Controller
{
    //
    public function index()
    {
        $articles = Articles::leftJoin('journal_edition_contents', 'journal_edition_contents.a_id', '=', 'articles.id')
            ->select('articles.id', 'articles.title', 'articles.authors', 'articles.received', 'articles.approved')
            ->get();
        
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
        $editions = JournalEdition::orderBy('created_at', 'desc')->get();
        $chapters = Chapters::orderBy('numOfOrder')->get();

        return view('admin.articles.edit', compact('article', 'editions', 'chapters'));
    }

    public function update(Request $request)
    {
        return $request->approved;
        // $check = JournalEditionContents::where('a_id', $request->a_id)->first();

        // if ($check) {
        //     return Redirect()->back()->with('error', 'Уг өгүүлэл тухайн дугаарт сонгогдсон байна.');
        // }
        // else {
        //     $approved = null;

        //     if ($request->approved == true) {
        //         $approved = Carbon::now();
        //     }

        //     if ($request->e_id != '')
        //     {
        //         $articleJournal = new JournalEditionContents();

        //         $articleJournal->je_id = $request->e_id;
        //         $articleJournal->ch_id = $request->ch_id;
        //         $articleJournal->a_id = $request->a_id;
        //         $articleJournal->article_number = $request->number;
                
        //         $articleJournal->save();
        //     }

        //     if ($request->hasFile('file'))
        //     {
        //         unlink($request->old_file);

        //         $file = $request->file('file');
        //         $filename = date('YmdHi').$file->getClientOriginalName();
        //         $file->move(public_path('articles'), $filename);

        //         Articles::find($request->a_id)->update([
        //             'title' => $request->title,
        //             'authors' => $request->authors,
        //             'abstract_mn' => $request->abstract_mn,
        //             'abstract_en' => $request->abstract_en,
        //             'keywords' => $request->keywords,
        //             'full_article_link' => 'articles/' . $filename,
        //             'approved' => $approved, 
        //             'review_u_id' => Auth::id()
        //         ]);

        //         return Redirect()->back()->with('success', 'Өгүүллийн мэдээлэл засварлагдлаа');
        //     }
        //     else 
        //     {
        //         Articles::find($request->a_id)->update([
        //             'title' => $request->title,
        //             'authors' => $request->authors,
        //             'abstract_mn' => $request->abstract_mn,
        //             'abstract_en' => $request->abstract_en,
        //             'keywords' => $request->keywords,
        //             'approved' => $approved,
        //             'review_u_id' => Auth::id()
        //         ]);

        //         return Redirect()->back()->with('success', 'Өгүүллийн мэдээлэл засварлагдлаа');
        //     }
        // }
    }
}
