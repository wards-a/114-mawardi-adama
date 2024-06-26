<section id="contact-us-formulir" class="mb-10">
    <div class="flex flex-col w-11/12 mx-auto px-4 sm:max-w-md">
        <h1 class="text-2xl text-sky-800 mb-2">Masuk</h1>
        @if ($errors->has('login'))
            <span class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert">
                <strong>{{ $errors->first('login') }}</strong>
            </span>
        @endif
        <div id="contact-form-container">
            <form id="formLogin" action="{{ route('login.auth') }}" method="POST" class="space-y-8 mb-5">
                @csrf
                <div class="relative input">
                    <label for="email"
                        class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Email</label>
                    <input type="text" name="email" id="email"
                        class="w-full ps-0 border-0 border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:ring-0 focus:outline-0 focus:border-b-2 focus:border-b-sky-700">
                    @error('email')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="relative input">
                    <label for="password" class="absolute top-1.5 text-sm text-slate-500 transiton duration-300">Kata
                        Sandi</label>
                    <input type="password" name="password" id="password"
                        class="w-full ps-0 border-0 border-b border-slate-400 text-sm py-1 transition-colors duration-300 focus:ring-0 focus:outline-0 focus:border-b-2 focus:border-b-sky-700">
                    @error('password')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="flex flex-col justify-center gap-y-5 text-center text-sm">
                    <a href="{{ route('forgot-password') }}" class="underline text-sky-700 active:text-sky-700">Lupa
                        kata sandi?</a>
                    <button id="btnSubmit" type="submit"
                        class="w-full py-1.5 mx-auto text-sky-800 bg-slate-200 rounded-sm hover:bg-slate-300 transition-all duration-300 active:bg-sky-700 active:text-white sm:w-52">Masuk</button>
                </div>
            </form>
        </div>
        <div class="mx-auto text-sm">
            <p class="inline-block text-slate-950">Belum punya akun?</p>
            <a href="{{ route('register') }}" class="underline text-sky-700 active:text-sky-900">Daftar</a>
        </div>
    </div>
</section>
