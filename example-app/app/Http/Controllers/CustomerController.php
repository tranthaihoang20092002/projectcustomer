<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer; 
use Hash;   
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    // return get register
    public function register(){
        return view ('register');
    }
    // method post register
    public function authRegister(Request $request)
    {
        $request->validate([
            'cus_name' => 'required|string|max:255',
            'cus_email' => 'required:string|max:255|unique:tbl_customer',// unique(xac nhan khong co email trung lap, neu co se bao ra loi)
            'cus_password' =>'required|string|min:6',
            'cus_phone' =>'required|max:10',
            'cus_image'=>'required',
            'cus_mssv' =>'required:max:10',
            'cus_sothich'=>'required:max:255',
        ]);
        $data = $request->all();
        Customer::create([
            'cus_name' => $data['cus_name'],
            'cus_email' => $data['cus_email'],
            'cus_password' => hash::make($data['cus_password']),
            'cus_phone' => $data['cus_phone'],
            'cus_image' => $data['cus_image'],
            'cus_mssv' => $data['cus_mssv'],
            'cus_sothich' => $data['cus_sothich'],
        ]);
        return redirect()->route('customer.loginIndex');
    }
    // return get login
    public function login(){
        return view('login');
    }
    //method post login
    public function authLogin(Request $request)
    {
        $request->validate([
            'cus_email' => 'required',
            'cus_password' =>'required',
        ]);
      
        $credentials = $request->only('cus_email','cus_password');
        $data = Customer::where($credentials)->first();
        if ($data == !null) 
        {

            return redirect()->intended('/')->withSuccess('Signed in');                                 
        }
          
        return redirect("login")->withSuccess('Login details are not valid');
    }
}
