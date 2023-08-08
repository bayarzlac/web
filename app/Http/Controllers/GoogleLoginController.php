<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    //
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback() 
    {
        try {
            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);

                return redirect()->intended('/user');
            } else {

                $dbuser = User::where('email', $user->email)->first();

                if ($dbuser) {
                    $dbuser->google_id = $user->id;
                    $dbuser->save();
                } else {
                    return redirect()->route('login')->with('error', 'Та бүртгүүлсний дараа Google ашиглан нэвтэрнэ үү.');
                }



                // $newUser = User::create([
                //     'role' => 'User',
                //     'first_name' => $user->name,
                //     'email' => $user->email, 
                //     'password' => 'horvoo',
                //     'google_id' => $user->id
                // ]);

                // Auth::login($newUser);

                // return redirect()->intended('/');

                return redirect()->route('login');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
