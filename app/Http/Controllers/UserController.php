<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('user.index');
    }

    public function signup()
    {
        return view('user.signup');
    }

    public function add(Request $request)
    {
        $user = new User();

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
}
