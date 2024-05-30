@props([
    'submenus' => [],
])

<li class="containerMenu{{ $name }} border-b lg:border-0 lg:h-full lg:content-center">
    {{-- Parent Menu --}}
    <a href="{{ $path !== '/product' ? $path : '#' }}"
        class="parentMenu{{ $name }} flex items-center justify-between p-2 gap-x-1 text-nav-header transition-s-p transition-colors duration-300 ease-in-out lg:p-0 {{ active_menu($path) }}"
        aria-haspopup="true" aria-expanded="false">
        {{ $name }}
        {{-- Check if it has a submenu then add an icon --}}
        @if ($submenus)
            <x-svg class="hidden w-3 h-3 flex-none opacity-60 transition-s-p lg:block" fill="none">
                <use xlink:href="/icons.svg#icon-angle-down" />
            </x-svg>
            <x-svg class="mobile-angle w-3.5 h-3.5 flex-none opacity-90 transition-s-p lg:hidden" fill="none">
                <use xlink:href="/icons.svg#icon-angle-right" />
            </x-svg>
        @endif
    </a>

    {{-- Submenus --}}
    @if ($submenus)
        <div class="subMenu{{ $name }} hidden w-full bg-white transition-s-p lg:absolute lg:top-16" role="menu"
            aria-orientation="vertical" aria-labelledby="menuButton">
            {{-- Loop submenus --}}
            @foreach ($submenus as $submenu)
                <a href="{{ $path.$submenu->path.'/'.strtolower($submenu->name) }}"
                    class="block py-1 pl-3.5 font-normal text-nav-header transition-s-p transition-colors duration-300 ease-in-out lg:py-2.5 lg:px-3.5 {{ submenu_active($submenu->name) }}"
                    role="menuitem">{{ $submenu->name }}</a>
            @endforeach
        </div>
    @endif
</li>
