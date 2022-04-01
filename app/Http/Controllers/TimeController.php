<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function index() {
        $times = [
            (object) [
                'id' => 1,
                'created_at' => now(),
                'user' => (object) [
                    'id' => 1,
                    'name' => 'ユーザー名1',
                ],
            ],
        ];
            return view('times.index', ['times' => $times]);
    }
}
