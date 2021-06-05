<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="basile-and-code, basile and code, basile, basile Leroy, webdev, laravel, react, php, javascript, js, node, it, IT, coding, full-stack, fullstack, 
        full stack, web development, webdevelopment, ghent, belgium, belgie, België, website maintenance, maintenance, building, websites, 
        build website, building websites, Gent, web ontwikkeling, website bouwen, webdev portfolio, web dev portfolio, web development portfolio" >

        <meta property="og:image" content="{{ asset('images/meta_card.png') }}"/>
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <meta property="og:title" content="Basile&Code"/>
        <meta property="og:description" content="Hi, I am Basile. A junior full stack web dev. And this is my portfolio."/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://basile-and-code.com"/>
        <meta property="fb:app_id" content="4337559846254195" />


        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Basile&Code">
        <meta name="twitter:description" content="Hi, I am Basile. A junior full stack web dev. And this is my portfolio.">
        <meta name="twitter:image" content="{{ asset('images/meta_card.png') }}">

        <title>@yield('title', 'Basile&Code')</title>

        <link rel="canonical" href="https://www.basile-and-code.com/" />

        <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        @yield('header')
        @yield('userHeader')
            <div class="container-body">
                @yield('intro')
                @yield('landing')
                @yield('content')
                @yield('error')
                @yield('review')
            </div>
        @yield('rvwModal')
        @yield('footer')
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-185794040-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-185794040-2');
        </script>

    </body>
</html>
