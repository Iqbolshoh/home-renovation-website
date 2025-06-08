<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutStudia;
use App\Models\About;
use App\Models\HowWeWork;
use App\Models\Advantage;
use App\Models\Tariff;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::first();
        $aboutStudia = AboutStudia::first();
        $howWeWork = HowWeWork::all();
        $advantages = Advantage::all();
        $tariffs = Tariff::all();
        $contacts = Contact::all();
        return view('home', compact('about', 'aboutStudia', 'howWeWork', 'advantages', 'tariffs', 'contacts'));
    }
}
