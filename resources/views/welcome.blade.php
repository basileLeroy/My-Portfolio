@extends('layout')
@extends('header')
@extends('footer')


@section('intro')
    <div class="welcome" style="color:honeydew; width: 40vw; padding-left:50px; padding-top:20px;">
        <h1>WELCOME!</h1>
        <br>
        <p>Sing up and discover some things about me!</p>
    </div> 
@endsection

@section('register')
    <div class="card w-25 text-center border-secondary d-flex justify-content-center m-auto">
        <div class="card-body">
            <form method="POST" action="/user">
            {{ csrf_field() }}

                <div class="form-group text-left">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    <small id="emailHelp" class="form-text text-muted">No email needed!</small>
                </div>
                <div class="form-group text-left">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group text-left">
                    <label for="password_confirmation">Repeat password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Repeat password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
    @yield('error')
@endsection

@section('error')
    <div class="d-flex justify-content-center -w-25">
        @foreach ($errors->all() as $error )
            <p class="alert alert-danger justify-content-center">{{ $error }}</p>
        @endforeach
    </div>
@endsection