<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountryController extends Controller
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
        $countrys = Country::all()->toArray();
        $country = Country::all();
        return view('admin.country_list', compact('countrys'))->with('country', $country);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_country');
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
            'country_id'    =>  'required',
            'country_name'     =>  'required'
        ]);
        $country = new Country();
          $country->country_id =  $request->get('country_id');
         $country->country_name =$request->get('country_name');
          $country->description =  $request->get('description');
        $country->status = $request->get('status');
        $country->save();

        return view('admin.add_country')->with('add_country',$country);
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
       $country = Country::find($id);
        return view('admin.edit_country', compact('country', 'id'));
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
        $this->validate($request, [
            'country_id'    =>  'required',
            'country_name'     =>  'required'
        ]);
       $country = Country::find($id);
          $country->country_id =  $request->get('country_id');
         $country->country_name =$request->get('country_name');
          $country->description =  $request->get('description');
        $country->status = $request->get('status');
        $country->save();

        return redirect('country')->with('status','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::find($id);
        $country->delete();
        return redirect('country')->with('status','Data Deleted ');
    }
}
