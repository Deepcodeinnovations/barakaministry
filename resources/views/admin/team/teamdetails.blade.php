@extends('layouts.admin')
@section('title', $team->name)
@section('content')
<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12">
				<div class="card">
			<div class="card-body">
				<div>
					<h6 class="main-content-label mb-1">Update Team</h6>
					<p class="text-muted card-sub-title">Create your Office Members</p>
				</div>
				<form method="Post" action="{{ route('admin.storeupdateteam', ['slug'=>$team->slug])}}" enctype="multipart/form-data" >
				{{ csrf_field() }}
				<div class="row">
				<div class="col-md-12">
						<div class="form-group">
							<p class="mg-b-10">Member Name</p>
							<input type="text" class="form-control" name="name" value="{{ $team->name}}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<p class="mg-b-10">Member Position</p>
							<input type="text" class="form-control" name="position" value="{{ $team->position}}">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<p class="mg-b-10">Image</p>
							<input type="file" class="form-control" name="image" placeholder="Name">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<p class="mg-b-10">Level</p>
							<input type="number" class="form-control" name="level" value="{{ $team->level}}">
						</div>
					</div>
					<div class="col-md-12 ">
						<div class="form-group mb-0">
							<p class="mg-b-10">About Member</p>
							<textarea class="form-control" name="about" rows="4" placeholder="text here..">{{ $team->about }}</textarea>
						</div><br>
						<button type="submit" class="btn ripple btn-main-primary btn-block">Update Member</button>
					</div>
					
				</div>
			</form>
			</div>
		</div>
	</div>
</div>
@endsection
