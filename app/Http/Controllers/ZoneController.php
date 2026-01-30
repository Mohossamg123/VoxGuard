<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    public function store(Request $request){
    Zone::create($request->all());
    return response()->json(['message'=>'Zone Created']);
}

}
