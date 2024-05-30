@extends('admin.partials.layouts.app')

@section('breadcrumb')
    <x-breadcrumb class="flex pt-2" for="admin" aria-label="Breadcrumb" />
@endsection

@section('content')
    @if (Route::is('category.index'))
        @section('csrf-token')
            <meta name="csrf-token" content="{{ csrf_token() }}">
        @endsection
        @section('title', 'Categories')
        @include('admin.partials.pages.category.category_list')
        @push('scripts')
            @vite('resources/js/admin/remove-item.js')
        @endpush
    @endif

    @if (Route::is('category.create'))
        @section('title', 'Add Category')
        @include('admin.partials.pages.category.category_add_form')
    @endif

    @if (Route::is('category.edit'))
        @section('title', 'Edit Category')
        @include('admin.partials.pages.category.category_edit_form')
    @endif
@endsection
