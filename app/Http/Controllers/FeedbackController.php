<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'rating' => 'required|integer|between:1,5',
            'ordered_items' => 'required|string',
            'feedback' => 'required|string',
            'suggestions' => 'nullable|string',
        ]);

        Feedback::create($validated);

        return redirect()->route('feedback.create')
            ->with('success', 'Thank you for your valuable feedback!');
    }
}

