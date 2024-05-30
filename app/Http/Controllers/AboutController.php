<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $categories = $this->fetchCategories();

        return view('user.about_us', compact('categories'));
    }
}
