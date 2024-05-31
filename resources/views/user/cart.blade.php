@extends('user.partials.layouts.app')

@push('css')
@endpush

@section('title', 'Tas Belanja')

@section('content')
    @section('csrf-token')
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @endsection
    @include('user.partials.pages.order.cart')
@endsection

@push('scripts')
    @vite('resources/js/user/order/cart.js')
@endpush
