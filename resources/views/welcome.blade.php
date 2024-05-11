@extends('layouts.front')

@section('content')
    <!--quick links end-->


    <section class="home_slider_row oh">
        <div class="homeslider">
            @foreach ($banner as $item)
                <div class="item">
                    <div class="item">
                        <div class="img-fill pr">
                            <div class="img_view_d"><img src="{{ asset("storage/$item->image") }}"> </div>
                            <div class="img_view_m"><img src="{{ asset("storage/$item->image") }}"></div>
                            <div class="info align-right">
                                <div>
                                    <h3>“A<br>Religious<br>Man”</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="item">
                <div class="item">
                    <div class="img-fill pr">
                        <div class="img_view_d"> <img
                                src="https://www.amitshah.co.in/storage/uploads/1/1674033051-63c7b79b54009.jpg"> </div>
                        <div class="img_view_m"><img
                                src="https://www.amitshah.co.in/storage/uploads/1/1672752296-63b42ca8d1d93.jpg"></div>
                        <div class="info align-left">
                            <div>
                                <h3>“A<br>Family<br>Man”</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item">
                    <div class="img-fill pr">
                        <div class="img_view_d"> <img
                                src="https://www.amitshah.co.in/storage/uploads/1/1674033136-63c7b7f0764b4.jpg"> </div>
                        <div class="img_view_m"><img
                                src="https://www.amitshah.co.in/storage/uploads/1/1672752318-63b42cbeea8a0.jpg"></div>
                        <div class="info align-left">
                            <div>
                                <h3>“Keen Student<br>of History and<br>Culture”</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item">
                    <div class="img-fill pr">
                        <div class="img_view_d"> <img
                                src="https://www.amitshah.co.in/storage/uploads/1/1674032942-63c7b72ec69ed.jpg"> </div>
                        <div class="img_view_m"><img
                                src="https://www.amitshah.co.in/storage/uploads/1/1672752339-63b42cd318de8.jpg"></div>


                        <div class="info align-left">
                            <div>
                                <h3>“Lover of<br>Indian<br>Art & Culture”</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
        <div class="clearfix"></div>
    </section>
    <section class="hero_about">
        <div class="container">
            <div class="row py-5">
                <div class="col-6 p-4">
                    <img src="{{asset('assets/front/images/about.jpg')}}" class="img-fluid rounded" alt="about image" >
                </div>
                <div class="col-6 hv-100 p-4">
                    <div class="">
                        <div class="header_title mb-2">
                            <h3 class="timalhdg">ABOUT</h3>
                        </div>
                        <div class="header_title_name my-2">
                            <h3 >Swatantra Dev Singh</h3>
                        </div>
                        <hr style="width: 45px;border: 2.8px solid var(--org_color);opacity: 1; ">
                        <div class="paragraph">
                            <p>
                                Raksha Mantri Shri Rajnath Singh is one of the senior-most political leaders of the country. He started his political career as a student activist with Akhil Bharatiya Vidyarthi Parishad (ABVP) and went on to become the Bharatiya Janata Party (BJP) National President.
                            </p>
                        </div>
                        <button class="btn bg_col_o f_col_l mt-5 py-2 px-4">
                            View Bio
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sp_sm bg_col_l">
        <div class="container">

            <div class="amitshah_slider owl-carousel oh pr">
                <div class="item">
                    <div class="amit_s_inf_min">
                        <div class="blog-bg pr">
                            <a data-fancybox="video_slider" href="https://www.youtube.com/watch?v=zB9P4wLdrG0"><img
                                    src="https://img.youtube.com/vi/zB9P4wLdrG0/sddefault.jpg">
                                <div class="bg_ovrl_btn"><img src="https://amitshah.co.in/images/icon/video.svg">
                                </div>
                            </a>
                        </div>

                        <div class="amit_s_inf_c2">
                            <h2 class="heading09 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s">“Home
                                Minister Shri Amit Shah Speaking on the Ideology of the BJP”</h2>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="amit_s_inf_min">
                        <div class="blog-bg pr">
                            <a data-fancybox="video_slider" href="https://www.youtube.com/watch?v=P9DKpnDHPZg"><img
                                    src="https://img.youtube.com/vi/P9DKpnDHPZg/sddefault.jpg">
                                <div class="bg_ovrl_btn"><img src="https://amitshah.co.in/images/icon/video.svg">
                                </div>
                            </a>
                        </div>

                        <div class="amit_s_inf_c2">
                            <h2 class="heading09 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s">“Home
                                Minister Shri Amit Shah Speaking on the Life and Works Adi Shankaracharya”</h2>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="amit_s_inf_min">
                        <div class="blog-bg pr">
                            <a data-fancybox="video_slider" href="https://www.youtube.com/watch?v=xp7wBgKCIB4"><img
                                    src="https://img.youtube.com/vi/xp7wBgKCIB4/sddefault.jpg">
                                <div class="bg_ovrl_btn"><img src="https://amitshah.co.in/images/icon/video.svg">
                                </div>
                            </a>
                        </div>

                        <div class="amit_s_inf_c2">
                            <h2 class="heading09 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s">“Home
                                Minister Shri Amit Shah Speaking on Jammu &amp; Kashmir Issue”</h2>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="amit_s_inf_min">
                        <div class="blog-bg pr">
                            <a data-fancybox="video_slider" href="https://www.youtube.com/watch?v=nbSNSXz3i90"><img
                                    src="https://img.youtube.com/vi/nbSNSXz3i90/sddefault.jpg">
                                <div class="bg_ovrl_btn"><img src="https://amitshah.co.in/images/icon/video.svg">
                                </div>
                            </a>
                        </div>

                        <div class="amit_s_inf_c2">
                            <h2 class="heading09 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s">“Home
                                Minister Shri Amit Shah Speaking on Prime Minister Narendra Modi”</h2>

                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>


    








    <section class="sp_sm_b pr bg_col_f homepage_a_brief_history" style="background: #2a1e1e24;">

        <div class="container pr">

            <div class="border_cover_top bg_col_o"></div>

            <div class="heading09_bx wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s">
                <h1 class="heading09 tu heading09_bx_cov bg_col_o f_col_l">Journey</h1>
            </div>


            <div class="timeline09">
                <div class="container">
                    <div class="timeline">



                        <div class="timeline-wrapper">
                            <div class="timeline-slider">
                                @foreach ($journey as $item)
                                    <div class="timeline-slide" data-year="{{ $item->year }}">
                                        <div class="tml-yer">{{ $item->year }}</div>
                                        <div class="timal-row rounded-journey">
                                            <div class="timal-col timal-col-bg"><img
                                                    src="{{ asset("storage/$item->image") }}">
                                            </div>
                                            <div class="timal-col timal-col-txt 1">
                                                <div class="timal-col-txt-cov">
                                                    <h3 class="timalhdg">{{ $item->journey_title }}</h3>
                                                    <div class="trunc_content">
                                                        {{ Illuminate\Support\Str::limit($item->journey_desc, 300) }}

                                                        <span class="readmore remr_btn"> <a class="read_more_link">Read
                                                                More</a></span>
                                                    </div>
                                                    <div class="hide full_cont">
                                                        <p dir="ltr"
                                                            style="line-height: 1.8; margin-top: 0pt; margin-bottom: 0pt;"
                                                            id="docs-internal-guid-2cd410dd-7fff-7e58-816b-e69818cefd39">
                                                            <font color="#000000" face="Calibri, sans-serif"><span
                                                                    style="font-size: 16px; white-space: pre-wrap;">{{ $item->journey_desc }}</span>
                                                            </font><br />
                                                        </p>

                                                        <p><span class="readless remr_btn"> <a class="read_less_link">Read
                                                                    Less</a> </span></p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                        <div class="timeline-nav mt-5">
                            @foreach ($journey as $item)
                                <div class="timeline-nav__item history_birth" data-target="bar_history_birth">
                                    <button class="btn bg_col_o f_col_l">
                                        {{ $item->year }}
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>







    <section class="sp_sm_b pr stalwartSaysCo">
        <div class="container">
            <div class="border_cover_top bg_col_o"></div>

            <div class="heading09_bx wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s">
                <h1 class="heading09 tu heading09_bx_cov bg_col_o f_col_l">Stalwart Says</h1>



            </div>


            <div class="pioneer_s">
                <div class="pioneer_slider owl-carousel oh">
                    @foreach ($stalwart as $item)
                        <div class="item">
                            <div class="popn_box2 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s">
                                <div class="popn_box_bg2"><img src="{{ asset("storage/$item->image") }}" />
                                </div>
                                <div class="popn_box_txt2">
                                    <h4>{{ $item->title }}</h4>
                                    <p>{{ $item->job_desc }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>






    <!-- __________ gallery __________ -->
    <section class="sp_sm_b bg_col_g">
        <div class="container">
            <!--heading line-->

            <div class="heading09_bx wow fadeInUp vidGalleryDiv" data-wow-duration="0.5s" data-wow-delay="0.4s">
                <h1 class="heading09 tu heading09_bx_cov bg_col_o f_col_l">Video gallery</h1>
                <div class="btnVA_Right"><a href="https://amitshah.co.in/gallery?cat=All&amp;content=video">MORE</a>
                </div>
            </div>
            <!--heading line end-->

            <!--box section-->
            <div class="content_box container">

                <!--LEFT-->
                <div class="content_box_left content_box_sm wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.4s">


                    <!--VIDEOS-->
                    <div class="glrv1_min">
                        <!--slider-->
                        <div class="gallery_s">
                            <div class="slider slider-for">
                                @foreach ($videoGallery as $item)
                                    <div class="slider-banner-image">
                                        <div class="ply_v_cov">
                                            <div class="ply_v"><a data-fancybox="video_slider"
                                                    href="{{ $item->link }}"><img
                                                        src="{{ asset('assets/front/images/icon/video.svg') }}" /></a>
                                            </div> <img src="{{ asset("storage/$item->image") }}">
                                            <div class="ply_v_cov_hd">
                                                <h3>{{ $item->title }} </h3>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                            <div class="slider slider-nav  ">
                                @foreach ($videoGallery as $item)
                                    <div class="thumbnail-image">
                                        <div class="thumbImg pr"><img src="{{ asset("storage/$item->image") }}">
                                            <div class="bg_ovrl_btn"><img
                                                    src="{{ asset('assets/front/images/icon/video.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <!--slider-->
                    </div>
                    <!--VIDEOS END-->

                    <div class="border_cover_top bg_col_o"></div>

                    <div class="heading09_bx wow fadeInUp imgGalleryDiv" data-wow-duration="0.5s" data-wow-delay="0.4s">
                        <h1 class="heading09 tu heading09_bx_cov bg_col_o f_col_l">Image gallery</h1>
                        <div class="btnVA_Right"><a
                                href="https://amitshah.co.in/gallery?cat=All&amp;content=image">MORE</a></div>
                    </div>

                    <!--NEW GALLERY START-->
                    <div class="glrv1_min">


                        <div class="gallery-hm">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class=" active " id="nav-gal_tab_1" data-bs-toggle="tab" data-bs-target="#gal_tab_1"
                                    type="button" role="tab" aria-controls="gal_tab_1"
                                    aria-selected=" true ">Timeline</a>

                                <a class="" id="nav-gal_tab_2" data-bs-toggle="tab" data-bs-target="#gal_tab_2"
                                    type="button" role="tab" aria-controls="gal_tab_2" aria-selected=" false ">The
                                    lighter side</a>


                            </div>
                        </div>

                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show  active " id="gal_tab_1" role="tabpanel"
                                aria-labelledby="nav-gal_tab_1">

                                <!--slider-->
                                <div class="gallery_s">
                                    <div class="slider slider-for">
                                        @foreach ($imageGallery as $item)
                                            <div class="slider-banner-image">
                                                <a
                                                    href="{{ route('image_gallery_details', ['id' => $item->id, 'title' => $item->title]) }}">
                                                    <div class="ply_v_cov">
                                                        <img src="{{ asset('storage/' . $item->images[0]->image_path) }}">
                                                        <div class="ply_v_cov_hd">
                                                            <h3>{{ $item->title }}</h3>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="slider slider-nav  ">

                                        @foreach ($imageGallery as $item)
                                            <div class="thumbnail-image">
                                                <div class="thumbImg pr"><img
                                                        src="{{ asset('storage/' . $item->images[0]->image_path) }}">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                                <!--slider-->

                            </div>
                            <div class="tab-pane fade show " id="gal_tab_2" role="tabpanel"
                                aria-labelledby="nav-gal_tab_2">

                                <!--slider-->
                                <div class="gallery_s">
                                    <div class="slider slider-for">
                                        <div class="slider-banner-image">
                                            <a href="https://amitshah.co.in/gallery/EP-Vnny-02-January-2023-2023">
                                                <div class="ply_v_cov">
                                                    <img
                                                        src="https://www.amitshah.co.in/media/image/gallery/E.P._Vnny_02_Jan_2023.jpg">
                                                    <div class="ply_v_cov_hd">
                                                        <h3>E.P. Vnny : 02 January 2023</h3>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="slider-banner-image">
                                            <a href="https://amitshah.co.in/gallery/Satish-Acharya-10-August-2022-2022">
                                                <div class="ply_v_cov">
                                                    <img
                                                        src="https://www.amitshah.co.in/media/image/gallery/Satish_Acharya_10_Aug_2022.jpg">
                                                    <div class="ply_v_cov_hd">
                                                        <h3>Satish Acharya : 10 August 2022</h3>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="slider-banner-image">
                                            <a href="https://amitshah.co.in/gallery/Satish-Acharya-09-August-2022-2022">
                                                <div class="ply_v_cov">
                                                    <img
                                                        src="https://www.amitshah.co.in/media/image/gallery/Satish_Acharya_09_Aug_2022_i.jpg">
                                                    <div class="ply_v_cov_hd">
                                                        <h3>Satish Acharya : 09 August 2022</h3>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="slider-banner-image">
                                            <a href="https://amitshah.co.in/gallery/Alok-20-July-2022-2022">
                                                <div class="ply_v_cov">
                                                    <img
                                                        src="https://www.amitshah.co.in/media/image/gallery/Alok_20_July_2022.jpg">
                                                    <div class="ply_v_cov_hd">
                                                        <h3>Alok : 20 July 2022</h3>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="slider-banner-image">
                                            <a href="https://amitshah.co.in/gallery/Alok-25-June-2022-2022">
                                                <div class="ply_v_cov">
                                                    <img
                                                        src="https://www.amitshah.co.in/media/image/gallery/Alok_25_June_2022.jpg">
                                                    <div class="ply_v_cov_hd">
                                                        <h3>Alok : 25 June 2022</h3>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="slider-banner-image">
                                            <a href="https://amitshah.co.in/gallery/Alok-06-May-2022-2022">
                                                <div class="ply_v_cov">
                                                    <img
                                                        src="https://www.amitshah.co.in/media/image/gallery/Alok_06_May_2022.jpg">
                                                    <div class="ply_v_cov_hd">
                                                        <h3>Alok : 06 May 2022</h3>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="slider slider-nav  ">
                                        <div class="thumbnail-image">
                                            <div class="thumbImg pr"><img
                                                    src="https://www.amitshah.co.in/media/image/gallery/E.P._Vnny_02_Jan_2023.jpg">
                                            </div>
                                        </div>
                                        <div class="thumbnail-image">
                                            <div class="thumbImg pr"><img
                                                    src="https://www.amitshah.co.in/media/image/gallery/Satish_Acharya_10_Aug_2022.jpg">
                                            </div>
                                        </div>
                                        <div class="thumbnail-image">
                                            <div class="thumbImg pr"><img
                                                    src="https://www.amitshah.co.in/media/image/gallery/Satish_Acharya_09_Aug_2022_i.jpg">
                                            </div>
                                        </div>
                                        <div class="thumbnail-image">
                                            <div class="thumbImg pr"><img
                                                    src="https://www.amitshah.co.in/media/image/gallery/Alok_20_July_2022.jpg">
                                            </div>
                                        </div>
                                        <div class="thumbnail-image">
                                            <div class="thumbImg pr"><img
                                                    src="https://www.amitshah.co.in/media/image/gallery/Alok_25_June_2022.jpg">
                                            </div>
                                        </div>
                                        <div class="thumbnail-image">
                                            <div class="thumbImg pr"><img
                                                    src="https://www.amitshah.co.in/media/image/gallery/Alok_06_May_2022.jpg">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                                <!--slider-->

                            </div>
                        </div>


                    </div>
                    <!--NEW GALLERY END-->


                </div>

            </div>
            <!--LEFT END-->



            <div class="clearfix"></div>
        </div>
        <!--box section end-->


        <div class="clearfix"></div>
        </div>
    </section>
    <!-- __________ gallery END__________ -->




    <!-- __________ News __________ -->

    <section class="sp_sm_b">
        <div class="container">

            <!--heading line-->
            <div class="heading09_bx wow fadeInUp newsDiv" data-wow-duration="0.5s" data-wow-delay="0.4s">
                <h1 class="heading09 tu heading09_bx_cov bg_col_o f_col_l">Press</h1>
                <div class="btnVA_Right"><a href="https://amitshah.co.in/press">MORE</a></div>
            </div>
            <!--heading line end-->

            <!--box section-->
            <div class="content_box">



                <!--LEFT-->
                <div class="content_box_left content_box_sm ">
                    <div class="row">
                        @foreach ($news as $item)
                            <div class="box_lut_sm col-md-4">
                                <div class="bx_min_col ">
                                    <div class="bx_min_col_bg">
                                        <a href="{{ route('news', ['id' => $item->id, 'title' => $item->title]) }}">
                                            <img src="{{ asset("storage/$item->image") }}">
                                        </a>
                                        <div class="bk_mark"><a class="mark_lk bookmark_post " href="#"
                                                data-id="54775"><i class="fas fa-bookmark "></i></a>
                                        </div>
                                    </div>

                                    <div class="bx_min_col_txt">
                                        <a href="{{ route('news', ['id' => $item->id, 'title' => $item->title]) }}">
                                            {{ $item->title }}
                                        </a>
                                    </div>
                                    <div class="bx_min_col_sos">
                                        <div class="slt-left"><span
                                                class="db_lk">{{ $item->created_at->format('M d, Y') }}</span></div>
                                        <div class="slt-right"><a href="javascript:void(0);" class="db_lk like_h"><i
                                                    class="fas fa-heart"></i></a> <a href="javascript:void(0);"
                                                class="db_lk share_h"><i class="fas fa-share-alt"></i> </a></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!--LEFT END-->


                <div class="clearfix"></div>
            </div>
            <!--box section end-->

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- __________ News END__________ -->






    <!-- __________ Events __________ -->
    <section class="sp_sm_b bg_col_g">
        <div class="container">

            <div class="ev_col_left">
                <div class="heading09_bx wow fadeInUp eventsDiv" data-wow-duration="0.5s" data-wow-delay="0.2s">
                    <h1 class="heading09 tu heading09_bx_cov bg_col_o f_col_l">Events</h1>
                    <div class="btnVA_Right"><a href="https://amitshah.co.in/events">MORE</a></div>
                </div>
                @foreach ($events as $item)
                    <div class="ev_col_min">
                        <div class="ev_col_l"><img
                                src="{{asset('storage/'.$item->link_image)}}">
                        </div>
                        <div class="ev_col_2">
                            <p><a href="{{route('event_details',['id' => $item->id, 'title' => $item->title])}}">
                                {{$item->title}}
                            </a></p>
                            <div class="evdtsl">
                                <div class="evdtsl_1"><span>{{date('M d, Y', strtotime($item->date))}}</span></div>
                                <div class="evdtsl_r"><span class="share_h"><i class="fas fa-share-alt"></i> </span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
                

            </div>

            <div class="ev_col_right">


                <div class="heading09_bx wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s">
                    <h1 class="heading09 tu heading09_bx_cov bg_col_o f_col_l">Watch live</h1>
                </div>

                <div class="ev_col_bg">

                    <a href="" data-fancybox="watch_live"><img
                            src="https://asproduction.s3.ap-south-1.amazonaws.com/uploads/1/1690714439-64c6414777bd2.jpg">
                        <div class="ev_col_txt2">

                            <p class="ev_col_txt2_tx">Live Soon</p>
                        </div>

                        <div class="bt_live"><i class="fas fa-circle"></i> Live now</div>
                    </a>
                </div>


            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- __________ Events END__________ -->







@endsection
