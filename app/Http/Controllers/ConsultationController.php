<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        $validated['status'] = 'unread';

        Consultation::create($validated);

        return response()->json(['success' => true, 'message' => 'Form submitted successfully']);
    }
}
