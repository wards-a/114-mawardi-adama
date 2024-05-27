<x-caption title="Tambah Kategori Baru" class="my-5" />
<div id="category" class="p-4 shadow-md sm:rounded-lg dark:bg-gray-800">
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <x-form.text-input name="name" label="Nama" placeholder="Spunbond Press" class="mb-6" />
        <x-form.textarea name="description" label="Deskripsi" placeholder="Terbuat dari bahan..." rows="3" class="mb-6" />
        {{-- <button id="add-button-field" type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-6 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah
            Opsi Lain</button> --}}
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
    </form>

</div>
