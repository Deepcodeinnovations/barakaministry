@extends('layouts.frontend')
@section('title', 'Welcome')
@section('content')
            <div class="slider_wrap slider_fullwide slider_engine_revo slider_alias_main">
                <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
                    <!-- START REVOLUTION SLIDER 5.2.5.4 fullwidth mode -->
                    <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" data-version="5.2.5.4">
                        <ul>
                            <!-- SLIDE  -->
                            <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide"
                                            data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="/frontassets/images/slider_1_1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption TRX-subtitle   tp-resizeme  extra" id="slide-1-layer-1" data-x="right" data-hoffset="372" data-y="160" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power2.easeInOut;"
                                                data-transform_out="opacity:0;s:300;" data-start="600" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-captionhidden="on">The Baraka Ministry </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption TRX-title   tp-resizeme" id="slide-1-layer-2" data-x="right" data-hoffset="33" data-y="203" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1400;e:Power2.easeInOut;"
                                                data-transform_out="opacity:0;s:300;" data-start="1200" data-splitin="none" data-splitout="none" data-responsive_offset="on">Helping Vulnerable<br/> children </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption TRX-button   tp-resizeme" id="slide-1-layer-3" data-x="right" data-hoffset="285" data-y="499" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1400;e:Power2.easeInOut;"
                                                data-transform_out="opacity:0;s:300;" data-start="1700" data-splitin="none" data-splitout="none" data-responsive_offset="on"><a href="{{ route('web.sponsor')}}" class="sc_button sc_button_square sc_button_style_filled2 sc_button_size_large  sc_button_iconed ">Sponsor a Child <i class="fa fa-arrow-circle-right"></i></a> </div>
                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide"
                                            data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="/frontassets/images/slider_1_2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption TRX-subtitle-white   tp-resizeme  extra" id="slide-2-layer-1" data-x="right" data-hoffset="382" data-y="160" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power2.easeInOut;"
                                                data-transform_out="opacity:0;s:300;" data-start="600" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-captionhidden="on">Working with the the Community </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption TRX-title-white   tp-resizeme" id="slide-2-layer-2" data-x="right" data-hoffset="38" data-y="210" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1400;e:Power2.easeInOut;"
                                                data-transform_out="opacity:0;s:300;" data-start="1200" data-splitin="none" data-splitout="none" data-responsive_offset="on">Creating change for<br/> the better </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption TRX-button   tp-resizeme" id="slide-2-layer-3" data-x="right" data-hoffset="295" data-y="497" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1400;e:Power2.easeInOut;"
                                                data-transform_out="opacity:0;s:300;" data-start="1700" data-splitin="none" data-splitout="none" data-responsive_offset="on"><a href="{{ route('web.visitus')}}" class="sc_button sc_button_square sc_button_style_filled2 sc_button_size_large  sc_button_iconed fa fa-arrow-circle-right">Visit us Now <i class="fa fa-arrow-circle-right"></i></a> </div>
                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide"
                                            data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="/frontassets/images/slider_1_3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption TRX-subtitle-white   tp-resizeme  extra" id="slide-3-layer-1" data-x="145" data-y="152" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;"
                                                data-start="600" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-captionhidden="on">Donating to Welfare</div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption TRX-title-white   tp-resizeme" id="slide-3-layer-2" data-x="140" data-y="200" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1400;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;"
                                                data-start="1200" data-splitin="none" data-splitout="none" data-responsive_offset="on">Give a little.<br/> Change a lot. </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption TRX-button   tp-resizeme" id="slide-3-layer-3" data-x="145" data-y="487" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1400;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;"
                                                data-start="1700" data-splitin="none" data-splitout="none" data-responsive_offset="on"><a href="{{ route('web.donate')}}" class="sc_button sc_button_square sc_button_style_filled2 sc_button_size_large  sc_button_iconed fa fa-arrow-circle-right">Donate to Ministry <i class="fa fa-arrow-circle-right"></i></a> </div>
                            </li>
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
                <!-- END REVOLUTION SLIDER -->
            </div>


    <div class="wrap">
                                    <div class="column_container">
                                        <div class="column-inner">
                                            <div class="wrapper">
                                                <div class="h10"></div>
                                                <h2 class="sc_title sc_title_regular sc_align_center margin_top_large">Volunteer Opportunities</h2>
                                                <div class="sc_promo sc_promo_size_large">
                                                    <div class="sc_promo_inner">
                                                        <div class="sc_promo_image"></div>
                                                        <div class="sc_promo_block sc_align_left">
                                                            <div class="sc_promo_block_inner">
                                                                <h2 class="sc_promo_title sc_item_title sc_item_title_without_descr">Become a Volunteer</h2>
                                                                <div class="sc_promo_descr sc_item_descr">Baraka Ministries is looking for volunteers that can be our ministry Ambassadors in their cities in different countries. You will be helping us with Fundraising for the vulnerable children and also advocating for our goals and mission</div>
                                                                <div class="sc_promo_button sc_item_button"><a href="{{ route('web.volunteer')}}" class="sc_button sc_button_square sc_button_style_filled sc_button_size_large  sc_button_iconed fa fa-arrow-circle-right">Volunteer <i class="fa fa-arrow-circle-right"></i></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br/>


                                   <div class="columns_wrap block_1474278531405">
                                    <div class="column_container">
                                        <div class="column-inner">
                                            <div class="wrapper">
                                                <div id="sc_call_to_action_1289762350" class="sc_call_to_action sc_call_to_action_accented sc_call_to_action_style_2">
                                                    <div class="sc_call_to_action_info"><h2 class="sc_call_to_action_title sc_item_title sc_item_title_without_descr">Donate Today to Save Children From the Trauma of Abuse</h2></div><div class="sc_call_to_action_featured"><div class="featured_bg"></div></div><div class="sc_call_to_action_buttons sc_item_buttons"><div class="sc_call_to_action_button sc_item_button"><a  class="sc_button sc_button_square sc_button_style_filled3 sc_button_size_large" target="_blank" href="https://www.paypal.com/paypalme/barakaministries">Donate Using Paypal <i class="fab fa-paypal"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

      
@endsection