@extends('layout')
@extends('header')
@extends('footer')

@section('title')
    REVIEW PAGE
@endsection


@section('intro')
<div class="welcome" style="color:honeydew; width: 40vw; padding-left:50px; margin-top: 50px">
    <h1>HELLO WORLD!</h1>
    <br>
    <p>Here are some of the fines reviews!</p>
</div> 
@endsection


@section('content')
    @foreach ($posts as $post)
    <div class="card">
        <div class="card-header">
            From {{ $post->name }},
        </div>

        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>{{ $post->review }}</p>
                <footer class="blockquote-footer">Selected: {{ $post->selection }} <cite title="Source Title">|| at {{ $post->created_at }}</cite></footer>
            </blockquote>
        </div>
    </div>
    <br><br>
    @endforeach
@endsection



<!-- <div style="width:50%; text-align:center; color: honeydew;">
    <p>{{ $posts }}</p>
</div> -->