<section id="contact-us-formulir" class="mb-10">
    <div class="flex flex-col w-11/12 mx-auto px-4 sm:max-w-md">
        <h1 class="text-2xl text-sky-800 mb-2">Daftar</h1>
        <div id="contact-form-container">
            <form id="formRegistration" action="" method="post" class="space-y-8 mb-5"> {{-- route('user.contact.send') --}}
                @csrf
                <div class="relative input">
                    <label for="name" class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Nama Lengkap</label>
                    <input type="name" name="name" id="name" class="w-full ps-0 border-0 border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:ring-0 focus:outline-0 focus:border-b-2 focus:border-b-sky-700" required>
                </div>
                <div class="relative input">
                    <label for="email" class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Email</label>
                    <input type="email" name="email" id="email" class="w-full ps-0 border-0 border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:ring-0 focus:outline-0 focus:border-b-2 focus:border-b-sky-700" required>
                </div>
                <div class="relative input">
                    <label for="subject" class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Kata Sandi</label>
                    <input type="password" name="subject" id="subject" class="w-full ps-0 border-0 border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:ring-0 focus:outline-0 focus:border-b-2 focus:border-b-sky-700" required>
                </div>
                <div class="flex justify-center text-center text-sm">
                    <button type="submit" class="w-full py-1.5 mx-auto text-sky-800 bg-slate-200 rounded-sm hover:bg-slate-300 transition-all duration-300 active:bg-sky-700 active:text-white sm:w-52">Daftar</button>
                </div>
            </form>
        </div>
        <div class="mx-auto text-sm">
            <p class="inline-block text-slate-950">Sudah punya akun?</p>
            <a href="{{ route('login') }}" class="underline text-sky-700 active:text-sky-900">Masuk</a>
        </div>
    </div>
</section>