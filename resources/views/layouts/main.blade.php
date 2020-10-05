<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>laravel-relations</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }} ">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>

        @include('partials.header')

        <main>

            @yield('content')
        </main>

        @include('partials.footer')

    </body>
</html>
