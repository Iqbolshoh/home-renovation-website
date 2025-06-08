<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('home', compact('about'));
    }
}
