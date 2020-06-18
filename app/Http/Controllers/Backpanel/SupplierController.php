<?php

namespace App\Http\Controllers\Backpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use DB;
use DataTables;

class SupplierController extends Controller
{
    function index() {
        return view('backpanel/suppliers/suppliers');
    }
    function addsupplier($id=null) {
      $suppliers='';
      if($id!=null) {
        $suppliers = DB::select('select * from suppliers where id = ?',[$id]);
      }
      $countries = DB::select('select * from countries');
      return view('backpanel/suppliers/addsupplier',['suppliers'=>$suppliers,'countries'=>$countries]);
    }
    function submitsupplier(Request $request) {
        $errors = $this->validate($request,[
         'companyName'=>'required',
         'companyAdrs'=>'required',
         'contactPerson'=>'required',
         'email'=>'required|email',
         'phone'=>'required',
         'country'=> 'required',
         'state'=>'required',
         'password' => 'required|confirmed'
        ]);
        $id = $request->input('id');
        $companyName = $request->input('companyName');
        $companyAdrs = $request->input('companyAdrs');
        $contactPerson = $request->input('contactPerson');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $state = $request->input('state');
        $password = $request->input('password');
        if($id=="") {
          DB::insert('insert into suppliers (companyName,companyAdrs,contactPerson,email,phone,country,state,password) values(?,?,?,?,?)',[$companyName,$companyAdrs,$contactPerson,$email,$phone,$country,$state,$password]);
          return redirect('/backpanel/suppliers')->with('success','Supplier added successfully');
        } else {
          DB::update('update suppliers set companyName = ?,companyAdrs = ?,contactPerson = ?,email = ?,phone = ?,country = ?,state = ?,password = ? where id = ?',[$companyName,$companyAdrs,$contactPerson,$email,$phone,$country,$state,$password,$id]);
          return redirect('/backpanel/suppliers')->with('success','Supplier details updated successfully');
        }
    }
    function supplierslist(Request $request) {
      if ($request->ajax()) {
        // $data = User::latest()->get();
        $data = DB::select('select * from suppliers');
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
                    $btn = '<a href="'.url("/backpanel/suppliers/addsupplier",$row->id).'" class="edit btn btn-primary btn-sm"><i class="fa fa-edit"></i></a> <a href="" onclick="supplierdelete('.$row->id.')" class="delete btn btn-primary btn-sm"><i class="fa fa-trash"></i></a>';

                    return $btn;
              })
              ->rawColumns(['action','status'])
              ->make(true);
      }
    }
    function deletesupplier($id) {
      DB::delete('delete from suppliers where id = ?',[$id]);
      return redirect('/backpanel/suppliers')->with('success','Supplier deleted successfully');
    }
    function changeStatus(Request $request) {
      DB::update('update suppliers set status = ? where id = ?',[$request->status,$request->supplierid]);
      return response()->json(['success'=>'Status updated successfully.']);
    }
    function getStates(Request $request) {
      $data = DB::select('select * from states where country_id = ?',[$request->countryid]);
      return response()->json($data);
  }
}
