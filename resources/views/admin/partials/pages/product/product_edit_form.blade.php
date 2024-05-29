<x-caption title="Tambah Produk Baru" class="my-5" />
<div id="product" class="p-4 shadow-md sm:rounded-lg dark:bg-gray-800">
    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <x-caption title="Informasi Produk" class="mb-6" />
        <x-form.text-input :value="$product->name" name="product_name" label="Nama" placeholder="Spunbond Press"
            class="mb-6" />
        <div id="field-container" class="grid gap-6 mb-6 md:grid-cols-2">
            <x-form.select-option :collection="$categories" :oldvalue="$product->category_id" name="product_category" label="Kategori"
                value="" option="Pilih Kategori" class="" />
            <x-form.select-option :collection="$flags" :oldvalue="$product->flag_id" name="product_flag" label="Flag" value=""
                option="Pilih Flag" class="" />
        </div>
        <x-form.ckeditor :value="$product->description" name="product_description" label="Deskripsi"
            placeholder="Spunbond Press merupakan tas..." class="mb-6" />
        <x-caption title="Ukuran dan Harga" class="mb-6" />
        <div class="mb-6">
            <div class="repeater-list mb-4 space-y-6">
                @if (count($variants) === 0)
                    <x-form.product-variants class="repeater-wrapper md:pt-6" />
                @endif
                @foreach ($variants as $variant)
                    <x-form.product-variants :size="$variant->size" :selling_price="$variant->selling_price" :cuts_price="$variant->cuts_price"
                        class="repeater-wrapper md:pt-6">
                        <input type="hidden" name="variant[]" value="{{ $variant->id }}"></input>
                    </x-form.product-variants>
                @endforeach
            </div>
            <div class="flex flex-wrap">
                <div class="flex shrink-0 w-full">
                    <button type="button"
                        class="btn-repeater-create text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah
                        Varian</button>
                </div>
            </div>
        </div>
        <div class="upload-container mb-6">
            <x-caption title="Gambar" class="mb-6" />
            <div class="image-preview-wrapper flex flex-wrap gap-2 mb-6">
                @if (count($product_images) > 0)
                    @foreach ($product_images as $img)
                        <div class='w-fit relative'>
                            <img src='{{ asset('storage/' . $img->image) }}' data-file="{{ $img->id }}"
                                class='h-40' />
                            <div
                                class='img-close absolute top-px right-px text-center text-white z-10 cursor-pointer w-6 h-6 rounded-full bg-gray-900 opacity-50'>
                                X</div>
                        </div>
                    @endforeach
                @endif
            </div>
            <x-form.multiple-files name="product_images[]" label="Upload Gambar Produk"
                accept="image/jpeg, image/jpg, image/png" class="input-images" />
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG or JPG (MAX. 800x800).</p>
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
    </form>

</div>
