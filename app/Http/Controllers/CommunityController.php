<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Community;

class CommunityController extends Controller
{
    public function show(Request $request, $id)
    {
        $community = Community::find($id);
        $properties = $community->properties()->get();
        return view('pages.community', compact('properties'));
    }
}
