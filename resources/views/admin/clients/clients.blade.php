@extends('layouts.admin')
@section('title', 'Manage Clients')
@section('content')
<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Mange Team</h6>
											<p class="text-muted card-sub-title">Create your Office Members</p>
										</div>
										<form method="Post" action="{{ route('admin.storeclient')}}" enctype="multipart/form-data" >
										{{ csrf_field() }}
										<div class="row">
										<div class="col-md-12">
												<div class="form-group">
													<p class="mg-b-10">Member Name</p>
													<input type="text" class="form-control" name="name" placeholder="Name">
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
													<textarea class="form-control" name="about" rows="4" placeholder="text here.."></textarea>
												</div><br>
												<button type="submit" class="btn ripple btn-main-primary btn-block">Add Client</button>
											</div>
											
										</div>
									</form>
									</div>
								</div>

		<div class="card transcation-crypto" id="transcation-crypto">
			<div class="card-body p-0" id="servicelist">
				<div class="table-responsive">
					<table class="table text-nowrap" id="example1">
						<thead class="border-top">
							<tr>
								<th class="bg-transparent">Image</th>
								<th class="bg-transparent">Name</th>
								<th class="bg-transparent">Status</th>
								<th class="bg-transparent">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($clients as $client)
							<tr class="border-bottom-0">
								<td class="coin_icon d-flex">
									<div class="orders1"> <img alt="img" class="" src="{{ $client->image_url }}"> </div>
		
								</td>
								<td class="text-muted fs-15 font-weight-semibold">{{ $client->name }}</td>						
								<td class="text-muted fs-15 font-weight-semibold">
									@if($client->status == 0)
									<span><a href="{{ route('admin.hideclient', ['slug' => $client->slug ])}}" class="btn btn-primary btn-sm ">Show Client</a></span>
									@else
									<span><a href="{{ route('admin.hideclient', ['slug' => $client->slug ])}}" class="btn btn-danger btn-sm ">Hide Client</a></span>
									@endif
									</td>
								<td>
									<a href="{{ route('admin.deleteclient', ['slug' => $client->slug ])}}" class="btn btn-warning btn-sm ">Delete</a>

									<a href="{{ route('admin.clientdetails', ['slug' => $client->slug ])}}" class="btn btn-green btn-sm ">Details</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection