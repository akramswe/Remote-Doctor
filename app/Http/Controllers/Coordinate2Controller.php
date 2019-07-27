<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coordinate2;
use App\Country;
use DB;

class Coordinate2Controller extends Controller
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
        $coordinates  = Coordinate2::all()->toArray();
        $coordinates = Coordinate2::all();
        $country = Country::all();
      $coordinates1 = DB::table('countries')
                     ->join('coordinate2s','coordinate2s.country', '=', 'countries.id')
                     ->select('countries.*','coordinate2s.*')
                     ->get();

        return view('admin.co-ordinatelist', compact('coordinates'));

        return view('coordinate.coordinate');
    }

    public function Display()
    {
      $coordinates1 = DB::table('countries')
                     ->join('coordinate2s','coordinate2s.country', '=', 'countries.id')
                     ->select('countries.*','coordinate2s.*')
                     ->get();

        return view('admin.assign_country', compact('coordinates1'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country = Country::all();
        return view('admin.add-coordinate')->with('country', $country);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $country = Country::all();
        $this->validate($request, [
            'coordinate_id'    =>  'required',
            'coordinate_fname'     =>  'required',
            'coordinate_lname'    =>  'required',
            'username'     =>  'required',
            'password'    =>  'required',
            'email'     =>  'required',
            'phone'    =>  'required',
        ]);
        $coordinate = new Coordinate2();
        $coordinate->coordinate_id = $request->input('coordinate_id');
        $coordinate->coordinate_fname = $request->input('coordinate_fname');
        $coordinate->coordinate_lname = $request->input('coordinate_lname');
        $coordinate->username = $request->input('username');
        $coordinate->password = $request->input('password');
        $coordinate->email = $request->input('email');
        $coordinate->dof = $request->input('dof');
        // $doctor->city_name = $request->input('city_name');
        $coordinate->gender = $request->input('gender');
        $coordinate->address = $request->input('address');
        $coordinate->country = $request->input('country');
        // $doctor->city = $request->input('city');
        $coordinate->phone = $request->input('phone');
        $coordinate->biography = $request->input('biography');
        $coordinate->status = $request->input('status');

           if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName(); //getting image extension
            $filename =$extension;
            $file->move('uploads/employee/', $filename);
            $coordinate->image = $filename;

        }

        $coordinate->save();
        return view('admin.add-coordinate')->with('success', 'Data Added')->with('country', $country);
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
         $country = Country::all();
        $coordinate = Coordinate2::find($id);
        return view('admin.edit_coordinate', compact('coordinate', 'id'))->with('country', $country);
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
          $country = Country::all();
         $coordinate = Coordinate2::all();

        $this->validate($request, [
            'coordinate_fname'    =>  'required',
            'coordinate_lname'     =>  'required'
        ]);
        $coordinate = Coordinate2::find($id);
         $coordinate->coordinate_id = $request->input('coordinate_id');
        $coordinate->coordinate_fname = $request->input('coordinate_fname');
        $coordinate->coordinate_lname = $request->input('coordinate_lname');
        $coordinate->username = $request->input('username');
        $coordinate->email = $request->input('email');
        $coordinate->dof = $request->input('dof');
        // $doctor->city_name = $request->input('city_name');
        $coordinate->gender = $request->input('gender');
        $coordinate->address = $request->input('address');
        $coordinate->country = $request->input('country');
        // $doctor->city = $request->input('city');
        $coordinate->phone = $request->input('phone');
        $coordinate->biography = $request->input('biography');
        $coordinate->status = $request->input('status');

           if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName(); //getting image extension
            $filename =$extension;
            $file->move('uploads/employee/', $filename);
            $coordinate->image = $filename;

        }

        $coordinate->save();
        return redirect('coordinate2')->with('status','Update Successfully')->with('country', $country);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Coordinate2::find($id);
        $student->delete();
        return redirect('coordinate2')->with('status','Data Deleted ');
    }
}
