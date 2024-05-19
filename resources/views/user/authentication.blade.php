@extends('user.partials.layouts.app')

@push('css')
@endpush

@section('content')
    @if (Route::is('user.login'))
        @section('title', 'Masuk')
        @include('user.partials.pages.authentication.form_login')        
    @endif

    @if (Route::is('user.register'))
        @section('title', 'Daftar')
        @include('user.partials.pages.authentication.form_registration')
    @endif

    @if (Route::is('user.forgot_password'))
        @section('title', 'Lupa Kata Sandi')
        @include('user.partials.pages.authentication.form_forgot_password')
    @endif
@endsection

@push('scripts')
@endpush