<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class HomeController extends Controller
{
    public function mainpage()
    {
        $doctorlist=Doctor::all();
        return view('one-health.appoinment',['doctorlist'=>$doctorlist]);
    }
    public function doctor()
    {
        return view('doctor.create');
    }
    public function about()
    {
        $doctorlist=Doctor::all();
        return view('one-health.about',['doctorlist'=>$doctorlist]);
    }
    public function contact()
    {
        return view('one-health.contact');
    }

    public function dr_list()
    {
        
        $doctor=Doctor::all();


        return view('doctor.index',['test'=>$doctor]);

    }

    public function delete($id)
    {
        
        $doctorId=Doctor::where(['id'=>$id])->first();

        if($doctorId)
        {
            $doctorId->delete();
            return redirect()->route('dr_list');
        }

    }
    
    public function create(Request $request)
    {
        //dd($request->all());

        if(!file_exists(public_path('images')))
        {
            mkdir(public_path('images'),0777,true);
        }

        $image=$request->image;
        $name=$image->getClientOriginalName();
        $imagename=time()."_".$name;
        $destination=public_path('images');
        $image->move($destination,$imagename);
        
        $data['image']='images/'.$imagename;
        $data['name']=$request->doctor_name;
       $data['designation']=$request->designation;
       $data['contact_number']=$request->number;
       $data['address']=$request->address;

       Doctor::create($data);

       return redirect()->route('dr_list');

    }
}
