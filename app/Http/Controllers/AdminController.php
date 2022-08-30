<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function users()
    {
        $users = User::latest()->paginate(10);
        
        return view('admin.users.index', compact('users'));
    }

    // selected user details
    public function details($id)
    {
        $user = User::find($id);

        return view('admin.users.details', compact('user'));
    }
}
