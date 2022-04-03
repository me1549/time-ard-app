<?php

namespace App\Http\Controllers;
use App\Time;
use App\Http\Requests\TimesRequest;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Time::class, 'time');
    }

    public function index() {
            $times = Time::all()->sortByDesc('created_at');
            return view('times.index', ['times' => $times]);
    }

    public function create()
    {
        return view('times.create');    
    }

    public function store(TimesRequest $request, Time $times)
    {
        $times->body = $request->body;
        $times->user_id = $request->user()->id;
        $times->save();
        return redirect()->route('times.index');
    }

    public function destroy(Time $time)
    {
        $time->delete();
        return redirect()->route('times.index');
    }
}
