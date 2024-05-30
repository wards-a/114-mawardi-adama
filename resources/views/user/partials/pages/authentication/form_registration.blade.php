<section id="contact-us-formulir" class="mb-10 relative top-14">
    <div class="flex flex-col w-11/12 mx-auto px-4 sm:max-w-md">
        <h1 class="text-2xl text-sky-800 mb-10">Daftar</h1>
        <div id="contact-form-container">
            <form id="formRegistration" action="{{ route('register.auth') }}" method="POST" class="mb-5">
                @csrf
                <div class="relative input mb-8">
                    <label for="name" class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Nama
                        Lengkap</label>
                    <input type="text" name="name" id="name"
                        class="w-full ps-0 border-0 border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:ring-0 focus:outline-0 focus:border-b-2 focus:border-b-sky-700">
                    @error('name')
                        <p class="absolute text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="relative input mb-8">
                    <label for="email"
                        class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Email</label>
                    <input type="text" name="email" id="email"
                        class="w-full ps-0 border-0 border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:ring-0 focus:outline-0 focus:border-b-2 focus:border-b-sky-700">
                    @error('email')
                        <p class="absolute text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="relative input mb-8">
                    <label for="password" class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Kata
                        Sandi</label>
                    <input type="password" name="password" id="password"
                        class="w-full ps-0 border-0 border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:ring-0 focus:outline-0 focus:border-b-2 focus:border-b-sky-700">
                    @error('password')
                        <p class="absolute text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="relative input mb-8">
                    <label for="password_confirmation"
                        class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Ulangi Kata Sandi</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="w-full ps-0 border-0 border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:ring-0 focus:outline-0 focus:border-b-2 focus:border-b-sky-700">
                    @error('password_confirmation')
                        <p class="absolute text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="flex justify-center text-center text-sm">
                    <button type="submit"
                        class="w-full py-1.5 mx-auto text-sky-800 bg-slate-200 rounded-sm hover:bg-slate-300 transition-all duration-300 active:bg-sky-700 active:text-white sm:w-52">Daftar</button>
                </div>
            </form>
        </div>
        <div class="mx-auto text-sm">
            <p class="inline-block text-slate-950">Sudah punya akun?</p>
            <a href="{{ route('login') }}" class="underline text-sky-700 active:text-sky-900">Masuk</a>
        </div>
    </div>
</section>
