@extends('admin.partials.layouts.app')

@section('breadcrumb')
    <x-breadcrumb for="admin" class="flex pt-2" aria-label="Breadcrumb" />
@endsection

@section('content')
    {{-- @if (Route::is('product.index'))
        @section('title', 'Produk')
        @include('admin.partials.pages.product.product_list')
    @endif --}}

    @if (Route::is('quotation.create'))
        @section('title', 'Buat Quotation')
        @include('admin.partials.pages.quotation.quotation_add_form')
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
