<!DOCTYPE html>
<html lang="en">


<!-- appointments23:19-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Assign Branch Info</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
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
                        <h4 class="page-title">Assign Branch Info</h4>
                    </div>
                </div>
                <div class="row filter-row">
                    <div class="col-sm-6">
                        <div class="form-group form-focus">
                            <label class="focus-label">Branch Name</label>
                            <input id="myInput" onkeyup="myFunction()" type="text" class="form-control floating">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-focus">
                            <label class="focus-label">Branch Admin Name</label>
                            <input id="myInput1" onkeyup="myFunction()" type="text" class="form-control floating">
                        </div>
                    </div>
                    <!-- <div class="col-sm-6 col-md-3">
                        <a href="#" class="btn btn-success btn-block"> Search </a>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>Branch ID</th>
                                        <th>Branch Admin Name</th>
                                        <th>Branch Name</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($branch as $br)
                                    <tr>
                                        <td>BR00{{$br->id}}</td>
                                        <td>{{$br->ba_fname}} {{$br->ba_lname}}</td>
                                        <td>{{$br->br_name}}</td>
                                        <td>{{$br->description}}</td>
                                      @if($br->status == "Active")
                                           <td><span class="custom-badge status-green">{{$br->status}}</span></td>  
                                      @else
                                         <td><span class="custom-badge status-red">{{$br->status}}</span></td> 
                                    @endif 
                                    </tr>
                                     <!-- <?php
                                    // $count=1;
                                    // $count = $count + 1;
                                      ?>
                                     
                                     <?php 
                                     // echo $count;
                                       ?> -->
                                       @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
           </div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  input1 = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  filter1 = input1.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter1) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
  
}
</script>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
                $('#datetimepicker4').datetimepicker({
                    format: 'LT'
                });
            });
     </script>
</body>


<!-- appointments23:20-->
</html>