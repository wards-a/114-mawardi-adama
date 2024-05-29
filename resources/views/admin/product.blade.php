@extends('admin.partials.layouts.app')

@section('breadcrumb')
    <x-breadcrumb class="flex pt-2" aria-label="Breadcrumb" />
@endsection

@section('content')
    @if (Route::is('product.index'))
        @section('csrf-token')
            <meta name="csrf-token" content="{{ csrf_token() }}">
        @endsection
        @section('title', 'Produk')
        @include('admin.partials.pages.product.product_list')
        @push('scripts')
            @vite('resources/js/admin/remove-item.js')
        @endpush
    @endif

    @if (Route::is('product.create'))
        @section('title', 'Tambah Produk')
        @include('admin.partials.pages.product.product_add_form')
        @push('scripts')
            <script>
                ClassicEditor
                    .create(document.querySelector('#editor'))
                    .catch(error => {
                        console.error(error);
                    });
            </script>
            @vite('resources/js/admin/add-field-input.js')
            @vite('resources/js/admin/images-preview.js')
        @endpush
    @endif

    @if (Route::is('product.edit'))
        @section('title', 'Ubah Informasi Produk')
        @include('admin.partials.pages.product.product_edit_form')
        @push('scripts')
            <script>
                ClassicEditor
                    .create(document.querySelector('#editor'))
                    .catch(error => {
                        console.error(error);
                    });
            </script>
            @vite('resources/js/admin/add-field-input.js')
            @vite('resources/js/admin/images-preview.js')
        @endpush
    @endif
@endsection
