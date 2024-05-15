@extends('layouts.app')

@push('css')
    @vite('resources/js/slick/slick.css')
    @vite('resources/js/slick/slick-theme.css')
    @vite('resources/css/slick-custom-css.css')
@endpush

@section('title', 'Beranda')

@section('content')

{{-- Carousel --}}
@include('user.pages.home.carousel')

{{-- Highlight Menu --}}
@include('user.pages.home.highlight-menu')

{{-- main content --}}
@include('user.pages.home.content')

@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    @vite('resources/js/slick/slick.min.js')
    @vite('resources/js/user/homepage/carousel.js')
@endpush