@extends('layouts.admin')
@section('title', 'Manage Projects')
@section('content')
	<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card transcation-crypto" id="transcation-crypto">
									<div class="card-header bd-b-0">
										<a href="{{ route('admin.createproject')}}" class="btn btn-primary card-title font-weight-semibold mb-0 " style="float:right">Create New Service</a>
									</div>


									<div class="card-body p-0" id="servicelist">
										<div class="table-responsive">
											<table class="table text-nowrap" id="example1">
												<thead class="border-top">
													<tr>
														<th class="bg-transparent">Image</th>
														<th class="bg-transparent">Title</th>
														
														<th class="bg-transparent">Status</th>
														<th class="bg-transparent">Action</th>
													</tr>
												</thead>
												<tbody>
													@foreach($projects as $project)
													<tr class="border-bottom-0">
														<td class="coin_icon d-flex">
															<div class="orders1"> <img alt="img" class="" src="{{ $project->image_url }}"> </div>
								
														</td>
														<td class="text-muted fs-15 font-weight-semibold">{{ $project->title }}</td>
														
														
														<td class="text-muted fs-15 font-weight-semibold">
															@if($project->status == 0)
															<span><a href="{{ route('admin.hideproject', ['slug' => $project->slug ])}}" class="btn btn-primary btn-sm ">Show Project</a></span>
															@else
															<span><a href="{{ route('admin.hideproject', ['slug' => $project->slug ])}}" class="btn btn-danger btn-sm ">Hide Project</a></span>
															@endif
															</td>
														<td>
															<a href="{{ route('admin.projectdetails', ['slug' => $project->slug ])}}" class="btn btn-warning btn-sm ">Update</a>

															<a href="{{ route('admin.projectdetails', ['slug' => $project->slug ])}}" class="btn btn-green btn-sm ">Details</a>
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