@props(['product' => []])

<a href="{{ route('product.show', encrypt($product->id)) }}" class="block h-72 max-w-40 shadow-lg rounded-lg">
    <img class="mx-auto h-44"
        src="{{ $product->image->image ? asset('storage/'.$product->image->image) : asset('logo.png') }}" alt="goodiebagcustom">
    <div class="flex flex-col p-2.5">
        <p class="text-sm line-clamp-2">{{ $product->name }}</p>
        <div class="product_price">
            <x-product.price :price="$product->variant->selling_price" class="text-sky-700 font-semibold mb-1" />
            <x-product.price :price="$product->variant->cuts_price" class="text-xs text-gray-500 line-through italic" />
        </div>
    </div>
</a>