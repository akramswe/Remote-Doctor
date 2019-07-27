@section('content')
    @extends('branchadmin.layouts.app1')
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Schedule</h4>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table mb-0">
								<thead>
									<tr>
										<th>Doctor Name</th>
										<th>Department</th>
										<th>Available Days</th>
										<th>Available Time</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach($schedule as $schedules)
									<tr>
										<td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> {{$schedules->doctor_name}}</td>
										<td>Cardiology</td>
										<td>{{$schedules->availble_days}}</td>
										<td>{{$schedules->start_time}} - {{$schedules->end_time}}</td>
										 @if($schedules->status == "Active")
                                           <td><span class="custom-badge status-green">{{$schedules->status}}</span></td>  
                                      @else
                                         <td><span class="custom-badge status-red">{{$schedules->status}}</span></td> 
                                    @endif 
                                   
									</tr>
                                    @endforeach
								</tbody>
							</table>
						</div>
                </div>
                </div>
            </div>
            @endsection