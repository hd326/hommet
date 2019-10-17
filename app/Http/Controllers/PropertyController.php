<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Agent;

class PropertyController extends Controller
{
    public function show($id){
        $property = Property::find($id);
        $agent = $property->agent;
        return view('property.show', compact('property', 'agent'));
    }
}
