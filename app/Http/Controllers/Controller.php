<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Review;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show($user)
    {
        // connecting directly to database:
        // $post = DB::table('post')->where('slug', $slug)->first();

        // Connecting via eloquent models to database:
        // $post = Post::where('slug', $slug)->firstOrFail();

        return view('user.show', [
            'user' => Post::where('username', $user)->firstOrFail()
        ]);
    }

    public function create()
    {
        return view('review', [
            'posts' => Review::all()
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

        return view('review', [
            'posts' => Review::all()

        ]);
    }
}