<?php


namespace App\Http\Controllers;
use App\Models\Rated;
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



        return redirect()->route('login');
    }

    public function show_products()
    {

        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::findOrFail($userId);

            $products = $user->products()->where('sold', 0)->get();

            return view('profile.index', compact('products'));
        }

        return redirect()->route('login');
    }

    public function show_sold()
    {

        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::findOrFail($userId);

            $products_sold = $user->products()->where('sold', 1)->get();

            return view('profile.index', compact('products_sold'));
        }

        return redirect()->route('login');

    }



public function show_rated()
{
    if (Auth::check()) {
    $products_rated = Rated::with('product')->get();

    return view('rated.index', compact('products_rated'));
    }

    return redirect()->route('login');
}

    public function show_orders()
    {

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
