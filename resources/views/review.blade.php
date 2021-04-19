@extends('layout')
@extends('header')
@extends('footer')

@section('title')
    REVIEW PAGE
@endsection





@section('content')
<div class="review-content">
    <div class="review-button-desk">
        <div class="bg-light position-sticky p-4 rounded-3" style="width: 200px; top: 200px">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add your review!
            </button>
        </div>
    </div>

    @section('rvwModal')
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Your Review</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="width: 80%; margin: auto;">
                        <form action="/review" method="POST" enctype="multipart/form-data" style="width: 100%; align-items:center; margin: auto;">
                            {{ csrf_field() }}
                            <div class="form" style="display: flex; flex-direction:column; text-align:center; justify-content:center; margin: auto;">
                                <h3 style="color: #6d6d6d;">Do You like my page?</h3>
                                <hr>
                                <input style="text-align:center" type="text" name="name" placeholder="Your name ...">
                                @section('error')
                                    <div class="d-flex justify-content-center -w-25">
                                        @foreach ($errors->all() as $error )
                                            <p class="alert alert-danger justify-content-center">{{ $error }}</p>
                                        @endforeach
                                    </div>
                                @endsection
                                <br>
                                <select name="select" id="select" style=" text-align:center">
                                    <option value="yes">YES</option>
                                    <option value="no">NO</option>
                                </select>
                                <br>
                                <textarea id="subject" name="review" placeholder="Tell me WHYY.. Ain't nothing but a hea-..."></textarea>
                                <br>
                                <button type="submit" name="submit" id="submit" value="ok" style="text-align:center">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save review</button>
                    </div>
                </div>
            </div>
        </div>
        @endsection

    <div class="container review">
        @foreach ($posts as $post)
        <div class="single-review">
            <div class="card" style="box-shadow: 0 4px 6px 0 hsla(0, 0%, 0%, 0.3);">
                <div class="card-header" style=" font-weight: 700;">
                    From {{ $post->name }},
                </div>

                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p class="text-muted" style="font-weight: 400;">{{ $post->review }}</p>
                        <br>
                        <footer class="blockquote-footer text-right text-muted">Selected: {{ $post->selection }} <cite title="Source Title">• {{ $post->created_at }}</cite></footer>
                    </blockquote>
                </div>
            </div>
            <br><br>
        </div>
        @endforeach

        <div class="review-button-mobile">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add your review!
            </button>
        </div>
    </div>
    
    
</div>
@endsection

<!-- <div style="width:50%; text-align:center; color: honeydew;">
    <p>{{ $posts }}</p>
</div> -->