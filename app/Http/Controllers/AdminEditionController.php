<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\JournalEdition;

use Illuminate\Support\Str;

class AdminEditionController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        // $editions = JournalEdition::latest()->paginate(10);

        $editions = DB::table('journal_editions')
            ->join('users', 'users.id', '=', 'journal_editions.u_id')
            ->select(
                'journal_editions.id', 'journal_editions.edition', 'journal_editions.number', 'journal_editions.status',
                'users.last_name', 'users.first_name'
            )->get();
        
        return view('admin.edition.index', compact('editions'));
    }

    public function new()
    {
        return view('admin.edition.new');
    }

    public function add(Request $request)
    {
        $edition = new JournalEdition();

        $edition->edition = $request->edition;
        $edition->number = $request->number;
        $edition->status = 1;
        $edition->url = "";
        $edition->content = $request->content;
        $edition->u_id = Auth::id();

        if ($request->file('file'))
        {
            $file = $request->file('file');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('files'), $filename);
            $edition->url = $filename;
        }

        if ($request->file('coverImg'))
        {
            $coverImg = $request->file('coverImg');
            $coverImgName =  Str::random(8) . '.' . $request->file('coverImg')->extension();
            $coverImg->move(public_path('covers'), $coverImgName);
            $edition->coverUrl = $coverImgName;
        }

        $edition->save();
        
        return redirect()->route('admin.edition');
    }

    public function articles($id)
    {
        $edition = JournalEdition::where('id', '=', $id)->first();
        $articles = JournalEdition::join('journal_edition_contents', 'journal_edition_contents.je_id', 'journal_editions.id')
            ->join('articles', 'journal_edition_contents.a_id', 'articles.id')
            ->join('chapters', 'journal_edition_contents.ch_id', 'chapters.id')
            ->select(
                'Journal_edition_contents.id',
                'journal_edition_contents.article_number', 
                'chapters.chapter', 
                'articles.title', 
                'articles.authors'
            )
            ->orderBy('chapters.numOfOrder')
            ->orderBy('journal_edition_contents.article_number')
            ->get();

        return view('admin.edition.articles', compact('edition', 'articles'));
    }

    public function publish($id)
    {
        $edition = JournalEdition::where('id', $id)->update([
            'status' => 2
        ]);

        return redirect()->back()->with('success', 'Дугаар нийтлэгдлээ');
    }

    public function unpublish($id)
    {
        $edition = JournalEdition::where('id', $id)->update([
            'status' => 1
        ]);

        return redirect()->back()->with('success', 'Дугаар анпаблиш хийгдлээ');
    }
}