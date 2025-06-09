<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectDetailsController extends Controller
{
    public function show($id)
    {
        $contacts = Contact::all();
        $project = 1;
        return view('project-details', compact('project', 'contacts'));
    }
}
