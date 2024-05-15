<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('/')->name('user.')->group( function(){

    Route::get('beranda', function () {
        $logo = [
            "image" => "logo.png",
            "caption" => "Goodiebagcustom",
            "alt" => "goodiebagcustom"
        ];

        $menu = [
            "text" => [
                [
                    "name" => "Beranda",
                    "path" => "beranda"
                ],
                [
                    "name" => "Produk",
                    "path" => "produk",
                    "category" => ["Goodiebag", "Tas Ransel", "Pouch"],
                ],
                [
                    "name" => "Tentang Kami",
                    "path" => "tentang-kami"
                ],
                [
                    "name" => "Kontak Kami",
                    "path" => "kontak-kami"
                ],
            ],
            "icon" => [
                [
                    "name" => "Buat Pesanan",
                    "path" => "buat-pesanan",
                    "src" => "icons.svg#icon-shopping-bag"
                ],
                [
                    "name" => "Profil Pengguna",
                    "path" => "profil",
                    "src" => "icons.svg#icon-user-circle"
                ],
            ],
        ];

        return view('user.home', compact('logo', 'menu'));
    })->name('home');

    Route::get('produk', function () {
        $logo = [
            "image" => "logo.png",
            "caption" => "Goodiebagcustom",
            "alt" => "goodiebagcustom"
        ];

        $menu = [
            "text" => [
                [
                    "name" => "Beranda",
                    "path" => "beranda"
                ],
                [
                    "name" => "Produk",
                    "path" => "produk",
                    "category" => ["Goodiebag", "Tas Ransel", "Pouch"],
                ],
                [
                    "name" => "Tentang Kami",
                    "path" => "tentang-kami"
                ],
                [
                    "name" => "Kontak Kami",
                    "path" => "kontak-kami"
                ],
            ],
            "icon" => [
                [
                    "name" => "Buat Pesanan",
                    "path" => "buat-pesanan",
                    "src" => "icons.svg#icon-shopping-bag"
                ],
                [
                    "name" => "Profil Pengguna",
                    "path" => "profil",
                    "src" => "icons.svg#icon-user-circle"
                ],
            ],
        ];

        return view('user.product', compact('logo', 'menu'));
    })->name('product');

    Route::get('tentang-kami', function () {
        $logo = [
            "image" => "logo.png",
            "caption" => "Goodiebagcustom",
            "alt" => "goodiebagcustom"
        ];

        $menu = [
            "text" => [
                [
                    "name" => "Beranda",
                    "path" => "beranda"
                ],
                [
                    "name" => "Produk",
                    "path" => "produk",
                    "category" => ["Goodiebag", "Tas Ransel", "Pouch"],
                ],
                [
                    "name" => "Tentang Kami",
                    "path" => "tentang-kami"
                ],
                [
                    "name" => "Kontak Kami",
                    "path" => "kontak-kami"
                ],
            ],
            "icon" => [
                [
                    "name" => "Buat Pesanan",
                    "path" => "buat-pesanan",
                    "src" => "icons.svg#icon-shopping-bag"
                ],
                [
                    "name" => "Profil Pengguna",
                    "path" => "profil",
                    "src" => "icons.svg#icon-user-circle"
                ],
            ],
        ];

        return view('user.about_us', compact('logo', 'menu'));
    })->name('aboutUs');

    Route::get('kontak-kami', function () {
        $logo = [
            "image" => "logo.png",
            "caption" => "Goodiebagcustom",
            "alt" => "goodiebagcustom"
        ];

        $menu = [
            "text" => [
                [
                    "name" => "Beranda",
                    "path" => "beranda"
                ],
                [
                    "name" => "Produk",
                    "path" => "produk",
                    "category" => ["Goodiebag", "Tas Ransel", "Pouch"],
                ],
                [
                    "name" => "Tentang Kami",
                    "path" => "tentang-kami"
                ],
                [
                    "name" => "Kontak Kami",
                    "path" => "kontak-kami"
                ],
            ],
            "icon" => [
                [
                    "name" => "Buat Pesanan",
                    "path" => "buat-pesanan",
                    "src" => "icons.svg#icon-shopping-bag"
                ],
                [
                    "name" => "Profil Pengguna",
                    "path" => "profil",
                    "src" => "icons.svg#icon-user-circle"
                ],
            ],
        ];

        return view('user.contact_us', compact('logo', 'menu'));
    })->name('contactUs');

    Route::get('cara-pemesanan', function () {
        $logo = [
            "image" => "logo.png",
            "caption" => "Goodiebagcustom",
            "alt" => "goodiebagcustom"
        ];

        $menu = [
            "text" => [
                [
                    "name" => "Beranda",
                    "path" => "beranda"
                ],
                [
                    "name" => "Produk",
                    "path" => "produk",
                    "category" => ["Goodiebag", "Tas Ransel", "Pouch"],
                ],
                [
                    "name" => "Tentang Kami",
                    "path" => "tentang-kami"
                ],
                [
                    "name" => "Kontak Kami",
                    "path" => "kontak-kami"
                ],
            ],
            "icon" => [
                [
                    "name" => "Buat Pesanan",
                    "path" => "buat-pesanan",
                    "src" => "icons.svg#icon-shopping-bag"
                ],
                [
                    "name" => "Profil Pengguna",
                    "path" => "profil",
                    "src" => "icons.svg#icon-user-circle"
                ],
            ],
        ];

        return view('user.order_guide', compact('logo', 'menu'));
    })->name('orderGuide'); 

    Route::get('buat-pesanan', function () {
        $logo = [
            "image" => "logo.png",
            "caption" => "Goodiebagcustom",
            "alt" => "goodiebagcustom"
        ];

        $menu = [
            "text" => [
                [
                    "name" => "Beranda",
                    "path" => "beranda"
                ],
                [
                    "name" => "Produk",
                    "path" => "produk",
                    "category" => ["Goodiebag", "Tas Ransel", "Pouch"],
                ],
                [
                    "name" => "Tentang Kami",
                    "path" => "tentang-kami"
                ],
                [
                    "name" => "Kontak Kami",
                    "path" => "kontak-kami"
                ],
            ],
            "icon" => [
                [
                    "name" => "Buat Pesanan",
                    "path" => "buat-pesanan",
                    "src" => "icons.svg#icon-shopping-bag"
                ],
                [
                    "name" => "Profil Pengguna",
                    "path" => "profil",
                    "src" => "icons.svg#icon-user-circle"
                ],
            ],
        ];

        return view('user.order', compact('logo', 'menu'));
    })->name('order'); 

    Route::get('profil', function () {
        $logo = [
            "image" => "logo.png",
            "caption" => "Goodiebagcustom",
            "alt" => "goodiebagcustom"
        ];

        $menu = [
            "text" => [
                [
                    "name" => "Beranda",
                    "path" => "beranda"
                ],
                [
                    "name" => "Produk",
                    "path" => "produk",
                    "category" => ["Goodiebag", "Tas Ransel", "Pouch"],
                ],
                [
                    "name" => "Tentang Kami",
                    "path" => "tentang-kami"
                ],
                [
                    "name" => "Kontak Kami",
                    "path" => "kontak-kami"
                ],
            ],
            "icon" => [
                [
                    "name" => "Buat Pesanan",
                    "path" => "buat-pesanan",
                    "src" => "icons.svg#icon-shopping-bag"
                ],
                [
                    "name" => "Profil Pengguna",
                    "path" => "profil",
                    "src" => "icons.svg#icon-user-circle"
                ],
            ],
        ];

        return view('user.profile', compact('logo', 'menu'));
    })->name('profile'); 
});