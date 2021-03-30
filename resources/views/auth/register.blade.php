<x-guest-layout>

    <div class="card w-25 text-center border-secondary d-flex justify-content-center m-auto">
        <div class="card-body">

            @if ($errors->any())
                <div>
                    <div>Something went wrong!</div>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="/register">
            {{ csrf_field() }}

                <div class="form-group text-left">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Username">
                </div>

                <div class="form-group text-left">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
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

</x-guest-layout>