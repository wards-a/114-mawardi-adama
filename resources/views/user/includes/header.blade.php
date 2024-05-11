<header class="fixed bg-white border-b-2 top-0 w-full z-50">
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
                <svg class="w-6 h-6" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <use xlink:href="icons.svg#icon-shopping-bag"></use>
                </svg>
            </button>
            <button id="button-order" type="button" class="btn-order flex items-center max-h-6 relative top-7 opacity-70 hover:opacity-90">
                <svg class="w-6 h-6" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <use xlink:href="icons.svg#icon-user-circle"></use>
                </svg>                                   
            </button>
        </nav>

        {{-- Mobile menu --}}
        <div id="mobile-nav" class="flex items-center justify-end">
            {{-- Hamburger menu button --}}
            <button type="button" id="hamburger" class="text-gray-700 lg:hidden">
                <span id="hamburger-icon">
                    <svg class="w-7 h-7" aria-hidden="true" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <use xlink:href="icons.svg#icon-bars"></use>
                    </svg>                      
                </span>
                {{-- Close button --}}
                <span id="close-icon" class="hidden" >
                    <svg class="w-7 h-7" aria-hidden="true" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <use xlink:href="icons.svg#icon-close"></use>
                    </svg>                      
                </span>
        </button>
            
        {{-- Mobile menu --}}
        <ul id="mobile-menu" class="hidden absolute w-full left-0 top-20 border-t-2 border-t-blue-400 p-4 bg-white lg:hidden lg:flex lg:items-center">
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