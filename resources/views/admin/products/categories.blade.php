@extends('layouts.admin')
@section('title', 'Property Categories')
@section('content')
<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Mange Product Categories</h6>
											<p class="text-muted card-sub-title">Create Product Categories</p>
										</div>
										<form method="Post" action="{{ route('admin.storecategory')}}" enctype="multipart/form-data" >
										{{ csrf_field() }}
										
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<p class="mg-b-10">Category Title</p>
													<input type="text" class="form-control" name="title" placeholder="Category Title">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<p class="mg-b-10">Image</p>
													<input type="file" class="form-control" name="image" placeholder="Image">
												</div>
											</div>
											
											<div class="col-md-12 ">
												<div class="form-group mb-0">
													<p class="mg-b-10">About Category</p>
													<input class="form-control" name="caption"  placeholder="Summery about Category"/>
												</div><br>
												<button type="submit" class="btn ripple btn-main-primary btn-block">Add Product Category</button>
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
								<th class="bg-transparent">Title</th>
								<th class="bg-transparent">No of Properties</th>
								
								<th class="bg-transparent">Status</th>
								<th class="bg-transparent">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($categories as $cat)
							<tr class="border-bottom-0">
								<td class="coin_icon d-flex">
									<div class="orders1"> <img alt="img" class="" src="{{ $cat->image_url }}"> </div>
		
								</td>
								<td class="text-muted fs-15 font-weight-semibold">{{ $cat->title }}</td>
								
								<td class="text-muted fs-15 font-weight-semibold">{{ count($cat->products) }}</td>
								
								
								<td class="text-muted fs-15 font-weight-semibold">
									@if($cat->status == 0)
									<span><a href="{{ route('admin.hideteam', ['slug' => $cat->slug ])}}" class="btn btn-primary btn-sm ">Show Cat</a></span>
									@else
									<span><a href="{{ route('admin.hideteam', ['slug' => $cat->slug ])}}" class="btn btn-danger btn-sm ">Hide Cat</a></span>
									@endif
									</td>
								<td>
									

									<a href="{{ route('admin.teamdetails', ['slug' => $cat->slug ])}}" class="btn btn-green btn-sm ">Update </a>
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