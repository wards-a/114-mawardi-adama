<section id="contact-us-formulir" class="mb-10">
    <div class="w-11/12 mx-auto px-4">
        <h1 class="text-lg text-slate-700 mb-2 lg:text-xl">Hubungi Kami</h1>
        <p class="text-xs text-slate-500 mb-1 lg:text-sm">Sampaikan pertanyaan, saran, dan masukan Anda melalui formulir di bawah.</p>
        <div class="flex flex-col gap-10 md:flex-row">
            <div id="contact-form-container" class="md:basis-9/12 md:pr-14 md:border-r md:border-slate-500">
                <form id="formContactUs" action="" method="post" class="space-y-8"> {{-- route('user.contact.send') --}}
                    @csrf
                    <fieldset class="relative input">
                        <label for="name" class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Nama Lengkap <span class="text-xs">*</span></label>
                        <input type="text" name="name" id="name" class="w-full border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:outline-0 focus:border-b-2 focus:border-b-sky-700" required>
                    </fieldset>
                    <fieldset class="relative input">
                        <label for="email_user" class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Email <span class="text-xs">*</span></label>
                        <input type="email" name="email_user" id="email_user" class="w-full border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:outline-0 focus:border-b-2 focus:border-b-sky-700" required>
                    </fieldset>
                    <fieldset class="relative input">
                        <label for="subject" class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Subjek Pesan <span class="text-xs">*</span></label>
                        <input type="text" name="subject" id="subject" class="w-full border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:outline-0 focus:border-b-2 focus:border-b-sky-700" required>
                    </fieldset>
                    <fieldset class="relative input">
                        <label for="message" class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Pesan <span class="text-xs">*</span></label>
                        <textarea name="message" id="message" class="w-full border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:outline-0 focus:border-b-2 focus:border-b-sky-700" rows="5" required></textarea>
                    </fieldset>
                    <button type="submit" class="w-full py-1.5 text-center text-sm text-sky-800 font-medium bg-slate-200 rounded-sm transition-all duration-300 hover:bg-slate-300 active:bg-sky-700 active:text-white sm:w-40">Kirim Pesan</button>
                </form>
            </div>
            <div id="contact-order" class="space-y-3 md:pt-9">
                <h2 class="text-sm text-slate-500">Atau untuk seputar produk dan pemesanan Anda bisa menghubungi kami melalui</h2>
                <div class="flex justify-start gap-x-3">
                    <x-svg class="w-7 h-7 text-sky-900">
                        <use xlink:href="icons.svg#icon-whatsapp"></use>
                    </x-svg>
                    <div class="space-y-px">
                        <p class="text-sm font-semibold text-sky-800">Whatsapp</p>
                        {{-- <p class="text-slate-500 text-xs font-medium">Melayani Anda pada 08.00 - 16.00 WIB</p> --}}
                        <div class="text-sm text-slate-600 space-y-px">
                            <p>Kevin: 0859 1067 87863</p>
                            <p>Eksa: 0821 2284 8815</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-start gap-x-3">
                    <x-svg class="w-7 h-7 text-sky-900">
                        <use xlink:href="icons.svg#icon-envelope"></use>
                    </x-svg>
                    <div class="space-y-px">
                        <p class="text-sm font-semibold text-sky-800">Email</p>
                        {{-- <p class="text-slate-500 text-xs font-medium">Melayani Anda pada 08.00 - 16.00 WIB</p> --}}
                        <div class="text-sm text-slate-600 space-y-px">
                            <p>customgoodiebag@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>