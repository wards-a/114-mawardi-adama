@php
    $total = [];
@endphp

<section id="product_detail" class="min-h-screen mb-32">
    <div class="w-11/12 mx-auto mb-5">
        <h1 class="text-lg lg:text-xl">Daftar Belanja Anda</h1>
    </div>
    <div class="flex flex-wrap justify-between w-11/12 mx-auto">
        <div class="flex-1 mr-0 md:mr-10 xl:mr-12">
            <div id="product_list_chart" class="flex flex-col gap-2">
                <div class="check-item-container relative flex flex-wrap justify-between shadow mb-2 p-2 md:p-4">
                    <fieldset class="flex items-center gap-2">
                        <input type="checkbox" name="checkbox_item_all" id="checkbox-item-all" value="" class="border-2 border-slate-400 rounded focus:ring-0">
                        <label for="checkbox-item" class="text-sm font-medium text-slate-600">Pilih Semua</label>
                    </fieldset>
                    <button type="button" class="flex items-center gap-1 text-sm font-medium hover:text-slate-800">
                        <x-svg class="w-5 h-5 text-slate-500" fill="currentColor">
                            <use xlink:href="/icons.svg#icon-trash-bin" />
                        </x-svg>
                        <span class="text-slate-600 pt-0.5">Hapus</span>
                    </button>
                </div>
                @foreach ($cart->cart_items as $item)
                    <x-cart.card-item :item="$item"
                        class="item-container relative flex flex-wrap justify-between shadow-lg p-2 md:p-4 md:pt-8 lg:pt-5" />
                @endforeach
            </div>
        </div>
        <div id="shop-option"
            class="w-full z-20 fixed bottom-0 left-0 min-h-min bg-white rounded md:sticky md:w-fit md:basis-2/5 md:top-20 md:mb-9 lg:basis-1/3">
            <div id="shrink-quantity-section" class="w-full bg-sky-100 py-px text-center text-slate-700 md:hidden">
                <x-svg class="w-5 h-5 inline-block" fill="none">
                    <use xlink:href="icons.svg#icon-angle-down" />
                </x-svg>
            </div>
            <div id="quantity-section" class="px-5 space-y-3 mb-3 lg:space-y-5 lg:mb-5">
                <div id="quantity-product"
                    class="flex flex-wrap justify-between items-center border-b py-2 space-y-1 lg:block lg:space-y-3">
                    <p class="basis-full text-center text-slate-700 shrink-0 lg:font-semibold md:text-left">Ringkasan
                        Belanja</p>
                    @foreach ($cart->cart_items as $item)
                        @php
                            $sub_total = $item->quantity * $item->variant->selling_price;
                            array_push($total, $sub_total); // store subtotal for total calculation
                        @endphp
                        <div id="order-items-total" class="basis-full">
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-sm font-medium text-slate-600">{{ $item->product->name }}</p>
                                    <p class="text-xs text-slate-500">{{ $item->variant->size }}</p>
                                </div>
                                <p class="text-sm font-medium text-slate-600">{{ $item->quantity }}</p>
                                <x-product.price :price="$sub_total" class="text-sm font-semibold text-slate-600" />
                            </div>
                        </div>
                    @endforeach
                </div>
                <div id="price_calculation" class="flex justify-between">
                    <p class="font-semibold text-slate-600">Total</p>
                    <x-product.price :price="array_sum($total)" id="total_price" class="font-semibold text-sky-800" />
                </div>
            </div>
            <div id="order-buttons-section"
                class="flex justify-between font-medium pb-2 px-5 md:flex-wrap md:gap-y-2 md:relative md:pb-3">
                <div id=whatsapp-chat
                    class="group text-center basis-5/12 border-2 border-sky-600 py-1 rounded-3xl active:bg-sky-600 md:py-0 md:basis-full">
                    <a href="#" class="text-sky-600 group-active:text-white lg:px-2 xl:px-2.5">
                        <x-svg class="w-6 h-6 mx-auto lg:mx-0 inline-block" fill="none">
                            <use xlink:href="/icons.svg#icon-whatsapp" />
                        </x-svg>
                        <span class="text-sm font-semibold inline-block">Konsultasi</span>
                    </a>
                </div>
                <button type="button"
                    class="btn-request-quotation text-sm basis-2/4 bg-sky-600 text-white py-1 rounded-full active:bg-sky-800 md:basis-full md:order-first">Buat
                    Pesanan</button>
            </div>
        </div>
    </div>
</section>
