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
            [
                "name" => "Beranda",
                "path" => "beranda",
                "type" => "text"
            ],
            [
                "name" => "Produk",
                "path" => "#",
                "type" => "text",
                "category" => [
                    [
                        "name" => "Goodiebag",
                        "path" => "goodiebag",
                        "type" => "text"
                    ],
                    [
                        "name" => "Tas Ransel",
                        "path" => "produk/tas-ransel",
                        "type" => "text"
                    ],
                    [
                        "name" => "Pouch",
                        "path" => "produk/pouch",
                        "type" => "text"
                    ]
                ],
            ],
            [
                "name" => "Tentang Kami",
                "path" => "tentang-kami",
                "type" => "text"
            ],
            [
                "name" => "Kontak Kami",
                "path" => "kontak-kami",
                "type" => "text"
            ],
            [
                "name" => "Masuk",
                "path" => "masuk",
                "type" => "text",
                "src" => "icons.svg#icon-user-circle"
            ],
            [
                "name" => "Buat Pesanan",
                "path" => "buat-pesanan",
                "type" => "icon",
                "src" => "icons.svg#icon-shopping-bag"
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
            [
                "name" => "Beranda",
                "path" => "beranda",
                "type" => "text"
            ],
            [
                "name" => "Produk",
                "path" => "#",
                "type" => "text",
                "category" => [
                    [
                        "name" => "Goodiebag",
                        "path" => "goodiebag",
                        "type" => "text"
                    ],
                    [
                        "name" => "Tas Ransel",
                        "path" => "produk/tas-ransel",
                        "type" => "text"
                    ],
                    [
                        "name" => "Pouch",
                        "path" => "produk/pouch",
                        "type" => "text"
                    ]
                ],
            ],
            [
                "name" => "Tentang Kami",
                "path" => "tentang-kami",
                "type" => "text"
            ],
            [
                "name" => "Kontak Kami",
                "path" => "kontak-kami",
                "type" => "text"
            ],
            [
                "name" => "Masuk",
                "path" => "masuk",
                "type" => "text",
                "src" => "icons.svg#icon-user-circle"
            ],
            [
                "name" => "Buat Pesanan",
                "path" => "buat-pesanan",
                "type" => "icon",
                "src" => "icons.svg#icon-shopping-bag"
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
            [
                "name" => "Beranda",
                "path" => "beranda",
                "type" => "text"
            ],
            [
                "name" => "Produk",
                "path" => "#",
                "type" => "text",
                "category" => [
                    [
                        "name" => "Goodiebag",
                        "path" => "goodiebag",
                        "type" => "text"
                    ],
                    [
                        "name" => "Tas Ransel",
                        "path" => "produk/tas-ransel",
                        "type" => "text"
                    ],
                    [
                        "name" => "Pouch",
                        "path" => "produk/pouch",
                        "type" => "text"
                    ]
                ],
            ],
            [
                "name" => "Tentang Kami",
                "path" => "tentang-kami",
                "type" => "text"
            ],
            [
                "name" => "Kontak Kami",
                "path" => "kontak-kami",
                "type" => "text"
            ],
            [
                "name" => "Masuk",
                "path" => "masuk",
                "type" => "text",
                "src" => "icons.svg#icon-user-circle"
            ],
            [
                "name" => "Buat Pesanan",
                "path" => "buat-pesanan",
                "type" => "icon",
                "src" => "icons.svg#icon-shopping-bag"
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
            [
                "name" => "Beranda",
                "path" => "beranda",
                "type" => "text"
            ],
            [
                "name" => "Produk",
                "path" => "#",
                "type" => "text",
                "category" => [
                    [
                        "name" => "Goodiebag",
                        "path" => "goodiebag",
                        "type" => "text"
                    ],
                    [
                        "name" => "Tas Ransel",
                        "path" => "produk/tas-ransel",
                        "type" => "text"
                    ],
                    [
                        "name" => "Pouch",
                        "path" => "produk/pouch",
                        "type" => "text"
                    ]
                ],
            ],
            [
                "name" => "Tentang Kami",
                "path" => "tentang-kami",
                "type" => "text"
            ],
            [
                "name" => "Kontak Kami",
                "path" => "kontak-kami",
                "type" => "text"
            ],
            [
                "name" => "Masuk",
                "path" => "masuk",
                "type" => "text",
                "src" => "icons.svg#icon-user-circle"
            ],
            [
                "name" => "Buat Pesanan",
                "path" => "buat-pesanan",
                "type" => "icon",
                "src" => "icons.svg#icon-shopping-bag"
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
            [
                "name" => "Beranda",
                "path" => "beranda",
                "type" => "text"
            ],
            [
                "name" => "Produk",
                "path" => "#",
                "type" => "text",
                "category" => [
                    [
                        "name" => "Goodiebag",
                        "path" => "goodiebag",
                        "type" => "text"
                    ],
                    [
                        "name" => "Tas Ransel",
                        "path" => "produk/tas-ransel",
                        "type" => "text"
                    ],
                    [
                        "name" => "Pouch",
                        "path" => "produk/pouch",
                        "type" => "text"
                    ]
                ],
            ],
            [
                "name" => "Tentang Kami",
                "path" => "tentang-kami",
                "type" => "text"
            ],
            [
                "name" => "Kontak Kami",
                "path" => "kontak-kami",
                "type" => "text"
            ],
            [
                "name" => "Masuk",
                "path" => "masuk",
                "type" => "text",
                "src" => "icons.svg#icon-user-circle"
            ],
            [
                "name" => "Buat Pesanan",
                "path" => "buat-pesanan",
                "type" => "icon",
                "src" => "icons.svg#icon-shopping-bag"
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
            [
                "name" => "Beranda",
                "path" => "beranda",
                "type" => "text"
            ],
            [
                "name" => "Produk",
                "path" => "#",
                "type" => "text",
                "category" => [
                    [
                        "name" => "Goodiebag",
                        "path" => "goodiebag",
                        "type" => "text"
                    ],
                    [
                        "name" => "Tas Ransel",
                        "path" => "produk/tas-ransel",
                        "type" => "text"
                    ],
                    [
                        "name" => "Pouch",
                        "path" => "produk/pouch",
                        "type" => "text"
                    ]
                ],
            ],
            [
                "name" => "Tentang Kami",
                "path" => "tentang-kami",
                "type" => "text"
            ],
            [
                "name" => "Kontak Kami",
                "path" => "kontak-kami",
                "type" => "text"
            ],
            [
                "name" => "Masuk",
                "path" => "masuk",
                "type" => "text",
                "src" => "icons.svg#icon-user-circle"
            ],
            [
                "name" => "Buat Pesanan",
                "path" => "buat-pesanan",
                "type" => "icon",
                "src" => "icons.svg#icon-shopping-bag"
            ],
        ];

        return view('user.order', compact('logo', 'menu'));
    })->name('order'); 

    Route::get('masuk', function () {
        $logo = [
            "image" => "logo.png",
            "caption" => "Goodiebagcustom",
            "alt" => "goodiebagcustom"
        ];

        $menu = [
            [
                "name" => "Beranda",
                "path" => "beranda",
                "type" => "text"
            ],
            [
                "name" => "Produk",
                "path" => "#",
                "type" => "text",
                "category" => [
                    [
                        "name" => "Goodiebag",
                        "path" => "goodiebag",
                        "type" => "text"
                    ],
                    [
                        "name" => "Tas Ransel",
                        "path" => "produk/tas-ransel",
                        "type" => "text"
                    ],
                    [
                        "name" => "Pouch",
                        "path" => "produk/pouch",
                        "type" => "text"
                    ]
                ],
            ],
            [
                "name" => "Tentang Kami",
                "path" => "tentang-kami",
                "type" => "text"
            ],
            [
                "name" => "Kontak Kami",
                "path" => "kontak-kami",
                "type" => "text"
            ],
            [
                "name" => "Masuk",
                "path" => "masuk",
                "type" => "text",
                "src" => "icons.svg#icon-user-circle"
            ],
            [
                "name" => "Buat Pesanan",
                "path" => "buat-pesanan",
                "type" => "icon",
                "src" => "icons.svg#icon-shopping-bag"
            ],
        ];

        return view('user.profile', compact('logo', 'menu'));
    })->name('profile');

    Route::get('produk-rekomendasi', function() {
        $logo = [
            "image" => "logo.png",
            "caption" => "Goodiebagcustom",
            "alt" => "goodiebagcustom"
        ];

        $menu = [
            [
                "name" => "Beranda",
                "path" => "beranda",
                "type" => "text"
            ],
            [
                "name" => "Produk",
                "path" => "#",
                "type" => "text",
                "category" => [
                    [
                        "name" => "Goodiebag",
                        "path" => "goodiebag",
                        "type" => "text"
                    ],
                    [
                        "name" => "Tas Ransel",
                        "path" => "produk/tas-ransel",
                        "type" => "text"
                    ],
                    [
                        "name" => "Pouch",
                        "path" => "produk/pouch",
                        "type" => "text"
                    ]
                ],
            ],
            [
                "name" => "Tentang Kami",
                "path" => "tentang-kami",
                "type" => "text"
            ],
            [
                "name" => "Kontak Kami",
                "path" => "kontak-kami",
                "type" => "text"
            ],
            [
                "name" => "Masuk",
                "path" => "masuk",
                "type" => "text",
                "src" => "icons.svg#icon-user-circle"
            ],
            [
                "name" => "Buat Pesanan",
                "path" => "buat-pesanan",
                "type" => "icon",
                "src" => "icons.svg#icon-shopping-bag"
            ],
        ];

        return view('user.product', compact('logo', 'menu'));
    })->name('recommended');
});