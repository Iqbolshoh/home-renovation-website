<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|string|max:20|regex:/^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$/',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        $validated['status'] = 'unread';

        Message::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Form submitted successfully'
        ], 200);
    }
}