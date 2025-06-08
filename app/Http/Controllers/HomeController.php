<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutStudia;
use App\Models\About;
use App\Models\HowWeWork;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::first();
        $aboutStudia = AboutStudia::first();
        $howWeWork = HowWeWork::all();
        return view('home', compact('about', 'aboutStudia', 'howWeWork'));
    }
}
