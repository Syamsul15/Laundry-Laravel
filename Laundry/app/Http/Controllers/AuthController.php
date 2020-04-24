<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
    	return view('login.index');
    }

    public function postlogin(Request $request)
    {
    	if(Auth::attempt($request->only('username', 'password'))){
    		return redirect('/dashboard');
    	}
    	return redirect('/');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/');
    }
}
