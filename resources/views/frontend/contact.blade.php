@extends('layouts.front')

@section('content')

<section class="pageinfo">

    <div class="pageinfo_bg">
        <div class="img_view_d"><img
                src="https://www.amitshah.co.in/storage/uploads/1/1649773482-62558baa5a894.jpg"></div>
        <div class="img_view_m"><img
                src="https://www.amitshah.co.in/storage/uploads/1/1649773482-62558baa5a894.jpg"></div>
    </div>


    <div class="pageinfo_txt">
        <div class="container pr">
            <div class="pageinfo_txt_cov pageinfo_txt_center">
                <h1 class="tu heading09_topbanner wow fadeInUp" data-wow-delay="0.8s">Contact Us</h1>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>


<!-- __________ Send Us A Message __________ -->
<section class="sp_sm bg_col_g">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-form-l">
                    <div class="cont-hd">
                        <h1 class="title_hd">Write to Us</h1>
                    </div>
                    <div class="sm_form">

                        <form id="contact-us" action="https://amitshah.co.in/api/v1/contact" method="post">
                            <div class="form-group form-wt_hf"><input class="form-control" placeholder="Your name"
                                    type="text" name="name"></div>
                            <div class="form-group form-wt_hf"><input class="form-control" placeholder="Email"
                                    type="email" name="email"></div>
                            <div class="form-group form-wt_hf"><input class="form-control"
                                    placeholder="Phone number" type="number" name="mobile"></div>
                            <div class="form-group form-wt_hf">
                                <select class="form-control" name="enquiry_type">
                                    <option selected="" disabled="">Select</option>

                                    <option value="General Query">General Query</option>
                                    <option value="Feedback">Feedback</option>
                                    <option value="Share your concern">Share your concern</option>
                                    <option value="Thank You Note">Thank You Note</option>
                                    <option value="Support Note">Support Note</option>

                                </select>
                            </div>
                            <div class="form-group form-wt_full"><textarea class="form-control"
                                    placeholder="Your message" name="message"></textarea></div>



                            <div class="form-group form-wt_full form-group-btn"><button class="btn09_sm btn09_s3"
                                    type="submit" id="contact_submit_form">Submit</button></div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form-r">
                    <!--<div class="cont-hd"><h1 class="title_hd f_col_o tu">Connect</h1></div>-->
                    <ul class="contact_col_info">

                        <li>
                            <div class="cont_i"><i class="fas fa-map-marker-alt"></i></div> Ministry of Home
                            Affairs, North Block, New Delhi - 110001 India
                        </li>

                        <li>
                            <div class="cont_i"><i class="fas fa-phone"></i></div> 011-23092462, 011-23094686
                        </li>

                        <li>
                            <div class="cont_i"><i class="far fa-envelope"></i></div> <a href="mailto:hm@mha.gov.in"
                                target="_blank">hm@mha.gov.in</a>
                        </li>


                    </ul>

                    <div class="h_sos h_sos_cont">
                        <a href="https://www.facebook.com/amitshahofficial" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>

                        <a href="https://twitter.com/AmitShah" target="_blank"><i class="fab fa-twitter"></i></a>

                        <a href="https://www.instagram.com/amitshahofficial" target="_blank"><i
                                class="fab fa-instagram"></i></a>

                        <a href="https://www.youtube.com/@AmitShah" target="_blank"><i
                                class="fab fa-youtube"></i></a>

                        <!--    <a href="callto:https://whatsapp.com/channel/0029Va5Z8AkJJhzejWyIwA12" target="_blank"><i class="fas fa-phone"></i></a>
-->

                        <a href="https://whatsapp.com/channel/0029Va5Z8AkJJhzejWyIwA12" target="_blank"><i
                                class="fab fa-whatsapp"></i></a>
                    </div>


                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</section>
<!-- __________ Send Us A Message END__________ -->


<section class="sp_sm bg_col_o center donate_cont">
    <div class="container">
        <h1 class="heading092 f_col_l tu wow fadeInUp" data-wow-delay="0.2s"><b>DONATE</b></h1>
        <div class="cnt-brd wow fadeInUp" data-wow-delay="0.2s"></div>


        <div class="donate_cont_btn wow fadeInUp" data-wow-delay="0.2s">
            <a href="https://www.pmcares.gov.in/en/web/contribution/donate_india" class="btn09_sm btn09_s1">PM
                CARE</a>
            <a href="https://bharatkeveer.gov.in/viewMartyrsGalleryPage" class="btn09_sm btn09_s1">BHARAT KE
                VEER</a>
            <a href="https://www.bjp.org/membership/en/home/donation" class="btn09_sm btn09_s1">BJP</a>
        </div>

        <div class="clearfix"></div>
    </div>
</section>


@endsection