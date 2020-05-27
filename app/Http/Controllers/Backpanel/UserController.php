<?php

namespace App\Http\Controllers\Backpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use DB;
use DataTables;

class UserController extends Controller
{
    function index() {
        $users = DB::select('select * from users');
        return view('backpanel/users/users',['users'=>$users]);
    }
    function adduser(Request $request) {
        return view('backpanel/users/adduser');
    }
    function submituser(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        DB::insert('insert into users (name,email,password) values(?,?,?)',[$name,$email,Hash::make($password)]);
        return redirect('/backpanel/users')->with('success','User added successfully');
    }
    function userslist(Request $request) {
      if ($request->ajax()) {
        // $data = User::latest()->get();
        $data = DB::select('select * from users');
        return Datatables::of($data)
              ->addIndexColumn()
              ->addColumn('action', function($row){

                     $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>';

                      return $btn;
              })
              ->rawColumns(['action'])
              ->make(true);

      }
    }
}
