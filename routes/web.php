<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FlagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Authentication
Route::controller(AuthenticationController::class)->name('auth.')->group(function() {
    Route::get('sign-in', 'signInPage')->name('sign-in');
    Route::get('sign-up', 'signUpPage')->name('sign-up');
    Route::get('forgot-password', 'forgotPasswordPage')->name('forgot-password');
    Route::get('log-in', 'logInPage')->name('log-in');
});

//User
Route::resource('user', UserController::class);

//Address
Route::resource('address', AddressController::class);

// Dashboard
Route::controller(DashboardController::class)->name('dashboard.')->group(function () {
    Route::get('dashboard', 'index')->name('index');
});

// Home
Route::controller(HomeController::class)->name('home.')->group(function () {
    Route::get('home', 'index')->name('index');
});

// Product
Route::controller(ProductController::class)->prefix('product')->name('product.')->group(function() {
    Route::get('category/{category}', 'getProductByCategory')->name('category');
    Route::get('tag/{tag}', 'getProductByTag')->name('tag');
});
Route::resource('product', ProductController::class);

// Category
Route::resource('category', CategoryController::class);

// Flag
Route::resource('flag', FlagController::class);

//Tag
Route::resource('tag', TagController::class);

// Chart
Route::resource('cart', CartController::class);

// Quotation
Route::resource('quotation', QuotationController::class);

// Invoice
Route::resource('invoice', InvoiceController::class);

// Order
Route::resource('order', OrderController::class);

Route::controller(SessionController::class)->prefix('session')->name('session.')->group( function () {
    Route::post('flash', 'setFlashMessage')->name('flash');
});

Route::get('about-us', function () {
    $logo = [
        "image" => "logo.png",
        "name" => "Goodiebagcustom",
        "alt" => "goodiebagcustom"
    ];

    $menu = [
        [
            "name" => "Beranda",
            "path" => "/home",
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
            "path" => "/about-us",
            "type" => "text"
        ],
        [
            "name" => "Kontak Kami",
            "path" => "/contact-us",
            "type" => "text"
        ],
        [
            "name" => "Masuk",
            "path" => "/sign-in",
            "type" => "text",
            "src" => "icons.svg#icon-user-circle"
        ],
        [
            "name" => "Tas Belanja",
            "path" => "/chart",
            "type" => "icon",
            "src" => "icons.svg#icon-shopping-bag"
        ],
    ];

    return view('user.about_us', compact('logo', 'menu'));
})->name('about-us');

Route::get('/contact-us', function () {
    $logo = [
        "image" => "logo.png",
        "name" => "Goodiebagcustom",
        "alt" => "goodiebagcustom"
    ];

    $menu = [
        [
            "name" => "Beranda",
            "path" => "/home",
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
            "path" => "/about-us",
            "type" => "text"
        ],
        [
            "name" => "Kontak Kami",
            "path" => "/contact-us",
            "type" => "text"
        ],
        [
            "name" => "Masuk",
            "path" => "/sign-in",
            "type" => "text",
            "src" => "icons.svg#icon-user-circle"
        ],
        [
            "name" => "Tas Belanja",
            "path" => "/chart",
            "type" => "icon",
            "src" => "icons.svg#icon-shopping-bag"
        ],
    ];

    return view('user.contact_us', compact('logo', 'menu'));
})->name('contactUs');

//     Route::get('cara-pemesanan', function () {
//         $logo = [
//             "image" => "logo.png",
//             "name" => "Goodiebagcustom",
//             "alt" => "goodiebagcustom"
//         ];

//         $menu = [
//             [
//                 "name" => "Beranda",
//                 "path" => "/home",
//                 "type" => "text"
//             ],
//             [
//                 "name" => "Produk",
//                 "path" => "#",
//                 "type" => "text",
//                 "category" => [
//                     [
//                         "name" => "Goodiebag",
//                         "path" => "goodiebag",
//                         "type" => "text"
//                     ],
//                     [
//                         "name" => "Tas Ransel",
//                         "path" => "produk/tas-ransel",
//                         "type" => "text"
//                     ],
//                     [
//                         "name" => "Pouch",
//                         "path" => "produk/pouch",
//                         "type" => "text"
//                     ]
//                 ],
//             ],
//             [
//                 "name" => "Tentang Kami",
//                 "path" => "/about-us",
//                 "type" => "text"
//             ],
//             [
//                 "name" => "Kontak Kami",
//                 "path" => "/contact-us",
//                 "type" => "text"
//             ],
//             [
//                 "name" => "Masuk",
//                 "path" => "/sign-in",
//                 "type" => "text",
//                 "src" => "icons.svg#icon-user-circle"
//             ],
//             [
//                 "name" => "Tas Belanja",
//                 "path" => "/chart",
//                 "type" => "icon",
//                 "src" => "icons.svg#icon-shopping-bag"
//             ],
//         ];

//         return view('user.order_guide', compact('logo', 'menu'));
//     })->name('orderGuide'); 

//     Route::get('buat-pesanan', function () {
//         $logo = [
//             "image" => "logo.png",
//             "name" => "Goodiebagcustom",
//             "alt" => "goodiebagcustom"
//         ];

//         $menu = [
//             [
//                 "name" => "Beranda",
//                 "path" => "/home",
//                 "type" => "text"
//             ],
//             [
//                 "name" => "Produk",
//                 "path" => "#",
//                 "type" => "text",
//                 "category" => [
//                     [
//                         "name" => "Goodiebag",
//                         "path" => "goodiebag",
//                         "type" => "text"
//                     ],
//                     [
//                         "name" => "Tas Ransel",
//                         "path" => "produk/tas-ransel",
//                         "type" => "text"
//                     ],
//                     [
//                         "name" => "Pouch",
//                         "path" => "produk/pouch",
//                         "type" => "text"
//                     ]
//                 ],
//             ],
//             [
//                 "name" => "Tentang Kami",
//                 "path" => "/about-us",
//                 "type" => "text"
//             ],
//             [
//                 "name" => "Kontak Kami",
//                 "path" => "/contact-us",
//                 "type" => "text"
//             ],
//             [
//                 "name" => "Masuk",
//                 "path" => "/sign-in",
//                 "type" => "text",
//                 "src" => "icons.svg#icon-user-circle"
//             ],
//             [
//                 "name" => "Tas Belanja",
//                 "path" => "/chart",
//                 "type" => "icon",
//                 "src" => "icons.svg#icon-shopping-bag"
//             ],
//         ];

//         return view('user.order', compact('logo', 'menu'));
//     })->name('order'); 

//     Route::get('produk-rekomendasi', function() {
//         $logo = [
//             "image" => "logo.png",
//             "name" => "Goodiebagcustom",
//             "alt" => "goodiebagcustom"
//         ];

//         $menu = [
//             [
//                 "name" => "Beranda",
//                 "path" => "/home",
//                 "type" => "text"
//             ],
//             [
//                 "name" => "Produk",
//                 "path" => "#",
//                 "type" => "text",
//                 "category" => [
//                     [
//                         "name" => "Goodiebag",
//                         "path" => "goodiebag",
//                         "type" => "text"
//                     ],
//                     [
//                         "name" => "Tas Ransel",
//                         "path" => "produk/tas-ransel",
//                         "type" => "text"
//                     ],
//                     [
//                         "name" => "Pouch",
//                         "path" => "produk/pouch",
//                         "type" => "text"
//                     ]
//                 ],
//             ],
//             [
//                 "name" => "Tentang Kami",
//                 "path" => "/about-us",
//                 "type" => "text"
//             ],
//             [
//                 "name" => "Kontak Kami",
//                 "path" => "/contact-us",
//                 "type" => "text"
//             ],
//             [
//                 "name" => "Masuk",
//                 "path" => "/sign-in",
//                 "type" => "text",
//                 "src" => "icons.svg#icon-user-circle"
//             ],
//             [
//                 "name" => "Tas Belanja",
//                 "path" => "/chart",
//                 "type" => "icon",
//                 "src" => "icons.svg#icon-shopping-bag"
//             ],
//         ];

//         return view('user.product', compact('logo', 'menu'));
//     })->name('recommended');

//     Route::get('masuk', function () {
//         $logo = [
//             "image" => "logo.png",
//             "name" => "Goodiebagcustom",
//             "alt" => "goodiebagcustom"
//         ];

//         return view('user.authentication', compact('logo'));
//     })->name('login');

//     Route::get('daftar', function () {
//         $logo = [
//             "image" => "logo.png",
//             "name" => "Goodiebagcustom",
//             "alt" => "goodiebagcustom"
//         ];

//         return view('user.authentication', compact('logo'));
//     })->name('register');

//     Route::get('lupa-kata-sandi', function () {
//         $logo = [
//             "image" => "logo.png",
//             "name" => "Goodiebagcustom",
//             "alt" => "goodiebagcustom"
//         ];

//         return view('user.authentication', compact('logo'));
//     })->name('forgot_password');

//     Route::get('detail-produk', function() {
//         $logo = [
//             "image" => "logo.png",
//             "name" => "Goodiebagcustom",
//             "alt" => "goodiebagcustom"
//         ];
//         $menu = [
//             [
//                 "name" => "Beranda",
//                 "path" => "/home",
//                 "type" => "text"
//             ],
//             [
//                 "name" => "Produk",
//                 "path" => "#",
//                 "type" => "text",
//                 "category" => [
//                     [
//                         "name" => "Goodiebag",
//                         "path" => "goodiebag",
//                         "type" => "text"
//                     ],
//                     [
//                         "name" => "Tas Ransel",
//                         "path" => "produk/tas-ransel",
//                         "type" => "text"
//                     ],
//                     [
//                         "name" => "Pouch",
//                         "path" => "produk/pouch",
//                         "type" => "text"
//                     ]
//                 ],
//             ],
//             [
//                 "name" => "Tentang Kami",
//                 "path" => "/about-us",
//                 "type" => "text"
//             ],
//             [
//                 "name" => "Kontak Kami",
//                 "path" => "/contact-us",
//                 "type" => "text"
//             ],
//             [
//                 "name" => "Masuk",
//                 "path" => "/sign-in",
//                 "type" => "text",
//                 "src" => "icons.svg#icon-user-circle"
//             ],
//             [
//                 "name" => "Tas Belanja",
//                 "path" => "/chart",
//                 "type" => "icon",
//                 "src" => "icons.svg#icon-shopping-bag"
//             ],
//         ];
//         return view('user.product', compact('logo', 'menu'));
//     })->name('product_detail');
// });
