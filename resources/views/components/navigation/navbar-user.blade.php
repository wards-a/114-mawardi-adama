@props(['submenus' => []])

<nav {{ $attributes }}>
    <ul class="lg:flex lg:items-center lg:gap-x-4">
        <x-navigation.menu-user name='Beranda' path='/home' />
        <x-navigation.menu-user :submenus="$submenus" name='Product' path='/product' />
        <x-navigation.menu-user name='Tentang Kami' path='/about-us' />
        <x-navigation.menu-user name='Kontak Kami' path='/contact-us' />

        {{-- is user authenticated or not --}}
        @if (auth()->check())
        <li class="containerMenuProfile h-full content-center">
            <a href="{{ route('profile.show') }}" class="text-nav-header p-2 transition-s-p transition-colors duration-300 ease-in-out lg:p-0 {{ '/'.request()->path() === '/profile' ? 'menu-active' : '' }}" aria-expanded="true" aria-haspopup="true">
                <x-svg class="hidden w-6 h-6 text-nav-header transition-s-p lg:block" fill="none">
                    <use xlink:href="/icons.svg#icon-user-circle"></use>
                </x-svg>
                <span class="lg:hidden">Profile Saya</span>
            </a>
        </li>
        @else
            <x-navigation.menu-user name='Masuk' path='/login' />
        @endif
    </ul>
</nav>