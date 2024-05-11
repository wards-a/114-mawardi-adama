<header class="fixed bg-white border-b-2 top-0 w-full">
    <div class="flex justify-between w-4/5 mx-auto h-20 relative">

        {{-- Logo and company name --}}
        <figure class="flex items-center justify-start pb-2">
            <img class="sm:w-12" src="{{ asset('logo.png') }}" alt="goodiebagcustom">
            <figcaption class="text-sm font-semibold self-center pt-3 sm:text-2xl font-bold md:pt-4">Goodiebagcustom</figcaption>
        </figure>
        
        <nav class="hidden lg:block lg:flex ml-auto">
            <ul class="flex items-center justify-end">
                <li class="pr-5"><a href="#" class="opacity-60 hover:opacity-90 font-semibold">Beranda</a></li>
                <li class="pr-5"><a href="#" class="opacity-60 hover:opacity-90 font-semibold">Produk</a></li>
                <li class="pr-5"><a href="#" class="opacity-60 hover:opacity-90 font-semibold">Tentang Kami</a></li>
                <li class="pr-5"><a href="#" class="opacity-60 hover:opacity-90 font-semibold">Kontak Kami</a></li>
            </ul>
            <button id="button-order" type="button" class="btn-order flex items-center max-h-6 relative top-7 mx-6 opacity-70 hover:opacity-90">
                <svg id="shopping-bag-icon" class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"/>
                </svg>
            </button>
            <button id="button-order" type="button" class="btn-order flex items-center max-h-6 relative top-7 opacity-70 hover:opacity-90">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                </svg>                                   
            </button>
        </nav>

        {{-- Mobile menu --}}
        <div id="mobile-nav" class="flex items-center justify-end">
            {{-- Hamburger menu button --}}
            <button type="button" id="hamburger" class="text-gray-700 lg:hidden">
                <span id="hamburger-icon">
                    <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
                    </svg>                      
                </span>
                {{-- Close button --}}
                <span id="close-icon" class="hidden">
                    <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                    </svg>                      
                </span>
        </button>
            
        {{-- Mobile menu --}}
        <ul id="mobile-menu" class="hidden absolute w-full left-0 top-20 border-t-2 border-t-blue-400 p-4 lg:hidden lg:flex lg:items-center">
            <li><a href="#" class="block py-2 px-3.5 font-semibold opacity-60">Beranda</a></li>
            <li><a href="#" class="block py-2 px-3.5 font-semibold opacity-60">Produk</a></li>
            <li><a href="#" class="block py-2 px-3.5 font-semibold opacity-60">Tentang Kami</a></li>
            <li><a href="#" class="block py-2 px-3.5 pb-4 border-b font-semibold opacity-60">Kontak Kami</a></li>
            <li><a href="#" class="block py-2 px-3.5 pt-4 font-semibold opacity-60">Buat Pesanan</a></li>
            <li><a href="#" class="block py-2 px-3.5 font-semibold opacity-60">Masuk</a></li>
        </ul>
        </div>
    </div>
</header>
    
@vite('resources/js/user/includes/header.js')