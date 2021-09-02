@extends('layouts.admin')
@section('title', $blog->title)
@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<div>
					<h6 class="main-content-label mb-1">Update Blog</h6>
					<p class="text-muted card-sub-title">This blog will automatically be added to the website. You can hide it by clicking hide Button</p>
				</div>
				<form method="Post" action="{{ route('admin.updateblog', ['slug'=>$blog->slug])}}" enctype="multipart/form-data" >
					{{ csrf_field() }}
					<div >
						<div class="">
							<div class="form-group">
								<label class="">Blog Title</label>
								<input class="form-control" required="" type="text" name="title" value="{{ $blog->title }}">
							</div>
							<div class="form-group">
								<label class="">Enter Banner</label>
								<div class="pos-relative">
									<input class="form-control pd-r-80"  type="file"  name="image">
								</div>
							</div>
							<div class="form-group">
								<label class="">Enter blog Caption</label>
								<div class="pos-relative">
									<textarea class="form-control pd-r-80" required="" name="caption">{{ $blog->caption }}</textarea>
								</div>
							</div>

							<div class="form-group">
								<label class="">Enter blog Body</label>
								<div class="pos-relative">
									<textarea class="summernote form-control pd-r-80" required="" name="about" id="summernote">{!! $blog->about !!}</textarea>
								</div>
							</div>
						
							
							<button type="submit" class="btn ripple btn-main-primary btn-block">Update Blog</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


@endsection