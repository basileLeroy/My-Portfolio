@extends('layout')
@extends('header')
@extends('footer')

@section('title')
    Database Test
@endsection


@section('intro')
<div class="welcome" style="color:honeydew; width: 40vw; padding-left:50px; margin-top: 50px">
    <h1>HELLO WORLD!</h1>
</div> 
@endsection


@section('content')
<div style="width:50%; text-align:center; color: honeydew;">
    <p>{{ $post->body }}</p>
</div>
@endsection