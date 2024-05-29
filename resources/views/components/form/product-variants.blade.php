@props([
    'size' => '',
    'selling_price' => null,
    'cuts_price' => null,
])

<div {{ $attributes }}>
    <div class="relative flex border border-gray-600 sm:rounded-lg">
        <div class="flex flex-wrap p-4 m-0 w-full">
            <div class="flex flex-wrap shrink-0 mb-4 w-full max-w-full pe-2 md:w-6/12 md:mb-2">
                <p class="text-sm repeater-title text-gray-900 mb-2 dark:text-white md:absolute md:-top-7">
                    Ukuran</p>
                <x-form.text-input :value="$size" name="product_size[]" label="" class="w-full"
                    placeholder="25x35 cm" />
            </div>
            <div class="flex flex-wrap shrink-0 w-full max-w-full mb-4 px-2 md:w-3/12 md:mb-2">
                <p class="text-sm repeater-title text-gray-900 mb-2 dark:text-white md:absolute md:-top-7">
                    Harga Jual</p>
                <x-form.number-input :value="$selling_price" name="selling_price[]" class="w-full" label=""
                    placeholder="3500" />
            </div>
            <div class="flex flex-wrap shrink-0 w-full max-w-full mb-4 px-2 md:w-3/12 md:mb-2">
                <p class="text-sm repeater-title text-gray-900 mb-2 dark:text-white md:absolute md:-top-7">
                    Harga Coret</p>
                <x-form.number-input :value="$cuts_price" name="cuts_price[]" class="w-full" label=""
                    placeholder="3900" />
            </div>
        </div>
        <div class="btn-repeater-delete flex items-center border-l border-l-gray-600 px-0.5 hover:cursor-pointer">
            <x-svg class="w-5 h-5 text-gray-900 dark:text-white" fill="none">
                <use xlink:href="/icons.svg#icon-close" />
            </x-svg>
        </div>
        {{ $slot }}
    </div>
</div>
