<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function index()
    {
        $products = Photo::all();

        return view('store.index', compact('products'));
    }

    public function products()
    {
        return $this->hasMany(Photo::class);
    }

    public function show($id)
    {
        return view('store.product', [
            'p' => Photo::findOrFail($id)
        ]);
    }

    public function create()
    {
        return view('store.create');
    }

    public function createPost(Request $request)
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
        $imagePath = null;
    }

    $product = new Photo;
    $product->user_id = $user_id;
    $product->title = $title;
    $product->description = $description;
    $product->price = $price;
    $product->image = $imageName;
    $product->save();

    return redirect()->back()->with('success', 'Product added successfully');
}

}
