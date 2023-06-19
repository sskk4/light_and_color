<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Work;
use App\Http\Requests\AddWorkRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all();

        return view('work.index', compact('works'));
    }

    public function works()
    {
        return $this->hasMany(Work::class);
    }

    public function create()
    {

        if(Auth::check())
        {
            return view('work.create');
        }

        return redirect()->route('login');

    }

    public function createPost(AddWorkRequest $request)
    {
        $image_style = $request->input('image_style');
        $canvas_quality = $request->input('canvas_quality');
        $paint_quality = $request->input('paint_quality');
        $painting_time = $request->input('painting_time');

        $price = 0;

        if ($canvas_quality == 1) {
            $price += 10;
        } elseif ($canvas_quality == 2) {
            $price += 20;
        } elseif ($canvas_quality == 3) {
            $price += 50;
        }

        if ($paint_quality == 1) {
            $price += 10;
        } elseif ($paint_quality == 2) {
            $price += 20;
        } elseif ($paint_quality == 3) {
            $price += 50;
        }

        $work = new Work;
        $work->user_id = Auth::user()->id;
        $work->image_style=$image_style;
        $work->painting_time=$painting_time;
        $work->paint_quality=$paint_quality;
        $work->canvas_quality=$canvas_quality;
        $work->price = $price;
        $work->save();

        return redirect()->back()->with('success', 'Work painting order post to admin.');
    }
}
