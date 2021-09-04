@extends('layouts.frontend')
@section('title', $blog->title )
@section('content')
<div class="top_panel_image" style="background-image:url({{ $blog->image_url}}) !important;">
                <div class="top_panel_image_header" ></div>
            </div>
    <div class="page_content_wrap page_paddings_yes">
                <div class="content_wrap wrapper">
                    <div class="content">
                        <div class="itemscope post_item post_item_single post_featured_default post_format_standard post-462 post type-post status-publish format-standard has-post-thumbnail hentry category-gallery tag-adoption tag-donation" itemscope itemtype="http://schema.org/Article">
                            <div class="post_content" itemprop="articleBody">
                                <h1 itemprop="headline" class="post_title entry-title"> {{ $blog->title }}</h1>
                                <div class="post_info">
                                    <span class="post_info_item post_info_posted"> <a href="index.html" class="post_info_date date updated" itemprop="datePublished" content="2016-09-12 14:20:49">{{ $blog->created_at->format('y M D')}}</a></span>
                                   
                                </div>
                              {!! $blog->about !!}
                               
                            </div>
                            <!-- </div> class="post_content" itemprop="articleBody"> -->
                            <div class="post_info post_info_bottom post_info_share post_info_share_horizontal">
                                <div class="sc_socials sc_socials_size_tiny sc_socials_share sc_socials_dir_horizontal">
                                    <div class="sc_socials_item social_item_popup"><a href="single-post.html#" class="social_icons social_twitter" data-link="https://twitter.com/intent/tweet?text=Save+Them+All&#038;url=http%3A%2F%2Fcharity-is-hope.themerex.net%2Fsave-them-all%2F"><span class="icon-twitter"></span></a></div>
                                    <div class="sc_socials_item social_item_popup"><a href="single-post.html#" class="social_icons social_facebook" data-link="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fcharity-is-hope.themerex.net%2Fsave-them-all%2F"><span class="icon-facebook"></span></a></div>
                                    <div class="sc_socials_item social_item_popup"><a href="single-post.html#" class="social_icons social_vine" data-link=""><span class="icon-vine"></span></a></div>
                                </div>
                            </div>
                            <div class="post_author author vcard" itemprop="author" itemscope itemtype="http://schema.org/Person">
                               
                                <h6 class="post_author_title">About <span itemprop="name"><a href="http://charity-is-hope-html.themerex.net/author/trx_admin/index.html" class="fn">Baraka Ministries</a></span></h6>
                                <div class="post_author_info" itemprop="description">
                                    Baraka Ministries is an evangelical, non-denominational, bible-based ministry dedicated to helping street children, orphans, at-risk slum children, and children from very poor families. We believe that a family is the best place for a child to grow in.</div>
                            </div>
                        </div>
                    
                        <!-- /.comments_wrap -->
                    </div>
                    <!-- </div> class="content"> -->
                </div>
                <!-- </div> class="content_wrap"> -->
            </div>


@endsection