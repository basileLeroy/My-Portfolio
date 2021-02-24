@extends('layout')
@extends('header')
@extends('footer')

@section('intro')
    <div class="welcome" style="color:honeydew; width: 40vw; padding-left:50px">
        <h1>WELCOME!</h1>
        <br>
        <p>Welcome to my page! here you will find the home page, or welcome page where I used blades to import sections into specific pages of the webiste. like this one.</p>
    </div> 
@endsection


@section('content')
    <form action="/" method="POST">
        {{ csrf_field() }}
        <div class="form" style="display: flex; flex-direction:column; text-align:center; align-items:center; justify-content:center; width: 40%; margin: auto; margin-top: 50px; margin-bottom: 50px">
            <h3 style="color: honeydew;">Do You like my page?</h3>
            <hr>
            <input style="width:50%; text-align:center" type="text" name="name" placeholder="Your name ...">
            @section('error')
                <div class="d-flex justify-content-center -w-25">
                    @foreach ($errors->all() as $error )
                        <p class="alert alert-danger justify-content-center">{{ $error }}</p>
                    @endforeach
                </div>
            @endsection
            <br>
            <select name="select" id="select" style="width:50%; text-align:center">
                <option value="yes">YES</option>
                <option value="no">NO</option>
            </select>
            <br>
            <textarea id="subject" name="review" placeholder="Tell me WHYY.. Ain't nothing but a hea-..." style="width:50%;"></textarea>
            <br>
            <button type="submit" name="submit" id="submit" value="ok" style="width:50%; text-align:center">Submit</button>
        </div>
    </form>
@endsection

@section('review')
    @isset($answer)
    <div class="answer" style="color:honeydew; margin:auto; text-align:center">
        <h2>{{ $answer }}</h2>
    </div>
    @endisset
@endsection