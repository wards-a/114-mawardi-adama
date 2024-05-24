<x-caption title="Daftar Produk" class="my-5" />

<div class="shadow-md sm:rounded-lg">
    <div
        class="flex flex-column sm:flex-row flex-wrap space-y-4 justify-between sm:space-y-0 items-center dark:bg-gray-800 sm:rounded-t-lg">
        <div class="flex flex-wrap items-center p-4 gap-4">
            <x-search-bar class="max-w-fit" />
            <x-dropdown-radio class="max-w-fit" />
            <x-delete-button-icon class="max-w-fit" />
        </div>
        <x-add-button title="Tambah Produk" link="/product/create" class="p-4" />
    </div>
    <x-table.table-content class="relative overflow-x-auto" />
    <x-pagination class="flex items-center flex-column flex-wrap md:flex-row justify-between p-4 dark:bg-gray-800 sm:rounded-b-lg"
    aria-label="Table navigation" />
</div>
<x-delete-modal />