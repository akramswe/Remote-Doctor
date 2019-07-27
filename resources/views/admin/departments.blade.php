@section('content')
 @extends('layouts.app1')
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-5 col-5">
                        <h4 class="page-title">Departments</h4>
                    </div>
                    <div class="col-sm-7 col-7 text-right m-b-30">
                        <a href="adddepartment" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Add Department</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Department Name</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($department as $dpt)
                                    <tr>
                                        <td>{{$dpt->dept_id}}</td>
                                        <td>{{$dpt->dept_name}}</td>
									@if($dpt->status == "Active")
                                           <td><span class="custom-badge status-green">{{$dpt->status}}</span></td>  
                                      @else
                                         <td><span class="custom-badge status-red">{{$dpt->status}}</span></td> 
                                    @endif 
                                    <td><a href="{{action('DepartmentController@edit', $dpt['id'])}}" class="btn btn-warning"> <i class="fa fa-pencil-square-o"></i> Edit</a></td>
                                    <td><form method="post" class="delete_form" action="{{action('DepartmentController@destroy', $dpt['id'])}}">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE" />
      <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
     </form></td>
     
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
    @endsection