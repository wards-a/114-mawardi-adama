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
    @vite('resources/js/user/includes/header.js')
</head>
<body>
    @include('user.partials.layouts.header')

    <main class="relative top-20 m-0 p-0 lg:top-24">
        @yield('content')
    </main>

    @if ((!in_array(Route::currentRouteName(), ['user.login', 'user.register', 'user.forgot_password'])))
    <dialog id="dialogFormLogin" class="w-96 fixed z-50 top-24 pt-10 backdrop-brightness-50" aria-labelledby="formDialogLogin" aria-hidden="true">
        <button id="closeDialog" class="absolute right-1.5 top-1.5 text-slate-500 hover:text-slate-700">
            <x-svg class="w-6 h-6">
                <use xlink:href="icons.svg#icon-close-circle">
            </x-svg>
        </button>
        @include('user.partials.pages.authentication.form_login')
    </dialog>
    <div id="overlay" class="hidden fixed top-0 left-0 w-full h-full bg-gray-900 opacity-50 z-40"></div>

    @include('user.partials.layouts.footer')
    @endif

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    @stack('scripts')
    @vite('resources/js/user/form.js')
    @vite('resources/js/user/dialog_login.js')
</body>
</html>