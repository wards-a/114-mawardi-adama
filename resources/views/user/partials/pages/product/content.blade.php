<section class="w-full mt-3 mb-40 clear-both">
    <div class="w-full px-5 min-h-screen md:px-16">
        <div class="w-full px-3.5 mb-5 lg:mb-8 lg:px-0">
            @if (request()->has('flag'))
                <p class="text-sm text-slate-500 font-medium md:ps-2">Total {{ count($products) }} produk ditemukan
                    dengan kata kunci <strong>"{{ request()->query('flag') }}"</strong></p>
            @endif
        </div>
        <div class="table w-full clear-both">
            {{-- if string the no products obtained --}}
            @if (count($products) === 0)
                <div class="w-full mt-40 text-center">
                    <p class="text-lg md:text-xl font-bold text-slate-400">
                        Oops! Tidak ada produk yang ditemukan.
                    </p>
                </div>
            @endif
            <div class="grid grid-cols-2 gap-4 mb-10 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-6 xl:grid-cols-7">
                {{-- if there is product --}}
                @if (count($products) > 0)
                    @foreach ($products as $product)
                        <x-product.card :product="$product" />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="w-11/12 mb-5 mx-auto px-2">
        {{ $products->links() }}
    </div>
</section>
