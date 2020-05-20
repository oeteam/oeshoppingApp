<?php

namespace App\Http\Controllers\Backpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class UserController extends Controller
{
    function index() {
        $users = DB::select('select * from users');
        return view('backpanel/dashboard/users',['users'=>$users]);
    }
    function adduser(Request $request) {
        return view('backpanel/dashboard/adduser');
    }
    function submituser(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        DB::insert('insert into users (name,email,password) values(?,?,?)',[$name,$email,Hash::make($password)]);
        return redirect('/backpanel/users')->with('success','User added successfully');
    }
    function userslist(Request $request) {
        $data = array();
        // Datatables Variables
        $draw = intval($request->input('draw'));
        $start = intval($request->input('start'));
        $length = intval($request->input('length'));
        $users = DB::select('select * from users');
        foreach($users as $key => $r) {
            $data[] = array(
              $r->id,
              $r->name,
              $r->email,
            );
        }
        $output = array(
           "draw" => $draw,
           "recordsTotal" => $users->count(),
           "recordsFiltered" => $agent->count(),
           "data" => $data
        );
        return response()->json($data);
        //exit();
  }
}
