<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/x-icon">
    {{-- <script src="https://kit.fontawesome.com/a5a754a1f5.js" crossorigin="anonymous"></script> --}}
    @vite('resources/css/app.css')
</head>
<body class="box-border">
    @include('user.includes.header')

    <main>
        @yield('content')
    </main>

    @include('user.includes.footer')
</body>
</html>