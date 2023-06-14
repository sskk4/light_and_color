<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::findOrFail($userId);

            $products = $user->products;

            return view('profile.index', compact('products'));
        }

        // Obsłuż tutaj przypadek, gdy użytkownik nie jest zalogowany

        return redirect()->route('login');
    }


    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function  update()
    {
        if(Auth::check()){

            return view('profile.edit');

        }

        return redirect()->route('login');
    }



}
