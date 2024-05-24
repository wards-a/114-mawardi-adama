<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $menu;

    public function __construct()
    {
        $this->menu = [
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
                        "path" => "product/category/goodiebag",
                        "type" => "text"
                    ],
                    [
                        "name" => "Tas Ransel",
                        "path" => "product/category/backpack",
                        "type" => "text"
                    ],
                    [
                        "name" => "Pouch",
                        "path" => "product/category/pouch",
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
                "path" => "/cart",
                "type" => "icon",
                "src" => "icons.svg#icon-shopping-bag"
            ],
        ];
    }

    public function index()
    {
        $data = [
            'menu' => $this->menu
        ];

        return view('user.home' ,$data);
    }
}
