<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    function index() {
    	return view('login');
    }
    function checkLogin(Request $request) {
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password'	=> 'required'
    	]);

    	$user_data = array(
    		'email' => $request->get('email'),
    		'password' => $request->get('password')
    	);

    	if(Auth::attempt($user_data)) {
    		return redirect('login/dashboard');
    	} else {
    		return back()->with('error','Incorrect login crendentials');
    	}
    }
    function dashboard() {
    	return view('admin/dashboard');
    }
}
