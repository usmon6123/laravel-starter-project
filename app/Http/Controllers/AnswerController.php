<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class AnswerController extends Controller
{
    public function store(Application $application, Request $request)
    {
        if (! Gate::allows('answer-application',auth()->user())) {
            abort(403);
        }

        $request->validate(['body' => 'required']);
//        $application->answer()->create(['body'=>$request->body]);

        if (DB::table('answers')->where('application_id', $application->id)->exists()) {
            DB::table('answers')->where('application_id', $application->id,)->update(['body' => $request->body]);
        } else {
            DB::table('answers')->insert([
                'application_id' => $application->id,
                'body' => $request->body
            ]);
        }
        return redirect()->route('dashboard');

    }

    public function getForm(Application $application)
    {
        if (! Gate::allows('answer-application',auth()->user())) {
            abort(403);
        }
        return view('answer')->with('application', $application);
    }
}
