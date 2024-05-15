@extends('layouts.front')

@section('content')
<section class="abo_amit_row" id="meet_amit_shah">
    <div class="container">
        <div class="row">

            <div class="col-md-6 ma wow fadeInUp">
                <div class="abt_1_txt">
                    <h2 class="title_hd f_col_o">Swayamsevak Sangh : An Introduction</h2>
                    <p class="title_txt f_col_o"></p>
                    <div style="text-align: justify;">
                        <p>{{$about->description}}</p>
                    </div>

                    <p class="abt_read_more abt_rm_btn pt-3"><span class="btn09_sm btn09_s2">Read more</span></p>
                </div>

            </div>
            <div class="col-md-6 abut-hd-bg wow fadeIn">
                <div class="center">
                    <div class="abt_1_img"><img
                            src="{{asset("storage/$about->image")}}">
                    </div>

                    <div class="pg_sos wow fadeInUp about_social_links">
                        <a href="https://www.facebook.com/amitshahofficial" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>

                        <a href="https://twitter.com/AmitShah" target="_blank"><i class="fab fa-twitter"></i></a>

                        <a href="https://www.instagram.com/amitshahofficial" target="_blank"><i
                                class="fab fa-instagram"></i></a>

                        <a href="https://www.youtube.com/@AmitShah" target="_blank"><i
                                class="fab fa-youtube"></i></a>
                    </div>

                </div>
            </div>


            <div class="wow fadeInUp amt-ab_info abt_2_txt pt-2" style="display: none; ">
                <div style="text-align: justify;">
                    {{$about->political}}
                </div>
                <p class="abt_read_more abt_rl_btn pt-3"><span class="btn09_sm btn09_s2">Read less</span></p>
            </div>



        </div>
        <div class="clearfix"></div>
    </div>

</section>








<section class="sp_sm_b pr bg_col_f homepage_a_brief_history" style="background: #2a1e1e24;">

    <div class="container pr">

        <div class="border_cover_top bg_col_o bg_col_black"></div>

        <div class="heading09_bx wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s">
            <h1 class="heading09 tu heading09_bx_cov bg_col_o bg_col_black f_col_l">Journey</h1>
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
                                <button class="btn bg_col_o bg_col_black f_col_l">
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



<script type="text/javascript">

    $(document).ready(function () {

        function onScroll(event) {

            var scrollPos = $(document).scrollTop();
            $('.sub-header-tabs li>a').each(function () {
                var currLink = $(this);
                var refElement = $(currLink.attr("href"));
                var reftop_pos = refElement.position().top - 200;
                if (reftop_pos <= scrollPos && reftop_pos + refElement.height() > scrollPos) {
                    // $('.sub-header-tabs li>a.active').removeClass("active");
                    $('.sub-header-tabs li').removeClass('active');
                    currLink.parents('li').addClass("active");
                }
                else {
                    // currLink.parents('li').removeClass("active");
                }
            });
        }

        $(document).on("scroll", onScroll);
        onScroll();

        $('.abt_rm_btn').click(function (e) {
            $(this).hide();
            $('.amt-ab_info').show();
        });

        $('.abt_rl_btn').click(function (e) {
            $('html, body').animate({
                scrollTop: $(".abt_1_txt").offset().top
            }, 1000);
            $('.abt_rm_btn').show();
            $('.amt-ab_info').hide();
        });

        function highlightDiv() {
            $target_param = '';

            if ($target_param != '' && $('#' + $target_param).length) {
                $('#' + $target_param).addClass('hl_active');
                $('.abt_rm_btn span').trigger('click');

                $('html, body').animate({
                    scrollTop: $('#' + $target_param).offset().top - 200
                }, 1000);
            }
        }
        highlightDiv();

    });


</script>

@endsection