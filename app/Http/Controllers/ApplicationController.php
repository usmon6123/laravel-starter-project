<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Mail\ApplicationCreated;
use App\Models\Application;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{

    public function index(){
        echo 'Index';
    }
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|max:255',
            'message' => 'required',
            'file' => 'file|mimes:jpg,png,pdf|nullable'
        ]);

        if ($request->hasFile('file')) {
            $name = $request->file('file')->getClientOriginalName();
            $path = $request->file('file')->storeAs('files', time().$name, 'public');
        }

        $app = Application::create([
            'user_id' => auth()->user()->id,
            'subject' => $request->subject,
            'message' => $request->message,
            'file_url' => $path ?? null
        ]);

        //LOGGA EMAIL JO'NATADI queue da
        dispatch(new SendEmailJob($app));



//        dd($app);
        return redirect('dashboard');
    }
}
