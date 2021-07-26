<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function login() {
        //
    }
}
