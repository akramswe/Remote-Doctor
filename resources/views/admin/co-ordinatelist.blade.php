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
                        <h4 class="page-title">Co-Ordinate List</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="addcoordinate" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Co-Ordinate</a>
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
                                        <th>Addresss</th>
                                        <th>Date Of Birth</th>
                                        <th>Gender</th>
                                        <th>Status</th>
                                        <th >Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($coordinates as $crdnt)
                                    <tr>
                                        <td>{{$crdnt->coordinate_id}}</td>
                                        <td><img width="28" height="28" src="{{ asset('uploads/employee/' . $crdnt->image) }}" class="rounded-circle m-r-5" alt=""> {{$crdnt->coordinate_fname}} {{$crdnt->coordinate_lname}}</td>
                                        <td>{{$crdnt->email}}</td>
                                        <td>{{$crdnt->phone}}</td>
                                        <td>{{$crdnt->address}} </td>
                                        <td>{{$crdnt->dof}}</td>
                                        <td>{{$crdnt->gender}}</td>
                                         @if($crdnt->status == "Active")
                                           <td><span class="custom-badge status-green">{{$crdnt->status}}</span></td>  
                                      @else
                                         <td><span class="custom-badge status-red">{{$crdnt->status}}</span></td> 
                                    @endif 
                                    <td><a href="{{action('Coordinate2Controller@edit', $crdnt['id'])}}" class="btn btn-warning"> <i class="fa fa-pencil-square-o"></i> Edit</a></td>
                                    <td><form method="post" class="delete_form" action="{{action('Coordinate2Controller@destroy', $crdnt['id'])}}">
                                  {{csrf_field()}}
                                  <input type="hidden" name="_method" value="DELETE" />
                                  <button type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i> Delete</button>
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
</div>


                </div>
            </div>
        </div>
@endsection