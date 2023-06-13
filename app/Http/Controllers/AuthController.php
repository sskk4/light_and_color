<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{


    public function register()
    {
        return view('login.create');
    }


    public function login()
    {
        return view('login.index');
    }


    public function registerPost(RegisterUserRequest $request)
    {

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

       return back()->with('success', 'Register successfully!');

    }

    public function loginPost(Request $request)
    {
        $credetials = [
                'email' => $request->email,
                'password'=> $request->password,
        ];

        if(Auth::attempt($credetials)){
            $request->session()->regenerate();
            return redirect()->route('home');
        }

        return back()->with('error','Wrong e-mail or password.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }

}
