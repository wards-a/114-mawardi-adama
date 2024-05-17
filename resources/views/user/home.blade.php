@extends('user.partials.layouts.app')

@push('css')
    @vite('resources/js/slick/slick.css')
    @vite('resources/js/slick/slick-theme.css')
    @vite('resources/css/slick-custom-css.css')
@endpush

@section('title', 'Beranda')

@section('content')

{{-- Carousel --}}
@include('user.partials.pages.home.carousel')

{{-- Highlight Menu --}}
@include('user.partials.pages.home.highlight-menu')

{{-- main content --}}
@include('user.partials.pages.home.content')

@endsection

@push('scripts')
    @vite('resources/js/slick/slick.min.js')
    @vite('resources/js/user/homepage/carousel.js')
@endpush