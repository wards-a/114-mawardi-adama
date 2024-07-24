<section id="highlight-product" class="mb-40">
    @foreach ($flags as $flag)
    @if (count($flag->products) > 0)
    <div class="w-full max-w-6xl mb-6 pb-2.5 border-b lg:mb-8 lg:mx-auto">
        <div class="flex items-center justify-between w-full mb-3.5 lg:mb-5">
            <h2 class="text-base font-medium ml-2.5 lg:text-2xl">{{ $flag->title }}</h2>
            <a href="{{ route('product.flag', ['flag' => strtolower($flag->name)]) }}" class="mr-2.5 text-sm font-medium lg:font-semibold text-sky-700">Lihat Semua</a>
        </div>
        <div class="product-carousel mb-5 pl-1.5 lg:pl-6">
            @foreach ($flag->products as $product)
            <div class="slick-slide w-full h-80 max-w-44 mx-1 mb-6 pl-2.5">
                <x-product.card :product="$product" />                
            </div>
            @endforeach
        </div>
    </div>
    @endif
    @endforeach
</section>
