<section id="highlight-product">
    <div class="w-full max-w-6xl mb-6 pb-2.5 border-b lg:mb-8 lg:mx-auto">
        <div class="flex items-center justify-between w-full mb-3.5 lg:mb-5">
            <h2 class="text-base font-medium ml-2.5 lg:text-2xl">Rekomendasi Untukmu</h2>
            <a href="{{ route('product.tag', 'recommended') }}" class="mr-2.5 text-sm font-medium lg:font-semibold text-sky-700">Lihat Semua</a>
        </div>
        <div class="product-carousel mb-5 pl-1.5 lg:pl-6">
            <div class="slick-slide w-full h-80 max-w-44 mx-1 mb-6 pl-2.5">
                <a href="#" class="block h-72 max-w-40 shadow-lg rounded-lg">
                    <img class="mx-auto h-44" src="{{ asset('product-img/recommended/goodiebag-blacucream.jpg') }}" alt="">
                    <div class="flex flex-col p-2.5">
                        <p class="text-sm line-clamp-2">Blacu Cream</p>
                        <div>
                            <p class="text-sky-700 font-semibold mb-1">Rp 15.000</p>
                            <p class="text-xs text-gray-500 line-through italic">Rp 17.000</p>
                        </div>
                    </div>
                </a>
            </div>
            {{-- <div class="slick-slide w-full h-80 max-w-44 mx-1 pl-2.5">
                <a href="#" class="block h-72 max-w-40 shadow-lg rounded-lg">
                    <img class="mx-auto h-44" src="{{ asset('product-img/recommended/goodiebag-blacuputih-polyster.jpg') }}" alt="">
                    <div class="flex flex-col p-2.5">
                        <p class="text-sm line-clamp-2">Blacu Putih Polyster</p>
                        <div>
                            <p class="text-sky-700 font-semibold mb-1">Rp 15.000</p>
                            <p class="text-xs text-gray-500 line-through italic">Rp 17.000</p>
                        </div>
                    </div>
                </a>
            </div> --}}
            {{-- <div class="slick-slide w-full h-80 max-w-44 mx-1 pl-2.5">
                <a href="#" class="block h-72 max-w-40 shadow-lg rounded-lg">
                    <img class="mx-auto h-44" src="{{ asset('product-img/recommended/goodiebag-dinier-abu.jpg') }}" alt="">
                    <div class="flex flex-col p-2.5">
                        <p class="text-sm line-clamp-2">Dinier Abu</p>
                        <div>
                            <p class="text-sky-700 font-semibold mb-1">Rp 15.000</p>
                            <p class="text-xs text-gray-500 line-through italic">Rp 17.000</p>
                        </div>
                    </div>
                </a>
            </div> --}}
            {{-- <div class="slick-slide w-full h-80 max-w-44 mx-1 pl-2.5">
                <a href="#" class="block h-72 max-w-40 shadow-lg rounded-lg">
                    <img class="mx-auto h-44" src="{{ asset('product-img/recommended/goodiebag-dinier-biru.jpg') }}" alt="">
                    <div class="flex flex-col p-2.5">
                        <p class="text-sm line-clamp-2">Dinier Biru</p>
                        <div>
                            <p class="text-sky-700 font-semibold mb-1">Rp 15.000</p>
                            <p class="text-xs text-gray-500 line-through italic">Rp 17.000</p>
                        </div>
                    </div>
                </a>
            </div> --}}
            {{-- <div class="slick-slide w-full h-80 max-w-44 mx-1 pl-2.5">
                <a href="#" class="block h-72 max-w-40 shadow-lg rounded-lg">
                    <img class="mx-auto h-44" src="{{ asset('product-img/recommended/goodiebag-dinier-biru2.jpg') }}" alt="">
                    <div class="flex flex-col p-2.5">
                        <p class="text-sm line-clamp-2">Dinier Biru 2</p>
                        <div>
                            <p class="text-sky-700 font-semibold mb-1">Rp 15.000</p>

                            <p class="text-xs text-gray-500 line-through italic">Rp 17.000</p>
                        </div>
                    </div>
                </a>
            </div> --}}
            <div class="slick-slide w-full h-80 max-w-44 mx-1 pl-2.5">
                <a href="#" class="block h-72 max-w-40 shadow-lg rounded-lg">
                    <img class="mx-auto h-44" src="{{ asset('product-img/recommended/goodiebag-dinier-hijau.jpg') }}" alt="">
                    <div class="flex flex-col p-2.5">
                        <p class="text-sm line-clamp-2">Dinier Hijau</p>
                        <div>
                            <p class="text-sky-700 font-semibold mb-1">Rp 15.000</p>
                            <p class="text-xs text-gray-500 line-through italic">Rp 17.000</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="slick-slide w-full h-80 max-w-44 mx-1 pl-2.5">
                <a href="#" class="block h-72 max-w-40 shadow-lg rounded-lg">
                    <img class="mx-auto h-44" src="{{ asset('product-img/recommended/goodiebag-sphdl-birumuda.jpg') }}" alt="">
                    <div class="flex flex-col p-2.5">
                        <p class="text-sm line-clamp-2">Spunbond HDL Biru Muda</p>
                        <div>
                            <p class="text-sky-700 font-semibold mb-1">Rp 15.000</p>
                            <p class="text-xs text-gray-500 line-through italic">Rp 17.000</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="slick-slide w-full h-80 max-w-44 mx-1 pl-2.5">
                <a href="#" class="block h-72 max-w-40 shadow-lg rounded-lg">
                    <img class="mx-auto h-44" src="{{ asset('product-img/recommended/goodiebag-sphdlbox-merah.jpg') }}" alt="">
                    <div class="flex flex-col p-2.5">
                        <p class="text-sm line-clamp-2">Spunbond HDL Box Merah</p>
                        <div>
                            <p class="text-sky-700 font-semibold mb-1">Rp 15.000</p>
                            <p class="text-xs text-gray-500 line-through italic">Rp 17.000</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="slick-slide w-full h-80 max-w-44 mx-1 pl-2.5">
                <a href="#" class="block h-72 max-w-40 shadow-lg rounded-lg">
                    <img class="mx-auto h-44" src="{{ asset('product-img/recommended/goodiebag-spoval-hitam.jpg') }}" alt="">
                    <div class="flex flex-col p-2.5">
                        <p class="text-sm line-clamp-2">Spunbond Oval Hitam</p>
                        <div>
                            <p class="text-sky-700 font-semibold mb-1">Rp 15.000</p>
                            <p class="text-xs text-gray-500 line-through italic">Rp 17.000</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="slick-slide w-full h-80 max-w-44 mx-1 pl-2.5">
                <a href="#" class="block h-72 max-w-40 shadow-lg rounded-lg">
                    <img class="mx-auto h-44" src="{{ asset('product-img/recommended/pouch-blacuputih-polyster.jpg') }}" alt="">
                    <div class="flex flex-col p-2.5">
                        <p class="text-sm line-clamp-2">Blacu Putih Polyster</p>
                        <div>
                            <p class="text-sky-700 font-semibold mb-1">Rp 7.000</p>
                            <p class="text-xs text-gray-500 line-through italic"></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
