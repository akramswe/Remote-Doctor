<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Coordinate2;
use App\appointments;
use App\BranchAdmin;
use App\patients;
use DB;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $doctor = Doctor::all();
        $totaldoctor = count($doctor);

        $coordinate = Coordinate2::all();
        $totalcoordinate = count($coordinate);

         $branchadmin = BranchAdmin::all();
         $totalbranchadmin = count($branchadmin);

         $patients = patients::all();
         $totalpatients = count($patients);

        // $patient = patient::all();
        // $patient = count($patient);

        // $totalproduct = count($cproduct);
        // $salescart = Salescart::all();
        // return view('backend.dashboard.index', compact('totalrevenue', 'totalcategory', 'totalproduct', 'salescart'));
        return view('admin.admin',compact('totaldoctor','totalcoordinate','totalbranchadmin','totalpatients'));
    }

     public function appointments()
    {
        $appointment = appointments::all();

        // return view('branchadmin.appointments', compact('appointment'));

        $appointment = DB::table('appointments')
                     ->join('patients','patients.id', '=', 'appointments.patient_id')
                     ->join('doctors','doctors.id', '=', 'appointments.doctor_id')
                     ->join('departments','departments.id', '=', 'appointments.department_id')
                     ->select('appointments.*','patients.*','doctors.*','departments.*')
                     ->get();

      return view('admin.appointments', compact('appointment'));
 
        // return view('coordinate.add_branchadmin');
    }
}
