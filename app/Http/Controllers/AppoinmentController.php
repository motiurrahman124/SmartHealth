<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Appoinment;

class AppoinmentController extends Controller
{
    public function appoinment(Request $request)
    {
        
        //dd($request->all());
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['time']=$request->date;
        $data['doctor_name']=$request->doctor_name;
        $data['number']=$request->number;
        $data['status']="in progress";
        $data['message']=$request->message;

        Appoinment::create($data);
       return redirect()->route('mainpage');

    }
    public function index()
    {
        $appoinment_list=Appoinment::all();

        return view('appoinment.appoinmentList',['appoinment'=> $appoinment_list]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('mainpage'); 
    }
    public function logout_admin()
    {
        Auth::logout();
        return redirect()->route('login'); 
    }
    public function appoinment_status()
    {
        $appoinment=Appoinment::all();
        return view('appoinment.user_status',['appoin'=> $appoinment]); 
    }
    public function approval($id)
    {
        $data=Appoinment::find($id);
        $data['status']='Approved';
        $data->save();
        return redirect()->back(); 
    }
}
