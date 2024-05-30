<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FlagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\WithoutAuth;
use Illuminate\Support\Facades\Route;

// if user access a non exist route
Route::fallback(function () {
    return response()->view('404page');
});

// Authentication
Route::controller(AuthenticationController::class)->group(function() {
    // login logout user
    Route::get('login', 'logInPage')->name('login')->middleware(WithoutAuth::class);
    Route::post('login', 'logIn')->name('login.auth')->middleware(WithoutAuth::class);
    Route::post('logout', 'logOut')->name('logout')->middleware('auth');
    // register user
    Route::get('register', 'registerPage')->name('register')->middleware(WithoutAuth::class);
    Route::post('register', 'register')->name('register.auth')->middleware(WithoutAuth::class);
    //reset password
    Route::get('forgot-password', 'forgotPasswordPage')->name('forgot-password')->middleware(WithoutAuth::class);
    // login logout admin
    Route::get('signin', 'signInPage')->name('signin')->middleware(WithoutAuth::class);
    Route::post('signin', 'signIn')->name('signin.auth')->middleware(WithoutAuth::class);
    Route::post('signout', 'signOut')->name('signout')->middleware('admin');
});

// User Profile
Route::singleton('profile', ProfileController::class)->middleware('auth');

//Address
Route::resource('address', AddressController::class)->middleware('auth');

// Home
Route::controller(HomeController::class)->name('home.')->group(function () {
    Route::get('home', 'index')->name('index');
});

// Dashboard
Route::controller(DashboardController::class)->name('dashboard.')->group(function () {
    Route::get('dashboard', 'index')->name('index')->middleware('admin');
});

// User (CRUD)
Route::resource('user', UserController::class)->middleware('admin');

// Product
Route::controller(ProductController::class)->prefix('product')->name('product.')->group(function() {
    Route::get('category/{category}', 'getProductsByCategory')->name('category');
    Route::get('search', 'search')->name('search');
});
Route::resource('product', ProductController::class);

// Category
Route::resource('category', CategoryController::class)->middleware('admin');

// Flag
Route::resource('flag', FlagController::class)->middleware('admin');

//Tag
// Route::resource('tag', TagController::class);

// Chart
Route::resource('cart', CartController::class)->middleware('auth');

// Quotation
Route::resource('quotation', QuotationController::class);

// Invoice
Route::resource('invoice', InvoiceController::class);

// Order
Route::resource('order', OrderController::class);

// Route::controller(SessionController::class)->prefix('session')->name('session.')->group( function () {
//     Route::post('flash', 'setFlashMessage')->name('flash');
// });

Route::controller(AboutController::class)->group(function () {
    Route::get('about-us', 'index')->name('about-us');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('contact-us', 'index')->name('contact-us');
});

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
