<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PropertyController extends Controller
{
    public function show($id){
        $property = Property::find($id);
        return view('property.show', compact('property'));
    }
}
