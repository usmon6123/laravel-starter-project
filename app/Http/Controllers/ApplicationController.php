<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplicationRequest;
use App\Jobs\SendEmailJob;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ApplicationController extends Controller
{

    public function index()
    {
        $user_id = auth()->user()->id;
        $applications = Application::where('user_id',$user_id)->orderByDesc('updated_at')->paginate(15);
        return view('application.index')->with('applications', $applications);
    }

    public function store(StoreApplicationRequest $request)
    {
//        dd($request);
        if ($this->checkDate()) return redirect()->back()->with('error','You can only 1 application a day');

        if ($request->hasFile('file')) {
            $name = $request->file('file')->getClientOriginalName();
            $path = $request->file('file')->storeAs('files', time() . $name, 'public');
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
        return redirect('dashboard')->with('success','Your application has been successfully submitted');
    }

    //USRERNING ENG OHIRGI APP NI BUGUNGI APP VAQTI BN TAQQOSLIDI
    protected function checkDate(): bool
    {
        $last_application = auth()->user()->applications()->latest()->first();

        $date_now = Carbon::now()->format('Y-m-d');
        $last_app_date = Carbon::parse($last_application->created_at??'2000-10-10')->format('Y-m-d');
        return $last_app_date == $date_now;
    }
}
