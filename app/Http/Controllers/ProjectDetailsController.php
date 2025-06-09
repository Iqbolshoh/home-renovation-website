<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;

class ProjectDetailsController extends Controller
{
    public function show($id)
    {
        $project = Project::with('images')->findOrFail($id);
        $contacts = Contact::all();

        return view('project-details', compact('project', 'contacts'));
    }
}
