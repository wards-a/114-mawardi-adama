@props(['breadcrumbs' => []])

@php
    $paths = explode('/', request()->path());
    if (end($paths) === 'edit') {
        array_splice($paths, -2, 1);
    }
@endphp

<nav {{ $attributes }}>
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="{{ $for === 'user' ? route('home.index') : route('dashboard.index') }}"
                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-sky-600 dark:text-gray-400 dark:hover:text-white">
                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                </svg>
                Home
            </a>
        </li>
        @if ($for === 'admin')
            @foreach ($paths as $path)
                <li>
                    <div class="flex items-center">
                        <x-svg class="rtl:rotate-180 w-4 h-4 text-gray-400 mx-1" fill="none">
                            <use xlink:href="/icons.svg#icon-angle-right" />
                        </x-svg>
                        <a href="{{ '/' . $path }}"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-sky-600 md:ms-2 dark:text-gray-400 dark:hover:text-white {{ $loop->last ? 'pointer-events-none' : '' }}">{{ ucwords($path) }}</a>
                    </div>
                </li>
            @endforeach
        @endif
        @if ($for === 'user')
            @foreach ($breadcrumbs as $crumb)
                <li>
                    <div class="flex items-center">
                        <x-svg class="rtl:rotate-180 w-4 h-4 text-gray-400 mx-1" fill="none">
                            <use xlink:href="/icons.svg#icon-angle-right" />
                        </x-svg>
                        <a href="{{ $crumb['url'] }}"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-sky-600 md:ms-2 dark:text-gray-400 dark:hover:text-white {{ $loop->last ? 'pointer-events-none' : '' }}">{{ $crumb['title'] }}</a>
                    </div>
                </li>
            @endforeach
        @endif
    </ol>
</nav>
