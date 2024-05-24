<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/x-icon">
    @vite(['resources/css/admin/app.css','resources/js/app.js'])
    @stack('css')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
</head>
<body>
    @include('admin.partials.layouts.header')
    @include('admin.partials.layouts.sidebar')
    <main class="p-4 md:ml-64 dark:bg-slate-900  mt-14 min-h-screen">
        @yield('breadcrumb')
        @yield('content')
    </main>

    @include('admin.partials.layouts.footer')

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    @stack('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    @vite('resources/js/admin/dark-mode.js')
</body>
</html>