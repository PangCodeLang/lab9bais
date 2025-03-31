<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Logic for the homepage, if any
        return view('home');
    }

    public function success()
    {
        // Render the success page view
        return view('success');
    }
}