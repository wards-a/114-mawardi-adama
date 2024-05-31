<section id="product_detail" class="min-h-screen mb-24">
    <div class="flex flex-wrap justify-between w-11/12 mx-auto">
        <div class="flex-1 mr-0 lg:mr-10 xl:mr-12">
            <div id="product" class="flex flex-wrap justify-between">
                <div id="product_image" class="flex justify-center shrink-0 p-4 mx-auto md:w-1/3 lg:pl-10 lg:mx-0">
                    <div class="sticky max-h-96 md:top-20 lg:max-h-[515px]">
                        <div class="max-w-80 drop-shadow-lg rounded-lg lg:max-w-96">
                            <figure class="max-h-fit">
                                <div class="image_to_show md:max-w-52 lg:max-w-64 xl:max-w-80">
                                    @foreach ($product->product_images->sortBy('image_order') as $img)
                                        <div class="slick-slider">
                                            <img class="h-72 lg:h-96 relative left-1/3 md:left-0 xl:left-2.5"
                                                src="{{ $img->image ? asset('storage/' . $img->image) : asset('logo.png') }}"
                                                alt="goodiebagcustom">
                                        </div>
                                    @endforeach
                                </div>
                            </figure>
                        </div>
                        <div class="images_carousel relative mt-5 max-w-xs md:max-w-52 lg:max-w-64 xl:max-w-80">
                            @foreach ($product->product_images->sortBy('image_order') as $img)
                                <div class="slick-slide drop-shadow-md">
                                    <figure class="py-2 px-4 md:px-2 xl:px-2.5">
                                        <img class="h-20 md:h-14 lg:h-20 xl:h-24 hover:cursor-grab"
                                            src="{{ $img->image ? asset('storage/' . $img->image) : asset('logo.png') }}"
                                            alt="">
                                    </figure>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div id="product_info" class="flex flex-col gap-y-2 p-4 md:pt-8 md:w-2/3 lg:w-7/12 lg:pt-5 xl:w-8/12">
                    <h1 id="product_name" class="text-xl font-medium text-slate-800">{{ $product->name }}</h1>
                    <div id="product_price_display" class="mb-2 min-h-14">
                        <p class="text-lg text-sky-700 font-semibold mb-1"></p>
                        <p class="text-sm text-gray-500 line-through italic"></p>
                    </div>
                    <div id="product_size_container" class="mb-4 space-y-3">
                        <h2 class="text-slate-800 font-semibold">Ukuran</h2>
                        <div id="product_size_list" class="flex flex-wrap gap-1.5">
                            @foreach ($product->variants as $variant)
                                @if ($loop->first)
                                    <button type="button"
                                        class="product_size w-24 bg-sky-600 py-1 rounded-full btnSizeActive"
                                        data-variant="{{ $variant->id }}"
                                        data-price="[{{ $variant->selling_price }}{{ $variant->cuts_price ? ', '.$variant->cuts_price : '' }}]">
                                        <p class="text-xs font-semibold text-white tracking-wider">{{ $variant->size }}
                                        </p>
                                    </button>
                                @else
                                    <button type="button"
                                        class="product_size w-24 bg-sky-600 py-1 rounded-full"
                                        data-variant="{{ $variant->id }}"
                                        data-price="[{{ $variant->selling_price }}{{ $variant->cuts_price ? ', '.$variant->cuts_price : '' }}]">
                                        <p class="text-xs font-semibold text-white tracking-wider">{{ $variant->size }}
                                        </p>
                                    </button>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div id="product_description" class="space-y-2">
                        <h2 class="text-slate-800 font-semibold">Deskripsi</h2>
                        <article id="description"
                            class="text-sm leading-relaxed text-slate-600 text-justify line-clamp-6 font-medium tracking-wide space-y-2 lg:line-clamp-none">
                            {{ $product->description }}
                        </article>
                        <button id="btnExpandDescription"
                            class="float-right text-sm text-sky-800 font-medium mt-1 lg:hidden">
                            Baca Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="shop-option"
            class="w-full z-20 fixed bottom-0 left-0 min-h-min bg-white drop-shadow-lg rounded lg:sticky lg:w-fit lg:max-h-60 lg:basis-1/4 lg:top-20 lg:mb-9">
            <div id="shrink-quantity-section" class="w-full bg-sky-100 py-px text-center text-slate-700 lg:hidden">
                <x-svg class="w-5 h-5 inline-block" fill="none">
                    <use xlink:href="/icons.svg#icon-angle-down" />
                </x-svg>
            </div>
            <div id="quantity-section" class="px-5 space-y-3 mb-3 lg:space-y-5 lg:mb-5">
                <div id="quantity-product"
                    class="flex justify-between items-center border-b py-2 lg:block lg:space-y-3">
                    <p class="font-semibold text-slate-700 shrink-0">Jumlah Barang</p>
                    <div id="quantity_input">
                        <form id="productOrderForm" action="" method="POST">
                            @csrf
                            <input type="hidden" id="product_id" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" id="product_variant" name="product_variant" value="">
                            <input type="hidden" id="product_price" name="product_price" value="15000">
                            <fieldset class="flex justify-between">
                                <button id="btn-subtract-quantity" type="button" class="text-slate-500" disabled>
                                    <x-svg class="w-4 h-4 sm:w-5 sm:h-5" fill="currentColor">
                                        <use xlink:href="/icons.svg#icon-circle-minus" />
                                    </x-svg>
                                </button>
                                <input id="product_quantity" type="number"
                                    class="w-20 font-bold text-center text-slate-700 border-0 focus:ring-0 lg:w-full"
                                    name="quantity" value="1">
                                <button id="btn-add-quantity" type="button" class="text-slate-700">
                                    <x-svg class="w-4 h-4 sm:w-5 sm:h-5" fill="currentColor">
                                        <use xlink:href="/icons.svg#icon-circle-plus" />
                                    </x-svg>
                                </button>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div id="price_calculation" class="flex justify-between">
                    <p class="font-semibold text-slate-600">Total</p>
                    <p id="total_price" class="font-semibold text-sky-800"></p>
                </div>
            </div>
            <div id="order-buttons-section"
                class="flex gap-x-2 font-medium pb-2 px-5 lg:flex-wrap lg:gap-y-2 lg:relative">
                <div class="flex gap-x-2 basis-2/4 lg:basis-full">
                    <div id=whatsapp-chat
                        class="flex justify-center group basis-1/2 border-2 border-sky-600 py-1 rounded-3xl active:bg-sky-600 lg:py-0">
                        <a href="#" class="text-sky-600 group-active:text-white xl:px-2.5">
                            <x-svg class="w-6 h-6 mx-auto lg:mx-0 lg:inline-block" fill="none">
                                <use xlink:href="/icons.svg#icon-whatsapp" />
                            </x-svg>
                            <span class="hidden text-sm font-semibold xl:inline-block">Konsultasi</span>
                        </a>
                    </div>
                    <button type="button"
                        class="btn-add-to-cart group basis-1/2 text-sky-600 border-2 border-sky-600 py-1 rounded-3xl active:bg-sky-600 lg:py-0">
                        <x-svg class="w-6 h-6 mx-auto group-active:text-white lg:inline-block lg:mx-0" fill="none">
                            <use xlink:href="/icons.svg#icon-shopping-bag"></use>
                        </x-svg>
                        <span class="hidden text-sm font-semibold group-active:text-white xl:inline-block">Tambah
                            Tas</span>
                    </button>
                </div>
                <button type="button"
                    class="text-sm basis-2/4 bg-sky-600 text-white py-1 rounded-full active:bg-sky-800 lg:basis-full lg:order-first">Minta
                    Penawaran</button>
            </div>
        </div>
    </div>
</section>
