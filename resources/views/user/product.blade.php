@extends('user.partials.layouts.app')

@push('css')        
    @vite('resources/js/slick/slick.css')
    @vite('resources/js/slick/slick-theme.css')
    @vite('resources/css/slick-custom-css.css')
@endpush

@section('title', 'Produk')

@section('content')

    @if (Route::is('product.tag'))
        @include('user.partials.pages.product.content')
    @endif

    @if (Route::is('product.show'))
        @include('user.partials.pages.product.product_detail')
        @push('scripts')
            @vite('resources/js/user/product/product_detail.js')
        @endpush
    @endif

@endsection

@push('scripts')
    @vite('resources/js/slick/slick.min.js')
@endpush