<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('guest.login');
    }

    /**
     * Login the user
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if ($request->has('remember')) {
            $remember = true;
        } else
            $remember = false;

        if (!auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->remember)) {
            return back()->with('error', __('Email address or password is incorrect'));
        }

        return redirect('/')->with('welcome', 'Welcome ');
    }

    /**
     * Logout the user
     */
    public function logout()
    {
        auth()->logout();

        return redirect('/login');
    }
}
