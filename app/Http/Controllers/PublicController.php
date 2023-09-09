<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Articles;
use App\Models\JournalEdition;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function signup()
    {
        return view('user.signup');
    }

    public function adduser(Request $request)
    {
        $user = new User();

        $user->role = 'User';
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->birth_date = $request->birth_date;
        $user->sex = $request->sex;
        $user->education_degree = $request->education_degree;
        $user->academic_degree = $request->academic_degree;
        $user->work = $request->work;
        $user->position = $request->position;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->province = $request->province;
        $user->district = $request->district;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        
        $notification = array(
            'message' => 'User Inserted Successfully',
            'alert-type' => 'success'  
        );

        // return redirect()->route('user.signup')->with($notification);
        // return redirect()->route('login', 'message', 'Бүртгэл амижлттай үүслээ. Та бүртгэлээрээ нэвтэрч орно уу.');
        
        return redirect()->back()->with('success', 'Бүртгэл амижлттай үүслээ. Та бүртгэлээрээ нэвтэрч орно уу.');
    }

    public function papers()
    {
        $papers = Articles::whereNotNull('approved')->latest()->paginate(10);
        
        return view('papers', compact('papers'));
    }

    public function editions()
    {
        $editions = JournalEdition::orderBy('created_at', 'desc')
            ->select(
                'journal_editions.id', 'journal_editions.edition', 'journal_editions.number',
                'journal_editions.status', 'journal_editions.coverUrl', 'journal_editions.created_at',
                'users.first_name', 'users.last_name', DB::raw('count(journal_edition_contents.id) as num_of_articles')
            )
            ->join('users', 'users.id', '=', 'journal_editions.u_id')
            ->join('journal_edition_contents', 'journal_edition_contents.je_id', '=', 'journal_editions.id')
            ->groupBy(
                'journal_editions.id', 'journal_editions.edition', 'journal_editions.number',
                'journal_editions.status', 'journal_editions.coverUrl', 'journal_editions.created_at',
                'users.first_name', 'users.last_name'
            )->get();

        return view('editions', compact('editions'));
    }

    public function edition($id) 
    {
        $articles = Articles::join('journal_edition_contents', 'journal_edition_contents.a_id', '=', 'articles.id')
            ->select('articles.id', 'articles.title', 'articles.authors', 'articles.keywords', 'articles.approved')
            ->where('journal_edition_contents.je_id', $id)->get();

        $edition = JournalEdition::where('id', $id)->first();

        return view('edition', compact('articles', 'edition'));
    }

    public function search_paper(Request $request)
    {
        $papers = Articles::find($request->search)->latest()->paginate(10);
        return redirect()->back()->with(compact('papers'));
    }
}
