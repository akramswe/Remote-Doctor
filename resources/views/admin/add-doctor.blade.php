@section('content')
	@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
   @extends('admin.layouts.app1')
        <div class="page-wrapper">

            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Doctor</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action ="adddoctor" method = "post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                            <div class="row">
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>ID <span class="text-danger">*</span></label>
                                        <!-- <input class="form-control" name="fname" type="text"> -->
                                         <input  class="form-control" type="text" name='doctor_id'/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>First Name <span class="text-danger">*</span></label>
                                        <!-- <input class="form-control" name="fname" type="text"> -->
                                         <input  class="form-control" type="text" name='doctor_fname'/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" name="doctor_lname" type="text">
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
                                        <label>Date of Birth</label>
                                        <div class="cal-icon">
                                            <input type="date" name="dof" class="form-control datetimepicker">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Department</label>
                                                <select name="dept_id" class="form-control select">
                                                    @foreach($department as $dpt)
                                                    <option value="{{$dpt->id}}">{{$dpt->dept_name}}</option>
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
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label>Address</label>
												<input type="text" name="address" class="form-control ">
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label>Country</label>
												<select name="country" class="form-control select">
													@foreach($country as $dpt)
                                                    <option value="{{$dpt->id}}">{{$dpt->country_name}}</option>
                                                   @endforeach
												</select>
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label>City</label>
												<input type="text" name="city" class="form-control">
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label>State/Province</label>
												<select name="state" class="form-control select">
													<option>California</option>
													<option>Alaska</option>
													<option>Alabama</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label>Postal Code</label>
												<input type="text" name="postal_code" class="form-control">
											</div>
										</div>
									</div>
								</div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone </label>
                                        <input class="form-control" name="phone" type="text">
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
                            </div>
							<div class="form-group">
                                <label>Short Biography</label>
                                <textarea name="specialist" class="form-control" rows="3" cols="30"></textarea>
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
                                <input type = 'submit' class="btn btn-primary submit-btn" value = "Create Doctor"/>
                                <!-- <button class="btn btn-primary submit-btn">Create Doctor</button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>

 </div>
 @endsection