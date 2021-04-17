@extends('layout')
@extends('header')
@extends('footer')

@section('title')
    Articles
@endsection




@section('content')
<div class="article-content">
    <div class="card">
        <img class="card-img-top" src="{{url('/images/Choosing_framework.png')}}" alt="Card image cap">
        <div class="card-body">
            <h3 class="card-title py-2"><a href="https://dev.to/basileleroy/choosing-a-framework-in-node-js-3n0c">Choosing a Framework in Node.js</a></h3>
            <p class="card-text py-3">
                I can only assume that every person that started coding, has been confronted with this situation... <br>
                Where you want to achieve a certain feature or use a certain structure to ease the process when working on a project. <br><br>
                This post will be about my finding in this kind of situation.
            </p>
            
        </div>
        <div class="text-right pr-3">
            <p>Date: <span class="font-weight-light font-italic">10 apr 2021</span></p>
        </div>
    </div>
</div>

@endsection