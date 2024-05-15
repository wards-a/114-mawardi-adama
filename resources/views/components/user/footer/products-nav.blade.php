@php
    $product = $getProduct();
@endphp

<div {{ $attributes }}>
    <nav class="text-white text-left text-wrap font-semibold md:pt-5">
        <h4 class="text-lg pb-2 lg:text-base">{{ $product['name'] }}</h4>
        <ul class="relative text-sm lg:text-xs">
            @foreach ($product['category'] as $item)
                <li class="pb-3 last:pb-0"><a href="{{ route('user.product') }}">{{ $item }}</a></li>
            @endforeach
        </ul>
    </nav>
</div>