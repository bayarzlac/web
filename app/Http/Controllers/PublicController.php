<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Articles;

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

        return redirect()->route('user.signup')->with($notification);
    }

    public function papers()
    {
        $papers = Articles::whereNotNull('approved')->latest()->paginate(10);
        return view('papers', compact('papers'));
    }

    public function search_paper(Request $request)
    {
        $papers = Articles::find($request->search)->latest()->paginate(10);
        return redirect()->back()->with(compact('papers'));
    }
}
