<!DOCTYPE html>
<html lang="en">


<!-- add-doctor24:06-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Add Branch Page</title>
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
	@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
   @extends('coordinate.layout.app1')
        <div class="page-wrapper">

            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Assign Branch</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action ="{{ route('addassignbranch') }}" method = "post" enctype="multipart/form-data">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                            <div class="row">
                                 <!-- <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Branch ID <span class="text-danger"></span></label>
                                        <input class="form-control" name="fname" type="text">
                                         <input  class="form-control" type="text" name='doctor_id'/>
                                    </div>
                                </div> -->
                               
                               
                                <div class="col-sm-6 ">
											<div class="form-group">
												<label>Branch Name</label>
												<select name="branchname" class="form-control select">
                                                    @foreach($branchs as $branch)
													<option value="{{$branch->br_name}}">{{$branch->br_name}}</option>
                                                   @endforeach
												</select>
											</div>
										</div>

										    <div class="col-sm-6 ">
											<div class="form-group">
												<label>Branch Admin</label>
												<select name="branchadmin" class="form-control select">
                                                @foreach($branchadmins as $branchadmin)
													<option value="{{$branchadmin->ba_fname}} {{$branchadmin->ba_lname}}" >{{$branchadmin->ba_fname}} {{$branchadmin->ba_lname}}</option>
                                                  @endforeach
												</select>
											</div>
										</div>
                                
                         <div class="col-sm-6">
							<div class="form-group">
                                <label>Short Description</label>
                                <textarea name="description" class="form-control" rows="3" cols="30"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="display-block">Status</label>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="doctor_active" value="Active" checked>
									<label class="form-check-label" for="doctor_active">
									Active
									</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="doctor_inactive" value="Inactive">
									<label class="form-check-label" for="doctor_inactive">
									Inactive
									</label>
								</div>
                            </div>
                            <div class="m-t-20 text-center">
                                <input type = 'submit' class="btn btn-primary submit-btn" value = "Create Branch"/>
                                <!-- <button class="btn btn-primary submit-btn">Create Doctor</button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- add-doctor24:06-->
</html>
