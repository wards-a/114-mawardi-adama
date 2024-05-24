<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{

    public function signInPage()
    {
        return view('user.authentication');
    }

    public function signUpPage()
    {
        return view('user.authentication');
    }

    public function forgotPasswordPage()
    {
        return view('user.authentication');
    }

    // Admin Page
    public function logInPage()
    {
        return view('admin.authentication');
    }
}
