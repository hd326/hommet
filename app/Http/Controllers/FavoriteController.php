<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Favorite;

class FavoriteController extends Controller
{

    //public function __construct()
    //{
    //    $this->middleware('auth');
    //}

    public function store(Property $property)
    {
        if ( ! $property->favorites()->where(['user_id' => auth()->id()])->exists()) {
            $property->favorites()->create(['user_id' => auth()->id()]);
        }
        // we're working with the properties favorite table now
        return back();
    }

    public function destroy(Property $property)
    {
        $property->favorites()->where(['user_id' => auth()->id()])->get()->each->delete();
        // why are we getting each of the favorites and deleting them, is it not only one?
        return back();
    }
}
