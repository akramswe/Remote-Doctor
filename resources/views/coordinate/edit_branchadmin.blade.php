@section('content')
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
                        <h4 class="page-title">Edit Branch Admin</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form  action="{{action('BranchAdminController@update', $id)}}" method = "post" enctype="multipart/form-data">
                              {{csrf_field()}}
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <input type="hidden" name="_method" value="PATCH" />

                            <div class="row">
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Employee ID <span class="text-danger"></span></label>
                                        <!-- <input class="form-control" name="fname" type="text"> -->
                                         <input  class="form-control" type="text" value="{{$branchadmin->ba_id}}" name='ba_id'/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>First Name <span class="text-danger"></span></label>
                                        <!-- <input class="form-control" name="fname" type="text"> -->
                                         <input  class="form-control" type="text" value="{{$branchadmin->ba_fname}}" name='ba_fname'/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" name="ba_lname" value="{{$branchadmin->ba_lname}}" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Username <span class="text-danger"></span></label>
                                        <input class="form-control" name="username" value="{{$branchadmin->ba_username}}" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger"></span></label>
                                        <!-- <input class="form-control" name="email" type="email"> -->
                                        <input  class="form-control" type="text" value="{{$branchadmin->email}}" name='email'/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone </label>
                                        <input class="form-control" name="phone" value="{{$branchadmin->phone}}" type="text">
                                    </div>
                                </div>
                                
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div class="cal-icon">
                                            <input type="text" name="dof" class="form-control datetimepicker">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
									<div class="form-group gender-select">
										<label class="gen-label">Gender:</label>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="gender" class="form-check-input" value="Male" checked="">Male
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
										<div class="col-sm-6">
											<div class="form-group">
												<label>Address</label>
												<!-- <input type="text" name="address" class="form-control "> -->
                                                 <textarea name="address" class="form-control" rows="3" cols="30">{{$branchadmin->address}}"</textarea>
											</div>
										</div>

                                        <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Avatar</label>
                                        <div class="profile-upload">
                                            <div class="upload-img">
                                                <img alt="" src="{{ asset('uploads/employee/' . $branchadmin->image) }}">
                                            </div>
                                            <div class="upload-input">
                                                <input name="image" type="file" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
										
									
									</div>
								</div>
                                
                                
                            </div>
							<div class="form-group">
                                <label>Short Biography</label>
                                <textarea name="biography" class="form-control" rows="3" cols="30">{{$branchadmin->address}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="display-block">Status</label>
								@if($branchadmin->status == "Active")
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
                                      @else
                                      <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="product_active" value="Active">
                                    <label class="form-check-label" for="product_active">
                                    Active
                                    </label>
                                </div>
                                         <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="product_inactive" value="Inactive" checked>
                                    <label class="form-check-label" for="product_inactive">
                                    Inactive
                                    </label>
                                </div>
                                    @endif 
                                
                            </div>
                            <div class="m-t-20 text-center">
                                <input type = 'submit' class="btn btn-primary submit-btn" value = "Edit Branch Admin"/>
                                <!-- <button class="btn btn-primary submit-btn">Create Doctor</button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
