<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $categories = $this->fetchCategories(); // for submenu product

        return view('user.contact_us', compact('categories'));
    }
}
