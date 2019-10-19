<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Agent;
use App\Mail\AgentMail;
use App\Mail\ScheduleMail;
// imported
use Illuminate\Support\Facades\Mail;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        return view('property.index', compact('properties'));
    }

    public function show($id)
    {
        $user = auth()->user();
        $property = Property::find($id);
        return view('property.show', compact('property', 'user'));
    }

    public function agentContact(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'email_address' => 'required|email',
            'message' => 'required',
        ]);
        
        $agent_email = $request->agent_email;
        
        Mail::to($agent_email)->send(new AgentMail($data));

        return back()->with('message', 'Thanks for your message. We will get back to you as soon as possible.');
    }

    public function scheduleContact(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'email_address' => 'required|email',
            'best_time_to_contact' => 'required',
            'comments_questions' => 'required'
        ]);
        
        $agent_email = $request->agent_email;
        
        Mail::to($agent_email)->send(new ScheduleMail($data));

        return back()->with('message', 'Thanks for your message. We will get back to you as soon as possible.');
    }
}
