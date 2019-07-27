<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patients;
use App\Country;
use Hash;

class PatientsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = patients::all();
        return view('branchadmin.patients', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country = Country::all();
        return view('branchadmin.add_patient')->with('country', $country);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
      'patient_id'     =>  'required',
      'patient_fname'     =>  'required',
      'patient_lname'  =>  'required',
      'username' =>  'required',
      'email'  =>  'required|email',
      // 'password' =>  ['required', 'min:6','regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/'],
      'password' =>  ['required', 'min:6','regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/'],
// English uppercase characters (A – Z)
// English lowercase characters (a – z)
// Base 10 digits (0 – 9)
// Non-alphanumeric (For example: !, $, #, or %)
// Unicode characters
      'gender' =>  'required',
      'address' =>  'required',
      'country' =>  'required',
      'phone' =>  'required',
      'status' => 'required'

     ]);

        $country = Country::all();
        $patients = new patients();

        $patients->patient_id = $request->input('patient_id');
        $patients->patient_fname = $request->input('patient_fname');
        $patients->patient_lname = $request->input('patient_lname');
        $patients->username = $request->input('username');
        $patients->email = $request->input('email');
        $patients->password =Hash::make($request->input('password'));
        $patients->dof = $request->input('dof');
        $patients->gender = $request->input('gender');
        $patients->address = $request->input('address');
        $patients->country = $request->input('country');
        $patients->phone = $request->input('phone');
        $patients->status = $request->input('status');

           if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName(); //getting image extension
            $filename =$extension;
            $file->move('uploads/employee/', $filename);
            $patients->image = $filename;

        }

        $patients->save();

        return view('branchadmin.add_patient')->with('success', 'Data Added')->with('add_patient', $patients)->with('country', $country);

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
     
     public function change()
     {
        
     }


    public function edit($id)
    {
        $patients = patients::find($id);
          $country = Country::all();
        return view('branchadmin.edit_patient', compact('patients', 'id'))->with('country', $country);
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
        $patients = patients::find($id);

        $patients->patient_id = $request->input('patient_id');
        $patients->patient_fname = $request->input('patient_fname');
        $patients->patient_lname = $request->input('patient_lname');
        $patients->username = $request->input('username');
        $patients->email = $request->input('email');
        $patients->password =Hash::make($request->input('password'));
        $patients->dof = $request->input('dof');
        $patients->gender = $request->input('gender');
        $patients->address = $request->input('address');
        $patients->country = $request->input('country');
        $patients->phone = $request->input('phone');
        $patients->status = $request->input('status');

           if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName(); //getting image extension
            $filename =$extension;
            $file->move('uploads/employee/', $filename);
            $patients->image = $filename;

        }

        $patients->save();
    return redirect('patientinfo')->with('status','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
