<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CustomerController extends Controller
{
    public function __construct()
    { }

    public function updatecustomer(Request $request,$id)
    {

       $User=User::find($id);
       $User->name=$request->input('name');
       $User->gender=$request->input('gender');
       $User->email=$request->input('email');
       $User->phone_number=$request->input('phone_number');
       $User->address=$request->input('address');
       $User->pincode=$request->input('pincode');


       $User->save();

       return view('home');

    }
}
