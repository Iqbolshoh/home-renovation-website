<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::with([
            'images' => function ($query) {
                $query->limit(3);
            }
        ])->get();

        $contacts = Contact::all();

        return view('projects', compact('projects', 'contacts'));
    }

    public function show($id)
    {
        $project = Project::with('images')->findOrFail($id);
        $contacts = Contact::all();

        return view('project-details', compact('project', 'contacts'));
    }
}
