@extends('layouts.front')

@section('content')
<section class="box_list_min sp_sm1">
    <div class="container">

        <!--box section-->
        <div class="content_box">

            <!--NAV BAR-->
            <div class="top_nav_bar">
                <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li class=""><a href="#">Events</a></li>
                    <li class="active"><a href="#">{{$event->title}}</a></li>
                </ul>
            </div>
            <!--NAV BAR END-->


            <!--LEFT-->
            <div class="content_box_left content_box_sm  ">

                <div class="block_dtl_min">
                    <h1 class="blog-h">{{$event->title}}</h1>
                    <p class="blog-sb_line"> {{date('M d, Y' , strtotime($event->date) )}}</p>


                    <div class="blog-bg pr">
                        <a data-fancybox="video_slider" href="{{$event->link}}">
                            <img src="{{asset('storage/'.$event->link_image)}}">
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
                                            <img src="{{asset('storage/'.$item->path)}}">
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




@endsection