<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Flag;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $categories = $this->fetchCategories(); // for the submenu product

        // get all produt that related to flag
        $flags = Flag::all();

        if ($flags) {
            foreach ($flags as $flag) {
                $products = $flag->products()->limit(6)->orderBy('created_at', 'desc')->get(); // limit 6 for highlighted product
                if ($products) {
                    foreach ($products as $product) {
                        $variant = $product->variants()->whereNotNull('cuts_price')->orderBy('cuts_price', 'asc')->first();
                        if (!$variant) {
                            $variant = $product->variants()->orderBy('selling_price', 'asc')->first();;
                        }
                        // assign related info for product card
                        $product->variant = $variant;
                        $product->image = $product->product_images()->orderBy('image_order', 'asc')->first();
                    }
                }
                $flag->products = $products;
            }
        } else {
            $flags = [];
        }
        
        return view('user.home', compact('categories', 'flags'));
    }
}
