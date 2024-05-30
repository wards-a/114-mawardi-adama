<section id="highlight-menu" class="h-full max-w-6xl mb-10 mx-auto">
    <div id="highlight-menu-container" class="flex justify-center flex-wrap relative w-full mt-10 md:w-4/5 md:mx-auto">
        <h1 class="w-full my-10 text-center text-slate-800 text-lg font-semibold">Kategori</h1>
        @if ($categories)
            @foreach ($categories as $category)
            <div class="flex justify-center h-full mb-4 w-1/4 sm:w-1/6 lg:mb-7">
                <figure class="max-w-16 md:max-w-32 relative">
                    <a href="{{ route('product.category', strtolower($category->name)) }}" class="group">
                        <img class="h-16 md:h-32 rounded transition-all duration-300 ease-in drop-shadow group-hover:drop-shadow-xl" src="{{ $category->image ? asset('storage/'.$category->image) : asset('logo.png') }}" alt="goodiebag">
                        <figcaption class="pt-5 text-xs text-center font-bold text-blue-900 opacity-85 lg:text-sm">{{ ucwords($category->name) }}</figcaption>
                    </a>
                </figure>
            </div>
            @endforeach
        @endif
    </div>
</section>
