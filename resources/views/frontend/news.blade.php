@extends('layouts.front')

@section('content')
<section class="pageinfo   pageinfo_new ">
    <!--    
    <div class="stories_box">
       <div class="container">
       <div class="hed_cov"><h3 class="nw_hdg">Stories </h3></div> 
         <div class="stories_inner"><div id="stories" class="storiesWrapper"></div></div>
       </div>
    </div> 
-->

    <div class="pageinfo_bg">
        <div class="img_view_d"><img
                src="https://www.amitshah.co.in/storage/uploads/1/1652101285-627910a59049f.jpg"></div>
        <div class="img_view_m"><img
                src="https://www.amitshah.co.in/storage/uploads/1/1652101285-627910a59049f.jpg"></div>
    </div>


    <div class="pageinfo_txt">
        <div class="container pr">
            <div class="pageinfo_txt_cov pageinfo_txt_left">
                <h1 class="tu heading09_topbanner">News</h1>
                <p class="para09_topbanner">My work and thinking is not mine alone. It needs to reach as many
                    people, all the people, as possible. To achieve what I am aiming to do needs more than just my
                    efforts. To actually make a difference it needs your help to truly execute and experience the
                    change.</p>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>





<section class="sp_sm data_list_section" style="display:none;">
    <div class="container">
        <div id="data_list" class="row"></div>
        <div class="clearfix"></div>
    </div>
</section>


<section class="box_list_min sp_sm cmn_section">
    <div class="container">

        <!--box section-->
        <div class="content_box">

            <!--LEFT-->
            <div class="content_box_left content_box_sm ">

                <div class=" ">

                    <div class="hed_cov">
                        <h3 class="nw_hdg">Latest</h3>
                    </div>

                    <div class="row mt-2">
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
            </div>
            <!--LEFT END-->

            <div class="clearfix"></div>
        </div>
        <!--box section end-->



        <div class="clearfix"></div>
    </div>
</section>
@endsection