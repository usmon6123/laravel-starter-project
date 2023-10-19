<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Application;

class MainController extends Controller
{

    public function main(){
        return redirect('dashboard');
    }
    public function dashboard()
    {


        return view('dashboard')->with([
            'applications' => Application::orderByDesc('updated_at')->paginate(10),
        ]);

    }
}
