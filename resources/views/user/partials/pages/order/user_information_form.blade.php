<section id="contact-us-formulir" class="min-h-screen mb-40">
    <div class="w-11/12 mx-auto px-4">
        <h1 class="text-lg text-slate-700 mb-2 lg:text-xl">Informasi Pemesanan</h1>
        <p class="text-xs text-slate-500 mb-1 lg:text-sm">Silahkan isi formulir di bawah untuk dapat melanjutkan
            permintaan.</p>
        <div class="flex flex-col gap-10 md:flex-row">
            <div id="contact-form-container" class="md:w-3/5 md:pr-14 md:border-r md:border-slate-500">
                <form id="formUserInformation" action="{{ route('order.store') }}" method="post" class="space-y-8">
                    @csrf
                    <fieldset class="relative input">
                        <label for="name"
                            class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Pemesan<span
                                class="text-xs">*</span></label>
                        <input type="text" name="name" id="name"
                            class="w-full ps-0 border-0 border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:ring-0 focus:outline-0 focus:border-b-2 focus:border-b-sky-700">
                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </fieldset>
                    <fieldset class="relative input">
                        <label for="cus_address"
                            class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Alamat Pemesan<span
                                class="text-xs">*</span></label>
                        <textarea name="cus_address" id="cus_address"
                            class="w-full ps-0 border-0 border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:ring-0 focus:outline-0 focus:border-b-2 focus:border-b-sky-700"
                            rows="1"></textarea>
                        @error('cus_address')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </fieldset>
                    <fieldset class="relative input">
                        <label for="shipping_address"
                            class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Alamat
                            Pengiriman</label>
                        <textarea name="shipping_address" id="shipping_address"
                            class="w-full ps-0 border-0 border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:ring-0 focus:outline-0 focus:border-b-2 focus:border-b-sky-700"
                            rows="1"></textarea>
                        @error('shipping_address')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </fieldset>
                    <fieldset class="relative input">
                        <label for="phone_number"
                            class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Nomor Telepon<span
                                class="text-xs">*</span></label>
                        <input type="text" name="phone_number" id="phone_number"
                            class="w-full ps-0 border-0 border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:ring-0 focus:outline-0 focus:border-b-2 focus:border-b-sky-700">
                        @error('phone_number')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </fieldset>
                    <fieldset class="relative input">
                        <label for="notes"
                            class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Catatan</label>
                        <textarea name="notes" id="notes"
                            class="w-full ps-0 border-0 border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:ring-0 focus:outline-0 focus:border-b-2 focus:border-b-sky-700"
                            rows="5"></textarea>
                    </fieldset>
                    <fieldset class="relative input">
                        <div class="upload-container mb-6">
                            <div class="image-preview-wrapper flex flex-wrap gap-2 mb-6"></div>
                            <x-form.multiple-files name="cus_attachtments[]" label=""
                                accept=".jpg, .jpeg, .png, .svg, .pdf, .psd, .cdr, .ai" class="input-images" />
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Lampirkan
                                desain untuk dicetak pada tas</p>
                        </div>
                    </fieldset>
                    <button type="submit"
                        class="w-full py-1.5 text-center text-sm text-sky-800 font-medium bg-slate-200 rounded-sm transition-all duration-300 hover:bg-slate-300 active:bg-sky-700 active:text-white sm:w-40">
                        Kirim
                    </button>
                </form>
            </div>
            <div id="quantity-section" class="px-5 space-y-3 mb-3 md:w-2/5 lg:space-y-5 lg:mb-5">
                <div id="quantity-product"
                    class="flex flex-wrap justify-between items-center border-b py-2 space-y-1 lg:block lg:space-y-3">
                    <p class="basis-full text-center text-slate-700 shrink-0 lg:font-semibold md:text-left">
                        Ringkasan
                        Belanja</p>
                    @php
                        $total = [];
                    @endphp
                    @foreach ($cart_items as $item)
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
        </div>
    </div>
</section>
