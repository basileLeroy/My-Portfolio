@extends('layout')
@extends('header')
@extends('footer')

@section('title')
    Articles
@endsection




@section('content')
<div class="article-content">

    <div class="alert alert-dismissible fade show info-box" style="box-shadow: 0 4px 2px 0 hsla(0, 0%, 0%, 0.2); margin-left:5%; margin-right:5%;" role="alert">
        <p style="color: #bd6b00; font-weight: 400;">
            <span style="color: #bd6b00; font-weight: 700;">My articles</span>
            <hr>
            I just found out about <a href="https://dev.to">Dev.to</a>, and will be updating new articles when I get the chance.
        </p>
    </div>

    <div class="article">
        <div class="card mx-auto" style="box-shadow: 0 4px 6px 0 hsla(0, 0%, 0%, 0.3); width: 350px; background-color: #F0F8FF; margin-bottom: 30px;">
            <img class="card-img-top" src="{{url('/images/Choosing_framework.png')}}" alt="Card image cap">
            <div class="card-body">
                <h3 class="card-title py-2"><a href="https://dev.to/basileleroy/choosing-a-framework-in-node-js-3n0c">Choosing a Framework in Node.js</a> <span style="padding-left: 4px; font-size: 17px;"><small><i>Dev.to</i></small></span></h3>
                <p class="card-text text-muted" style="font-weight:500;">
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