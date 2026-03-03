<?php

namespace App\Http\Controllers;

use App\Models\StartNowRequest;
use Illuminate\Http\Request;

class StartNowRequestController extends Controller
{
    public function index()
    {
        return inertia('StartNow/Index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'contact_person' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'country_of_registration' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'about' => ['required', 'string', 'max:5000'],
            'agreed_to_terms' => ['accepted'],
        ], [
            'agreed_to_terms.accepted' => 'You must agree to the Terms & Conditions and Privacy Policy.',
        ]);

        StartNowRequest::create([
            ...$data,
            'ip' => $request->ip(),
            'user_agent' => (string) $request->userAgent(),
        ]);

        return back()->with('success', 'Thanks! We received your request.');
    }
}