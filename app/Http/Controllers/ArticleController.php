<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ArticleController extends Controller
{
    public function create()
    {
        $articles = Http::get("https://dev.to/api/articles?username=basileleroy");

        dd($articles->json());

        return view('/articles');
    }
}
