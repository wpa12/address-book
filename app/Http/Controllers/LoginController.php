<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Middleware\AuthenticatesRequests;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthRequest;

class LoginController extends Controller
{
    /**
     * @description : renders login page.
     */
    public function index() {
        return view('auth.index');
    }

    /**
     * @description : logs in user.
     */
    public function login(AuthRequest $request) {

        $creds = $request->only('email', 'password');
        if (Auth::attempt($creds)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back();
    }
}
