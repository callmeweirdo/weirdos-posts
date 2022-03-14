<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index (){
        return view('auth.login');
    }

    public function store(Request $request){

        $rules = [

            'email' => 'required|email',
            'password' => 'required'
        ];

        $this->validate($request, $rules);

        if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
            return back()->with('status', 'invalid login details');
        }

        return redirect()->route('dashboard.index');

    }
}
