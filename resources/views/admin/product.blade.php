@extends('admin.partials.layouts.app')

@section('breadcrumb')
    <x-breadcrumb class="flex pt-2" aria-label="Breadcrumb" />
@endsection

@section('content')
    @if (Route::is('product.index'))
        @section('title', 'Produk')
        @include('admin.partials.pages.product.product_list')
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
        @endpush
    @endif
@endsection
