@extends('layouts.frontend')
@section('title', $service->title )
@section('content')



            <div class="page_content_wrap page_paddings_yes">
                <div class="content_wrap wrapper">
                    <div class="row">
                    <div class="content col-md-8">
                        <div class="post_item post_item_excerpt post_featured_default post_format_standard odd post-470 post type-post status-publish format-standard has-post-thumbnail hentry category-gallery tag-adoption tag-donation">
                        
                 {!! $service->about !!}
                        </div>



                    </div>
                    <!-- </div> class="content"> -->
                    <div class="sidebar widget_area scheme_original col-md-4" role="complementary">
                @include('frontend.comps.sidebar')
                    </div>
                    <!-- /.sidebar -->
                </div>


                <!-- </div> class="content_wrap"> -->
            </div>
        </div>

        @include('frontend.comps.donatecomp')








@endsection