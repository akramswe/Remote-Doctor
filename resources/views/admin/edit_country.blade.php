  @section('content')
     @extends('layouts.app1')
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Country</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form  action="{{action('CountryController@update', $id)}}" method = "post" enctype="multipart/form-data">
                              {{csrf_field()}}
              <input type="hidden" name="_method" value="PATCH" />
              <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                            <div class="form-group">
                                <label>Country ID</label>
                                <input class="form-control" name="country_id" value="{{$country->country_id}}" type="text">
                            </div>
							<div class="form-group">
								<label>Country Name</label>
								<input class="form-control" name="country_name" value="{{$country->country_name}}" type="text">
							</div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea cols="30" rows="4" class="form-control"name="description">{{$country->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="display-block">Country Status</label>
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
                                <button class="btn btn-primary submit-btn">Edit Country</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
			</div>
        </div>
            </div>
        </div>
    </div>
@endsection