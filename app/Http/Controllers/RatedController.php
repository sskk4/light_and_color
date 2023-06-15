<?php

namespace App\Http\Controllers;
use App\Models\Rated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RatedController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request)
    {

        try {
        $user_id = auth()->id();
        $product_id = $request->input('product_id');

        Rated::create([
            'user_id' => $user_id,
            'product_id' => $product_id,
        ]);

    } catch (\Exception $e) {
        Log::error($e);

        return response()->json(['message' => 'Wystąpił błąd podczas dodawania rekordu do tabeli.'], 500);
    }
    }

    public function delete($product_id)
    {
        $user_id = Auth::user()->id;

        $rated = Rated::where('user_id', $user_id)
                      ->where('product_id', $product_id)
                      ->first();

        if ($rated) {
            $rated->delete();
            return response()->json(['message' => 'Rekord został usunięty z tabeli.']);
        } else {
            return response()->json(['message' => 'Nie znaleziono rekordu o podanych danych.'], 404);
        }
    }
}
