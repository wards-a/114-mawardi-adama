@php
    require_once app_path('helpers/active_menu.php');
@endphp

<header class="fixed navbar top-0 w-full z-30 bg-white shadow-md h-14 transition-s-p lg:h-16">
    <div class="flex items-center justify-between w-11/12 h-full mx-auto relative">
        {{-- Logo and company name --}}
        <figure class="logo flex items-center justify-start lg:pb-2">
            <img class="w-8 lg:w-10 transition-s-p" src="{{ asset('logo.png') }}" alt="goodiebagcustom">
            <figcaption class="text-base font-semibold self-center pt-2.5 transition-s-p lg:pt-3 lg:text-xl">
                Goodiebagcustom</figcaption>
        </figure>

        {{-- remove navigation on login, register, forgot password page --}}
        @if (!in_array(Route::currentRouteName(), ['login', 'register', 'forgot-password']))
            {{-- Menu Search --}}
            <div class="content-center lg:ml-20">
                <form action="{{ route('product.search') }}" method="GET" class="form-search hidden relative w-full lg:block">
                    <input name="keywords" class="text-sm bg-slate-200 leading-5 border-white rounded-full w-96 transition-s-p focus:border-0 focus:ring-0 focus:outline-0" type="text" placeholder="Cari Produk">
                    <span class="absolute icon-search">
                        <x-svg class="absolute w-5 h-5 text-slate-500 right-2 top-2 transition-s-p" fill="none">
                            <use xlink:href="/icons.svg#icon-search"></use>
                        </x-svg>
                    </span>
                </form>
            </div>

            {{-- Navbar --}}
            <x-navigation.navbar-user :submenus="$categories" class="nav-menu hidden h-full lg:block lg:flex lg:ml-4" />

            {{-- Menu Order --}}
            <div class="w-6 h-6 content-center lg:-ml-6">
                <a href="{{ route('cart.show', auth()->check() ? encrypt(auth()->user()->id) : '') }}"
                    class="text-nav-header transition-s-p transition-colors duration-300 ease-in-out {{ str_contains('/' . request()->path(), '/cart') ? 'menu-active' : '' }}"
                    aria-expanded="true" aria-haspopup="true">
                    <x-svg class="w-6 h-6 text-nav-header transition-s-p" fill="none">
                        <use xlink:href="/icons.svg#icon-shopping-bag"></use>
                    </x-svg>
                </a>
            </div>

            {{-- Mobile nav --}}
            <div id="mobile-nav" class="flex items-center order-first lg:hidden">
                {{-- Hamburger menu --}}
                <button type="button" id="hamburger" class="text-gray-700">
                    <span id="hamburger-icon">
                        <x-svg class="w-6 h-6">
                            <use xlink:href="/icons.svg#icon-bars"></use>
                        </x-svg>
                    </span>
                    <span id="close-icon" class="hidden">
                        <x-svg class="w-6 h-6">
                            <use xlink:href="/icons.svg#icon-close"></use>
                        </x-svg>
                    </span>
                </button>

                {{-- Mobile Menu --}}
                <x-navigation.navbar-user :submenus="$categories" id="mobile-menu"
                    class="hidden absolute w-full left-0 top-14 border-t-2 border-t-blue-400 p-2 bg-white transition-s-p lg:hidden" />
        @endif
    </div>
</header>
