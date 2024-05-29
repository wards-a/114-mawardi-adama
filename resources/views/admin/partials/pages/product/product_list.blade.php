
<x-caption title="Daftar Produk" class="my-5" />

<div class="shadow-md sm:rounded-lg">
    <div
        class="flex flex-column sm:flex-row flex-wrap space-y-4 justify-between sm:space-y-0 items-center dark:bg-gray-800 sm:rounded-t-lg">
        <div class="flex flex-wrap items-center p-4 gap-4">
            <x-search-bar class="max-w-fit" />
            <x-dropdown-radio class="max-w-fit" />
            <x-delete-button-icon class="max-w-fit" />
        </div>
        <div class="pe-4">
            <x-add-button title="Tambah Produk" link="{{ route('product.create') }}" class="p-4" />
        </div>
    </div>
    <x-table.table-content class="relative overflow-x-auto" :collection="[$products]" :theads="$table_heads" :tactions="$table_actions" />
</div>
<x-delete-modal />

@if (session('success'))
    <x-alert.success-alert :message="session('success')"
        class="fixed right-4 top-20 flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" />
@endif

@if (session('error'))
    <x-alert.danger-alert :message="session('error')"
        class="fixed right-4 top-20 flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" />
@endif
