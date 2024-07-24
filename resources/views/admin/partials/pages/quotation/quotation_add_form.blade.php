<x-caption title="Buat Quotation" class="my-5" />
<div class="flex flex-wrap mt-8">
    <div class="flex shrink-0 w-full mb-6 px-4 lg:w-9/12 lg:mb-0">
        <div id="quotation" class="p-6 shadow-md w-full dark:bg-gray-800 sm:rounded-lg">
            <form action="" method="POST">
                @csrf
                <div class="flex flex-wrap mb-10">
                    <div class="flex shrink-0 basis-full md:basis-1/2">
                        <img class="h-28" src="{{ asset('logo.png') }}" alt="goodiebagcustom">
                        <div class="text-lg text-gray-900 font-bold -ms-3 pt-10 dark:text-white">
                            <p>Goodiebag</p>
                            <p>Custom</p>
                        </div>
                    </div>
                    <div class="flex shrink-0 basis-full md:basis-1/2 mt-5 pe-5">
                        <div class="flex flex-col items-end gap-4 w-full">
                            <h1 class="text-xl font-semibold text-left rtl:text-right text-gray-900 dark:text-white">
                                Invoice
                            </h1>
                            <div class="flex items-center gap-12">
                                <span class="text-sm text-gray-900 font-bold dark:text-white">Referensi</span>
                                <x-form.text-input name="quotation_reference" label="" class=""
                                    placeholder="INV/2024/0164" />
                            </div>
                            <div class="flex items-center gap-4">
                                <span class="text-sm text-gray-900 font-bold dark:text-white">Tanggal</span>
                                <x-form.datepicker name="quotation_date" class="relative max-w-sm" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap justify-between mb-3">
                    <div
                        class="flex flex-col shrink-0 gap-4 basis-full md:mb-7 md:ps-6 md:basis-1/2 md:max-w-sm md:mb-0">
                        <span class="text-sm text-gray-800 font-bold dark:text-white">Info Perusahaan</span>
                        <div class="border-b-2 border-gray-500 w-11/12 dark:border-white"></div>
                        <span class="text-gray-900 font-bold dark:text-white">PT Goodiebag Custom Indonesia</span>
                        <div class="text-sm text-gray-700 font-semibold leading-relaxed dark:text-white">
                            <p>Jalan Atang Senjaya, Pasirgaok, Kec. Ranca Bungur, Bogor, Jawa Barat, 16630</p>
                            <p>Indonesia</p>
                            <p>Telp: 0821-2284-8815</p>
                            <p>Email: customgoodiebag@gmail.com</p>
                        </div>
                    </div>
                    <div class="flex flex-col shrink-0 gap-4 basis-full md:ps-6 md:basis-1/2 md:max-w-sm">
                        <span class="text-sm text-gray-800 font-bold dark:text-white">Penawaran Untuk</span>
                        <div class="border-b-2 border-gray-500 w-11/12 dark:border-white"></div>
                        <span class="text-gray-900 font-bold dark:text-white">PT XXXX</span>
                        <div class="text-sm text-gray-700 font-semibold leading-relaxed dark:text-white">
                            <p>Jalan Mawar, Jawa Barat</p>
                            <p>Telp: 0821-2284-8815</p>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <div data-repeater-list class="mb-4">
                        <div data-repeater-wrapper class="md:pt-6">
                            <div class="relative flex border sm:rounded-lg">
                                <div class="flex flex-wrap p-4 m-0 w-full">
                                    <div class="flex flex-wrap shrink-0 mb-4 w-full max-w-full pe-2 md:w-6/12 md:mb-2">
                                        <p
                                            class="repeater-title text-gray-900 mb-2 dark:text-white md:absolute md:-top-7">
                                            Produk</p>
                                        <x-form.text-input name="product_name" label="" class="w-full"
                                            placeholder="Item yang dipesan..." />
                                        <x-form.textarea name="product_description" label="" class="w-full"
                                            placeholder="Informasi item yang dipesan..." rows="2" />
                                    </div>
                                    <div class="flex flex-wrap shrink-0 w-full max-w-full mb-4 px-2 md:w-2/12 md:mb-2">
                                        <p
                                            class="repeater-title text-gray-900 mb-2 dark:text-white md:absolute md:-top-7">
                                            Kuantitas</p>
                                        <x-form.number-input name="product_quantity" class="w-full" label=""
                                            placeholder="1" />
                                    </div>
                                    <div class="flex flex-wrap shrink-0 w-full max-w-full mb-4 px-2 md:w-2/12 md:mb-2">
                                        <p
                                            class="repeater-title text-gray-900 mb-2 dark:text-white md:absolute md:-top-7">
                                            Harga</p>
                                        <x-form.number-input name="product_price" class="w-full" label=""
                                            placeholder="00" />
                                    </div>
                                    <div class="flex flex-wrap shrink-0 w-full max-w-full mb-4 ps-2 md:w-2/12 md:mb-2">
                                        <p
                                            class="repeater-title text-gray-900 mb-2 dark:text-white md:absolute md:-top-7">
                                            Jumlah</p>
                                        <p class="w-full text-gray-900 dark:text-white md:pt-4">Rp 0.00</p>
                                    </div>
                                </div>
                                <div data-repeater-delete class="flex items-center border-l px-0.5 hover:cursor-grab">
                                    <x-svg class="w-5 h-5 text-gray-900 dark:text-white" fill="none">
                                        <use xlink:href="/icons.svg#icon-close" />
                                    </x-svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap">
                        <div class="flex shrink-0 w-full">
                            <button data-repeater-create type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                                Item</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex wrap py-4">
                    <div class="flex shrink-0 justify-end w-full max-w-full mb-3 md:pe-5 md:mb-0">
                        <div class="quotation-calculation w-1/2">
                            <div class="flex mb-2 justify-between">
                                <span class="text-gray-900 font-semibold dark:text-white">Total</span>
                                <span class="text-gray-900 font-meidum dark:text-white">Rp 0.00</span>
                            </div>
                            <div class="flex mb-2 justify-between">
                                <span class="text-gray-900 font-semibold dark:text-white">DP 50%</span>
                                <span class="text-gray-900 font-medium dark:text-white">Rp 0.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex wrap py-4">
                    <div class="flex shrink-0 justify-start w-full max-w-full mb-3 md:ps-5 md:mb-0">
                        <div class="quotation-calculation w-1/2">
                            <div class="flex mb-2 justify-between">
                                <x-form.textarea name="product_description" label="Keterangan" class="w-full"
                                    placeholder="" rows="2" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex wrap py-4">
                    <div class="flex shrink-0 justify-end w-full max-w-full mb-3 md:pe-5 md:mb-0">
                        <div class="quotation-calculation w-1/4">
                            <div class="flex flex-col mb-2 justify-center items-center gap-24">
                                <span class="text-gray-900 font-semibold dark:text-white">24 Mei 2024</span>
                                <span class="text-gray-900 font-meidum dark:text-white">TTD</span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="flex shrink-0 w-full px-4 max-h-48 lg:w-3/12 quotation-action lg:sticky lg:top-24">
        <div id="quotation-option" class="flex flex-col p-2 w-full shadow-md dark:bg-gray-800 sm:rounded-lg">
            <div class="flex-1 p-4 space-y-3">
                {{-- <button type="button"
                    class="w-full justify-center px-3 py-2 text-sm font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-5 h-5 text-white me-1 rotate-45" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 2a1 1 0 0 1 .932.638l7 18a1 1 0 0 1-1.326 1.281L13 19.517V13a1 1 0 1 0-2 0v6.517l-5.606 2.402a1 1 0 0 1-1.326-1.281l7-18A1 1 0 0 1 12 2Z"
                            clip-rule="evenodd" />
                    </svg>
                    Send Quotation
                </button> --}}
                <a href="#"
                    class="text-white block w-full bg-gray-600 hover:bg-gray-700 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-2 py-2 text-center dark:focus:ring-gray-800">Preview</a>
                <button type="button"
                    class="w-full px-3 py-2 text-sm font-medium text-center text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Save</button>
            </div>
        </div>
    </div>
</div>
