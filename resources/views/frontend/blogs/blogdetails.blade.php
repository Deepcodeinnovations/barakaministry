@extends('layouts.frontend')
@section('title', $blog->title )
@section('content')

 <section class="breadcrumbs-page-wrap" >
        <div class="bg-fixed pos-rel breadcrumbs-page" style="background-image:url({{ asset('/frontassets/images/breadcrumbs_bg2.jpg')}}) !important;">
            <div class="container">
                <h1>{{ $blog->title }}</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
                    </ol>
                </nav>  
            </div>
        </div>
    </section>
	
       <!-- Blog Post Single Start -->
        <section class="wide-tb-100">
            <div class="container">
                <div class="row">                    
                    <div class="col-lg-9 col-md-12">
                        <div class="sidebar-spacer">
                            
                            <h1 class="heading-main">
                               {{ $blog->title }}
                            </h1>
                            
                            <!-- Causes Single Wrap -->
                            <div class="causes-wrap single">
                                <div class="img-wrap">
                                    <img src="{{ $blog->image_url }}" alt="">
                                </div>

                                <div class="content-wrap-single" style="width:100% !important">
                                    {!! $blog->about !!}
                                   
                                </div>

                                <div class="share-this-wrap">
                                    <div class="share-line">
                                        <div class="pr-4">
                                            <strong>Share This</strong>
                                        </div>
                                        <div class="pl-4">
                                            <ul class="list-unstyled list-inline mb-0">
                                                <li class="list-inline-item"><a href="#"><i class="icofont-facebook"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="icofont-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="icofont-instagram"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="icofont-behance"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="icofont-youtube-play"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Causes Single Wrap -->
                             
                            <!-- Comments List -->
                           

                        </div>

                    </div>
                    <div class="col-lg-3 col-md-12">
                    @include('frontend.includes.sidebar')
                    </div>
                </div>
            </div>
        </section>
      

              <section class="wide-tb-100 pb-0">
   
            <div class="container">
                <div class="row">
                    <!-- Callout Section Side Image -->
                    <div class="col-sm-12">
                        <div class="callout-style-side-img d-lg-flex align-items-center top-broken-grid">
                            <div class="img-callout">
                                <img src="/frontassets/images/callout_side_img.html" alt="">
                            </div>
                            <div class="text-callout">
                                <div class="d-sm-flex align-items-center">                                   
                                    <div class="heading">
                                        <h2>Let Us Come Together To Make A Difference</h2>
                                    </div>
                                    <div class="icon">
                                        <a target="_blank" href="https://www.paypal.com/paypalme/mikisaministries"  class="btn btn-default">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Callout Section Side Image -->
                </div>
            </div>
@endsection