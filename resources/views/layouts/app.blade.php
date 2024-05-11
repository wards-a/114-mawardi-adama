<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>
<body class="box-border">
    @include('user.includes.header')

    <div class="content">
        @yield('content')
    </div>

    @include('user.includes.footer')
</body>
</html>