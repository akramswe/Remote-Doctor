@section('content')
   @extends('branchadmin.layouts.app1')
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Patient</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form  action="{{action('PatientsController@update', $id)}}" method = "post" enctype="multipart/form-data">
                              {{csrf_field()}}
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <input type="hidden" name="_method" value="PATCH" />

                            <div class="row">
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>ID <span class="text-danger">*</span></label>
                                        <!-- <input class="form-control" name="fname" type="text"> -->
                                         <input  class="form-control" type="text" name='patient_id'/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>First Name <span class="text-danger">*</span></label>
                                        <!-- <input class="form-control" name="fname" type="text"> -->
                                         <input  class="form-control" type="text" name='patient_fname'/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" name="patient_lname" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Username <span class="text-danger">*</span></label>
                                        <input class="form-control" name="username" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <!-- <input class="form-control" name="email" type="email"> -->
                                        <input  class="form-control" type="text" name='email'/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" name="password" type="password">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Age</label>
                                        <div class="form-group">
                                           <input class="form-control" name="dof" type="number">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" class="form-control ">
                                            </div>
                                        </div>
                                    
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone </label>
                                        <input class="form-control" name="phone" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select name="country" class="form-control select">
                                                    @foreach($country as $dpt)
                                                    <option value="{{$dpt->id}}">{{$dpt->country_name}}</option>
                                                   @endforeach
                                                </select>
                                            </div>
                                        </div>

                                           <div class="col-sm-6">
                                    <div class="form-group gender-select">
                                        <label class="gen-label">Gender:</label>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" name="gender" class="form-check-input" value="Male" checked>Male
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" name="gender" class="form-check-input" value="Female">Female
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Avatar</label>
                                        <div class="profile-upload">
                                            <div class="upload-img">
                                                <img alt="" src="assets/img/user.jpg">
                                            </div>
                                            <div class="upload-input">
                                                <input name="image" type="file" class="form-control">
                                            </div>
                                        </div>
                                    </div>
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

                   


                            </div>
                            


                            <div class="m-t-20 text-center">
                                <input type = 'submit' class="btn btn-primary submit-btn" value = "Edit Patient"/>
                                <!-- <button class="btn btn-primary submit-btn">Create Doctor</button> -->
                            </div>
                        </form>                    </div>
                </div>
            </div>
    @endsection