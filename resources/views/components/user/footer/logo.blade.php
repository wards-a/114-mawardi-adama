@props(['logo' => []])

<div {{ $attributes }}>
    <figure class="flex items-center justify-start mb-2 ml-0">
        <img class="w-28 self-start lg:w-32" src="{{ asset($logo['image']) }}" alt="goodiebagcustom">
        <figcaption class="font-bold text-2xl opacity-90 pt-10 lg:text-lg lg:pt-7">Goodiebag<br>Custom</figcaption>
    </figure>
    <p class="text-sm text-white text-wrap opacity-75 leading-relaxed lg:text-xs">PT. Goodiebag Custom Indonesia merupakan produsen konveksi tas custom, kami menyediakan berbagai macam jenis tas yang dapat di kustomisasi sesuai keinginan dan kebutuhan Anda.</p>
</div>