<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = ['id' => 1];
        $contacts = Contact::all();
        return view('projects', compact('contacts', 'projects'));
    }
}
