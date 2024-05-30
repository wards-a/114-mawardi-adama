<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

            return redirect()->route('profile.show');
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

    public function register(Request $request):RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:255', 'string'],
            'email' => ['required', 'email', 'string', 'unique:users'],
            'password' => ['required', 'min:8', 'string', 'confirmed']
        ]);

        // store new user as customer role
        User::create([
            'role_id' => 2,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            // User authenticated successfully
            $request->session()->regenerate();
            return redirect()->route('profile.show')->with('success', 'Registration successful! You are now logged in.');
          } else {
            // Authentication failed
            return redirect()->route('login')->withErrors(['login' => 'Unable to log in after registration.']);
          }

        return redirect()->intended('home');
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
