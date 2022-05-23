<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScoreController extends Controller
{
    public function index()
    {
        $scores = DB::table('scores')
                        ->orderBy('score', 'desc')
                        ->orderBy('date', 'asc')
                        ->get();
        //dd($scores);


        $topScore = Score::all()->max('score');

        return view('site.index', compact('scores', 'topScore'));
    }

    public function create()
    {
        return view('site.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'bail|required|min:3|max:100',
            'score' => 'required',
            'screenshot' => 'required'
        ]);

        $score = new Score();
        $score->name = $request->name;
        $score->score = $request->score;
        $score->date = now();

        if($request->hasFile('screenshot') && $request->file('screenshot')->isValid()){
            $scoreScreenshot = $request->screenshot;
            $extension = $scoreScreenshot->extension();
            $screenshotName = md5($scoreScreenshot->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $scoreScreenshot->move(public_path('img/screenshots'), $screenshotName);

            $score->screenshot = $screenshotName;

        }

        $score->save();

        return view('site.confirmation', compact('score'));

    }

    public function admin()
    {
        $scores = Score::all();

        return view('admin.index', compact('scores'));
    }

    public function destroyShow($id)
    {
        $user = Score::findOrFail($id);

        return view('admin.destroy', compact('user'));
    }

    public function destroy(Request $request, $id)
    {
        $delete = $request->optradio;

        if($delete == 0){
            return redirect()->route('admin');
        }

        $score = Score::findOrFail($id);

        $score->delete();

        return view('admin.delete-confirm', compact('score'));

    }
}
