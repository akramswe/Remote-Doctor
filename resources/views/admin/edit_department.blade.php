
    @extends('layouts.app1')
    @section('content')
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Department</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form  action="{{action('DepartmentController@update', $id)}}" method = "post" enctype="multipart/form-data">
                              {{csrf_field()}}
              <input type="hidden" name="_method" value="PATCH" />
                      <div class="form-group">
                                <label>Department ID</label>
                                <input class="form-control" type="text" value="{{$department->dept_id}}" name="dept_id">
                            </div>
							<div class="form-group">
								<label>Department Name</label>
								<input class="form-control" type="text" value="{{$department->dept_name}}" name="dept_name">
							</div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea cols="30" rows="4" class="form-control" name="description">{{$department->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="display-block">Department Status</label>
                                    <tr>
                                    @if($department->status == "Active")
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
                                <button class="btn btn-primary submit-btn">Save Department</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
			
    </div>
    @endsection
