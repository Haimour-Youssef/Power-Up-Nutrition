<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    //
    public function subscribe(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:subscribers,email',
        ]);

        Subscriber::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Subscription successful!');
    }
    public function unsubscribe(Request $request, $id)
    {
        $subscriber = Subscriber::findOrFail($id);
        $subscriber->delete();

        return redirect()->back()->with('success', 'Unsubscription successful!');
    }
    public function index()
    {
        $subscribers = Subscriber::all();
        return view('subscribers.index', compact('subscribers'));
    }
    
}
