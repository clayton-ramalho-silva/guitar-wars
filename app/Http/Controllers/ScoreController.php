<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function index()
    {
        $scores = Score::all();

        return view('site.index', compact('scores'));
    }

    public function create()
    {
        return view('site.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'bail|required|min:3|max:100',
            'score' => 'required'
        ]);

        $score = new Score();
        $score->name = $request->name;
        $score->score = $request->score;
        $score->date = now();

        $score->save();


        return view('site.confirmation', compact('score'));


    }
}
