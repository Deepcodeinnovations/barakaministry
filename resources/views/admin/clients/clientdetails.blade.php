@extends('layouts.admin')
@section('title', $client->name)
@section('content')

<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<div>
					<h6 class="main-content-label mb-1">Update Client Information</h6>
					<p class="text-muted card-sub-title">Update Client Information</p>
				</div>
				<form method="Post" action="{{ route('admin.storeupdateclient', ['slug' =>$client->slug])}}" enctype="multipart/form-data" >
				{{ csrf_field() }}
				<div class="row">
				<div class="col-md-12">
						<div class="form-group">
							<p class="mg-b-10">Member Name</p>
							<input type="text" class="form-control" required="" name="name" value="{{ $client->name}}">
						</div>
					</div>
				</div>
				<div class="row">
					
					<div class="col-md-12">
						<div class="form-group">
							<p class="mg-b-10">Image</p>
							<input type="file" class="form-control" name="image" placeholder="Name">
						</div>
					</div>
					
					<div class="col-md-12 ">
						<div class="form-group mb-0">
							<p class="mg-b-10">About Client</p>
							<textarea class="form-control" name="about" required="" rows="4" placeholder="text here..">{{ $client->about}}</textarea>
						</div><br>
						<button type="submit" class="btn ripple btn-main-primary btn-block">Update Client</button>
					</div>
					
				</div>
			</form>
			</div>
		</div>
	</div>
</div>



@endsection