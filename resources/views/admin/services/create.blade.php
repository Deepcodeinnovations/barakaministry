@extends('layouts.admin')
@section('title', 'Create Service')
@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<div>
					<h6 class="main-content-label mb-1">Create a Service</h6>
					<p class="text-muted card-sub-title">This service will automatically be added to the website. You can hide it by clicking hide Button</p>
				</div>
				<form method="Post" action="{{ route('admin.storeservice')}}" enctype="multipart/form-data" >
					{{ csrf_field() }}
					<div >
						<div class="">
							<div class="form-group">
								<label class="">Service Title</label>
								<input class="form-control" required="" type="text" name="title" placeholder="Enter Title">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<label class="">Service Slogan</label>
									<input class="form-control" required="" type="text" name="slogan" placeholder="Enter Slogan">
									</div>
								</div>
											
								<div class="col-md-3">
									<div class="form-group">
										<p class="mg-b-10">Service Banner</p>
										<input type="file" class="form-control" name="banner" placeholder="Name">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<p class="mg-b-10">Service Image</p>
										<input type="file" class="form-control" name="image" placeholder="Name">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="">Enter Service Caption</label>
								<div class="pos-relative">
									<textarea class="form-control pd-r-80" required="" name="caption"></textarea>
								</div>
							</div>

							<div class="form-group">
								<label class="">Enter Service Body</label>
								<div class="pos-relative">
									<textarea class="summernote form-control pd-r-80" required="" name="about" id="summernote"></textarea>
								</div>
							</div>
						
							
							<button type="submit" class="btn ripple btn-main-primary btn-block">Create Service</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection

