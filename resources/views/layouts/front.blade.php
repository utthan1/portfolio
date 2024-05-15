@php
    $layout = App\Models\App::find(1);
    // dd($layout);
@endphp

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $layout->app_name }} </title>
    <meta name="description" content="{{ $layout->meta_description }}">


    {{-- <link rel="shortcut icon" href="https://www.amitshah.co.in/storage/uploads/1/1657030828-62c448ac0b44e.png"
        type="image/x-icon"> --}}
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>

    <link rel='stylesheet' href="{{ asset('assets/front/css/frontend/style.css') }}">
    <link rel='stylesheet' href="{{ asset('assets/front/css/frontend/responsive.css') }}">
    <link rel='stylesheet' href="{{ asset('assets/front/css/frontend/style-font_larger.css') }}">
    <link rel='stylesheet' href="{{ asset('assets/front/css/frontend/animate.min.css') }}">

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css'>

    <link href="{{ asset('assets/front/vendors/sweetalert/css/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/front/vendors/toastr/css/toastr.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('assets/front/js/jquery.min.js') }}"></script>

    <!-- <script src="./js/jquery.min.js?v3.4.1"></script> -->





</head>

<body class="lang_en">

    <input type="text" name="" id="current_locale" value="en">
    <div class="hh-loader">
        <div class="loader09"></div>
    </div>
    <!-- LODER -->

    <div class="preloader js-preloader flex-center">
        <div class="loader">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    </div>
    <div id="loader-wrap">
        <div id="loading"></div>
    </div>

    <header class="stickynav09">
        <div class="container">

            <div class="menu_btn">
                <div id="menu-wrapper09">
                    <div id="hamburger-menu09"><span></span><span></span><span></span></div>
                </div>
            </div>

            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset("storage/$layout->logo") }}" class="logo_call_lit" />
                    <img src="{{ asset("storage/$layout->logo") }}" class="logo_call_min" />
                </a>
            </div>


            <div class="nav-right">
                <div class="nav-top-links pr">
                    <ul id="menu-primary-1" class="hh-navigation hh-parent main-menu">
                        <li class="menu-item menu-item-1">
                            <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="menu-item menu-item-2">
                            <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="menu-item menu-item-3">
                            <a class="{{ request()->routeIs('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}">Gallery</a>
                        </li>
                    </ul>
                    <ul id="menu-primary-2" class="hh-navigation hh-parent main-menu">
                        <li class="menu-item menu-item-4 ">
                            <a class="{{ request()->routeIs('news_page') ? 'active' : '' }}" href="{{route('news_page')}}">News</a>
                        </li>
                        <li class="menu-item menu-item-6 ">
                            <a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>

            </div>


            <div class="clearfix"></div>
        </div>
    </header>

    <div class="menu-list09">

        <div class="container-menu">





            <div class="menu_nav-list accordion">

                <div class="menu_nav-list-min">

                    <div class="menulist_row menulist_row_right menulist_row_sz1">
                        <div class="menulist_ex">
                            <h3 class="minhdg"><a class="menu_hdg" href="{{url('/')}}">Home</a></h3>
                            <h3 class="minhdg"><a class="menu_hdg" href="{{route('about')}}">About</a></h3>
                            <h3 class="minhdg"><a class="menu_hdg" href="{{route('news_page')}}">News</a></h3>
                            <h3 class="minhdg"><a class="menu_hdg"
                                    href="{{route('gallery')}}">Gallery</a>
                            </h3>
                            <h3 class="minhdg"><a class="menu_hdg" href="{{route('contact')}}">Contact
                                    Us</a>
                            </h3>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>


                <div class="menu_nav-list-min">



                    <!--row-->
                    <div class="menulist_row menulist_row_right menulist_row_sz1 follow-section">
                        <div class="menulist_ex">

                            <h3 class="menu_hdg">FOLLOW</h3>

                            <div class="h_sos">
                                <ul>
                                    <li><a href="https://www.facebook.com/amitshahofficial" target="blank"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/AmitShah" target="blank"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/amitshahofficial" target="blank"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/@AmitShah" target="blank"><i
                                                class="fab fa-youtube"></i></a></li>
                                    <li><a href="https://whatsapp.com/channel/0029Va5Z8AkJJhzejWyIwA12"
                                            target="blank"><i class="fab fa-whatsapp"></i></a></li>

                                </ul>
                            </div>







                            <h3 class="menu_hdg"></h3>

                        </div>
                    </div>
                    <!--row end-->


                    <div class="clearfix"></div>
                </div>



            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- menu-wrapper end -->

    <!-- menu-wrapper -->

    @yield('content')

    <!-- __________ FOOTER __________ -->
    <footer class="site_footer" style="background: #1b252f">


        <!--===FOOTER SECTION 1===-->
        <div class="footer_sec1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="">
                                <h3 class="text-center">Rajnath Singh</h3>
                            <div class="card-body">
                                <p>Raksha Mantri Shri Rajnath Singh is one of the senior-most political leaders of the country. He
                                    started his political career as a student activist with Akhil Bharatiya Vidyarthi Parishad
                                    (ABVP) and went on to become the Bharatiya Janata Party (BJP) National President.</p>
                                <div class="d-flex flex-wrap mt-5">
                                    <p><i class="far fa-envelope"></i><a class="p-2" href="mailto:contact@rajnathsingh.in">contact@rajnathsingh.in</a></p>
                                    <p><i class="fas fa-map-marker-alt"></i> New Delhi</p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="h_sos h_sos_cont ">
                                        <a href="https://www.facebook.com/amitshahofficial" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    
                                        <a href="https://twitter.com/AmitShah" target="_blank"><i class="fab fa-twitter"></i></a> 
                                    
                                        <a href="https://www.instagram.com/amitshahofficial" target="_blank"><i class="fab fa-instagram"></i></a>
                                    
                                        <a href="https://www.youtube.com/@AmitShah" target="_blank"><i class="fab fa-youtube"></i></a>
                                    
                                        <a href="https://whatsapp.com/channel/0029Va5Z8AkJJhzejWyIwA12" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="footer_bottom">
            <div class="container text-center">
                © 2024 | All Rights Reserved by {{$layout->app_name}}. 
            </div>
        </div>
        <!--===FOOTER SECTION 1 END===-->

    </footer>






    <div id="sharepopup" class="fancypopup_r">

        <div class="shareoption_wrapper">
            <div class="srpost_row" data-id="" data-type="" data-url="" data-category="">
                <p>Share this post:</p>

                <div class="srpost_t">
                    <a href="https://wa.me/?text=https://amitshah.co.in" class="whatsapp_s" data-text="whatsapp"><i
                            class="fab fa-whatsapp"></i></a>

                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://amitshah.co.in" class="facebook_s"
                        data-text="facebook"><i class="fab fa-facebook-f"></i></a>

                    <a href="https://twitter.com/intent/tweet?text=https://amitshah.co.in" class="twitter_s"
                        data-text="twitter"><i class="fab fa-twitter"></i></a>

                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=https://amitshah.co.in"
                        class="linkedin_s" data-text="linkedin"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="srpost_copy">
                    <p>or Copy link:</p>
                    <div class="srpost_copy_fld"><input type="text" value="" readonly id="myInput"
                            class="srpost_copy_fld_i"><button class="srpost_copy_fld_b">Copy URL</button></div>
                </div>
            </div>
        </div>
    </div><!-- __________ FOOTER END__________ -->


    <script type="text/javascript" src="https://amitshah.co.in/js/frontend/lib.js"></script>
    <!--global js end-->

    <script>
        $(".navbar-toggler-icon").click(function() {
            $(this).closest('.navbar').find('.collapse').toggleClass('collapse1')
        })

        $(function() {
            $('[data-toggle="tooltip"]').tooltip().css('font-size', '14px');
        })
    </script>



    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>



    <!-- WEB JS -->
    <script src="{{ asset('assets/front/js/slick/slick.js') }}"></script>
    <script src="{{ asset('assets/front/js/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/owlcarousel/owl.carousel_custom.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js'></script>
    <script src='https://cdn.rawgit.com/tonystar/bootstrap-hover-tabs/v3.1.1/bootstrap-hover-tabs.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js'></script>

    <!--date picker-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>




    <script src='https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js'></script>
    <script src="{{ asset('assets/front/js/wow.min.js') }}"></script>
    <script>
        wow = new WOW({
            animateClass: 'animated',
            offset: 100,
            callback: function(box) {
                // console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        });
        wow.init();

        /* document.getElementById('moar').onclick = function() {
         var section = document.createElement('section');
         section.className = 'section--purple wow fadeInDown';
         this.parentNode.insertBefore(section, this);
         };*/
    </script>


    <script type="text/javascript" src="{{ asset('assets/front/js/script09.js') }}"></script>
    <script src="{{ asset('assets/front/js/number-counter.js') }}"></script>

    <script src="{{ asset('assets/front/vendors/sweetalert/js/sweetalert2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/front/vendors/toastr/js/toastr.js') }}"></script>



    <script type="text/javascript" src="{{ asset('assets/front/js/pluginjs/jquery-validation/jquery.validate.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('assets/front/js/pluginjs/jquery-validation/additional-methods.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/front/js/pluginjs/ladda/spin.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/front/js/pluginjs/ladda/ladda.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/front/js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/front/js/frontend/custom.js?v=2') }}"></script>


    <script>
        $('.wdg_btn a').click(function(e) {
            e.preventDefault();
            $('.wdg_btn a').removeClass('active');
            $(this).addClass('active');

            $target = $(this).data('target');

            $('.cmn_flw_div').hide();
            $('.' + $target).show();
        });

        $('.gallery-hm .nav-tabs a').click(function() {
            $target = $(this).data('bs-target');
            $($target + ' .thumbnail-image').trigger('click');
        });
    </script>




    <script>
        /*
         * by Wani(me@wani.kr)
         */
        ;
        (function(global, factory) {
            if (typeof define === 'function' && define.amd) {
                define(['jquery'], factory);
            } else {
                factory(jQuery);
            }
        })(this, function($) {
            var defaultSettings = {
                prefix: "imagelistexpander-"
            };
            var waitForFinalEvent = (function() {
                var timer = null;
                return function(callback, uniqueId) {
                    if (timer) {
                        clearTimeout(timer);
                    }
                    timer = setTimeout(callback, 500);
                };
            })();
            var imageListExpander = function(list, _settings) {
                var
                    settings = $.extend({}, defaultSettings, _settings),
                    $list = $(list),
                    $items = $list.find('.' + settings.prefix + 'item'),
                    $trigger = $list.find('.' + settings.prefix + 'trigger'),
                    $closeTrigger = $list.find('.' + settings.prefix + 'trigger-close'),

                    initialize = function() {
                        $(window).bind('resize', resizeWindow);
                        $trigger.bind('click', clickItem);
                        $closeTrigger.bind('click', clickCloseTrigger);
                    },
                    resizeWindow = function() {
                        waitForFinalEvent(function() {
                            $items.filter('.active').each(function() {
                                var
                                    $item = $(this),
                                    $expanderContents = $item.find('.' + settings.prefix +
                                        'expander-contents'),
                                    $expander = $item.find('.' + settings.prefix + 'expander'),

                                    expanderHeight = $expanderContents.outerHeight();

                                $item.css(
                                    'height',
                                    $item.find('.' + settings.prefix + 'contents')
                                .outerHeight() + expanderHeight
                                );

                                $expander.css('max-height', expanderHeight);
                            });
                        });
                    },
                    clickItem = function() {

                        var $item = $(this).parents('.' + settings.prefix + 'item');

                        if ($item.hasClass('active')) {

                            hideItems($item);
                        } else {
                            if ($('.gallery-item.active').length > 0) {
                                hideItems($('.gallery-item.active'));
                            }
                            showItem($item);
                        }
                    },
                    clickCloseTrigger = function() {
                        hideItems($items);
                    },
                    showItem = function($item) {
                        hideItems($item.siblings());

                        var
                            $expanderContents = $item.find('.' + settings.prefix + 'expander-contents'),
                            $expander = $item.find('.' + settings.prefix + 'expander'),

                            expanderHeight = $expanderContents.outerHeight();

                        $item.addClass('active').css(
                            'height',
                            $item.find('.' + settings.prefix + 'contents').outerHeight() + expanderHeight
                        );

                        $expander.css('max-height', expanderHeight);
                    },
                    hideItems = function($targetItems) {
                        $targetItems = $targetItems.filter('.active');


                        var $expanders = $targetItems.find('.' + settings.prefix + 'expander');

                        $targetItems.each(function() {
                            var $item = $(this);
                            $item.css(
                                'height',
                                $item.find('.' + settings.prefix + 'contents').outerHeight()
                            );
                        });

                        $targetItems.removeClass('active');
                        $expanders.css('max-height', 0);
                    };

                initialize();
            };

            $.fn.imagelistexpander = function(settings) {
                $(this).each(function() {
                    imageListExpander(this, settings || {});
                });
            };

            return $;
        });


        (function(global, $) {
            $('.gallery-items').imagelistexpander({
                prefix: "gallery-"
            });
        })(this, jQuery)
    </script>






</body>

</html>
