<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctroschedule;
use App\doctor;
use App\branch;
use App\branchadmin;

class DoctorScheduleController extends Controller
{
    public function index()
    {
    	return view('admin.add_schedule');
    }

    public function store(Request $request)
    { 
        // $schedule = doctorschedule ::all();
        $doctors = doctor ::all();
        $branchs = branch ::all();
        $branchadmins = branchadmin ::all();


    	$schedule = new doctroschedule();
        $schedule->schedule_id = $request->input('schedule_id');
    	$schedule->doctor_name = $request->input('doctor_name');
		$schedule->availble_days = $request->input('availble_days');
		$schedule->start_time = $request->input('start_time');
		$schedule->end_time = $request->input('end_time');
		$schedule->message = $request->input('message');
		$schedule->status = $request->input('status');

		  

    	$schedule->save();

    	return view('admin.add_schedule')->with('schedule',$schedule)->with('doctors',$doctors);
    }



   public function display()
    {
    

    	$schedule = doctroschedule ::all();
         $doctors = doctor ::all();
       // $branchadmins = branchadmin ::all();

        return view('admin.add_schedule')->with('addschedule',$schedule)->with('doctors',$doctors);
    }

    public function display1()
    {
    

        $schedule = doctroschedule ::all();
       // $branchadmins = branchadmin ::all();

        return view('admin.schedule')->with('schedule',$schedule);
    }



}
