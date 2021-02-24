<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Review;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show($slug)
    {
        // connecting directly to database:
        // $post = DB::table('post')->where('slug', $slug)->first();

        // Connecting via eloquent models to database:
        // $post = Post::where('slug', $slug)->firstOrFail();

        return view('test', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }

    public function create()
    {
        $backgroundImage = "";
        return view('review', [
            'posts' => Review::all(),
            'container-review' => $backgroundImage,

        ]);
    }

    public function store()
    {
        request()->validate([
            'name' => ['required', 'min:3'],
            'select' => 'required',
            'review' => 'required',
        ]);

        $review = new Review;

        $review->name = request('name');
        $review->selection = request('select');
        $review->review = request('review');

        $review->save();

        if(request('select') == 'yes') {
            $answer = "Thank you " . request('name') . ", I also like you!";
            return view('welcome')->with( 'answer', $answer );
        }

        if(request('select') == 'no') {
            $answer = "You know what.. " . request('name') . ", I don't like you neither!";
            return view('welcome')->with('answer', $answer);
        }
    }
}