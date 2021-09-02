@extends('layouts.admin')
@section('title', 'Create Property')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<div>
					<h6 class="main-content-label mb-1">Create a Service</h6>
					<p class="text-muted card-sub-title">This service will automatically be added to the website. You can hide it by clicking hide Button</p>
				</div>
				<form method="Post" action="{{ route('admin.storeproduct')}}" enctype="multipart/form-data" >
					{{ csrf_field() }}
					<div >
						<div class="">
						
							<div class="row">

								<div class="col-md-6">
										<div class="form-group">
											<label class="">Product Title</label>
								<input class="form-control" required="" type="text" name="title" placeholder="Enter Title">
										</div>
									</div>


									<div class="col-md-6">
										<div class="form-group">
											<label class="">Property Price</label>
								<input class="form-control" required="" type="number" name="price" placeholder="Enter Price">
										</div>
									</div>
								<div class="col-md-6">
										<div class="form-group">
											<label class="">Select Category</label>
											<div class="pos-relative">
												<select class="form-control pd-r-80" required=""   name="productcategory_id">
													@foreach($userproductcats as $cat)
													<option value="{{ $cat->id }}">{{ $cat->title }}</option>
													@endforeach
												</select>
											</div>
										</div>
									</div>
								

								<div class="col-md-6">
										<div class="form-group">
											<label class="">Enter Banner</label>
											<div class="pos-relative">
												<input class="form-control pd-r-80" required="" type="file"  name="image">
											</div>
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
						
							
							<button type="submit" class="btn ripple btn-main-primary btn-block">Create Property</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>



@endsection