@section('content')
    @extends('layouts.app1')
  
   
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Doctors</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="adddoctor" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Doctor</a>
                    </div>
                </div>
  <div class="row doctor-grid">
                                             @foreach($doctor as $dctr)
                            
                                    <div class="col-md-4 col-sm-4  col-lg-3">
                        <div class="profile-widget">
                            <div class="doctor-img">
                                <a class="avatar" href="profile.html"><img alt="" src="{{ asset('uploads/employee/' . $dctr->image) }}"></a>
                            </div>
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{action('DoctorController@edit', $dctr['id'])}}"><i class="btn btn-warning"><i class="fa fa-pencil-square-o"></i>Edit</i></a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><form method="post" class="delete_form" action="{{action('DoctorController@destroy', $dctr['id'])}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE" />
                                   <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                   </form></a>

                                </div>
                            </div>
                            <h4 class="doctor-name text-ellipsis"><a href="profile.html">{{$dctr->doctor_fname}} {{$dctr->doctor_lname}}</a></h4>
                            <div class="doc-prof">{{$dctr->specialist}}</div>
                            <div class="user-country">
                                <i class="fa fa-map-marker"></i> United States, San Francisco
                            </div>
                               
                        </div>
                    </div>
                              @endforeach
                              </div>
                          </div>
</div>
</div>


                </div>
            </div>
        </div>
@endsection