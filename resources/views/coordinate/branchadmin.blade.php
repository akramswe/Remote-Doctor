<!DOCTYPE html>
<html lang="en">


<!-- doctors23:12-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Branch Admin List</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    @extends('coordinate.layout.app1')
  
   
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Branch Admin List</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="addbranchadmin" class="btn btn-primary float-right btn-rounded"><i class="fa fa-plus"></i> Add Branch Admin</a>
                    </div>
                </div>
                <div class="row filter-row">
                    <div class="col-sm-6">
                        <div class="form-group form-focus">
                            <label class="focus-label">Search Branch Admin</label>
                            <input id="myInput" onkeyup="myFunction()" type="text" class="form-control floating">
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-3">
                        <a href="#" class="btn btn-success btn-block"> Search </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th style="min-width:200px;">Name</th>
                                        <th>Employee ID</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Gender</th>
                                        <th style="min-width: 110px;">Date of Birth</th>
                                        <th>Status</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($branchadmin as $ba)
                                    <tr>
                                        <td>
                                            <img width="28" height="28" src="{{ asset('uploads/employee/' . $ba->image) }}" class="rounded-circle m-r-5" alt="">  <h2>{{$ba->ba_fname}} {{$ba->ba_lname}}</h2>
                                        </td>
                                        <td>{{$ba->ba_id}}</td>
                                        <td>{{$ba->email}}</td>
                                        <td>{{$ba->phone}}</td>
                                        <td>{{$ba->gender}}</td>
                                        <td>{{$ba->dof}}</td>
                                        @if($ba->status == "Active")
                                           <td><span class="custom-badge status-green">{{$ba->status}}</span></td>  
                                      @else
                                         <td><span class="custom-badge status-red">{{$ba->status}}</span></td> 
                                    @endif 
                                        <td><a href="{{action('BranchAdminController@edit', $ba['id'])}}" class="btn btn-warning"> <i class="fa fa-pencil-square-o"></i> Edit</a></td>
                                    <td><form method="post" class="delete_form" action="{{action('BranchAdminController@destroy', $ba['id'])}}">
                                  {{csrf_field()}}
                                  <input type="hidden" name="_method" value="DELETE" />
                                  <button type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i> Delete</button>
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

   <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- employees23:22-->
</html>