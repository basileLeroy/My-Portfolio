@extends('layout')
@extends('header')
@extends('footer')

@section('intro')
    <div class="welcome" style="color:honeydew; width: 40vw; padding-left:50px; margin-top: 50px">
        <h1>WELCOME!</h1>
        <br><br>
        <p>Welcome to my page! here you will find the home page, or welcome page where I used blades to import sections into specific pages of the webiste. like this one.</p>
    </div> 
@endsection


@section('content')
    <form action="" method="POST">
        <div class="form" style="display: flex; flex-direction:column; justify-content:center; width: 40%; margin: auto; margin-top: 100px; margin-bottom: 160px">
            <h3 style="color: honeydew;">Do You like my page?</h3>
            <select name="select" id="select" style="width:50%">
                <option value="yes">YES</option>
                <option value="no">NO</option>
                <option value="undecided">UNDECIDED</option>
            </select>
            <br>
            <button type="submit" name="submit" id="submit" style="width:50%">Submit</button>
        </div>
    </form>
@endsection


