@extends('layouts.front')

@section('content')
<section class="pageinfo">

    <div class="pageinfo_bg">
        <div class="img_view_d"><img
                src="https://www.amitshah.co.in/storage/uploads/1/1672817934-63b52d0e2f366.jpg"></div>
        <div class="img_view_m"><img
                src="https://www.amitshah.co.in/storage/uploads/1/1672818316-63b52e8c1160c.jpg"></div>
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

<section class="filter-bar bg_col_g">
    <div class="container">

        <div class="filter_box1">

            <div class="filter_opt1 filter_sty_sm">
                <div class="flbx_ab1"><label>Content Type :</label></div>
                <div class="flbx_ab2">
                    <select class="form-select form-st content_type">
                        <option selected value="">All</option>

                        <option value="image">Image</option>
                        <option value="video">Video</option>
                    </select>
                </div>
            </div>

            <div class="filter_opt2 filter_sty_sm">
                <div class="flbx_ab1"><label>State :</label></div>
                <div class="flbx_ab2">
                    <select class="form-select form-st state_dd">
                        <option selected value="">All</option>

                        <option value="1">Andaman &amp; Nicobar Islands</option>
                        <option value="2">Andhra Pradesh</option>
                        <option value="3">Arunachal Pradesh</option>
                        <option value="4">Assam</option>
                        <option value="5">Bihar</option>
                        <option value="6">Chandigarh</option>
                        <option value="7">Chhattisgarh</option>
                        <option value="8">Dadra &amp; Nagar Haveli</option>
                        <option value="9">Daman &amp; Diu</option>
                        <option value="10">Delhi</option>
                        <option value="11">Goa</option>
                        <option value="12">Gujarat</option>
                        <option value="13">Haryana</option>
                        <option value="14">Himachal Pradesh</option>
                        <option value="15">Jammu &amp; Kashmir</option>
                        <option value="16">Jharkhand</option>
                        <option value="17">Karnataka</option>
                        <option value="18">Kerala</option>
                        <option value="19">Lakshadweep</option>
                        <option value="20">Madhya Pradesh</option>
                        <option value="21">Maharashtra</option>
                        <option value="22">Manipur</option>
                        <option value="23">Meghalaya</option>
                        <option value="24">Mizoram</option>
                        <option value="25">Nagaland</option>
                        <option value="26">Odisha</option>
                        <option value="27">Puducherry</option>
                        <option value="28">Punjab</option>
                        <option value="29">Rajasthan</option>
                        <option value="30">Sikkim</option>
                        <option value="31">Tamil Nadu</option>
                        <option value="32">Tripura</option>
                        <option value="33">Uttar Pradesh</option>
                        <option value="34">Uttarakhand</option>
                        <option value="35">West Bengal</option>
                        <option value="36">Telangana</option>
                    </select>
                </div>
            </div>

            <div class="filter_opt3 filter_sty_sm">
                <div class="flbx_ab1"><label>Select Date:</label></div>
                <div class="flbx_ab2"><input class="form-select form-st" type="text" name="daterange"
                        value="Select Date" id="daterange" /></div>
            </div>

        </div>

        <div class="clearfix"></div>

        <div id="tag_wrapper">
            <div class="owl-carousel pr category_flt_sldier">
                <div class="item"><a class="ctrbl_f  active ">All</a></div>

                <div class="item"><a class="ctrbl_f " data-id="17">Election rally</a></div>
                <div class="item"><a class="ctrbl_f " data-id="18">Spoofs</a></div>
                <div class="item"><a class="ctrbl_f " data-id="19">Others</a></div>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
</section>



<section class="sp_sm ">
    <div class="container">

        <div id="data_list"></div>

        <div class="clearfix"></div>
    </div>
</section>


<section class="box_list_min sp_sm cmn_section">
    <div class="container">

        <div class="row mt-3">
            <div class="heading09_bx wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s">
                <h1 class="heading09 tu heading09_bx_cov bg_col_o f_col_l">Downloads</h1>
            </div>


            <div id="download_list"></div>

        </div>

        <div class="clearfix"></div>
    </div>
</section>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<script>

    $(document).ready(function () {
        var start_date = '';
        var end_date = '';

        var fixOwl = function () {
            var $stage = $('.owl-stage'),
                stageW = $stage.width(),
                $el = $('.owl-item'),
                elW = 0;
            $el.each(function () {
                elW += $(this).width() + +($(this).css("margin-right").slice(0, -2));
            });
            if (elW > stageW) {
                $stage.width(elW);
            };
        };

        $('input[name="daterange"]').daterangepicker({
            opens: 'left',
            // autoUpdateInput: false,
        }, function (start, end, label) {
            start_date = start.format('YYYY-MM-DD');
            end_date = end.format('YYYY-MM-DD');
            fetch_data(1);
            // console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });

        function fetch_data(page) {
            var content = $('.content_type').val();
            var state = $('.state_dd').val();
            var tag = (!!$('.category_flt_sldier .ctrbl_f.active').data('id')) ? $('.category_flt_sldier .ctrbl_f.active').data('id') : '';

            //update url
            var tag_text = (!!$('.category_flt_sldier .ctrbl_f.active').text()) ? $('.category_flt_sldier .ctrbl_f.active').text() : '';
            var state_text = $('.state_dd option:selected').text().toLowerCase();
            tag_text = tag_text == 'all' ? '' : tag_text;
            state_text = state_text == 'all' ? '' : state_text;

            var params = { 'cat': tag_text, 'state': state_text.toLowerCase(), 'content': content.toLowerCase(), 'start_date': start_date, 'end_date': end_date };
            var new_url = 'https://amitshah.co.in/gallery?' + $.param(params);
            window.history.pushState(null, document.title, new_url);

            /*$('html, body').animate({
                scrollTop: $(".filter-bar").offset().top-100
            }, 10);*/

            showLoader();
            $.ajax({
                url: "https://amitshah.co.in/api/v1/gallery_list?page=" + page + "&content=" + content + "&state=" + state + "&tag=" + tag + "&start_date=" + start_date + "&end_date=" + end_date + "&length=12&lang=" + $('#current_locale').val() + "&cat=" + tag_text,
                complete: function (data) {
                    hideLoader();
                },
                success: function (data) {
                    $('#data_list').html(data.gallery);
                    $('#tag_wrapper').html(data.tags);


                    $('.category_flt_sldier').owlCarousel({
                        loop: false,
                        margin: 0,
                        nav: true,
                        dots: false,
                        autoplay: false,
                        rewind: true,
                        autoplaySpeed: 1600,
                        items: 8,
                        onInitialized: fixOwl,
                        onRefreshed: fixOwl,
                        autoWidth: true,
                        responsiveClass: true,
                        responsive: {
                            1000: { items: 7, },
                            500: { items: 7, },
                            0: { items: 1, }
                        }
                    });
                }
            });
        }

        fetch_data(1);

        $(document).on('change', '.content_type', function (event) {
            $('.category_flt_sldier .ctrbl_f').removeClass('active');
            $('.category_flt_sldier .ctrbl_f:first').addClass('active');
            fetch_data(1);
        });
        $(document).on('change', '.state_dd', function (event) {
            fetch_data(1);
        });

        $(document).on('click', '.category_flt_sldier .ctrbl_f', function (event) {
            $('.category_flt_sldier .ctrbl_f').removeClass('active');
            $(this).addClass('active');
            fetch_data(1);
        });

        $(document).on('click', '#data_list .pagination a', function (event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });


        function fetch_downloads(page) {
            /* $('html, body').animate({
                 scrollTop: $("#download_list").offset().top-100
             }, 10);*/

            showLoader();
            $.ajax({
                url: "https://amitshah.co.in/api/v1/download_list?length=12&page=" + page,
                complete: function (data) {
                    hideLoader();
                },
                success: function (data) {
                    $('#download_list').html(data);

                }
            });
        }

        fetch_downloads(1);

        $(document).on('click', '#download_list .pagination a', function (event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_downloads(page);
        });

    });

</script>
@endsection