@props(['menu' => []])

<div {{ $attributes }}>
    {{-- Hamburger menu --}}
    {{ $slot }}
    
    {{-- Menu --}}
    <x-user.header.mobile-nav-item :menu="$menu" />
</div>