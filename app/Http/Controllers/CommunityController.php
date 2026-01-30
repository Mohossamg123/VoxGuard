<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function join(Request $request){
    CommunityController::create([
        'community_id'=>$request->community_id,
        'user_id'=>1
    ]);
    return response()->json(['message'=>'Joined']);
}

}
