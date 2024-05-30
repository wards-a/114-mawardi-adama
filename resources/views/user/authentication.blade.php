@extends('user.partials.layouts.app')

@push('css')
@endpush

@section('content')
    @if (Route::is('login'))
        @section('title', 'Masuk')
        <div class="h-20"></div>
        @include('user.partials.pages.authentication.form_login')        
    @endif

    @if (Route::is('register'))
        @section('title', 'Daftar')
        @include('user.partials.pages.authentication.form_registration')
    @endif

    @if (Route::is('forgot-password'))
        @section('title', 'Lupa Kata Sandi')
        @include('user.partials.pages.authentication.form_forgot_password')
    @endif
@endsection

@push('scripts')
@endpush