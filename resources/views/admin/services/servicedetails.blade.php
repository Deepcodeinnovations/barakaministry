@extends('layouts.admin')
@section('title', $service->title)
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<button class="btn btn-primary btn-block" data-target="#modalQuill" data-toggle="modal" style="float:right">Add Images</button>
			<div class="card-body">
				
				<div>

					
					<h6 class="main-content-label mb-1">{{ $service->title }}</h6>
					<p class="text-muted card-sub-title">{{ $service->caption }}</p>

					
				</div>
				<div  aria-multiselectable="true" class="accordion" id="accordion1" role="tablist">

					@foreach($service->images as $dep)
					<div class="card">
						<div class="card-header" id="{{ $dep->id }}" role="tab">
							<a aria-controls="collapseOne" aria-expanded="true" data-toggle="collapse" href="#{{ $dep->id}}" class="accordion-toggle bg-primary text-white collapsed" data-parent="#accordion" ><i class="fe fe-arrow-right mr-2"></i>{{ $dep->title}}</a>
						</div>
						<div aria-labelledby="{{ $dep->id }}" class="collapse" data-parent="#accordion" id="{{ $dep->id}}" role="tabpanel">
							<div class="card-body">
								{{ $dep->image_url }}
							</div>
						</div>
					</div>
					@endforeach
					
				</div><!-- accordion -->
			</div>
		</div>
	</div>
</div>


<div class="modal" id="modalQuill">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header pd-20">
							<h6 class="modal-title">Add Images</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body pd-0">
							<div class="card">
			<div class="card-body">
				<form method="Post" action="{{ route('admin.storeserviceimage')}}" enctype="multipart/form-data" >
					{{ csrf_field() }}
					<div >
						<div class="">
							<div class="form-group">
								<label class="">Image Title</label>
								<input class="form-control" required="" type="text" name="title" placeholder="Enter Department Title">
							</div>
							<div class="form-group">
								<label class="">Enter Image</label>
								<div class="pos-relative">
									<input class="form-control pd-r-80" required="" type="file"  name="image">
								</div>
							</div>
							<input type="hidden" name="service_id"  value="{{ $service->id}}">
							<div class="modal-footer ">
							<button class="btn ripple btn-main-primary" type="submit">Save Information</button>
							 <button class="btn ripple btn-light" type="button">Cancel</button>
						</div>
						</div>
					</div>
				</form>
			</div>
		</div>
						</div>
						
					</div>
				</div>
			</div>



@endsection