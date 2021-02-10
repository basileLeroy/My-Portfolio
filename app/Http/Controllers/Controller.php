<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    

    public function show($slug)
    {
        $post = DB::table('post')->where('slug', $slug)->first();

        return view('test', [
            'post' => $post
        ]);
    }

    public function store()
    {
        request()->validate([
            'name' => ['required', 'min:3'],
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