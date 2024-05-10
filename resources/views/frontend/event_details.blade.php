@extends('layouts.front')

@section('content')
<section class="box_list_min sp_sm1">
    <div class="container">

        <!--box section-->
        <div class="content_box">

            <!--NAV BAR-->
            <div class="top_nav_bar">
                <ul>
                    <li><a href="https://amitshah.co.in">Home</a></li>
                    <li class=""><a href="https://amitshah.co.in/events">Events</a></li>
                    <li class="active"><a href="#">{{$event->title}}</a></li>
                </ul>
            </div>
            <!--NAV BAR END-->


            <!--LEFT-->
            <div class="content_box_left_change content_box_sm ">

                <div class="block_dtl_min">
                    <h1 class="blog-h">{{$event->title}}</h1>
                    <p class="blog-sb_line"> {{date('M d, Y' , strtotime($event->date) )}}</p>


                    <div class="blog-bg pr">
                        <a data-fancybox="video_slider" href="{{$event->link}}"><img
                                src="{{asset('storage/'.$event->link_image)}}">
                            <div class="bg_ovrl_btn"><img src="{{asset('assets/front/images/icon/video.svg')}}"></div>
                        </a>
                    </div>

                    <section class="sp_sm_b pr cmn_section event_image_slider">
                        <div class="container">


                            <div class="gallery_slider owl-carousel oh blog_gls">
                                @foreach ($event->images as $item)
                                    <div class="">
                                        <a data-fancybox="gallery_images"
                                            href="{{asset('storage/'.$item->path)}}">
                                            <img
                                                src="{{asset('storage/'.$item->path)}}">
                                        </a>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </section>


                   





                </div>

            </div>
            <!--LEFT END-->


            <!--RIGHT-->
            <div class="content_box_right content_box_sm lsdtl_bx">
                <div class="mb-2">

                    <div class="events_d">
                        <h6><strong>EVENTS DETAILS</strong></h6>
                        <p><strong>Date:</strong><br>
                            {{date('M d, Y', strtotime($item->date))}}
                        </p>
                        <p><strong>Time:</strong><br>
                            {{$event->time}}
                        </p>


                        <p><strong>Location:</strong><br>
                            {{$event->location}}
                        </p>



                        <div class="clearfix"></div>
                    </div>


                    <!--box-->
                    <!--box end-->

                </div>
                <!--RIGHT END-->
                <div class="clearfix"></div>
            </div>
            <!--box section end-->

            <div class="clearfix"></div>
        </div>
</section>





<section class="sp_sm_b bg_col_g bg_col_gwn_f pr">
    <div class="container">

        <div class="heading09_bx wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s">
            <h1 class="heading09 tu heading09_bx_cov bg_col_o f_col_l">Other Events</h1>
        </div>
        <!--heading line-->
        <!--heading line-->
        <!--btn-->
        <!-- <div class="cth_r"><a class="nw_hdg" href="#">View All</a></div><div  class="clearfix"></div> -->
        <!--btn-->
        <div class="row">
            <div class="past_evnts owl-carousel oh">

                <div class=" box_lut_sm">
                    <div class="bx_min_col_11">
                        <div class="bx_min_col press_subcat"><a
                                href="https://amitshah.co.in/events/hm-shri-amit-shah-inaugurates-new-building-of-niper-ahmedabad"><img
                                    src="https://asproduction.s3.ap-south-1.amazonaws.com/uploads/1/1696156515-65194b63df734.jpg"></a>
                            <div class="bk_mark"></div>
                            <div class="ctg_mark_1">
                                <div class="inner_ct">
                                    <!-- <div class="inn_1"><p>Sep 30, 2023</p></div> -->
                                    <div class="inn_2">
                                        <p>HM Shri Amit Shah inaugurates new building of NIPER, Ahmedabad</p>
                                        <div class="slt-right slt-right_1"><a href="#" class="db_lk like_h">Sep 30,
                                                2023</a> <a href="#" class="db_lk share_h"><i
                                                    class="fas fa-share-alt"></i> </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=" box_lut_sm">
                    <div class="bx_min_col_11">
                        <div class="bx_min_col press_subcat"><a
                                href="https://amitshah.co.in/events/hm-amit-shah-inaugurates-various-development-projects-of-amc-and-auda-in-ahmedabad"><img
                                    src="https://asproduction.s3.ap-south-1.amazonaws.com/uploads/1/1696058531-6517cca32180b.jpg"></a>
                            <div class="bk_mark"></div>
                            <div class="ctg_mark_1">
                                <div class="inner_ct">
                                    <!-- <div class="inn_1"><p>Sep 30, 2023</p></div> -->
                                    <div class="inn_2">
                                        <p>HM Amit Shah inaugurates various development projects of AMC and AUDA...
                                        </p>
                                        <div class="slt-right slt-right_1"><a href="#" class="db_lk like_h">Sep 30,
                                                2023</a> <a href="#" class="db_lk share_h"><i
                                                    class="fas fa-share-alt"></i> </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=" box_lut_sm">
                    <div class="bx_min_col_11">
                        <div class="bx_min_col press_subcat"><a
                                href="https://amitshah.co.in/events/hm-amit-shah-at-118th-annual-session-of-phd-chamber-of-commerce-and-industries"><img
                                    src="https://asproduction.s3.ap-south-1.amazonaws.com/uploads/1/1695969975-651672b7deb12.jpg"></a>
                            <div class="bk_mark"></div>
                            <div class="ctg_mark_1">
                                <div class="inner_ct">
                                    <!-- <div class="inn_1"><p>Sep 29, 2023</p></div> -->
                                    <div class="inn_2">
                                        <p>HM Amit Shah at 118th annual session of PHD Chamber of Commerce and in...
                                        </p>
                                        <div class="slt-right slt-right_1"><a href="#" class="db_lk like_h">Sep 29,
                                                2023</a> <a href="#" class="db_lk share_h"><i
                                                    class="fas fa-share-alt"></i> </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=" box_lut_sm">
                    <div class="bx_min_col_11">
                        <div class="bx_min_col press_subcat"><a
                                href="https://amitshah.co.in/events/hm-amit-shah-launches-jan-ashirwad-yatra-in-mandala-mp"><img
                                    src="https://asproduction.s3.ap-south-1.amazonaws.com/uploads/1/1693908059-64f6fc5b9cd02.jpg"></a>
                            <div class="bk_mark"></div>
                            <div class="ctg_mark_1">
                                <div class="inner_ct">
                                    <!-- <div class="inn_1"><p>Sep 05, 2023</p></div> -->
                                    <div class="inn_2">
                                        <p>HM Amit Shah launches &#039;Jan Ashirwad Yatra&#039; in Mandala, MP</p>
                                        <div class="slt-right slt-right_1"><a href="#" class="db_lk like_h">Sep 05,
                                                2023</a> <a href="#" class="db_lk share_h"><i
                                                    class="fas fa-share-alt"></i> </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=" box_lut_sm">
                    <div class="bx_min_col_11">
                        <div class="bx_min_col press_subcat"><a
                                href="https://amitshah.co.in/events/hm-amit-shah-addresses-bjp-rajasthan-s-parivartan-sankalp-yatra-at-dungarpur"><img
                                    src="https://asproduction.s3.ap-south-1.amazonaws.com/uploads/1/1693827431-64f5c167b6f8f.jpg"></a>
                            <div class="bk_mark"></div>
                            <div class="ctg_mark_1">
                                <div class="inner_ct">
                                    <!-- <div class="inn_1"><p>Sep 03, 2023</p></div> -->
                                    <div class="inn_2">
                                        <p>HM Amit Shah addresses BJP Rajasthan&#039;s &#039;Parivartan Sankalp
                                            Yatra&#039; at D...</p>
                                        <div class="slt-right slt-right_1"><a href="#" class="db_lk like_h">Sep 03,
                                                2023</a> <a href="#" class="db_lk share_h"><i
                                                    class="fas fa-share-alt"></i> </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=" box_lut_sm">
                    <div class="bx_min_col_11">
                        <div class="bx_min_col press_subcat"><a
                                href="https://amitshah.co.in/events/hm-amit-shah-addresses-the-janjatiya-mahasammelan-in-saraipali-chhattisgarh"><img
                                    src="https://asproduction.s3.ap-south-1.amazonaws.com/uploads/1/1693829126-64f5c8064253d.jpg"></a>
                            <div class="bk_mark"></div>
                            <div class="ctg_mark_1">
                                <div class="inner_ct">
                                    <!-- <div class="inn_1"><p>Sep 02, 2023</p></div> -->
                                    <div class="inn_2">
                                        <p>HM Amit Shah addresses the &#039;Janjatiya Mahasammelan&#039; in
                                            Saraipali, Chha...</p>
                                        <div class="slt-right slt-right_1"><a href="#" class="db_lk like_h">Sep 02,
                                                2023</a> <a href="#" class="db_lk share_h"><i
                                                    class="fas fa-share-alt"></i> </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</section>

@endsection