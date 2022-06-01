<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\Appointment;



class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request){ //merr te dhena nga add_doctor.php
        $doctor = new doctor; //emri i tabeles ne database
        /*marrim imazhin */
        $image = $request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);//leviz imazhin tek file doctorimage eshte inside public folder
        $doctor->image=$imagename;//imagename e therrasim per ta derguar ne database

        $doctor->name=$request->name;//therrasim emrin nga forma
        $doctor->phone=$request->number;
        $doctor->room=$request->room;
        $doctor->speciality=$request->speciality;


        $doctor->save();
        return redirect()->back()->with('message', 'Doctor Added Successfully');

    }

    public function showappointment(){

        $data=appointment::all();

        return view('admin.showappointment', compact('data'));
    }

    public function approved($id){
        $data=appointment::find($id);
        $data->status='approved';
        $data->save();

        return redirect()->back();
    }

    public function canceled($id){
        $data=appointment::find($id);
        $data->status='Canceled';
        $data->save();

        return redirect()->back();
    }
}
