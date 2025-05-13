@extends('administrator.layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('administrator/save-recruiter') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Add Recruiter </h4>
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>

					</div>

				@endif
				@if(session()->has('message'))
					<div class="alert alert-success">
						{{ session()->get('message') }}
					</div>
				@endif
				<div class="row">
					<div class="col-md-7" >
						<div class="form-group row">
							<label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name Here" value="{{ $recruiter->name }}" >
							</div>
						</div>
						
						<div class="form-group row">
							<label for="model" class="col-sm-3 text-right control-label col-form-label">Model</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="model" id="model" placeholder="Enter Model Here" value="{{ $recruiter->model }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="model_id" class="col-sm-3 text-right control-label col-form-label">Model id</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="model_id" id="model_id" placeholder="Enter Model Id Here" value="{{ $recruiter->model_id }}" >
							</div>
						</div>
					</div>
					<div class="col-md-5">
									
						<div class="form-group row">
							<label for="state" class="col-sm-3 text-right control-label col-form-label">Status</label>
							<div class="col-sm-9">
								<select name="status" id="status" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="">Update Status</option>
									<option value="1" {{ ( $recruiter->status ==  '1' )? 'selected' : '' }} > Publish</option>
									<option value="0" {{ ( $recruiter->status ==  '0' )? 'selected' : '' }}> Private </option>
								<select>
							</div>
						</div>
						<div class="form-group row">
							<label for="tags" class="col-md-6 text-left control-label col-form-label">Featured Image</label>
							<div class="col-sm-6 text-center">
								<a href="#imageBox" class="image-profile open-popup-link">
									<img src="{{ (isset($recruiter->featured_image))?getSizedImage('',$recruiter->featured_image):'https://dummyimage.com/250x250?text=Add%20Image' }}" alt="" style="width:100%">
									<input type="hidden" name="featured_image" id="featured_image" value="" >	
								</a>	
								@if(isset($recruiter->featured_image))
									<a href="javascript:void(0)" class="removeImage" style="color: #c90f0f;font-weight: 600;"> Remove Image </a>	
								@endif					
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="border-top">

				<div class="card-body">

					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="recruiter_id" id="recruiter_id" value="{{ $recruiter->id }}" >
				</div>

			</div>

		</form>

	</div>
</div>              

@endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection

