<?php

namespace App\Http\Controllers;

use App\Models\AboutStudia;
use Illuminate\Http\Request;
use App\Models\About;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::first();
        $aboutStudia = AboutStudia::first();
        return view('home', compact('about', 'aboutStudia'));
    }
}
