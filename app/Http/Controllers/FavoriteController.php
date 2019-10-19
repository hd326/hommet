<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Favorite;
use App\Http\Controllers\Auth;

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
        //auth()->user()->favorites()->attach($property->id);
        return back();
    }

    public function destroy(Property $property)
    {
        $property->favorites()->where(['user_id' => auth()->id()])->get()->each->delete();
        //auth()->user()->favorites()->detach($property->id);
        return back();
    }
}
