@extends('layout')
@extends('header')
@extends('footer')

@section('title')
    REVIEW PAGE
@endsection


@section('intro')
<div class="welcome" style="color:honeydew; width: 40vw; padding-left:50px; padding-top: 20px">
    <h1>HELLO WORLD!</h1>
    <br>
    <p>
        Here are some of the fines reviews! <br>
        
    </p>
</div> 
@endsection


@section('content')

<div class="create-review">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add your review!
    </button>
</div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/review" method="POST" enctype="multipart/form-data">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container review">
        @foreach ($posts as $post)
        <div class="card w-50 p-3 start-50 translate-middle">
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
    </div>
@endsection

<!-- <div style="width:50%; text-align:center; color: honeydew;">
    <p>{{ $posts }}</p>
</div> -->