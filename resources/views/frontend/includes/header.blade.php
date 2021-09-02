

            <div class="top_panel_fixed_wrap"></div>
            <header class="top_panel_wrap top_panel_style_1 scheme_original">
                <div class="top_panel_wrap_inner top_panel_inner_style_1 top_panel_position_above">
                    <div class="top_panel_middle">
                        <div class="content_wrap">
                            <div class="contact_logo">
                                <div class="logo">
                                    <a href="/"><img src="{{ asset('frontassets/images/logo.png')}}" class="logo_main" alt="" width="118" height="69"></a>
                                </div>
                            </div>
                            <div class="contact_button">
                                <a class="first_button" href="{{ route('web.donate')}}">Donate</a><a class="second_button" href="{{ route('web.volunteer')}}">Become Volunteer</a> </div>
                            <div class="contact_socials">
                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                    <div class="sc_socials_item"><a href="index.html#" target="_blank" class="social_icons social_twitter"><span class="icon-twitter"></span></a></div>
                                    <div class="sc_socials_item"><a href="index.html#" target="_blank" class="social_icons social_facebook"><span class="icon-facebook"></span></a></div>
                                    <div class="sc_socials_item"><a href="index.html#" target="_blank" class="social_icons social_vine"><span class="icon-vine"></span></a></div>
                                    <div class="sc_socials_item"><a href="index.html#" target="_blank" class="social_icons social_youtube"><span class="icon-youtube"></span></a></div>
                                    <div class="sc_socials_item"><a href="index.html#" target="_blank" class="social_icons social_pinterest-circled"><span class="icon-pinterest-circled"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top_panel_bottom">
                        <div class="content_wrap clearfix">
                            <nav class="menu_main_nav_area menu_hover_fade">
                                <ul id="menu_main" class="menu_main_nav">
                                    <li class="menu-item current-menu-item menu-item-home current-menu-ancestor  current-menu-parent menu-item-has-children"><a href="/"><span>Home</span></a>
                                    </li>

                                    <li class="menu-item menu-item-has-children"><a href="javascript:void(0)"><span>Who We Are</span></a>
                                         <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ route('web.about')}}"><span>About Us</span></a></li>
                                            <li class="menu-item"><a href="{{ route('web.focus')}}"><span>Our Focus</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="javascript:void(0)"><span>What We Do</span></a>
                                        <ul class="sub-menu">
                                             @foreach($userservices as $service)
                                <li><a class="menu-item" href="{{ route('web.servicedetails', ['slug' => $service->slug ])}}">{{ $service->title}}</a></li>
                                @endforeach
                                        </ul>
                                    </li>

                                     <li class="menu-item menu-item-has-children menu-item-45"><a href="javascript:void(0)"><span>Helping Hand</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ route('web.sponsor')}}"><span>Sponsor a Child</span></a></li>
                                            <li class="menu-item"><a href="{{ route('web.donate')}}"><span>Donate</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children menu-item-45"><a href="javascript:void(0)"><span>Get Involved</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ route('web.visitus')}}"><span>Visit Us</span></a></li>
                                            <li class="menu-item"><a href="{{ route('web.volunteer')}}"><span>Volunteer</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="{{ route('web.blogs')}}"><span>News</span></a></li>
                                    <li class="menu-item"><a href="{{ route('web.contact')}}"><span>Contact Us</span></a></li>
                                </ul>
                            </nav>
                            <div class="search_wrap search_style_fullscreen search_state_closed">
                                <div class="search_form_wrap">
                                    <form role="search" method="get" class="search_form" action="index.html#">
                                        <button type="submit" class="search_submit icon-search" title="Open search"></button>
                                        <input type="text" class="search_field" placeholder="Search" value="" name="s" />
                                        <a class="search_close icon-cancel"></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <div class="header_mobile">
                <div class="content_wrap">
                    <div class="menu_button icon-menu"></div>
                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('/frontassets/images/logo.png')}}" class="logo_main" alt="" width="118" height="69"></a>
                    </div>
                </div>
                <div class="side_wrap">
                    <div class="close">Close</div>
                    <div class="panel_top">
                        <nav class="menu_main_nav_area ">
                                <ul id="menu_main" class="menu_main_nav">
                                    <li class="menu-item current-menu-item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children"><a href="/"><span>Home</span></a>
                                    </li>

                                    <li class="menu-item current-menu-item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children"><a href="{{ route('web.about')}}"><span>Who We Are</span></a>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="index.html#"><span>What We Do</span></a>
                                        <ul class="sub-menu">
                                             @foreach($userservices as $service)
                                <li><a class="menu-item" href="{{ route('web.servicedetails', ['slug' => $service->slug ])}}">{{ $service->title}}</a></li>
                                @endforeach
                                        </ul>
                                    </li>

                                     <li class="menu-item menu-item-has-children menu-item-45"><a href="index.html#"><span>Helping Hand</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="about-us-style-1.html"><span>Sponsor a Child</span></a></li>
                                            <li class="menu-item"><a href="http://charity-is-hope-html.themerex.net/about-us-style-2/index.html"><span>Donate</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children menu-item-45"><a href="index.html#"><span>GeT Involved</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="about-us-style-1.html"><span>Visit Us</span></a></li>
                                            <li class="menu-item"><a href="http://charity-is-hope-html.themerex.net/about-us-style-2/index.html"><span>Volunteer</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="{{ route('web.blogs')}}"><span>News</span></a></li>
                                    <li class="menu-item"><a href="{{ route('web.contact')}}"><span>Visit Us</span></a></li>
                                </ul>
                            </nav>
                        <div class="search_wrap search_style_ search_state_fixed search_ajax">
                            <div class="search_form_wrap">
                                <form role="search" method="get" class="search_form" action="index.html#">
                                    <button type="submit" class="search_submit icon-search" title="Start search"></button>
                                    <input type="text" class="search_field" placeholder="Search" value="" name="s" /></form>
                            </div>
                            <div class="search_results widget_area scheme_original">
                                <a class="search_results_close icon-cancel"></a>
                                <div class="search_results_content"></div>
                            </div>
                        </div>
                    </div>
                    <div class="contact_socials">
                        <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
                            <div class="sc_socials_item"><a href="index.html#" target="_blank" class="social_icons social_twitter"><span class="icon-twitter"></span></a></div>
                            <div class="sc_socials_item"><a href="index.html#" target="_blank" class="social_icons social_facebook"><span class="icon-facebook"></span></a></div>
                            <div class="sc_socials_item"><a href="index.html#" target="_blank" class="social_icons social_vine"><span class="icon-vine"></span></a></div>
                            <div class="sc_socials_item"><a href="index.html#" target="_blank" class="social_icons social_youtube"><span class="icon-youtube"></span></a></div>
                            <div class="sc_socials_item"><a href="index.html#" target="_blank" class="social_icons social_pinterest-circled"><span class="icon-pinterest-circled"></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="mask"></div>
            </div>