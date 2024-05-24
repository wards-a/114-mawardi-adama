<x-caption title="Tambah Produk Baru" class="my-5" />
<div id="product" class="p-4 shadow-md sm:rounded-lg dark:bg-gray-800">
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-caption title="Informasi Produk" class="mb-6" />
        <x-form.text-input name="product_name" label="Nama" placeholder="Spunbond Press" class="mb-6" />
        <div id="field-container" class="grid gap-6 mb-6 md:grid-cols-2">
            <x-form.select-option name="product_category" label="Kategori" value="" option=""
                class="" />
            <x-form.multiple-options name="product_tags" label="Tags" value="" option=""
                class="" />
        </div>
        <x-form.ckeditor name="product_description" label="Deskripsi" placeholder="Spunbond Press merupakan tas..."
            class="mb-6" />
        <x-caption title="Ukuran dan Harga" class="mb-6" />
        <div id="field-container" class="grid gap-6 mb-6 md:grid-cols-3">
            <x-form.text-input name="product_size" label="Ukuran" placeholder="30x40 cm" class="" />
            <x-form.number-input name="product_selling_price" label="Harga Jual" placeholder="3500" class="" />
            <x-form.number-input name="product_cuts_price" label="Harga Coret" placeholder="5000" class="" />
        </div>
        <button id="add-button-field" type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-6 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah
            Opsi Lain</button>
        <x-caption title="Gambar" class="mb-6" />
        <x-form.multiple-files name="product_images" label="Gambar Produk" class="mb-6" />
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
    </form>

</div>
