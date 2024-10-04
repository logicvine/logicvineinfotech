<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm(Request $request)
    {

            return view('admin.auth.login'); // Return the login view
    }

    public function login(Request $request)
    {
        if($request->method('post')){
            // Validate the form data
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|string|min:6',
            ]);


            // Attempt to log the user in
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                // If successful, redirect to the intended page or a default route
                return redirect()->intended('/my-admin/index')->with('success', 'Login successful!');
            }

            // If unsuccessful, redirect back with an error
            return back()->withErrors(['email' => 'Invalid email or password.']);

        }else{
            return view('auth.admin.login'); // Return the login view
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logged out successfully!');
    }
}
