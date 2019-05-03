<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    public function store(Request $request)
    {
        /*$valid = Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required',
        ]);
        if($valid->fails())
        {
            return response()->json($valid->getMessageBag());
        }*/
        return response()->json(['message'=>'Hello'],422);
    }
}
