@extends('layouts.front')

@section('content')
    <div id="gallery">
        <section class="pageinfo">

            <div class="pageinfo_bg">
                <div class="img_view_d">
                    <img src="{{asset('assets/front/storage/w-gallery.jpg')}}" />
                </div>
                <div class="img_view_m">
                    <img src="{{asset('assets/front/storage/m-gallery.jpg')}}">
                </div>
            </div>


            <div class="pageinfo_txt">
                <div class="container pr">
                    <div class="pageinfo_txt_cov pageinfo_txt_left">
                        <h1 class="tu heading09_topbanner">Gallery</h1>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </section>
    </div>

    <section class="filter-bar bg_col_g">
        <div class="container">


            <div class="clearfix"></div>

            <div id="tag_wrapper">
                <div class="owl-carousel pr category_flt_sldier d-flex justify-content-center">
                    <div class="item"><a class="ctrbl_f  active  rounded">Image</a></div>

                    <div class="item"><a class="ctrbl_f  rounded" href="{{route('video_gallery')}}">Video</a></div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>




    <section class="sp_sm ">
        <div class="container">

            <div id="data_list">
                <div class="gallerysctgrd">
                 
                    @foreach ($gallery as $item)
                    <div class="gallerysctgrd_col pr oh">
                        <a href="{{ route('image_gallery_details', ['id' => $item->id, 'title' => $item->title]) }}">
                            <div class="gallerysctgrd_col_bg"> <img
                                    src="{{asset('storage/'. $item->images[0]->image_path)}}">
                            </div>
                        </a>

                        <div class="bk_mark"><a class="mark_lk bookmark_post" href="#" data-id="54843"><i
                                    class="fas fa-bookmark "></i></a></div>
                        <div class="gallerysctgrd_col_txt">
                            <a href="{{ route('image_gallery_details', ['id' => $item->id, 'title' => $item->title]) }}"
                                class="gallerysctgrd_col_txt_call">
                                <p> {{$item->title}} </p>
                            </a>

                            <div class="bx_min_col_sos">
                                <div class="slt-left"><span class="db_lk">{{date('M d, Y', strtotime($item->date))}}</span></div>
                                <div class="slt-right"><a href="javascript:void(0);" class="db_lk like_h"><i
                                            class="fas fa-heart"></i>

                                    </a>

                                    <a href="javascript:void(0);" class="db_lk share_h"><i class="fas fa-share-alt"></i>

                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>

            <div class="clearfix"></div>
        </div>
    </section>
@endsection
