<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
}