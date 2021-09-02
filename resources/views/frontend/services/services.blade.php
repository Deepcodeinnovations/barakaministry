@extends('layouts.frontend')
@section('title', 'List of Our Services')
@section('content')

<!-- page title start -->
	<div class="fixit_page_title" style="background-image:url(/frontassets/images/bg/pagetitle_bg.jpg);">
		<div class="fixit_page_title_inner">
			<h3>Our Services</h3>
			<ul class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li><a href="{{ route('web.services')}}">Services</a></li>
			</ul>
		</div>
	</div>
	<!-- page title end -->
	
	
	<!-- project grid start -->
	<div class="fixit_section">
		<div class="container">
			<div class="row">

				@foreach($userservices as $service)
				<div class="col-md-4 col-sm-6">
					<div class="fixit_project_wrapper">
						<img src="{{ $service->image_url }}" alt="{{ $service->title }}" style="height:400px; width:100%; object-fit: cover; object-position: center;" />
						<div class="project_overlay fixit_custom_anim">
							<div class="project_overlay_detail">
								<h3>{{ $service->title }}</h3>
								<p style="color:#ffffff">{{ $service->caption }}</p>
								<a class="fixit_btn" href="{{ route('web.servicedetails', ['slug' => $service->slug] )}}">Click for details</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			
				
			
				
			</div>
		</div>
	</div>
	<!-- project grid end -->

@endsection