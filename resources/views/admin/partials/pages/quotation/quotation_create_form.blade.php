@php
    $total = [];
@endphp

<x-caption title="Buat Quotation" class="my-5" />
<div class="flex flex-wrap mt-8">
    <div class="flex shrink-0 w-full mb-6 px-4 lg:w-9/12 lg:mb-0">
        <div id="quotation" class="p-6 shadow-md w-full dark:bg-gray-800 sm:rounded-lg">
            <form id="form" action="{{ route('quotation.store') }}" method="POST">
                @csrf
                <input type="hidden" name="order_id" value="{{ $order->id }}">
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
                                <span class="text-sm text-gray-900 dark:text-white">Referensi</span>
                                <x-form.text-input name="quotation_reference" label="" class=""
                                    placeholder="INV/2024/0164" />
                            </div>
                            <div class="flex items-center gap-4">
                                <span class="text-sm text-gray-900 dark:text-white">Tanggal</span>
                                <x-form.datepicker name="quotation_date" class="date-input relative max-w-sm" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap justify-between mb-3">
                    <div
                        class="flex flex-col shrink-0 gap-4 basis-full md:mb-7 md:ps-6 md:basis-1/2 md:max-w-sm md:mb-0">
                        <span class="text-sm text-gray-800 font-medium dark:text-white">Info Perusahaan</span>
                        <div class="border-b border-gray-500 w-11/12 dark:border-white"></div>
                        <span class="text-sm text-gray-900 font-semibold dark:text-white">PT Goodiebag Custom Indonesia</span>
                        <div class="pe-2 text-sm text-gray-700 leading-relaxed dark:text-white">
                            <p>Jalan Atang Senjaya, Pasirgaok, Kec. Ranca Bungur, Bogor, Jawa Barat, 16630</p>
                            <p>Indonesia</p>
                            <p>Telp: 0821-2284-8815</p>
                            <p>Email: customgoodiebag@gmail.com</p>
                        </div>
                    </div>
                    <div class="flex flex-col shrink-0 gap-4 basis-full md:ps-6 md:basis-1/2 md:max-w-sm">
                        <span class="text-sm text-gray-800 font-medium dark:text-white">Penagihan Untuk</span>
                        <div class="border-b border-gray-500 w-11/12 dark:border-white"></div>
                        <span class="text-sm text-gray-900 font-semibold dark:text-white">{{ $order->customer_name }}</span>
                        <div class="text-sm text-gray-700 leading-relaxed dark:text-white">
                            <p>{{ $order->customer_address }}</p>
                            <p>Telp: {{ $order->phone_number }}</p>
                        </div>
                    </div>
                </div>
                <div class="p-5 mb-10">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Produk
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kuantitas
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Harga
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jumlah
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->order_items as $item)
                                @php
                                    $subtotal = $item->quantity*$item->price;
                                    array_push($total, $subtotal);
                                @endphp
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium ">
                                        <p class="text-gray-900 whitespace-nowrap dark:text-white">{{ $item->product->name }}</p>
                                        <p>{{ $item->variant }}</p>
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ number_format($item->quantity, 0, '', '.') }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ number_format($item->price, 2, '.', ',') }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ number_format($subtotal, 2, '.', ',') }}
                                    </td>
                                </tr>
                                @endforeach                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="flex flex wrap py-4">
                    <div class="flex shrink-0 justify-end w-full max-w-full mb-3 md:pe-5 md:mb-0">
                        <div class="quotation-calculation w-1/2">
                            <div class="flex mb-2 justify-between">
                                <span class="text-gray-900 dark:text-white">Total</span>
                                <span class="text-gray-900 dark:text-white">Rp {{ number_format(array_sum($total), 2, '.', ',') }}</span>
                            </div>
                            <div class="flex mb-2 justify-between">
                                <span class="text-gray-900 dark:text-white">DP 50%</span>
                                <span class="text-gray-900 dark:text-white">Rp {{ number_format((array_sum($total)*50/100), 2, '.', ',') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex wrap py-4">
                    <div class="flex shrink-0 justify-start w-full max-w-full mb-3 md:ps-5 md:mb-0">
                        <div class="quotation-calculation w-1/2">
                            <div class="flex mb-2 justify-between">
                                <x-form.textarea name="notes" label="Keterangan" class="w-full"
                                    placeholder="" rows="2" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex wrap py-4">
                    <div class="flex shrink-0 justify-end w-full max-w-full mb-3 md:pe-5 md:mb-0">
                        <div class="quotation-calculation w-1/4">
                            <div class="flex flex-col mb-2 justify-center items-center gap-24">
                                <span class="date-text text-gray-900 font-semibold dark:text-white">Tanggal</span>
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
                <button type="button"
                    class="w-full justify-center px-3 py-2 text-sm font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-5 h-5 text-white me-1 rotate-45" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 2a1 1 0 0 1 .932.638l7 18a1 1 0 0 1-1.326 1.281L13 19.517V13a1 1 0 1 0-2 0v6.517l-5.606 2.402a1 1 0 0 1-1.326-1.281l7-18A1 1 0 0 1 12 2Z"
                            clip-rule="evenodd" />
                    </svg>
                    Send Quotation
                </button>
                <a href="#"
                    class="text-white block w-full bg-gray-600 hover:bg-gray-700 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-2 py-2 text-center dark:focus:ring-gray-800">Preview</a>
                <button type="button"
                    class="btn-save w-full px-3 py-2 text-sm font-medium text-center text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Save</button>
            </div>
        </div>
    </div>
</div>
