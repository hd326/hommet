<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        $request->user()->authorizeRoles(['user']);

        $user = auth()->user();

        return view('profiles.show', compact('user'));
    }
}
