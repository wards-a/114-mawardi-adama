@props(['item' => []])

@php
    $image = $item->product->product_images->sortBy('image_order')->take(1);

    $total_price = $item->quantity * $item->variant->selling_price;
@endphp

<div {{ $attributes }}>
    <div class="flex items-start gap-4 basis-full lg:basis-1/2">
        <fieldset class="flex items-center gap-2">
            <input type="checkbox" name="checkbox_item[]" value="{{ $item->id }}" class="checkbox-item border-2 border-slate-400 rounded focus:ring-0">
        </fieldset>
        <figure class="shrink-0">        
            <img class="h-20 lg:h-36" src="{{ count($image) > 0 ? asset('storage/'.$image[0]->image) : asset('logo.png') }}" alt="goodiebagcustom">
        </figure>
        <div class="space-y-1">
            <h1 class="text-sm sm:text-base text-slate-800">{{ $item->product->name }}</h1>
            <p class="text-xs sm:text-sm text-slate-600">{{ $item->variant->size }}</p>
            <div>
                <x-product.price :price="$item->variant->cuts_price" class="text-xs text-slate-400 line-through italic" />
                <x-product.price :price="$item->variant->selling_price" data-price="{{ $item->variant->selling_price }}" class="price-item text-sm font-medium sm:font-semibold text-sky-700" />
            </div>
        </div>
    </div>
    <div class="flex flex-col items-end justify-end gap-2 basis-full lg:gap-4 lg:basis-1/2">
        <div class="container-form">
            <form action="{{ route('cart.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <fieldset class="flex justify-between">
                    <button type="button" class="btn-subtract-quantity text-slate-500" disabled>
                        <x-svg class="w-4 h-4" fill="currentColor">
                            <use xlink:href="/icons.svg#icon-circle-minus" />
                        </x-svg>
                    </button>
                    <input type="number" class="quantity-item w-12 font-bold text-sm text-center text-slate-700 border-0 focus:ring-0" name="quantity" value="{{ $item->quantity }}">
                    <button type="button" class="btn-add-quantity text-slate-700">
                        <x-svg class="w-4 h-4" fill="currentColor">
                            <use xlink:href="/icons.svg#icon-circle-plus" />
                        </x-svg>
                    </button>
                </fieldset>
            </form>
        </div>
        <div class="price-calculation flex items-end justify-between w-full lg:w-52">
            <p class="font-medium text-slate-600 sm:font-semibold">Total</p>
            <x-product.price :price="$total_price" id="total-price-1" class="font-medium text-sky-800 sm:text-lg" />
        </div>                        
    </div>
    <button type="button" class="btn-remove-item-{{ $item->id }} absolute right-3 top-5 text-slate-500 hover:text-slate-800">
        <x-svg class="w-5 h-5" fill="currentColor">
            <use xlink:href="/icons.svg#icon-trash-bin" />
        </x-svg>
    </button>
</div>