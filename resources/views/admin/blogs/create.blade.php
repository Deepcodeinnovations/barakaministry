@extends('layouts.admin')
@section('title', 'Website contacts')
@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<div>
					<h6 class="main-content-label mb-1">Create a Blog</h6>
					<p class="text-muted card-sub-title">This Blog will automatically be added to the website. You can hide it by clicking hide Button</p>
				</div>
				<form method="Post" action="{{ route('admin.storeblog')}}" enctype="multipart/form-data" >
					{{ csrf_field() }}
					<div >
						<div class="">
							<div class="form-group">
								<label class="">BlogTitle</label>
								<input class="form-control" required="" type="text" name="title" placeholder="Enter Title">
							</div>
							<div class="form-group">
								<label class="">Enter Blog Banner</label>
								<div class="pos-relative">
									<input class="form-control pd-r-80" required="" type="file"  name="image">
								</div>
							</div>
							<div class="form-group">
								<label class="">Enter Blog Caption</label>
								<div class="pos-relative">
									<textarea class="form-control pd-r-80" required="" name="caption"></textarea>
								</div>
							</div>

							<div class="form-group">
								<label class="">Enter Blog Body</label>
								<div class="pos-relative">
									<textarea class="summernote form-control pd-r-80" required="" name="about" id="summernote"></textarea>
								</div>
							</div>
						
							
							<button type="submit" class="btn ripple btn-main-primary btn-block">Create Blog</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


@endsection