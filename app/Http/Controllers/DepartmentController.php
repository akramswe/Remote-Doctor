<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
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
        $departments = Department::all()->toArray();
        $department = Department::all();
        return view('admin.departments', compact('departments'))->with('department', $department);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_department');
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
            'dept_id'    =>  'required',
            'dept_name'     =>  'required'
        ]);
        $department = new Department();
          $department->dept_id =  $request->get('dept_id');
         $department->dept_name =$request->get('dept_name');
          $department->description =  $request->get('description');
        $department->status = $request->get('status');
        $department->save();
        // return redirect('department')->with('status','Update Successfully');

        return view('admin.add_department')->with('add_department',$department);
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
        $department = Department::find($id);
        return view('admin.edit_department', compact('department', 'id'));
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
        $coordinate = Department::all();

        $this->validate($request, [
            'dept_name'    =>  'required',
            'dept_name'     =>  'required'
        ]);
       
        $department = Department::find($id);
          $department->dept_id =  $request->input('dept_id');
         $department->dept_name =$request->input('dept_name');
          $department->description =  $request->input('description');
        $department->status = $request->input('status');
 
        $department->save();
        return redirect('department')->with('status','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Department::find($id);
        $student->delete();
        return redirect('department')->with('status','Data Deleted ');
    }
}