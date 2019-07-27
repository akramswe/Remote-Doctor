@section('content')
 @extends('layouts.app1')
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-5 col-5">
                        <h4 class="page-title">Feedback List</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Comment</th>
                                        <th>Comment Date</th>
                                        <th>Experience</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($feedback as $fdk)
                                    <tr>
                                        <td>{{$fdk->feed_name}}</td>
                                        <td>{{$fdk->email}}</td>
                                        <td>{{$fdk->comments}}</td>
                                        <td>{{$fdk->created_at}}</td> 
                                       @if($fdk->experience == "bad")
                                           <td><span class="custom-badge status-red">{{$fdk->experience}}</span></td>  
                                       @elseif($fdk->experience == "good")
                                         <td><span class="custom-badge status-green">{{$fdk->experience}}</span></td> 
                                     @else
                                         <td><span class="custom-badge status-orange">{{$fdk->experience}}</span></td> 
                                    @endif 
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