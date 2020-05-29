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
        return view('backpanel/users/users');
    }
    function adduser($id=null) {
      $users='';
      if($id!=null) {
        $users = DB::select('select * from users where id = ?',[$id]);
      }
      return view('backpanel/users/adduser',['users'=>$users]);
    }
    function submituser(Request $request) {
        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        if($id=="") {
          DB::insert('insert into users (name,email,password) values(?,?,?)',[$name,$email,Hash::make($password)]);
          return redirect('/backpanel/users')->with('success','User added successfully');
        } else {
          DB::update('update users set name = ?,email = ?,password = ? where id = ?',[$name,$email,$password,$id]);
          return redirect('/backpanel/users')->with('success','User updated successfully');
        }
    }
    function userslist(Request $request) {
      if ($request->ajax()) {
        // $data = User::latest()->get();
        $data = DB::select('select * from users');
        return Datatables::of($data)
              ->addIndexColumn()
              ->addColumn('action', function($row){

                     $btn = '<a href="'.url("/backpanel/user/adduser",$row->id).'" class="edit btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>';

                      return $btn;
              })
              ->rawColumns(['action'])
              ->make(true);

      }
    }
}
