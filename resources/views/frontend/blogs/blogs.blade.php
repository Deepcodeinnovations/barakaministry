@extends('layouts.frontend')
@section('title', 'Our News and Updates')
@section('content')
 <section class="breadcrumbs-page-wrap" >
        <div class="bg-fixed pos-rel breadcrumbs-page" style="background-image:url({{ asset('/frontassets/images/breadcrumbs_bg2.jpg')}}) !important;">
            <div class="container">
                <h1>News and Updates</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">News & Updates</li>
                    </ol>
                </nav>  
            </div>
        </div>
    </section>

        <section class="wide-tb-100">
            <div class="container">
                <div class="row">
                    <!-- Blog Wrap -->
                    @foreach($userblogs as $blog)
                    <div class="col-md-6 col-lg-4 col-sm-12 mb-0">                                    
                        <div class="post-wrap">
                            <div class="post-img">
                                <a href="{{ route('web.blogdetails', [ 'slug' =>$blog->slug ])}}"><img src="{{ $blog->image_url}}" alt="" style="height:300px; width:100%; object-fit: cover; object-position: center;" /></a>
                            </div>
                            <div class="post-content">
                                <div class="post-date">{{ $blog->created_at->format('y M D')}}</div>
                                <h3 class="post-title"><a href="{{ route('web.blogdetails', [ 'slug' =>$blog->slug ])}}">{{ $blog->title }}</a></h3>
                                <div class="post-category">info@emikisaministries.org</div>
                                <div class="text-md-right">
                                    <a href="{{ route('web.blogdetails', [ 'slug' =>$blog->slug ])}}" class="read-more-line"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>                                    
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

@endsection