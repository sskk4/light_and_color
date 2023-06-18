<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class MarketController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $userId = auth()->user()->id;
            $products = Product::where('sold', 0)->where('user_id', '!=', $userId)->get();
        } else {
            $products = Product::where('sold', 0)->get();
        }

        return view('market.index', compact('products'));
    }



    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function show($id)
    {
        $product = Product::with('user')->findOrFail($id);

    return view('market.product', [
        'p' => $product
    ]);
    }



    public function show_old()
    {
        $products = Product::where('sold', 1)->get();

        return view('market.index', compact('products'));
    }



    public function buy($id)
    {
        $product = Product::findOrFail($id);

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->id === $product->user_id) {
            abort(403);
        }

        return view('market.buy', [
            'p' => $product
        ]);
    }


public function buyPost($id)
{
    $product = Product::findOrFail($id);

    $product->sold = 1;
    $product->save();

    $order = new Order();
    $order->user_id = Auth::user()->id;
    $order->product_id = $product->id;
    $order->save();

    return redirect()->route('products');
}




    public function create()
    {
        if(Auth::check())
        {
            return view('market.create');
        }

        return redirect()->route('login');
    }

    public function createPost(AddProductRequest $request)
{
    $title = $request->input('title');
    $price = $request->input('price');
    $description = $request->input('description');
    $user_id = Auth::id();

    if ($request->hasFile('image')) {
        $image = $request->file('image');

        $imageName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
        $image->move(storage_path('app/public/images'), $imageName);
    } else {
        $imageName = null;
    }

    $product = new Product;
    $product->user_id = $user_id;
    $product->title = $title;
    $product->description = $description;
    $product->price = $price;
    $product->image = $imageName;
    $product->save();

    return redirect()->back()->with('success', 'Product added successfully!');
}

}
