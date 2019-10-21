<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agent;
use App\Property;
use App\User;
use Auth;

class AgentController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->id());
        
        $properties = $user->properties;

        return view('agents.index', compact('properties', 'user'));
    }

    public function edit($agentId, $propertyId)
    {
        
        $property = Property::find($propertyId);

        if ($property->user_id !== auth()->id()) {
           return response()->json(['error' => 'Unauthenticated.'], 401); //Throw Unauthenticated error
        }
        //if ($property->user_id !== $agentId) {
        //    return response()->json(['error' => 'Bad Request.'], 400); //Throw Bad request error
        //}
        return view('agents.edit', compact('property'));
    }

    public function update($agentId, $propertyId)
    {
        $property = Property::find($propertyId);

        if ($property->user_id !== auth()->id() ){
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        $property->update(request()->validate([
            'street_address' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'price' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'square_feet' => 'required',
            'lot_size' => 'required',
            'year_built' => 'required',
            'type' => 'required',
            'sub_type' => 'required',
            'listing_status' => 'required',
            'listing_number' => 'required',
            'county' => 'required',
            'neighborhood' => 'required',
            'fireplace' => 'required',
            'stories' => 'required',
            'garage' => 'required',
            'parking_space' => 'required',
            'utilities' => 'required',
            'details' => 'required'
        ]));

        return back();
    }

    public function store(Request $request, $agentId)
    {

        $user = User::find(auth()->id());
        $properties = $user->properties;
        request()->validate([
            'street_address' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'price' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'square_feet' => 'required',
            'lot_size' => 'required',
            'year_built' => 'required',
            'type' => 'required',
            'sub_type' => 'required',
            'listing_status' => 'required',
            'listing_number' => 'required',
            'county' => 'required',
            'neighborhood' => 'required',
            'fireplace' => 'required',
            'stories' => 'required',
            'garage' => 'required',
            'parking_space' => 'required',
            'utilities' => 'required',
            'details' => 'required'
            
        ]);

        Property::create([
            'street_address' => request('street_address'),
            'city' => request('city'),
            'zip' => request('zip'),
            'price' => request('price'),
            'bedrooms' => request('bedrooms'),
            'bathrooms' => request('bathrooms'),
            'square_feet' => request('square_feet'),
            'lot_size' => request('lot_size'),
            'year_built' => request('year_built'),
            'type' => request('type'),
            'sub_type' => request('sub_type'),
            'listing_status' => request('listing_status'),
            'listing_number' => request('listing_number'),
            'county' => request('county'),
            'neighborhood' => request('neighborhood'),
            'fireplace' => request('fireplace'),
            'stories' => request('stories'),
            'garage' => request('garage'),
            'parking_space' => request('parking_space'),
            'utilities' => request('utilities'),
            'details' => request('details'),
            'user_id' => request('user_id')
        ]);

        return view('agents.index', compact('properties', 'user'));
    }

    public function show($agentId, $propertyId)
    {
        $property = Property::find($propertyId);

        if($property->user_id !== auth()->id()){
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return view('agents.show', compact('property'));
    }

    public function destroy($agentId, $propertyId)
    {
        $property = Property::find($propertyId);

        if ($property->user_id !== auth()->id()){
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        $property->delete();

        return view('agents.index');
    }

    public function create()
    {
        $user = User::find(auth()->id());
        return view('agents.create', compact('user'));
    }
}
