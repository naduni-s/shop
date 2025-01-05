<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle user login request.
     */
    public function login(Request $request)
    {
        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Check the authenticated user's role and redirect accordingly
            if (Auth::check() && Auth::user()->role == 'admin') {
                return redirect()->route('admin'); // Admin dashboard
            } elseif (Auth::check() && Auth::user()->role == 'delivery') {
                return redirect()->route('delivery.dashboard'); // Delivery dashboard
            } else {
                return redirect()->route('home'); // User home
            }
        }

        // If authentication fails, redirect back with an error message
        return redirect()->back()->with('error', 'Invalid credentials');
    }

    /**
     * Handle post-authentication redirection.
     */
    public function authenticated(Request $request, $user)
    {
        // Redirect to a specific URL if provided, otherwise to the intended route
        if ($request->has('redirect')) {
            return redirect($request->get('redirect'));
        }
        return redirect()->intended('/home');
    }
}
