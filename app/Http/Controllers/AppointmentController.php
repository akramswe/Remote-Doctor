<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\appointments;
use App\Department;
use App\Doctor;
use App\patients;
use App\Schedule;
use DB;

class AppointmentController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

     public function __construct()
{
    $this->middleware('auth');    
    $this->middleware('Branch_Admin');
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointment = appointments::all();

        // return view('branchadmin.appointments', compact('appointment'));

        $appointment = DB::table('appointments')
                     ->join('patients','patients.id', '=', 'appointments.patient_id')
                     ->join('doctors','doctors.id', '=', 'appointments.doctor_id')
                     ->join('departments','departments.id', '=', 'appointments.department_id')
                     ->select('appointments.*','patients.*','doctors.*','departments.*')
                     ->get();

        return view('branchadmin.appointments', compact('appointment'));
 
        // return view('coordinate.add_branchadmin');
    }

    public function schedule()
    {
        $schedule = Schedule::all();
        return view('branchadmin.doctor_schedule')->with('schedule', $schedule);
    }

    public function Display()
    {
        return view('branchadmin.available_doctor');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('schedules')
         ->where('availble_days', 'like', '%'.$query.'%')
         ->orWhere('doctor_name', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('schedules')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->doctor_name.'</td>
         <td>'.$row->availble_days .'</td>
         <td>'.$row->start_time.''.$row->end_time.'</td>
         <td>'.$row->status .'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Doctor Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $department = Department::all();   
        $doctor = Doctor::all(); 
        $patient = patients::all();  
        return view('branchadmin.add_appointment')->with('department', $department)->with('doctor', $doctor)->with('patient', $patient);
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
        $doctor = Doctor::all(); 
        $patient = patients::all();  
        $this->validate($request, [
            'apnt_id'    =>  'required',
            'doctor_id'     =>  'required',
            'department_id'    =>  'required',
            'patient_id'     =>  'required',
            'date'    =>  'required',
            'time'     =>  'required',
            'message'     =>  'required'
        ]);

        $appointment = new appointments();

        $appointment->apnt_id = $request->input('apnt_id');
        $appointment->doctor_id = $request->input('doctor_id');
        $appointment->department_id = $request->input('department_id');
        $appointment->patient_id = $request->input('patient_id');
        $appointment->email = $request->input('email');
        $appointment->phone = $request->input('phone');
        $appointment->date = $request->input('date');
        $appointment->time = $request->input('time');
        $appointment->message = $request->input('message');
        $appointment->status = $request->input('status');

           
        $appointment->save();
        return view('branchadmin.add_appointment')->with('success', 'Data Added')->with('appointment', $appointment)->with('department', $department)->with('patient', $patient)->with('doctor', $doctor);
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
        //
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
        //
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
