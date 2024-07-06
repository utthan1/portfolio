@extends('layouts.front')

@section('content')

<section class="pageinfo   pageinfo_new ">
    
    
    <div class="pageinfo_txt">
        <div class="container pr">
            <div class="pageinfo_txt_cov pageinfo_txt_left">
                <h1 class="tu heading09_topbanner text-center">Contact Us</h1>
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
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form  action="{{route('contact_post')}}" method="post">
                            @csrf
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
                                    type="submit">Submit</button></div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form-r">
                    <!--<div class="cont-hd"><h1 class="title_hd f_col_o tu">Connect</h1></div>-->
                    <ul class="contact_col_info">

                        <li>
                            <div class="cont_i"><i class="fas fa-map-marker-alt"></i></div> 2/164, Vishwas Khand, Lucknow - 226010 (Gomti Nagar)2/164, Vishwas Khand, Lucknow - 226010 (Gomti Nagar)
                        </li>

                        <li>
                            <div class="cont_i"><i class="fas fa-phone"></i></div> 011-23092462, 011-23094686
                        </li>

                        <li>
                            <div class="cont_i"><i class="far fa-envelope"></i></div> <a href="mailto:contact@Swatantradevsingh.in"
                                target="_blank">contact@Swatantradevsingh.in</a>
                        </li>


                    </ul>

                    <div class="h_sos h_sos_cont">
                        <a href="https://www.facebook.com/SwatantraDevSingh/"" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>

                        <a href="https://x.com/swatantrabjp?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>

                        <a href="https://www.instagram.com/swatantrabjp" target="_blank"><i
                                class="fab fa-instagram"></i></a>

                        <a href="https://www.youtube.com/@SwatantraDevSinghBJP" target="_blank"><i
                                class="fab fa-youtube"></i></a>

                        <!--    <a href="callto:https://whatsapp.com/channel/0029Va5Z8AkJJhzejWyIwA12" target="_blank"><i class="fas fa-phone"></i></a>
-->

                        {{-- <a href="https://whatsapp.com/channel/0029Va5Z8AkJJhzejWyIwA12" target="_blank"><i
                                class="fab fa-whatsapp"></i></a> --}}
                    </div>


                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</section>
<!-- __________ Send Us A Message END__________ -->




@endsection