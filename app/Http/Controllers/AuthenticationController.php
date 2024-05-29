<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    // customer/guest
    public function logInPage()
    {
        return view('user.authentication');
    }

    public function logIn(Request $request): RedirectResponse
    {
        // validation field
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // trying to log in as admin, role_id 1 is admin
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        // credentials do not match
        return back()->withErrors([
            'email' => 'The provided credentials do not match.',
        ])->onlyInput('email');
    }

    public function logOut(Request $request): RedirectResponse
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->intended('home');
    }

    public function registerPage()
    {
        return view('user.authentication');
    }

    public function forgotPasswordPage()
    {
        return view('user.authentication');
    }

    // Admin Role
    public function signInPage()
    {
        return view('admin.authentication');
    }

    public function signIn(Request $request): RedirectResponse
    {
        // validation field
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // trying to log in as admin, role_id 1 is admin
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password, 'role_id' => 1], $request->remember ? true : false)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        // credentials do not match
        return back()->withErrors([
            'email' => 'The provided credentials do not match.',
        ])->onlyInput('email');
    }

    public function signOut(Request $request): RedirectResponse
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('signin');
    }
}
