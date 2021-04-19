@extends('layout')
@extends('header')
@extends('footer')

@section('title')
    Articles
@endsection




@section('content')
<div class="article-content">

    <div class="alert alert-warning alert-dismissible fade show" style="box-shadow: 0 4px 2px 0 hsla(0, 0%, 0%, 0.2); margin-left:5%; margin-right:5%;" role="alert">
        <p style="color: #bd6b00; font-weight: 400;">
            <span style="color: #bd6b00; font-weight: 700;">My articles!</span>
            <hr>
            So far, I can only present you with what's shown here. Of course I will be adding more once I have more to write about!
        </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="article">
        <div class="card mx-auto" style="box-shadow: 0 4px 6px 0 hsla(0, 0%, 0%, 0.3); width: 350px">
            <img class="card-img-top" src="{{url('/images/Choosing_framework.png')}}" alt="Card image cap">
            <div class="card-body">
                <h3 class="card-title py-2"><a href="https://dev.to/basileleroy/choosing-a-framework-in-node-js-3n0c">Choosing a Framework in Node.js</a></h3>
                <p class="card-text py-3 text-muted" style="font-weight:500;">
                    I can only assume that every person that started coding, has been confronted with this situation... <br>
                    Where you want to achieve a certain feature or use a certain structure to ease the process when working on a project. <br><br>
                    <span style="font-weight:400; font-style: italic; color: #717171;">This article Was made from the point of view of a beginner in the subject.</span>
                </p>
                
            </div>
            <div class="text-right pr-3">
                <p>Date: <span style="font-weight:400; font-style: italic; color: #717171;">10 apr 2021</span></p>
            </div>
        </div>
    </div>
</div>

@endsection