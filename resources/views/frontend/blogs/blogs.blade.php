@extends('layouts.frontend')
@section('title', 'Our News and Updates')
@section('content')
<div class="top_panel_title top_panel_style_1  title_present scheme_original">
                <div class="top_panel_title_inner top_panel_inner_style_1  title_present_inner">
                    <div class="content_wrap">
                        <h1 class="page_title">All Posts</h1> </div>
                </div>
            </div>
            <div class="page_content_wrap page_paddings_yes">
                <div class="content_wrap wrapper">
                    <div class="content">


                        @foreach($userblogs as $blog)
                        <div class="post_item post_item_excerpt post_featured_left post_format_standard odd post-470 post type-post status-publish format-standard has-post-thumbnail hentry category-gallery tag-adoption tag-donation">
                            <div class="post_featured">
                                <div class="post_thumb" data-image="{{ $blog->image_url}}" data-title="{{ $blog->title }}">
                                    <a class="hover_icon hover_icon_link" href="{{ route('web.blogdetails', [ 'slug' =>$blog->slug ])}}"><img width="770" height="434" src="{{ $blog->image_url}}" alt="" style="height:300px; width:100%; object-fit: cover; object-position: center;"></a>
                                </div>
                            </div>
                            <div class="post_content clearfix">
                                <h3 class="post_title"><a href="{{ route('web.blogdetails', [ 'slug' =>$blog->slug ])}}">{{ $blog->title }}</a></h3>
                                <div class="post_info">
                                    <span class="post_info_item post_info_posted"> <a href="single-post.html" class="post_info_date">{{ $blog->created_at->format('y M D')}}</a></span>
                                     
                                </div>
                                <div class="post_descr">
                                    <p>{{ $blog->caption }}</p>
                                    <a href="{{ route('web.blogdetails', [ 'slug' =>$blog->slug ])}}" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">Read More</a>
                                </div>
                            </div>
                            <!-- /.post_content -->
                        </div>
                        @endforeach
                

        
                        <!-- /.post_item -->
                       <!--  <nav id="pagination" class="pagination_wrap pagination_pages"><span class="pager_current active ">1</span><a href="classic-without-sidebar.html#" class="">2</a><a href="classic-without-sidebar.html#" class="">3</a>
                            <a href="classic-without-sidebar.html#" class="pager_next "></a>
                            <a href="classic-without-sidebar.html#" class="pager_last "></a>
                        </nav> -->
                    </div>
                    <!-- </div> class="content"> -->
                </div>
                <!-- </div> class="content_wrap"> -->
            </div>



@endsection