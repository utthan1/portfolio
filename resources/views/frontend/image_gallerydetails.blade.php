@extends('layouts.front')

@section('content')
<section class="box_list_min sp_sm">
    <div class="container">

        <!--box section-->
        <div class="content_box">

            <!--NAV BAR-->
            <div class="top_nav_bar">
                <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li class=""><a href="{{route('gallery')}}">Image Gallery</a></li>
                    <li class="active"><a href="#">{{$image_gallery->title}}</a></li>
                </ul>
            </div>
            <!--NAV BAR END-->

            <!--LEFT-->
            <div class="content_box_left content_box_sm ">

                <div class="block_dtl_min">
                    <h1 class="blog-h">{{$image_gallery->title}}</h1>
                    <p class="blog-sb_line">{{date('M d, Y', strtotime($image_gallery->created_at)) }}</p>

                    <div class="gallery_slider owl-carousel oh blog_gls">
                        @foreach ($image_gallery->images as $item)
                            <div class="">
                                <a href="{{asset('storage/'.$item->image_path)}}"
                                    target="blank" download="" class="download_image"> <span
                                        class="fa fa-download"></span> </a>
                                <img src="{{asset('storage/'.$item->image_path)}}">
                            </div>
                        @endforeach
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