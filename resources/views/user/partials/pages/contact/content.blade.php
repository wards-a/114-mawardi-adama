<section id="contact-us-formulir" class="mb-10">
    <div class="flex flex-col w-11/12 mx-auto px-4">
        <h1 class="text-lg text-slate-700 mb-2 lg:text-xl">Hubungi Kami</h1>
        <p class="text-xs text-slate-500 mb-1 lg:text-sm">Sampaikan pertanyaan, saran, dan masukan Anda melalui formulir di bawah.</p>
        <div id="contact-form-container">
            <form action="" method="post" class="space-y-8"> {{-- route('user.contact.send') --}}
                @csrf
                <div class="relative input">
                    <label for="name" class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Nama Lengkap <span class="text-xs">*</span></label>
                    <input type="text" name="name" id="name" class="w-full border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:outline-0 focus:border-b-2 focus:border-b-sky-700" required>
                </div>
                <div class="relative input">
                    <label for="email" class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Email <span class="text-xs">*</span></label>
                    <input type="email" name="email" id="email" class="w-full border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:outline-0 focus:border-b-2 focus:border-b-sky-700" required>
                </div>
                <div class="relative input">
                    <label for="subject" class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Subjek Pesan <span class="text-xs">*</span></label>
                    <input type="text" name="subject" id="subject" class="w-full border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:outline-0 focus:border-b-2 focus:border-b-sky-700" required>
                </div>
                <div class="relative input">
                    <label for="message" class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Pesan <span class="text-xs">*</span></label>
                    <textarea name="message" id="message" class="w-full border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:outline-0 focus:border-b-2 focus:border-b-sky-700" rows="5" required></textarea>
                </div>
                <button type="submit" class="w-full py-1 text-center text-white font-medium bg-green-600 rounded-sm hover:bg-green-700 transition-all duration-300 active:bg-green-800 md:w-52">KIRIM PESAN</button>
            </form>
        </div>
    </div>
</section>

@push('scripts')
    @vite('resources/js/user/contact/contact-form.js')
@endpush