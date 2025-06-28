<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        Subscriber::create([
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Thanks for subscribing!');
    }

    // Optional: Admin functions
    public function index()
    {
        $subscribers = Subscriber::latest()->get();
        return view('backend.subscribers.index', compact('subscribers'));
    }

    public function destroy($id)
    {
        Subscriber::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Subscriber deleted!');
    }
}
