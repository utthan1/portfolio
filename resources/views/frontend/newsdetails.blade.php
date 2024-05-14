@extends('layouts.front')

@section('content')
<section class="topbox"></section>

<section class="box_list_min sp_sm">
    <div class="container">

        <!--box section-->
        <div class="content_box">

            <!--NAV BAR-->
            <div class="top_nav_bar">
                <ul>
                    <li><a href="{{url('/')}}">Home</a></li>

                    <li class=""><a href="{{route('news_page')}}">News</a></li>

                    <li class="active"><a href="#">{{$blogpost->title}}</a></li>
                </ul>
            </div>
            <!--NAV BAR END-->

            <!--LEFT-->
            <div class="content_box_left content_box_sm ">

                <div class="block_dtl_min">
                    <h1 class="blog-h">{{$blogpost->title}}</h1>
                    <p class="blog-sb_line">Press <span>|</span>{{ $blogpost->created_at->format('M d, Y') }}
                    </p>

                    <div class="blog-bg">
                        <a href="{{asset("storage/$blogpost->image")}}"
                            target="blank" download="" class="download_image"> <span class="fa fa-download"></span>
                        </a>
                        <img
                            src="{{asset("storage/$blogpost->image")}}">
                    </div>
                 
                </div>
            </div>
            <!--LEFT END-->



            <!--RIGHT-->
            <div class="content_box_right content_box_sm lsdtl_bx">

            </div>
            <!--RIGHT END-->

            <div class="clearfix"></div>
        </div>
        <!--box section end-->

        <div class="clearfix"></div>
    </div>
</section>
@endsection