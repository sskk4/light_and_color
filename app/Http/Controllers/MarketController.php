<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use App\Models\Order;
use App\Models\Rated;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class MarketController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $sortBy = $request->input('sort_by');

        if (auth()->check()) {
            $userId = auth()->user()->id;
            $productsQuery = Product::where('sold', 0)->where('user_id', '!=', $userId);
        } else {
            $productsQuery = Product::where('sold', 0);
        }

        if ($query) {
            $productsQuery->where('title', 'like', '%' . $query . '%');
        }

        switch ($sortBy) {
            case 'low_price':
                $productsQuery->orderBy('price', 'asc');
                break;
            case 'max_price':
                $productsQuery->orderBy('price', 'desc');
                break;
            case 'newest':
                $productsQuery->orderBy('created_at', 'desc');
                break;
            case 'oldest':
                $productsQuery->orderBy('created_at', 'asc');
                break;
            case 'most_rated':
                $productsQuery->orderBy('rating', 'desc');
                break;
        }

        $products = $productsQuery->get();

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



    public function show_old(Request $request)
{
    $query = $request->input('query');
    $sortBy = $request->input('sort_by');

    $productsQuery = Product::where('sold', 1);

    if ($query) {
        $productsQuery->where('title', 'like', '%' . $query . '%');
    }

    switch ($sortBy) {
        case 'low_price':
            $productsQuery->orderBy('price', 'asc');
            break;
        case 'max_price':
            $productsQuery->orderBy('price', 'desc');
            break;
        case 'newest':
            $productsQuery->orderBy('created_at', 'desc');
            break;
        case 'oldest':
            $productsQuery->orderBy('created_at', 'asc');
            break;
        case 'most_rated':
            $productsQuery->orderBy('rating', 'desc');
            break;
    }

    $products = $productsQuery->get();

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

    return redirect()->back()->with('success', 'Product added successfully!')->with('product', $product);
}


public function update($id)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $product = Product::findOrFail($id);

        if(Auth::check() && $product->user_id==$userId && $product->sold==0 )
        {
            return view('market.edit', compact('product'));
        }

        return redirect()->route('profile');
    }

    public function updatePost(Request $request, $id)
    {
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::findOrFail($userId);

            $product = Product::findOrFail($id);

            if ($product->user_id == $userId) {
                $product->title = $request->input('title');
                $product->price = $request->input('price');
                $product->description = $request->input('description');

                $product->save();

                return redirect()->route('product', ['id' => $product->id])->with('success', 'Product updated successfully');
            }
        }

        return redirect()->route('login');
    }

    public function destroy($id)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $product = Product::findOrFail($id);

        if(Auth::check() && $product->user_id==$userId )
        {
            return view('market.delete', compact('product'));
        }

        return redirect()->route('profile');
    }

    public function destroyPost($id)
{
    if (Auth::check()) {
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $product = Product::findOrFail($id);
        $rated = Rated::where('product_id',$id);
        if ($product->user_id == $userId) {
            $rated->delete();
            $product->delete();
            return redirect()->route('profile')->with('success', 'Product deleted successfully');
        }
    }

    return redirect()->route('login');
}

}
