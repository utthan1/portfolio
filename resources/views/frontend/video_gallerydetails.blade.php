@extends('layouts.front')

@section('content')
<section class="box_list_min sp_sm">
    <div class="container">

        <!--box section-->
        <div class="content_box">

            <!--NAV BAR-->
            <div class="top_nav_bar">
                <ul>
                    <li><a href="https://amitshah.co.in">Home</a></li>
                    <li class=""><a href="https://amitshah.co.in/gallery">Video Gallery</a></li>
                    <li class="active"><a href="#">{{$video_gallery->title}}</a></li>
                </ul>
            </div>
            <!--NAV BAR END-->

            <!--LEFT-->
            <div class="content_box_left content_box_sm ">

                <div class="block_dtl_min">
                    <h1 class="blog-h">{{$video_gallery->title}}.</h1>
                    <p class="blog-sb_line">{{date('M d. Y')}}</p>

                    <div class="gallery_slider owl-carousel oh blog_gls">
                        <div class="blog-bg pr">
                            <a data-fancybox="video_slider" href="{{$video_gallery->link}}"><img
                                    src="{{asset('storage/'.$video_gallery->image)}}">
                                <div class="bg_ovrl_btn"><img src="{{asset('assets/front/images/icon/video.svg')}}">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>







            </div>
            <!--LEFT END-->



            <div class="clearfix"></div>
        </div>
        <!--box section end-->

        <div class="clearfix"></div>
    </div>
</section>



@endsection