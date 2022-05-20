<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        
        return view('layouts.index');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function createAdmin(Request $request)
    {
        //dd($request->all());
       // $create=Test::create($request->all());
       $data['name']=$request->name;
       $data['email']=$request->email;
       $data['type']=0;
       $data['password']=Hash::make($request->password);

       User::create($data);
       return redirect()->route('login');
    }
    public function createLogin(Request $request)
    {
       // dd($request->all());

       if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
       {
        
        if(Auth::user()->type==0)
        {
            return redirect()->route('mainpage'); 
        }
        else if(Auth::user()->type==1){
            return redirect()->route('adminPanel');
        }
        else{
            return redirect()->route('login');
        }
       }
       
    }
}
