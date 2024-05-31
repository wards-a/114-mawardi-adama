@extends('admin.partials.layouts.app')

@section('breadcrumb')
    <x-breadcrumb for="admin" class="flex pt-2" aria-label="Breadcrumb" />
@endsection

@section('content')
    @if (Route::is('quotation.request'))
        @section('title', 'Request Order Quo')
        @include('admin.partials.pages.quotation.request_list')
    @endif

    @if (Route::is('quotation.index'))
        @section('title', 'Daftar Quotation')
        @include('admin.partials.pages.quotation.quotation_list')
    @endif

    @if (Route::is('quotation.create.by.order'))
        @section('title', 'Buat Quotation')
        @include('admin.partials.pages.quotation.quotation_create_form')
        @push('scripts')
            @vite('resources/js/admin/form-ajax.js')
        @endpush
    @endif

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
