@extends('user.partials.layouts.app')

@push('css')        
    @vite('resources/js/slick/slick.css')
    @vite('resources/js/slick/slick-theme.css')
    @vite('resources/css/slick-custom-css.css')
@endpush

@section('title', 'Produk')

@section('content')

@include('user.partials.pages.product.product_detail')

@endsection

@push('scripts')
    @vite('resources/js/slick/slick.min.js')
    @vite('resources/js/user/product/product_detail.js')
@endpush