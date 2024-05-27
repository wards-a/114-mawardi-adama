<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
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
                        "path" => "/product/category/goodiebag",
                        "type" => "text"
                    ],
                    [
                        "name" => "Tas Ransel",
                        "path" => "/product/category/backpack",
                        "type" => "text"
                    ],
                    [
                        "name" => "Pouch",
                        "path" => "/product/category/pouch",
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

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = [
        //     'menu' => $this->menu
        // ];

        // return view('user.product', $data);

        $products = $this->fetchProductsForTableContent();

        $table_heads = ['Produk', 'Deskripsi', 'Kategori', 'Flag'];
        $table_actions = [
            [
                'name' => 'edit',
                'route' => 'product.edit',
            ],
            [
                'name' => 'remove',
                'route' => '/product',
            ],
        ];

        return view('admin.product', compact('products', 'table_heads', 'table_actions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product');
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
        $data = [
            'menu' => $this->menu
        ];

        return view('user.product', $data);
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

    // Show product by category
    public function getProductByCategory(string $category)
    {
        $data = [
            'menu' => $this->menu
        ];

        return view('user.product', $data);
    }

    // Show product by tag
    public function getProductByTag(string $tag)
    {
        $data = [
            'menu' => $this->menu
        ];

        return view('user.product', $data);
    }

    private function fetchProductsForTableContent()
    {
        $products = Product::select(
            'products.name',
            'products.description',
            DB::raw('COALESCE(c.name, \'No Category Assigned\') as category'),
            DB::raw('COALESCE(f.name, \'No Flag Assigned\') as flag'),
            'products.id'
        )
            ->leftJoin('categories as c', 'c.id', '=', 'products.category_id')
            ->leftJoin('flags as f', 'f.id', '=', 'products.flag_id')
            ->orderBy('products.name', 'asc')
            ->paginate(10);

        return $products;
    }
}
