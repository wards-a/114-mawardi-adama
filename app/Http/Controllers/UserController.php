<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
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
                "path" => "/login",
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

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function userProfileMenuPage(string $id) 
    {
        //
    }
}
