@php
require_once app_path('helpers/active_menu.php');
@endphp

@if (!isset($menu))
    @php
        $menu = [];
    @endphp
@endif

<header class="{{ !$menu ? 'static' : 'fixed' }} navbar top-0 w-full z-30 bg-white shadow-md h-14 transition-s-p lg:h-16">
    <div class="flex items-center justify-between w-11/12 h-full mx-auto relative">
        {{-- Logo and company name --}}
        <figure class="logo flex items-center justify-start lg:pb-2">
            <img class="w-8 lg:w-10 transition-s-p" src="{{ asset('logo.png') }}" alt="goodiebagcustom">
            <figcaption class="text-base font-semibold self-center pt-2.5 transition-s-p lg:pt-3 lg:text-xl">Goodiebagcustom</figcaption>
        </figure>
        
        {{-- Navbar --}}
        <nav class="nav-menu hidden h-full lg:block lg:flex lg:ml-auto">
            <ul class="flex items-center gap-x-4">
                {{-- Loop menu type text  --}}
                @foreach ($menu as $item)
                    @if ($item['type'] == 'text')                    
                        <li class="containerMenu{{ $item['name'] }} menu-text h-full content-center">
                            {{-- Parent Menu --}}
                            <a href="{{ $item['path'] }}" class="parentMenu{{ $item['name'] }} flex items-center gap-x-1 text-nav-header transition-s-p transition-colors duration-300 ease-in-out {{ active_menu($item['path']) }}" aria-haspopup="true" aria-expanded="false">
                                {{ $item['name'] }}
                                {{-- Check if it has a submenu then add an icon--}}
                                @if (isset($item['category']))
                                    <x-svg class="w-3 h-3 flex-none opacity-60 transition-s-p" fill="none">
                                        <use xlink:href="/icons.svg#icon-angle-down" />
                                    </x-svg>
                                @endif
                            </a>
        
                            {{-- Submenus --}}
                            @if (isset($item['category']))                            
                                <div class="subMenu{{ $item['name'] }} hidden absolute top-16 w-full bg-white transition-s-p" role="menu" aria-orientation="vertical" aria-labelledby="menuButton">
                                    {{-- Loop submenus --}}
                                    @foreach($item['category'] as $category)
                                    <a href="{{ $category['path'] }}" class="block py-2.5 px-3.5 font-normal text-nav-header transition-s-p transition-colors duration-300 ease-in-out {{ submenu_active($category['path']) }}" role="menuitem">{{ $category['name'] }}</a>
                                    @endforeach                                    
                                </div>
                            @endif
                        </li>
                    @endif
                @endforeach
            </ul>
        </nav>

        {{-- Menu Order --}}
        <div class="w-6 h-6 content-center lg:ml-4">
            @foreach ($menu as $item)
                @if ($item['type'] === 'icon' && $item['path'] === '/cart')
                <a href="{{ $item['path'] }}" class="text-nav-header transition-s-p transition-colors duration-300 ease-in-out {{ '/'.request()->path() === $item['path'] ? 'menu-active' : '' }}" aria-expanded="true" aria-haspopup="true">
                    <x-svg class="w-6 h-6 text-nav-header transition-s-p" fill="none">
                        <use xlink:href="/{{ $item['src'] }}"></use>
                    </x-svg>
                </a>
                @endif
            @endforeach
        </div>

        {{-- Mobile nav --}}
        <div id="mobile-nav" class="{{ !$menu ? 'invisible' : '' }} flex items-center order-first lg:hidden">
            {{-- Hamburger menu --}}
            <button type="button" id="hamburger" class="text-gray-700">
                <span id="hamburger-icon">
                    <x-svg class="w-6 h-6">
                        <use xlink:href="/icons.svg#icon-bars"></use>
                    </x-svg>                      
                </span>
                <span id="close-icon" class="hidden" >
                    <x-svg class="w-6 h-6">
                        <use xlink:href="/icons.svg#icon-close"></use>
                    </x-svg>                      
                </span>
            </button>

            {{-- Mobile Menu --}}
            <div id="mobile-menu" class="hidden absolute w-full left-0 top-12 border-t-2 border-t-blue-400 p-2 bg-white transition-s-p lg:hidden">
                <ul>
                    @foreach ($menu as $item)
                        @if ($item['type'] === 'text')
                            <li class="containerMenu{{ $item['name'] }} border-b">
                                {{-- Parent Menu --}}
                                <a href="{{ $item['path'] }}" class="parentMenu{{ $item['name'] }} flex items-center justify-between p-2 text-xs text-nav-header {{ request()->is($item['path']) ? 'menu-active' : '' }}">
                                    {{ $item['name'] }}
                                    {{-- Check if it has a submenu then add an icon--}}
                                    @if (isset($item['category']))
                                    <x-svg class="w-3.5 h-3.5 flex-none opacity-90 transition-s-p" fill="none">
                                        <use xlink:href="/icons.svg#icon-angle-right" />
                                    </x-svg>
                                    @endif
                                </a>

                                {{-- Submenus --}}
                                @if (isset($item['category']))
                                    <div class="subMenu{{ $item['name'] }} hidden w-full bg-white transition-s-p" role="menu" aria-orientation="vertical" aria-labelledby="menuButton">
                                        {{-- Loop submenus --}}
                                        @foreach($item['category'] as $category)
                                            <a href="{{ $category['path'] }}" class="block py-1 pl-3.5 font-normal text-xs text-nav-header transition-s-p transition-colors duration-300 ease-in-out" role="menuitem">{{ $category['name'] }}</a>
                                        @endforeach
                                    </div>
                                @endif
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</header>