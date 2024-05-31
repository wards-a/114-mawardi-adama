@extends('user.partials.layouts.app')

@push('css')
    @vite('resources/js/slick/slick.css')
    @vite('resources/js/slick/slick-theme.css')
    @vite('resources/css/slick-custom-css.css')
@endpush

@section('title', 'Produk')

@section('content')

    @if (Route::is('product.category'))
        <x-breadcrumb :breadcrumbs="$breadcrumbs" for="user" class="w-11/12 mx-auto md:ps-4" />
        @include('user.partials.pages.product.content')
    @endif

    @if (Route::is('product.category') || Route::is('product.search'))
        @include('user.partials.pages.product.content')
    @endif

    @if (Route::is('product.show'))
        <x-breadcrumb :breadcrumbs="$breadcrumbs" for="user" class="relative -top-2.5 w-11/12 mx-auto md:ps-2" />
        @include('user.partials.pages.product.product_detail')
        @push('scripts')
            @vite('resources/js/user/product/product_detail.js')
            @vite('resources/js/user/product/add_to_cart.js')
        @endpush
    @endif

@endsection

@push('scripts')
    @vite('resources/js/slick/slick.min.js')
@endpush
