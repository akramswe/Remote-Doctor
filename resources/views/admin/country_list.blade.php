@section('content')
 @extends('layouts.app1')
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-5 col-5">
                        <h4 class="page-title">Country List</h4>
                    </div>
                    <div class="col-sm-7 col-7 text-right m-b-30">
                        <a href="addcountry" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Add Country</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Country Name</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($country as $cnt)
                                    <tr>
                                        <td>{{$cnt->country_id}}</td>
                                        <td>{{$cnt->country_name}}</td>
									@if($cnt->status == "Active")
                                           <td><span class="custom-badge status-green">{{$cnt->status}}</span></td>  
                                      @else
                                         <td><span class="custom-badge status-red">{{$cnt->status}}</span></td> 
                                    @endif 
                                    <td><a href="{{action('CountryController@edit', $cnt['id'])}}" class="btn btn-warning"> <i class="fa fa-pencil-square-o"></i> Edit</a></td>
                                    <td><form method="post" class="delete_form" action="{{action('CountryController@destroy', $cnt['id'])}}">
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