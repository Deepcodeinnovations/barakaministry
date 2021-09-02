@extends('layouts.frontend')
@section('title', 'All '. $cat->title )
@section('content')

<!-- page title start -->
	<div class="fixit_page_title" style="background-image:url(/frontassets/images/bg/pagetitle_bg.jpg);">
		<div class="fixit_page_title_inner">
			<h3>{{ $cat->title }}</h3>
			<ul class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li><a href="{{ route('web.catproperties', ['id'=> $cat->id ])}}">{{ $cat->title }}</a></li>
			</ul>
		</div>
	</div>
	<!-- page title end -->
		<div class="fixit_section">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="row">



						@foreach($products as $property)
						<div class="col-md-6 col-sm-6">
							<div class="fixit_product_wrapper">
								<div class="product_image">
									<img src="{{ $property->image_url }}" style="height:350px; width:100%; object-fit: cover; object-position: center;" alt="{{ $property->title }}" />
									<div class="product_overlay fixit_custom_anim">
										<div class="link_wrapper">
											<a href="{{ route('web.propertydetails', ['slug' => $property->slug ])}}" >See Details</a>
										</div>
									</div>
								</div>
								<div class="product_detail">
									<h4><a href="product.html">{{ $property->title }}</a></h4>
									<span class="price">Ugx {{ $property->price }}</span>
								</div>
							</div>
						</div>
						@endforeach
						
						

						
						<div class="col-md-12">
							{{ $products->links('pagination::bootstrap-4') }}
						</div>
						
					</div>
				</div>
				
				<div class="col-md-4 col-sm-4">
					@include('frontend/includes/sidebar')
					<!-- sidebar end -->
				</div>
				
			</div>
		</div>
	</div>
	


@endsection