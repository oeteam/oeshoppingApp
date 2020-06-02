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
        $errors = $this->validate($request,[
         'name'=>'required',
         'email'=>'required|email',
         'password'=>'required|min:5|max:8'
        ]);
        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        if($id=="") {
          DB::insert('insert into users (name,email,password) values(?,?,?)',[$name,$email,Hash::make($password)]);
          return redirect('/backpanel/users')->with('success','User added successfully');
        } else {
          DB::update('update users set name = ?,email = ?,password = ? where id = ?',[$name,$email,Hash::make($password),$id]);
          return redirect('/backpanel/users')->with('success','User updated successfully');
        }
    }
    function userslist(Request $request) {
      if ($request->ajax()) {
        // $data = User::latest()->get();
        $data = DB::select('select * from users');
        return Datatables::of($data)
              ->addIndexColumn()
              ->addColumn('status', function($row){
                    if($row->status==0){
                      $switch = '<label class="switch">
                                  <input type="checkbox" onchange="change('.$row->id.')" class="status-toggle'.$row->id.'" checked>
                                  <span class="slider round"></span>
                                </label>';
                    } else {
                      $switch = '<label class="switch">
                                  <input type="checkbox" onchange="change('.$row->id.')" class="status-toggle'.$row->id.'">
                                  <span class="slider round"></span>
                                </label>';
                    }
                    

                    return $switch;
              })
              ->addColumn('action', function($row){
                    $btn = '<a href="'.url("/backpanel/user/adduser",$row->id).'" class="edit btn btn-primary btn-sm"><i class="fa fa-edit"></i></a> <a href="'.url("/backpanel/user/deleteuser",$row->id).'" class="delete btn btn-primary btn-sm"><i class="fa fa-trash"></i></a>';

                    return $btn;
              })
              ->rawColumns(['action','status'])
              ->make(true);
      }
    }
    function deleteuser($id) {
      DB::delete('delete from users where id = ?',[$id]);
      return redirect('/backpanel/users')->with('success','User deleted successfully');
    }
    function changeStatus(Request $request) {
      DB::update('update users set status = ? where id = ?',[$request->status,$request->user_id]);
      return response()->json(['success'=>'Status change successfully.']);
    }
}
