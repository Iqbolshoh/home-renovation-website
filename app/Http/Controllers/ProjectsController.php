<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('projects', compact( 'contacts'));
    }
}
