<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest:web'/*,'throttle:3,1'*/])->except('logout');
    }
    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $cred = $request->only(['email','password']);
        $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);
        if(Auth::guard('web')->attempt($cred))
        {
           return redirect()->intended('/');
        }
        else{
            return back()->with('error','Email or Password are incorrect')->withInput();
        }
    }
    public function register()
    {
        return view('auth.register');
    }
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }
}
