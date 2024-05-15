<header class="navbar fixed top-0 w-full z-50 bg-white shadow-md h-20 nav-shrink-transition">
    <div class="flex items-center justify-between w-4/5 h-full mx-auto relative">

        {{-- Logo and company name --}}
        <x-user.header.logo :logo="$logo" class="logo flex items-center justify-start pb-2" />
        
        {{-- Navbar --}}
        <x-user.header.navbar :menu="$menu" class="nav-menu hidden invisible lg:block lg:flex lg:ml-auto lg:visible" />

        {{-- Mobile nav --}}
        <x-user.header.mobile-nav :menu="$menu" id="mobile-nav" class="flex items-center justify-end  lg:hidden lg:invisible">
            {{-- Hamburger menu --}}
            <button type="button" id="hamburger" class="text-gray-700">
                <span id="hamburger-icon">
                    <svg class="w-7 h-7" aria-hidden="true" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <use xlink:href="icons.svg#icon-bars"></use>
                    </svg>                      
                </span>
                <span id="close-icon" class="hidden" >
                    <svg class="w-7 h-7" aria-hidden="true" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <use xlink:href="icons.svg#icon-close"></use>
                    </svg>                      
                </span>
            </button>
        </x-user.header.mobile-nav>
    </div>
</header>
    
@vite('resources/js/user/includes/header.js')