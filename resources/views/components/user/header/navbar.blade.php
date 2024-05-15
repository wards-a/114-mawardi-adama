@props(['menu' => []])

<nav {{ $attributes }}>
    <ul class="flex items-center justify-end">

        {{-- Loop menu by text  --}}
        @foreach ($menu['text'] as $item)
            <li class="pr-5">
                <a href="{{ $item['path'] }}" class="opacity-60 font-semibold hover:opacity-90 nav-shrink-transition {{ $isActive($item['path']) }}">
                    {{ $item['name'] }}
                    <span class="inline-block relative top-1 nav-shrink-transition">
                        {!! $isProductMenu($item) !!}
                    </span>
                </a>
            </li>
        @endforeach
    
        {{-- Loop menu by icon --}}
        @foreach ($menu['icon'] as $item)
        <li class="ml-4">
            <a href="{{ $item['path'] }}" class="opacity-60 font-semibold hover:opacity-90 nav-shrink-transition {{ $isActive($item['path']) }}">
                <svg class="w-6 h-6 nav-shrink-transition" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <use xlink:href="{{ $item['src'] }}"></use>
                </svg>
            </a>
        </li>    
        @endforeach
    </ul>
</nav>