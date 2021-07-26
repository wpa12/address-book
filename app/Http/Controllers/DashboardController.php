<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Renders the dashboard view
     * @return view
     */
    public function index()
    {
        return view('dashboard.index');
    }
}
