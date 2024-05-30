<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ProductImage;

abstract class Controller
{
    protected function fetchCategories()
    {
        // for the product submenu & highlight categories on homepage
        $categories = Category::select('id', 'name')->orderBy('name', 'asc')->get();
        if ($categories) {
            foreach ($categories as $category) {
                $category->path = '/category'; // needs for submenu path
                $product = $category->products()->orderBy('created_at', 'desc')->first();
                if ($product) {
                    // get picture according to category
                    $image = ProductImage::select('image')->where('id', $product->id)->orderBy('image_order', 'asc')->first();
                    if ($image) {
                        $category->image = $image->image; // add image to colecction
                    }
                }
            }
        }

        return $categories;
    }
}
