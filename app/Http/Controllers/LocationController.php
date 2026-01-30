<?php

namespace App\Http\Controllers;
use App\Models\UserLocation;
use Illuminate\Http\Request;

class LocationController extends Controller
{
public function store(Request $request) {
    $request->validate([
        'latitude' => 'required',
        'longitude' => 'required'
    ]);

    UserLocation::create([
        'user_id' => 1,
        'latitude' => $request->latitude,
        'longitude' => $request->longitude,
        'accuracy' => $request->accuracy
    ]);

    return response()->json(['message'=>'Location Saved']);
}

}




