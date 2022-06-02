<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JournalEdition;

class EditionController extends Controller
{
    //
    public function index()
    {
        $editions = JournalEdition::latest()->paginate(10);
        
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
        $edition->u_id = 1;

        if ($request->file('file'))
        {
            $file = $request->file('file');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('files'), $filename);
            
            $edition->url = $filename;
        }
        
        $edition->save();

        return redirect()->route('admin.edition');
    }
}
