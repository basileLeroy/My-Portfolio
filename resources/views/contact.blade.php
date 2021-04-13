@extends('layout')
@extends('header')
@extends('footer')

@section('title')
    Contact me
@endsection




@section('content')

    
    <div class="card w-50 position-absolute top-50 start-50 translate-middle" style="opacity: 0.9;">
        <div class="card-body">
            @if(Session::has('message_sent'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('message_sent')}}
                </div>
            @endif
            <form method="POST" action="./send-message" class="row g-3" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="col-md-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="col-md-6">
                    <label for="name" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lastName" id="lastName">
                </div>
                <div class="col-md-6">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" name="city" id="city">
                </div>
                <div class="col-md-12">
                    <label for="message" class="form-label">Message:</label>
                    <textarea type="text" class="form-control" name="message" id="message"></textarea>
                </div>
                
                @foreach ($errors->all() as $error )
                    <div class="alert alert-danger justify-content-center">
                        {{ $error }}
                    </div>
                @endforeach

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Send!</button>
                </div>
            </form>
        </div>
    </div>

@endsection
