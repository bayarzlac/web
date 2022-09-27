<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Chapters;

class AdminChaptersController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        $chapters = Chapters::orderBy('numOfOrder', 'asc')->get();

        return view('admin.chapters.index', compact('chapters'));
    }

    public function add(Request $request)
    {
        $chapter = new Chapters();

        $chapter->numOfOrder = $request->numOfOrder;
        $chapter->chapter = $request->chapter;
        $chapter->save();

        return redirect()->back();
    }
}
