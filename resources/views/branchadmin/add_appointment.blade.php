<!DOCTYPE html>
<html lang="en">


<!-- add-appointment24:07-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Remote Doctor Appointment</title>
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
     @extends('branchadmin.layouts.app2')
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Appointment</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                         @if(count($errors) > 0)
                          <div class="alert alert-danger">
                           <ul>
                           @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                           @endforeach
                           </ul>
                          </div>
                          @endif
                          @if(\Session::has('success'))
                          <div class="alert alert-success">
                           <p>{{ \Session::get('success') }}</p>
                          </div>
                          @endif
                       <form action="add_appointment" method = "post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Appointment ID</label>
                                        <input class="form-control" type="text" value="APT-0001" name="apnt_id" readonly="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Patient Name</label>
                                                <select name="patient_id" class="form-control select">
                                                    @foreach($patient as $dpt)
                                                    <option value="{{$dpt->id}}">{{$dpt->patient_fname}}</option>
                                                   @endforeach
                                                </select>
                                            </div>
                                        </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Department</label>
                                                <select name="department_id" class="form-control select">
                                                    @foreach($department as $dpt)
                                                    <option value="{{$dpt->id}}">{{$dpt->dept_name}}</option>
                                                   @endforeach
                                                </select>
                                            </div>
                                        </div>
                                <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Doctor</label>
                                                <select name="doctor_id" class="form-control select">
                                                    @foreach($doctor as $dpt)
                                                    <option value="{{$dpt->id}}">{{$dpt->doctor_fname}}</option>
                                                   @endforeach
                                                </select>
                                            </div>
                                        </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" name="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Time</label>
                                        <div class="time-icon">
                                            <input type="text" class="form-control" id="datetimepicker3" name="time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Patient Email(Optional)</label>
                                        <input class="form-control" type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Patient Phone Number(Optional)</label>
                                        <input class="form-control" type="text" name="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea cols="30" rows="4" class="form-control" name="message"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="display-block">Appointment Status</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="product_active" value="Active" checked>
                                    <label class="form-check-label" for="product_active">
                                    Active
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="product_inactive" value="Inactive">
                                    <label class="form-check-label" for="product_inactive">
                                    Inactive
                                    </label>
                                </div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Create Appointment</button>
                            </div>
                        </form>
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
    <script>
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'

                });
            });
     </script>
</body>


<!-- add-appointment24:07-->
</html>
