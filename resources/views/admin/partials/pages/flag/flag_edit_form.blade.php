<x-caption title="Ubah Informasi Flag" class="my-5" />
<div id="flag" class="p-4 shadow-md sm:rounded-lg dark:bg-gray-800">
    <form action="{{ route('flag.update', $flag->id) }}" method="POST">
        @csrf
        @method('PUT')
        <x-form.text-input :value="$flag->name" name="name" label="Nama" placeholder="Recommended" class="mb-6" />
        <x-form.textarea :value="$flag->description" name="description" label="Deskripsi" placeholder="Flag yang digunakan untuk mengelompokkan produk..." rows="3" class="mb-6" />
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
    </form>
</div>
