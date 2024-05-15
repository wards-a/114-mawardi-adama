<footer class="relative w-full top-24">
    <section class="bg-violet-600 pt-5 pb-2 lg:flex">
        <div class="flex flex-wrap relative w-4/5 mx-auto py-7 lg:items-start lg:justify-between">
            {{-- Logo and Company Information --}}
            <x-user.footer.logo :logo="$logo" class="w-full mb-7 md:w-6/12 lg:w-1/5" />

            {{-- Products Navigation --}}
            <x-user.footer.products-nav class="w-full mb-7 md:w-6/12 lg:w-1/5" :menu="$menu" />

            {{-- Information --}}
            <x-user.footer.information-nav class="w-full mb-7 md:w-6/12 lg:w-1/5" />

            {{-- Social and Contact --}}
            <x-user.footer.social-and-contact class="w-full md:w-6/12 md:pt-4 lg:w-1/5" />
        </div>
    </section>
    <section class="p-4 bg-white"></section>
    <section class="bg-violet-700 py-px">
        <div class="py-3 w-4/5 mx-auto">
            <p class="text-white text-sm text-center font-semibold">&#169; 2024 PT. Goodiebag Custom Indonesia</p>
        </div>
    </section>
</footer>