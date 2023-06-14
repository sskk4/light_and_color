<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class MarketController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('market.index', compact('products'));
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function show($id)
    {
        return view('market.product', [
            'p' => Product::findOrFail($id)
        ]);
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
