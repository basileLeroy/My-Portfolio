@extends('layout')
@extends('header')
@extends('footer')


@section('title')
    Basile&Code
@endsection

@section('landing')
    <div class="about-me">
        <div class="card-me">
            <img src="{{url('/images/me.jpg')}}" alt="Image"/>
            <div class="card-body">
            <h3>Basile Leroy</h3>
            <p class="card-subtitle mb-2 text-muted text-start" style="font-weight: 700;">Web Developer</p>
            <p class="card-subtitle mb-2 text-muted text-start" style="font-weight: 400;">
                JavaScript, React.js, Node.js, <br/>
                PHP, Laravel, <br/>
                Typescript
            </p>
            <br>
            <p style="font-weight: 300;">
                Belgium, Ghent<br>
                Dutch, French, English
            </p>
            <div class="link-box"">
                <div class="links">
                    <a href="https://linkedin.com/in/basile-leroy" class=" px-2">
                        <svg class="linkedin w-25" fill="#6d6d6d" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="m437 0h-362c-41.355469 0-75 33.644531-75 75v362c0 41.355469 33.644531 75 75 75h362c41.355469 0 75-33.644531 75-75v-362c0-41.355469-33.644531-75-75-75zm45 437c0 24.8125-20.1875 45-45 45h-362c-24.8125 0-45-20.1875-45-45v-362c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45zm0 0"/>
                            <path d="m91 422h90v-212h-90zm30-182h30v152h-30zm0 0"/>
                            <path d="m331.085938 210c-.027344 0-.058594 0-.085938 0-10.371094 0-20.472656 1.734375-30 5.101562v-5.101562h-90v212h90v-107c0-8.269531 6.730469-15 15-15s15 6.730469 15 15v107h90v-117.3125c0-48.546875-39.382812-94.640625-89.914062-94.6875zm59.914062 182h-30v-77c0-24.8125-20.1875-45-45-45s-44.996094 20.1875-45 44.996094v77.003906h-30v-152h30v30.019531l24.007812-18.03125c10.441407-7.84375 22.886719-11.988281 35.992188-11.988281h.058594c31.929687.03125 59.941406 30.257812 59.941406 64.6875zm0 0"/>
                            <path d="m91 180h90v-90h-90zm30-60h30v30h-30zm0 0"/>
                        </svg>
                    </a>
                    <a href="https://github.com/basileLeroy" class=" px-2">
                        <svg class="github w-25" fill="#6d6d6d" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="m256 0c-140.699219 0-256 116.300781-256 257 0 139.882812 114.25 255 256 255 141.574219 0 256-114.945312 256-255 0-140.699219-115.300781-257-256-257zm45 477.5c-14.398438 3-29.699219 4.5-45 4.5s-30.601562-1.5-45-4.5v-70.199219c0-16.800781 4.5-22.800781 10.5-30.902343 3.054688-3.492188 4.898438-6.625 18.597656-27.296876l-23.097656-3.601562c-59.402344-8.699219-82.800781-39.601562-92.101562-63.601562-12-32.097657-5.699219-72.300782 15.902343-97.796876 3.300781-3.902343 6-10.503906 3.601563-17.402343-4.503906-13.800781-3.902344-35.699219-.902344-44.101563 15.90625 2.273438 32.261719 13.667969 45.902344 21.902344 6.285156 3.667969 9.582031 2.699219 12.597656 3 10.960938-2.28125 28.058594-7.800781 54.300781-7.800781 16.199219 0 33.300781 2.398437 50.101563 7.199219 3.003906-.070313 7.832031 2.484374 16.199218-2.398438 14.257813-8.6875 30.058594-19.691406 45.898438-21.902344 3 8.402344 3.601562 30.300782-.898438 44.101563-2.402343 6.898437.296876 13.5 3.601563 17.402343 21.597656 25.5 27.898437 65.699219 15.898437 97.796876-9.300781 24-32.699218 54.902343-92.101562 63.601562l-23.097656 3.601562c14.160156 21.367188 15.652344 23.929688 18.601562 27.296876 5.996094 8.101562 10.496094 14.101562 10.496094 30.902343zm30-8.699219v-61.5c0-17.101562-3.601562-28.5-8.402344-36.902343 45.601563-12.296876 78.003906-39.300782 92.402344-78 15.300781-40.796876 8.402344-89.398438-17.101562-123 4.503906-20.097657 4.503906-52.199219-6.296876-67.199219-4.800781-6.597657-11.402343-10.199219-19.800781-10.199219-.300781 0-.300781 0-.300781 0-23.261719 1.257812-41.570312 12.972656-61.199219 24.898438-18-4.800782-36.300781-7.199219-54.601562-7.199219-18.597657 0-37.199219 2.699219-53.695313 7.199219-20.664062-12.460938-38.796875-23.671876-62.703125-24.898438-7.5 0-14.101562 3.601562-18.902343 10.199219-10.796876 15-10.796876 47.101562-6.296876 67.199219-25.503906 33.601562-32.402343 82.5-17.101562 123 14.398438 38.699218 46.800781 65.703124 92.402344 78-3.722656 6.511718-6.667969 14.914062-7.828125 26.285156-9.210938 3.175781-17.199219 4.210937-24.628907 2.027344-7.835937-2.316407-13.941406-7.546876-19.246093-16.46875-11.914063-20.015626-32.207031-36.355469-55.3125-34.230469l2.636719 29.882812c10.699218-.980469 21.347656 10.339844 26.878906 19.671875 9.125 15.367188 21.417968 25.445313 36.546875 29.914063 11.230469 3.308593 21.496093 3.230469 32.550781.871093v40.449219c-87.300781-30.601562-151-114-151-211.800781 0-124.199219 101.800781-227 226-227s226 102.800781 226 227c0 97.800781-63.699219 181.199219-151 211.800781zm0 0"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
        

        <div class="card-me card-me-about">
            
            <div class="about-me-context">
                <div class="card-body">
                    <h3 class="card-title">About me</h3>
                    <br>
                    <p class="card-subtitle mb-2 text-start" style="font-weight:800;">Storytime</p>
                    <p class="card-text text-start text-muted" style="font-weight:500;">
                        A path that started with carpentry, and ended up in web development. <br>
                        When I had to step away from my previous profession and started looking for something new to do, <br>
                        I found a simple tutorial in how to <span style="color: brown; font-weight: 600;">make a discord chat bot</span> from scratch. <br>
                        Out of curiosity, I started making one and before I knew, I was swallowed by this world of programming. <br><br>

                        I immediately signed up for a course for <span style="color: brown; font-weight: 600;">full stack web development</span>, and now the real journey begins!
                    </p>
                    <br>
                    <p class="card-subtitle mb-2 text-start" style="font-weight: 800;">Motivation</p>
                    <p class="card-text text-start text-muted" style="font-weight:500;">
                        Not too long ago, I had close to no knowledge about programming. <br>
                        Now, I have mastered the ability to create amazing things in multiple languages! <br>
                        How far I have gotten up until now, I can only explain by a mix of 
                        <span style="color: brown; font-weight: 600;">interest, wanting to learn, motivation and dedication</span>. <br/><br/>
                        <i style="color:grey; font-weight: 400;">Sociable, teamplayer, client-oriented, .. Those are badges I wear with honor.</i>
                    </p>
                </div>
            </div>
            
        </div>
    </div>

@endsection