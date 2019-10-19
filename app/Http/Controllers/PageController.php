<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Community;

class PageController extends Controller
{
    public function welcome()
    {
        $featuredProperties = Property::where('featured', '=', 1)->get();
        $featuredCommunities = Community::where('featured', '=', 1)->get();
        return view('pages.welcome', compact('featuredCommunities', 'featuredProperties'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $bedrooms = $request->input('bedrooms');
        $bathrooms = $request->input('bathrooms');
        $min = $request->input('min');
        $max = $request->input('max');

        $properties = Property::query();

        if (!empty($search)){
            $properties = $properties->where('city', 'like', '%'. $search . '%')
                ->orWhere('neighborhood', 'like', '%'. $search . '%')
                ->orWhere('zip', 'like', '%'. $search . '%')
                ->orWhere('street_address', 'like', '%'. $search . '%')
                ->orWhere('listing_number', 'like', '%'. $search . '%');
        }

        if (!empty($bedrooms)){
            $properties = $properties->where('bedrooms', '>=', $bedrooms);
        }

        if (!empty($bathrooms)) {
            $properties = $properties->where('bathrooms', '>=', $bathrooms);
        }

        if(!empty($min)) {
            $properties = $properties->where('price', '>=', $min);
        }

        if(!empty($max)) {
            $properties = $properties->where('price', '<=', $max);
        }

        $properties = $properties->get();

        return view('pages.search', compact('properties'));
    }
}
