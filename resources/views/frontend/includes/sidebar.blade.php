    <aside class="row sidebar-widgets">
                            <!-- Sidebar Primary Start -->
                            <div class="sidebar-primary col-lg-12 col-md-6">
                                <!-- Widget Wrap -->
                                <div class="widget-wrap">
                                    <h3 class="widget-title">Search Keywords</h3>

                                    <form class="sidebar-search">
                                        <input type="text" class="form-control" placeholder="Enter here search...">
                                        <button type="submit" class="btn-link"><i class="icofont-search"></i></button>
                                    </form>
                                </div>
                                <!-- Widget Wrap -->

                                <!-- Widget Wrap -->
                                <div class="widget-wrap">
                                    

                                    <h3 class="widget-title">What We Do</h3>
                                    
                                    <div class="blog-list-categories">
                                        <ul class="list-unstyled icons-listing theme-orange mb-0">
                                        @foreach($userservices as $service)
                                <li><a  href="{{ route('web.servicedetails', ['slug' => $service->slug ])}}">{{ $service->title}}</a></li>
                                @endforeach                                        
                                                                                   
                                        </ul>
                                    </div>
                                </div>
                                <!-- Widget Wrap -->

                                <!-- Widget Wrap -->
                                <div class="widget-wrap">
                                    <h3 class="widget-title">Popular Posts</h3>
                                    
                                    <div class="popular-post">
                                        <ul class="list-unstyled">
                                             @foreach($userblogs as $blog)
                                            <li>
                                                <img src="{{ $blog->image_url}}" alt="">
                                                <div>
                                                    <h6><a href="{{ route('web.blogdetails', [ 'slug' =>$blog->slug ])}}">{{ $blog->title }}</a></h6>
                                                    <small>{{ $blog->created_at->format('y M D')}}</small>
                                                </div>
                                            </li>
                                            @endforeach
                                           
                                        </ul>
                                    </div>
                                </div>
                                <!-- Widget Wrap -->
                            </div>
                            <!-- Sidebar Primary End -->

                         


                                <!-- Widget Wrap -->
                                <div class="widget-wrap">
                                    <div class="sidebar-ads">
                                        <img src="{{ asset('/frontassets/images/emikisa/slider4.jpg')}}" alt="">
                                        <div class="content">
                                            <i class="charity-donate_money"></i>
                                            <h3>Let Us Come Together To Make A Difference</h3>
                                            <a href="https://www.paypal.com/paypalme/mikisaministries" target="_blank" class="btn btn-secondary">Donate Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Widget Wrap -->
                            </div>
                            <!-- Sidebar Secondary End -->

                            
                        </aside>