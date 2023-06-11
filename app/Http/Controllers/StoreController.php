<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

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
}
