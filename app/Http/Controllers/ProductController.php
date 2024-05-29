<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Flag;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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
        $categories = Category::select('id', 'name')->get();
        $flags = Flag::select('id', 'name')->get();

        return view('admin.product', compact('categories', 'flags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = $this->validation($request);
        // validation failed
        if ($validator !== true) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $formData = $request->all();

        // store product
        $product = [
            'category_id' => $formData['product_category'],
            'flag_id' => $formData['product_flag'],
            'name' => $formData['product_name'],
            'description' => $formData['product_description']
        ];
        $newProduct = Product::create($product);

        // store variants
        if (isset($formData['product_size'])) {
            for ($i = 0; $i < count($formData['product_size']); $i++) {
                if (
                    $formData['product_size'][$i] !== null ||
                    $formData['selling_price'][$i] !== null ||
                    $formData['cuts_price'][$i] !== null
                ) {
                    $variants = new Variant([
                        'product_id' => $newProduct->id,
                        'size' => $formData['product_size'][$i],
                        'selling_price' => $formData['selling_price'][$i],
                        'cuts_price' => $formData['cuts_price'][$i],
                    ]);
                    $variants->save();
                }
            }
        }

        // store images
        if ($request->file('product_images') !== null) {
            $images = $request->file('product_images');
            for ($i = 0; $i < count($images); $i++) {
                // $image_name = time() . '_' . $images[$i]->getClientOriginalName();
                $path = Storage::disk('public')->put('product-img', $images[$i]);
                $image = new ProductImage([
                    'product_id' => $newProduct->id,
                    'image' => $path,
                    'image_order' => $i + 1
                ]);
                $image->save();
            }
        }

        return redirect()->route('product.index')->with('success', 'Product created successfully!');
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
        $product = Product::select('id', 'category_id', 'flag_id', 'name', 'description')
            ->where('id', $id)
            ->first();

        if (!$product) {
            return redirect()->route('product.index')->with('error', 'Products not found!');
        }

        $categories = Category::select('id', 'name')->get();
        $flags = Flag::select('id', 'name')->get();

        $variants = $product->variants;
        $product_images = $product->product_images;

        return view('admin.product', compact('product', 'categories', 'flags', 'variants', 'product_images'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('product.index')->with('error', 'Products not found!');
        }

        $validator = $this->validation($request);
        // validation failed
        if ($validator !== true) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $formData = $request->all();

        // store product
        $product_payload = [
            'category_id' => $formData['product_category'],
            'flag_id' => $formData['product_flag'],
            'name' => $formData['product_name'],
            'description' => $formData['product_description']
        ];
        $product->update($product_payload);

        // remove variant
        if (isset($formData['variant'])) {
            $product->variants()->whereNotIn('id', $formData['variant'])->delete();
        }

        // store variants
        if (isset($formData['product_size'])) {
            for ($i = 0; $i < count($formData['product_size']); $i++) {
                if (
                    $formData['product_size'][$i] !== null ||
                    $formData['selling_price'][$i] !== null ||
                    $formData['cuts_price'][$i] !== null
                ) {                    
                    // edit existing variant
                    if ($formData['variant'][$i]) {
                        $variant = $product->variants->where('id', $formData['variant'][$i])->first();
                        if ($variant) {
                            $variant->update([
                                'size' => $formData['product_size'][$i],
                                'selling_price' => $formData['selling_price'][$i],
                                'cuts_price' => $formData['cuts_price'][$i]
                            ]);
                        }
                    } else {
                        // store new variant
                        $variants = new Variant([
                            'product_id' => $product->id,
                            'size' => $formData['product_size'][$i],
                            'selling_price' => $formData['selling_price'][$i],
                            'cuts_price' => $formData['cuts_price'][$i],
                        ]);
                        $variants->save();
                    }
                }
            }
        }

        // remove existing images
        if (isset($formData['img_to_remove'])) {
            $imageName = $product->product_images()->where('id', $formData['img_to_remove'])->pluck('image');
            if ($imageName) {
                foreach ($imageName as $img) {
                    if(Storage::disk('public')->exists($img)){
                        Storage::disk('public')->delete($img); //remove image from storage
                    }
                }
                $product->product_images()->whereIn('id', $formData['img_to_remove'])->delete(); //remove row from table
            }
        }

        // store new images
        if ($request->file('product_images') !== null) {
            $images = $request->file('product_images');
            for ($i = 0; $i < count($images); $i++) {
                // $image_name = time() . '_' . $images[$i]->getClientOriginalName();
                $path = Storage::disk('public')->put('product-img', $images[$i]);
                $image = new ProductImage([
                    // 'product_id' => $newProduct->id,
                    'image' => $path,
                    'image_order' => $i + 1
                ]);
                $image->save();
            }
        }

        return redirect()->route('product.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();

        return response()->json([
            'success' => true,
            'message' => 'Product deleted sucessfully!',
        ]);
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
        // fetch data for admin page
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

    private function validation($request)
    {

        $rules = [
            'product_name' => 'required|string|max:255',
            'product_category' => 'required',
            'product_size[]' => 'string|max:50',
            'selling_price[]' => 'numeric',
            'cuts_price[]' => 'numeric',
            'product_images[]' => 'image|mimes:jpg,jpeg,png|dimensions:max_width=800,max_height:800,ratio=3/2'
        ];

        $validator = Validator::make($request->all(), $rules);

        // dd($validator->fails());
        if ($validator->fails()) {
            return $validator;
        }

        return true;
    }
}
