<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BranchAdmin;
use App\Branch;
use DB;

class BranchAdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:coordinate');
    // }
    public function __construct()
{
    $this->middleware('auth');    
    $this->middleware('Co_ordinate');
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branchadmin = BranchAdmin::all();

        $doctor = Doctor::all();
        $totaldoctor = count($doctor);

        $coordinate = Coordinate2::all();
        $totalcoordinate = count($coordinate);

         $branchadmin = BranchAdmin::all();
         $totalbranchadmin = count($branchadmin);

         $patients = patients::all();
         $totalpatients = count($patients);
      // $coordinates1 = DB::table('countries')
      //                ->join('coordinate2s','coordinate2s.country', '=', 'countries.id')
      //                ->select('countries.*','coordinate2s.*')
      //                ->get();

        return view('coordinate.branchadmin', compact('branchadmin','totaldoctor','totalcoordinate','totalbranchadmin','totalpatients'));
 
        // return view('coordinate.add_branchadmin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branch = Branch::all();   
        return view('coordinate.add_branchadmin')->with('branch', $branch);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
  
        $branch = Branch::all();  
        
        $branchadmin = new BranchAdmin();
        $branchadmin->ba_id = $request->input('ba_id');
        $branchadmin->ba_fname = $request->input('ba_fname');
        $branchadmin->ba_lname = $request->input('ba_lname');
        $branchadmin->username = $request->input('username');
        $branchadmin->email = $request->input('email');
        $branchadmin->password =$request->input('password');
        $branchadmin->dof = $request->input('dof');
        $branchadmin->branch = $request->input('branch');
        $branchadmin->gender = $request->input('gender');
        $branchadmin->address = $request->input('address');
        $branchadmin->phone = $request->input('phone');
        $branchadmin->biography = $request->input('biography');
        $branchadmin->status = $request->input('status');

           if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName(); //getting image extension
            $filename =$extension;
            $file->move('uploads/employee/', $filename);
            $branchadmin->image = $filename;

        }
        else {
            return $request;
            $branchadmin->image = '';
        }

        $branchadmin->save();

        return view('coordinate.add_branchadmin')->with('add_branchadmin', $branchadmin)->with('branch', $branch);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function Display()
    {
        $branch = DB::table('branches')
                     ->join('branch_admins','branch_admins.branch', '=', 'branches.id')
                     ->select('branches.*','branch_admins.*')
                     ->get();

        return view('coordinate.assignbranch', compact('branch'));
    }

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
         $branchadmin = BranchAdmin::find($id);
        return view('coordinate.edit_branchadmin', compact('branchadmin', 'id'));
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
           $branchadmin = BranchAdmin::all();

        $this->validate($request, [
            'coordinate_fname'    =>  'required',
            'coordinate_lname'     =>  'required'
        ]);
        $branchadmin = BranchAdmin::find($id);

        $branchadmin->ba_id = $request->input('ba_id');
        $branchadmin->ba_fname = $request->input('ba_fname');
        $branchadmin->ba_lname = $request->input('ba_lname');
        $branchadmin->username = $request->input('username');
        $branchadmin->email = $request->input('email');
        $branchadmin->password =$request->input('password');
        $branchadmin->dof = $request->input('dof');
        $branchadmin->branch = $request->input('branch');
        $branchadmin->gender = $request->input('gender');
        $branchadmin->address = $request->input('address');
        $branchadmin->phone = $request->input('phone');
        $branchadmin->biography = $request->input('biography');
        $branchadmin->status = $request->input('status');

           if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName(); //getting image extension
            $filename =$extension;
            $file->move('uploads/employee/', $filename);
            $branchadmin->image = $filename;

        }
        else {
            return $request;
            $branchadmin->image = '';
        }

        $branchadmin->save();
         
         return redirect('branchadmin')->with('status','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branchadmin = BranchAdmin::find($id);
        $branchadmin->delete();
        return redirect('branchadmin')->with('status','Data Deleted ');
    }
}
