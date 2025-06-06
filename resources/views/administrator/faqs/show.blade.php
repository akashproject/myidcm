@extends('administrator.layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('administrator/save-faq') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
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
					<div class="col-md-8" >
						<div class="form-group row mb-3">
							<label for="question" class="col-sm-3 text-right control-label col-form-label">Question</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="question" id="question" placeholder="Enter Question Here" value="{{ $faq->question }}">
							</div>
						</div>
						<div class="form-group row mb-3">
							<label for="answer" class="col-sm-3 text-right control-label col-form-label">Answer</label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="answer"  id="mceEditor" placeholder="Enter answer Here" >{{ $faq->answer }}</textarea>
							</div>
						</div>
					</div>
					<div class="col-md-4">					
						<div class="form-group row mb-3">
							<label for="state" class="col-sm-3 text-right control-label col-form-label">Status</label>
							<div class="col-sm-9">
								<select name="status" id="status" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="">Update Status</option>
									<option value="1" {{ ( $faq->status ==  '1' )? 'selected' : '' }} > Publish</option>
									<option value="0" {{ ( $faq->status ==  '0' )? 'selected' : '' }}> Private </option>
								<select>
							</div>
						</div>						
					</div>
				</div>
				
			</div>

			<div class="border-top">
				<div class="card-body">
					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="faq_id" id="faq_id" value="{{ $faq->id }}" >
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

