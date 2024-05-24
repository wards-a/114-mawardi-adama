@extends('user.partials.layouts.app')

@push('css')
@endpush

@section('title', 'User')

@section('content')
    @include('user.partials.pages.profile.profile')
@endsection

@push('scripts')
@endpush