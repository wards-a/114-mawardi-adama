@props(['product' => []])

<a href="{{ route('product.show', encrypt($product->id)) }}" class="block h-72 max-w-40 shadow-lg rounded-lg">
    <img class="mx-auto h-44"
        src="{{ $product->image->image ? asset('storage/'.$product->image->image) : asset('logo.png') }}" alt="">
    <div class="flex flex-col p-2.5">
        <p class="text-sm line-clamp-2">{{ $product->name }}</p>
        <div class="product_price">
            <p class="text-sky-700 font-semibold mb-1">
                {{ $product->variant->selling_price
                    ? 'Rp ' . number_format($product->variant->selling_price, 0, '', '.')
                    : '' }}
            </p>
            <p class="text-xs text-gray-500 line-through italic">
                {{ $product->variant->cuts_price
                    ? 'Rp ' . number_format($product->variant->cuts_price, 0, '', '.')
                    : '' }}
            </p>
        </div>
    </div>
</a>