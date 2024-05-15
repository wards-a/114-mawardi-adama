@props(['logo' => []])

<figure {{ $attributes }}>
    <img class="sm:w-12 nav-shrink-transition" src="{{ asset($logo['image']) }}" alt="{{ $logo['alt'] }}">
    <figcaption class="text-sm font-semibold self-center pt-3 nav-shrink-transition sm:text-2xl font-bold md:pt-4">{{ $logo['caption'] }}</figcaption>
</figure>