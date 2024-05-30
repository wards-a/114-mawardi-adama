<section id="product_detail" class="min-h-screen">
    <div class="w-11/12 mx-auto mb-5">
        <h1 class="text-lg lg:text-xl">Daftar Belanja Anda</h1>
    </div>
    <div class="flex flex-wrap justify-between w-11/12 mx-auto">
        <div class="flex-1 mr-0 md:mr-10 xl:mr-12">
            <div id="product_list_chart" class="flex flex-col">
                <div class="product-1 relative flex flex-wrap justify-between shadow-lg p-2 md:p-4 md:pt-8 lg:pt-5">
                    <div class="flex items-start gap-4 basis-full lg:basis-1/2">
                        <figure class="shrink-0">
                            <img class="h-20 lg:h-36" src="{{ asset('product-img/recommended/goodiebag-blacucream.jpg') }}" alt="">
                        </figure>
                        <div class="space-y-1">
                            <h1 class="text-sm sm:text-base text-slate-800">Blacu Cream</h1>
                            <p class="text-xs sm:text-sm text-slate-600">30x40 cm</p>
                            <div class=>
                                <p class="text-xs text-slate-400 line-through italic">Rp 17.000</p>
                                <p class="text-sm font-medium sm:font-semibold text-sky-700">Rp 15.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-end justify-end gap-2 basis-full lg:gap-4 lg:basis-1/2">
                        <div class="container-form">
                            <form id="productOrderForm" action="/order" method="POST">
                                @csrf
                                <input type="hidden" id="product_id" name="product_id" value="1">
                                <fieldset class="flex justify-between">
                                    <button id="btn-subtract-quantity" type="button" class="text-slate-500" disabled>
                                        <x-svg class="w-4 h-4" fill="currentColor">
                                            <use xlink:href="icons.svg#icon-circle-minus" />
                                        </x-svg>
                                    </button>
                                    <input id="product_quantity" type="number" class="w-12 font-bold text-sm text-center text-slate-700 border-0 focus:ring-0" name="quantity" value="1">
                                    <button id="btn-add-quantity" type="button" class="text-slate-700">
                                        <x-svg class="w-4 h-4" fill="currentColor">
                                            <use xlink:href="icons.svg#icon-circle-plus" />
                                        </x-svg>
                                    </button>
                                </fieldset>
                            </form>
                        </div>
                        <div id="price-calculation" class="flex items-end justify-between w-full lg:w-52">
                            <p class="font-medium text-slate-600 sm:font-semibold">Total</p>
                            <p id="total-price-1" class="font-medium text-sky-800 sm:text-lg">Rp 15.000</p>
                        </div>                        
                    </div>
                    <button type="button" class="absolute right-2 top-2 text-slate-500 hover:text-slate-800">
                        <x-svg class="w-5 h-5" fill="currentColor">
                            <use xlink:href="icons.svg#icon-trash-bin" />
                        </x-svg>
                    </button>
                </div>
            </div>
        </div>
        <div id="shop-option" class="w-full z-20 fixed bottom-0 left-0 min-h-min bg-white drop-shadow-lg rounded md:sticky md:w-fit md:max-h-60 md:basis-2/5 md:top-20 md:mb-9 lg:basis-1/3">
            <div id="shrink-quantity-section" class="w-full bg-sky-100 py-px text-center text-slate-700 md:hidden">
                <x-svg class="w-5 h-5 inline-block" fill="none">
                    <use xlink:href="icons.svg#icon-angle-down" />
                </x-svg>
            </div>
            <div id="quantity-section" class="px-5 space-y-3 mb-3 lg:space-y-5 lg:mb-5">
                <div id="quantity-product" class="flex flex-wrap justify-between items-center border-b py-2 space-y-1 lg:block lg:space-y-3">
                    <p class="basis-full text-center text-slate-700 shrink-0 lg:font-semibold md:text-left">Ringkasan Belanja</p>
                    <div id="order-items-total" class="basis-full">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-sm font-medium text-slate-600">Blacu Cream</p>
                                <p class="text-xs text-slate-500">30x40 cm</p>
                            </div>
                            <p class="text-sm font-medium text-slate-600">1</p>
                            <p class="text-sm font-semibold text-slate-600">Rp 15.000</p>
                        </div>
                    </div>
                </div>
                <div id="price_calculation" class="flex justify-between">
                    <p class="font-semibold text-slate-600">Total</p>
                    <p id="total_price" class="font-semibold text-sky-800">Rp 15.000</p>
                </div>
            </div>
            <div id="order-buttons-section" class="flex justify-between font-medium pb-2 px-5 md:flex-wrap md:gap-y-2 md:relative md:pb-3">
                <div id=whatsapp-chat class="group text-center basis-5/12 border-2 border-sky-600 py-1 rounded-3xl active:bg-sky-600 md:py-0 md:basis-full">
                    <a href="#" class="text-sky-600 group-active:text-white lg:px-2 xl:px-2.5">
                        <x-svg class="w-6 h-6 mx-auto lg:mx-0 inline-block" fill="none">
                            <use xlink:href="icons.svg#icon-whatsapp" />
                        </x-svg>
                        <span class="text-sm font-semibold inline-block">Konsultasi</span>
                    </a>
                </div>
                <button type="button" class="text-sm basis-2/4 bg-sky-600 text-white py-1 rounded-full active:bg-sky-800 md:basis-full md:order-first">Minta Penawaran</button>
            </div>
        </div>
    </div>
</section>