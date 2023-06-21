<?php


namespace App\Http\Controllers;

use App\Models\Order;
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

            $products = $user->products()->where('sold', 0)->orderBy('created_at', 'desc')->get();

            return view('profile.index', compact('products'));
        }

        return redirect()->route('login');
    }


    public function show_sold()
    {

        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::findOrFail($userId);

            $products_sold = $user->products()->where('sold', 1)->orderBy('created_at', 'desc')->get();


            return view('profile.index', compact('products_sold'));
        }

        return redirect()->route('login');

    }


public function show_rated()
{
    if (Auth::check()) {
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $rated_product_id = Rated::where('user_id', $userId)->pluck('product_id');

        $products_rated = Product::whereIn('id', $rated_product_id)->get();

        return view('profile.index', compact('products_rated'));
    }

    return redirect()->route('login');
}


    public function show_orders()
    {
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::findOrFail($userId);

            $orders_product_id = Order::where('user_id', $userId)->pluck('product_id');

            $products_orders = Product::whereIn('id', $orders_product_id)->orderBy('updated_at', 'desc')->get();

            return view('profile.index', compact('products_orders'));
        }

        return redirect()->route('login');
    }


    public function products()
    {
        return $this->hasMany(Product::class);
    }


    public function  update()
    {
        if(Auth::check()){
            $userId = Auth::id();
            $user = User::findOrFail($userId);

            return view('profile.edit', compact('user'));

        }

        return redirect()->route('login');
    }


    public function updatePost(Request $request)
{
    if (Auth::check()) {
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$userId,
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    return redirect()->route('login');
}




}
