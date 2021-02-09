<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show()
    {
        return view('test');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'select' => 'required',
        ]);

        if(request('select') == 'yes') {
            $answer = "Thank you " . request('name') . ", I also like you!";
            return view('welcome')->with('answer', $answer);
        }

        if(request('select') == 'no') {
            $answer = "You know what.. " . request('name') . ", I don't like you neither!";
            return view('welcome')->with('answer', $answer);
        }
        
        
    }
}