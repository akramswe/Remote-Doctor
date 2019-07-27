@section('content')
    @extends('layouts.app1')
  

      
        <div class="page-wrapper">
            <div class="content">
                @if(session('status'))
  <div class="alert alert-success">
      {{session('status')}}
  </div>
  @endif
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Assign Country</h4>
                    </div>
                </div>

                                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-border table-striped custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Coordinate Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Gender</th>
                                        <th >Country</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($coordinates1 as $crdnt)
                                    <tr>
                                        <td>{{$crdnt->coordinate_id}}</td>
                                        <td><img width="28" height="28" src="{{ asset('uploads/employee/' . $crdnt->image) }}" class="rounded-circle m-r-5" alt=""> {{$crdnt->coordinate_fname}} {{$crdnt->coordinate_lname}}</td>
                                        <td>{{$crdnt->email}}</td>
                                        <td>{{$crdnt->phone}}</td>
                                        <td>{{$crdnt->gender}}</td>
                                        <td>{{$crdnt->country_name}}</td>
                                         @if($crdnt->status == "Active")
                                           <td><span class="custom-badge status-green">{{$crdnt->status}}</span></td>  
                                      @else
                                         <td><span class="custom-badge status-red">{{$crdnt->status}}</span></td> 
                                    @endif 
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
</div>


                </div>
            </div>
        </div>
@endsection