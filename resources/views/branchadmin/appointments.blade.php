@section('content')
   @extends('branchadmin.layouts.app1')
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Appointments</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="add_appointment" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Edit Appointment</a>
                        
                        <a href="add_appointment" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Appointment</a>
                        
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
										<th>Appointment ID</th>
										<th>Patient Name</th>
										<th>Age</th>
										<th>Doctor Name</th>
										<th>Department</th>
										<th>Appointment Date</th>
										<th>Appointment Time</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
								 @foreach($appointment as $apnt)
                                    <tr>
                                    <td>{{$apnt->apnt_id}}</td>
                                    <td>{{$apnt->patient_fname}}</td>
                                    <td>{{$apnt->age}}</td>
                                    <td>{{$apnt->doctor_fname}}</td>
                                    <td>{{$apnt->dept_name}}</td>
                                    <td>{{$apnt->date}}</td>
                                    <td>{{$apnt->time}}</td>
                              
									@if($apnt->status == "Active")
                                           <td><span class="custom-badge status-green">{{$apnt->status}}</span></td>  
                                      @else
                                         <td><span class="custom-badge status-red">{{$apnt->status}}</span></td> 
                                    @endif
                                    </tr>
								</tbody>
								@endforeach
							</table>
						</div>
					</div>
                </div>
            </div>
        </div>
  @endsecion