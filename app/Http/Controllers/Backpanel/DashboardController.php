<?php

namespace App\Http\Controllers\Backpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
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
    	return view('backpanel/dashboard/index');
    }
}
