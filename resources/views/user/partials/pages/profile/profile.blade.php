<section id="user-profile" class="mb-10 min-h-screen sm:min-h-min">
    <div class="w-11/12 mx-auto mb-5">
        <h1 class="text-lg lg:text-xl">Data Saya</h1>
    </div>
    <div class="flex flex-wrap justify-between w-11/12 mx-auto">
        <div id="user-profile-menu-list" class="flex-1 mr-0 md:mr-10 xl:mr-12">
            <div class="flex flex-col gap-2">
                <div class="shadow hover:bg-slate-100">
                    <a href="/user/1/edit" class="group w-full text-slate-700 hover:text-slate-800">
                        <div class="flex justify-between gap-4 basis-full p-2 md:p-4 md:pt-8 lg:pt-5 lg:basis-1/2">
                            <div class="flex items-center gap-1">
                                <x-svg class="w-5 h-5" fill="currentColor">
                                    <use xlink:href="/icons.svg#icon-user" />
                                </x-svg>
                                <h1 class="text-sm font-medium sm:text-base">Mawardi Adama</h1>
                            </div>
                            <x-svg class="w-5 h-5" fill="none">
                                <use xlink:href="/icons.svg#icon-angle-right" />
                            </x-svg>
                        </div>
                    </a>
                </div>
                <div class="shadow hover:bg-slate-100">
                    <a href="/order" class="w-full text-slate-700 hover:text-slate-800">
                        <div class="flex justify-between gap-4 basis-full p-2 md:p-4 md:pt-8 lg:pt-5 lg:basis-1/2">
                            <div class="flex items-center gap-1">
                                <x-svg class="w-5 h-5" fill="currentColor">
                                    <use xlink:href="/icons.svg#icon-receipt" />
                                </x-svg>
                                <h1 class="text-sm font-medium sm:text-base">Daftar Pesanan</h1>
                            </div>
                            <x-svg class="w-5 h-5" fill="none">
                                <use xlink:href="/icons.svg#icon-angle-right" />
                            </x-svg>
                        </div>
                    </a>
                </div>
                <div class="shadow hover:bg-slate-100">
                    <a href="/address" class="w-full text-slate-700 hover:text-slate-800">
                        <div class="flex justify-between gap-4 basis-full p-2 md:p-4 md:pt-8 lg:pt-5 lg:basis-1/2">
                            <div class="flex items-center gap-1">
                                <x-svg class="w-5 h-5" fill="currentColor">
                                    <use xlink:href="/icons.svg#icon-map-pin-alt" />
                                </x-svg>
                                <h1 class="text-sm font-medium sm:text-base">Daftar Alamat</h1>
                            </div>
                            <x-svg class="w-5 h-5" fill="none">
                                <use xlink:href="/icons.svg#icon-angle-right" />
                            </x-svg>
                        </div>
                    </a>
                </div>
                <div class="shadow hover:bg-slate-100">
                    <a href="/user/change-password" class="w-full text-slate-700 hover:text-slate-800">
                        <div class="flex justify-between gap-4 basis-full p-2 md:p-4 md:pt-8 lg:pt-5 lg:basis-1/2">
                            <div class="flex items-center gap-1">
                                <x-svg class="w-5 h-5" fill="currentColor">
                                    <use xlink:href="/icons.svg#icon-lock" />
                                </x-svg>
                                <h1 class="text-sm font-medium sm:text-base">Ubah Kata Sandi</h1>
                            </div>
                            <x-svg class="w-5 h-5" fill="none">
                                <use xlink:href="/icons.svg#icon-angle-right" />
                            </x-svg>
                        </div>
                    </a>
                </div>
                <div class="shadow hover:bg-slate-100">
                    <a href="/sign-out" class="w-full text-red-500 hover:text-red-600">
                        <div class="flex justify-between gap-4 basis-full p-2 md:p-4 md:pt-8 lg:pt-5 lg:basis-1/2">
                            <div class="flex items-center gap-1">
                                <x-svg class="w-5 h-5" fill="none">
                                    <use xlink:href="/icons.svg#icon-arrow-right-from-bracket" />
                                </x-svg>
                                <h1 class="text-sm font-medium sm:text-base">Keluar</h1>
                            </div>
                            {{-- <x-svg class="w-5 h-5" fill="none">
                                <use xlink:href="/icons.svg#icon-angle-right" />
                            </x-svg> --}}
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>