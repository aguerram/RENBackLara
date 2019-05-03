<?php

namespace App\Http\Controllers\Front;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','signup']]);
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $val = Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if($val->fails())
        {
            return response()->json($val->getMessageBag(),422);
        }
        if ($token = $this->guard()->attempt($credentials)) {
            return $this->respondWithToken($token,$request->rememberMe);
        }
        return response()->json(['message' => 'Email or password are incorrect'], 401);
    }
    public function signup(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255','min:4'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8','max:64', 'confirmed'],
        ]);
        if($validate->fails())
        {
            return response()->json($validate->getMessageBag(),422);
        }
        $user = User::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'password'=>$request->password
        ]);
        return response()->json(['message'=>'User created successfully']);
    }
    public function me()
    {
        return response()->json($this->guard()->user());
    }

    public function guard()
    {
        return Auth::guard();
    }
    protected function respondWithToken($token,$remember)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => $this->guard()->factory()->getTTL() * $remember?9999:60
        ]);
    }
}
