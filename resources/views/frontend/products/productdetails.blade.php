@extends('layouts.frontend')
@section('title', $product->title )
@section('content')

<!-- page title start -->
	<div class="fixit_page_title" style="background-image:url({{ $product->image_url}});">
		<div class="fixit_page_title_inner">
			<h3>{{ $product->title }}</h3>
			<ul class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li><a href="{{ route('web.properties')}}">Single House</a></li>
			</ul>
		</div>
	</div>
	
	
	
	<!-- project grid start -->
	<div class="fixit_section">
		<div class="product">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="images">	
						 	<img src="{{ $product->image_url}}" alt="" style="height:400px; width:100%; object-fit: cover; object-position: center;" />		
						</div>
					</div>
					
					<div class="col-md-7">
						<div class="summary entry-summary">
							@if($product->status = 1)
							<p class="stock in-stock">Property Available</p>
							@elseif($product->status = 2)
							<p class="stock out-of-stock">Property Taken</p>
							@endif
							<h1 class="product_title entry-title">{{ $product->title }}</h1>
							<div class="price_wrapper">
								<p class="price">
								
									<ins>
										<span class="woocommerce-Price-amount amount">
											<span class="woocommerce-Price-currencySymbol">UGX </span>{{ $product->price }}
										</span>
									</ins>
								</p>
							</div>
							
							
							
							<div class="description">
								{!! $product->about !!}
							</div>
							
							<div class="product_action">
								<div class="quantity">
									<h3 class="widget-title"><span>Request to Inspect Property</span></h3>

								   <div class="post_add_comment_wrapper">
						<form action="{{ route('web.storeproductorder')}}" method="Post">
							{{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="input_wrapper light">
                                    <input id="cont_name" type="text" name="name" placeholder="Enter your name*">
                                </div>
                            </div>
                             <input id="cont_name" type="hidden" name="product_id" value="{{ $product->id }}" laceholder="Enter your name*">
                            <div class="col-md-6 col-sm-6">
                                <div class="input_wrapper light">
                                    <input id="cont_email" type="email" name="email" placeholder="Enter your e-mail*">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="input_wrapper light">
                                    <input id="cont_phone" type="number" name="phone" placeholder="Enter your Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="input_wrapper light">
                                    <input id="cont_address" type="text" name="address" placeholder="Your current Location">
                                </div>
                            </div>
                            
                            <div class="col-md-12 col-sm-12">
                                <div class="input_wrapper light">
                                    <textarea id="cont_msg" name="msg" placeholder="Enter your message"></textarea>
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                            <div class="col-md-12 col-sm-12">
                                <button id="contact_form_submit" class="fixit_btn fixit_btn_default" type="submit">Request to Inspect</button>
                                <p class="input_error" id="contact_err" style="position: absolute; font-size: 12px; font-weight: 500; letter-spacing: 0.5px;"> </p>
                            </div>
                            
                        </div>
                    </form>
                    </div>
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



@endsection