@section('content')
    @extends('branchadmin.layouts.app1')
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Patients</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="add_patient" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Patient</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped custom-table mb-0 datatable">
								<thead>
									<tr>
										<th>Name</th>
										<th>Age</th>
										<th>Phone</th>
										<th>Email</th>
										<th>Gender</th>
										<th>Address</th>
										<th>Status</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
									 @foreach($patients as $ptnt)
                                    <tr>
                                        <!-- <td>{{$ptnt->coordinate_id}}</td> -->
                                        <td><img width="28" height="28" src="{{ asset('uploads/employee/' . $ptnt->image) }}" class="rounded-circle m-r-5" alt=""> {{$ptnt->patient_fname}} {{$ptnt->patient_lname}}</td>
                                        <td>{{$ptnt->dof}}</td>
                                        <td>{{$ptnt->phone}}</td>
                                        <td>{{$ptnt->email}} </td>
                                        <td>{{$ptnt->gender}}</td>
                                        <td>{{$ptnt->address}}</td>
                                         @if($ptnt->status == "Active")
                                           <td><span class="custom-badge status-green">{{$ptnt->status}}</span></td>  
                                      @else
                                         <td><span class="custom-badge status-red">{{$ptnt->status}}</span></td> 
                                    @endif 
                                    <td><a class="btn btn-warning"> <i class="fa fa-pencil-square-o"></i> Edit</a></td>
                                    <td><form method="post" class="delete_form">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                   </form></td>
                                
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                 @endforeach
								</tbody>
							</table>
						</div>
					</div>
                </div>
            </div>
 
    @endsection