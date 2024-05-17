<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/x-icon">
    @stack('css')
    @vite('resources/css/user/app.css')
</head>
<body>
    @include('user.partials.layouts.header')

    <main class="relative top-16 m-0 p-0 lg:top-24">
        @yield('content')
    </main>

    @include('user.partials.layouts.footer')

    @stack('jquery')
    @stack('scripts')
</body>
</html>