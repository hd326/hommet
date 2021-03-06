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
    public function index(Request $request)
    {
        $sort = $request->input('sort');
        if(!empty($sort)){
        if($sort == 'Price Ascending'){
            $properties = Property::orderBy('price', 'asc');
            $properties = $properties->paginate(10);
        }
        if($sort == 'Price Descending'){
            $properties = Property::orderBy('price', 'desc');
            $properties = $properties->paginate(10);
        }
        if($sort == 'Most Recent'){
            $properties = Property::latest();
            $properties = $properties->paginate(10);
        }
        if($sort == 'A-Z'){
            $properties = Property::orderBy('city', 'asc');
            $properties = $properties->paginate(10);
        }
        if($sort == 'Z-A'){
            $properties = Property::orderBy('city', 'desc');
            $properties = $properties->paginate(10);
        }
        if($sort == 'Most Recent'){
            $properties = Property::latest();
            $properties = $properties->paginate(10);
        }
    } else {
        $properties = Property::paginate(10);
    }

        return view('property.index', compact('properties', 'sort'));
    }

    public function index2()
    {

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
