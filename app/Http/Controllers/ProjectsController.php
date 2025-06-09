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

    public function show($id)
    {
        $project = Project::with('images')->findOrFail($id);
        $contacts = Contact::all();

        return view('project-details', compact('project', 'contacts'));
    }
}
