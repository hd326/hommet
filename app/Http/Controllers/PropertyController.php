<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Agent;
use App\Mail\AgentMail;
// imported
use Illuminate\Support\Facades\Mail;

class PropertyController extends Controller
{
    public function show($id)
    {
        $property = Property::find($id);
        $agent = $property->agent;
        // needed to email agent
        $broker = $property->agent->broker->name;
        // needed for broker information name
        return view('property.show', compact('property', 'agent'));
    }

    public function postContact(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        
        $agent_email = $request->agent_email;
        
        Mail::to($agent_email)->send(new AgentMail($data));

        return back()->with('message', 'Thanks for your message. We will get back to you as soon as possible.');
    }
}
