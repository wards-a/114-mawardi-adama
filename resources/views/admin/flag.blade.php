@extends('admin.partials.layouts.app')

@section('breadcrumb')
    <x-breadcrumb class="flex pt-2" aria-label="Breadcrumb" />
@endsection

@section('content')
    @if (Route::is('flag.index'))
        @section('csrf-token')
            <meta name="csrf-token" content="{{ csrf_token() }}">
        @endsection
        @section('title', 'Flags')
        @include('admin.partials.pages.flag.flag_list')
        @push('scripts')
            @vite('resources/js/admin/remove-item.js')
        @endpush
    @endif

    @if (Route::is('flag.create'))
        @section('title', 'Add Flag')
        @include('admin.partials.pages.flag.flag_add_form')
    @endif

    @if (Route::is('flag.edit'))
        @section('title', 'Edit Flag')
        @include('admin.partials.pages.flag.flag_edit_form')
    @endif
@endsection
