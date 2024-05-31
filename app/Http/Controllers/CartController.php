<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->fetchCategories();

        return view('user.cart', compact('categories'));
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
        $user_id = auth()->user()->id;

        $cart = $this->getCart($user_id); // get cart

        $formData = $request->all();

        // store item to cart
        $item = [
            'cart_id' => $cart->id,
            'product_id' => $formData['product_id'],
            'variant_id' => $formData['product_variant'],
            'quantity' => $formData['quantity']
        ];
        CartItem::create($item);

        return response()->json([
            'success' => true,
            'message' => 'Product deleted sucessfully!',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $categories = $this->fetchCategories(); // for product submenu

        // get cart by user
        $user_id = decrypt($id);

        $cart = $this->getCart($user_id); // get cart

        // get data related to carts
        $cart_items = $cart->cart_items; // get all cart items
        if (count($cart_items) > 0) {
            foreach ($cart_items as $item) { // loop each cart item
                $item->variant; // get product variant
                $product = $item->product; // get data product
                $product->product_images; // get product image
            }
        }
        
        return view('user.cart', compact('categories', 'cart'));
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

    // Check if user already has a cart
    private function getCart($id)
    {
        $cart = Cart::firstOrNew(['user_id' => $id]); // get existing cart or return new instance

        // if cart doesnt exist then create one
        if (!$cart->id) {
            $cart->user_id = $id;
            $cart->save();
        }

        return $cart;
    }
}
