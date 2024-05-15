@props(['menu' => []])

@php
    $menu = array_merge($menu['text'], $menu['icon']);
@endphp

<div id="mobile-menu" class="hidden absolute w-full left-0 top-20 border-t-2 border-t-blue-400 p-2 bg-white nav-shrink-transition lg:hidden">
    <ul>
        @foreach ($menu as $item)
            <li><a href="{{ $item['path'] }}" class="block py-2 px-3.5 text-sm font-semibold opacity-60 hover:opacity-90 {{ $isActive($item['path']) }}">{{ $item['name'] }}</a></li>
        @endforeach
    </ul>
</div>