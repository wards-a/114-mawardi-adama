@extends('user.partials.layouts.app')

@push('css')
@endpush

@section('title', 'Cara Pemesanan')

@section('content')
    @if (Route::is('order.create'))
        <x-breadcrumb :breadcrumbs="$breadcrumbs" for="user" class="w-11/12 relative -top-3 mx-auto md:ps-4" />
        @include('user.partials.pages.order.user_information_form')
        @push('scripts')
            @vite('resources/js/admin/images-preview.js')
        @endpush
    @endif
@endsection
