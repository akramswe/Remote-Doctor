<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Department;
use App\Country;

class DoctorController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $doctors = Doctor::all()->toArray();
        $doctor = Doctor::all();
        return view('admin.doctor_list', compact('doctors'))->with('doctor', $doctor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $department = Department::all();
         $country = Country::all();
        return view('admin.add-doctor')->with('department', $department)->with('country', $country);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = Department::all();
        $country = Country::all();
        $doctor = new Doctor();

        $doctor->doctor_id = $request->input('doctor_id');
        $doctor->doctor_fname = $request->input('doctor_fname');
        $doctor->doctor_lname = $request->input('doctor_lname');
        $doctor->username = $request->input('username');
        $doctor->email = $request->input('email');
        $doctor->password =$request->input('password');
        $doctor->dof = $request->input('dof');
        // $doctor->city_name = $request->input('city_name');
        $doctor->gender = $request->input('gender');
        $doctor->dept_id = $request->input('dept_id');
        $doctor->address = $request->input('address');
        $doctor->country = $request->input('country');
        // $doctor->city = $request->input('city');
        $doctor->state = $request->input('state');
        $doctor->postal_code = $request->input('postal_code');
        $doctor->phone = $request->input('phone');
        $doctor->specialist = $request->input('specialist');
        $doctor->status = $request->input('status');

           if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName(); //getting image extension
            $filename =$extension;
            $file->move('uploads/employee/', $filename);
            $doctor->image = $filename;

        }

        $doctor->save();

        return view('admin.add-doctor')->with('add-doctor', $doctor)->with('department', $department)->with('country', $country);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $doctor = Doctor::find($id);
         $department = Department::all();
        return view('admin.edit_doctor', compact('doctor', 'id'))->with('department', $department);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $doctor = Doctor::find($id);

        $doctor->doctor_id = $request->input('doctor_id');
        $doctor->doctor_fname = $request->input('doctor_fname');
        $doctor->doctor_lname = $request->input('doctor_lname');
        $doctor->username = $request->input('username');
        $doctor->password = $request->input('password');
        $doctor->email = $request->input('email');
        $doctor->dof = $request->input('dof');
        // $doctor->city_name = $request->input('city_name');
        $doctor->gender = $request->input('gender');
        $doctor->dept_id = $request->input('dept_id');
        $doctor->address = $request->input('address');
        $doctor->country = $request->input('country');
        // $doctor->city = $request->input('city');
        $doctor->state = $request->input('state');
        $doctor->postal_code = $request->input('postal_code');
        $doctor->phone = $request->input('phone');
        $doctor->specialist = $request->input('specialist');
        $doctor->status = $request->input('status');

           if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName(); //getting image extension
            $filename =$extension;
            $file->move('uploads/employee/', $filename);
            $doctor->image = $filename;

        }

        $doctor->save();
    return redirect('doctor')->with('status','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect('doctor')->with('status','Data Deleted ');
    }
}
