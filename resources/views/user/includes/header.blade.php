<header class="fixed bg-white border-b-2 top-0 w-full">
    <div class="flex justify-between w-4/5 mx-auto h-20 relative">

        {{-- Logo and company name --}}
        <figure class="flex items-center justify-start sm">
            <img class="sm:w-12" src="{{ asset('logo.png') }}" alt="goodiebagcustom">
            <figcaption class="text-sm font-semibold self-center pt-3 sm:text-2xl font-bold md:pt-4">Goodiebagcustom</figcaption>
        </figure>
        
        <nav class="hidden lg:block lg:flex ml-auto">
            <ul class="flex items-center justify-end">
                <li class="pr-5"><a href="#" class="opacity-60 font-semibold">Beranda</a></li>
                <li class="pr-5"><a href="#" class="opacity-60 font-semibold">Produk</a></li>
                <li class="pr-5"><a href="#" class="opacity-60 font-semibold">Tentang Kami</a></li>
                <li class="pr-5"><a href="#" class="opacity-60 font-semibold">Kontak Kami</a></li>
            </ul>
        </nav>

        {{-- Mobile menu --}}
        <div id="mobile-nav" class="flex items-center justify-end">
            {{-- Hamburger menu button --}}
            <button type="button" id="hamburger" class="text-gray-700 lg:hidden">
                <span id="hamburger-icon">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </span>
            {{-- Close button --}}
            <span id="close-icon" class="hidden">
                <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </span>
        </button>
            
        {{-- Mobile menu --}}
        <ul id="mobile-menu" class="hidden absolute w-full left-0 top-20 border-t-2 border-t-blue-400 p-4 lg:hidden lg:flex lg:items-center">
            <li><a href="#" class="block py-2.5 px-3.5 border-b font-semibold opacity-60">Beranda</a></li>
            <li><a href="#" class="block py-2.5 px-3.5 border-b font-semibold opacity-60">Produk</a></li>
            <li><a href="#" class="block py-2.5 px-3.5 border-b font-semibold opacity-60">Tentang Kami</a></li>
            <li><a href="#" class="block py-2.5 px-3.5 border-b font-semibold opacity-60">Kontak Kami</a></li>
        </ul>
        </div>
    </div>
</header>
    
@vite('resources/js/user/includes/header.js')