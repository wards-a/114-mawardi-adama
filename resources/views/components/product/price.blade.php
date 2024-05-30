@props(['price' => ''])

<p {{ $attributes }}>
    {{ $price
        ? 'Rp ' . number_format($price, 0, '', '.')
        : '' }}
</p>