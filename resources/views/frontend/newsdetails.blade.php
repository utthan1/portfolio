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
                    <li><a href="https://amitshah.co.in">Home</a></li>

                    <li class=""><a href="https://amitshah.co.in/press">Press</a></li>

                    <li class="active"><a href="https://amitshah.co.in/press?content=post">Post</a></li>
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
                    <div class="blog-dtl-sos">
                        <div class="blog-dtl-sos-l">
                            <ul class="col_sos_sr_l">
                                <li>
                                    <div class="dropdown srlk_b">
                                        <a href="#" class="db_lk share_h openShareBox" id="share_tab"
                                            data-id="54775"
                                            data-url="https://amitshah.co.in/post/press/Centre-To-Consider-Revoking-AFSPA-Plans-To-Pull-Back-Troops-From-JK-In-Place-Amit-Shah-2024"
                                            data-type="post"><i class="fas fa-share-alt"></i> </a>


                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="db_lk like_h share_h like_post" data-type="like"><i
                                            class="fas fa-heart "></i> <span class="number"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-dtl-sos-r">
                            <a class="mark_lk bookmark_post" data-type="bookmark" href="#" data-id="54775"><i
                                    class="fas fa-bookmark  "></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="blog-dtl-p">
                        <p><br></p>
                        <div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-center">
                                    <p><a class="readOnln"
                                            style="text-transform: uppercase;display: inline-block;width: 436px;height: 74px;text-align: center;line-height: 74px;font-family: 'Gotham-Medium';font-size: 22px;box-shadow: 9px 9px 23px 0px rgba(61, 61, 61, 0.24);-webkit-box-shadow: 9px 9px 23px 0px rgba(61, 61, 61, 0.24);text-transform: uppercase;"
                                            href="https://news.abplive.com/news/india/centre-to-consider-revoking-afspa-plans-to-pull-back-troops-from-jammu-and-kashmir-in-place-amit-shah-1675069"
                                            target="_blank">Source: ABP Live</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-dtl-tag">
                        </div>
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