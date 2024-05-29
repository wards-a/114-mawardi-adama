<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Not Found - {{ config('app.name') }}</title>
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/x-icon">
    @vite(['resources/css/admin/app.css', 'resources/js/app.js'])
</head>

<body>
    <main class="h-screen">
        <section class="bg-white h-full dark:bg-gray-900">
            <div class="absolute left-1/4 top-20 py-8 px-4 max-w-screen-xl lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center">
                    <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-sky-600 dark:text-sky-500">
                        404</h1>
                    <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-white">
                        Something's
                        missing.</p>
                    <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">Sorry, we can't find that page.
                        You'll find lots to explore on the home page. </p>
                    <a href="{{ route('home.index') }}"
                        class="inline-flex text-white bg-sky-600 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-sky-900 my-4">Back
                        to Homepage</a>
                </div>
            </div>
        </section>
    </main>
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</body>

</html>
