@extends('layouts.app')
@section('content')
    <!-- Signup Popup -->

    <div class="main-carousel overlape">
        <div class="carousel-img"><img src="{{ asset('images/contact.jpg') }}" alt="" /></div>
        <!-- Main Img Carousel -->
    </div>

    <section class="block remove-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="region-contact-info team-detail-info">
                                    <div class="heading2"> <span>Fast And Safe</span>
                                        <h3>OFFICE ADDRESS</h3>
                                    </div>
                                    <p> {{ config('app.company_address') }} <br> {{ config('app.company_city') }}</p>
                                    <div class="contact-detail">
                                        <span class="contact">
                                            <i class="fa fa-phone"></i>
                                                <strong>Phone No</strong> 	{{ getContactNo1() }}
                                        </span>
                                        <span class="contact">
                                            <i class="fa fa-mobile"></i>
                                            <strong>Phone No</strong>
                                            <span>{{ getContactNo2() }}</span>
                                        </span>
                                        <span class="contact">
                                            <i class="fa fa-envelope"></i>
                                            <strong>Email Address</strong> <br>
                                            <span>{{ config('app.company_email1') }}</span>
                                        </span>
                                    </div>
                                    <h3>Pan India locations</h3>
                                    <p><strong>Gurugram :</strong> Plot No 230 Udyog Vihar Phase 1 Pin-122001</p>
                                    <p><strong>Noida :</strong> SD 77 Sector 45 Noida Gautam Budh Nagar UP-201303</p>
                                    <p><strong>Delhi :</strong> Farm No 2, Behind Fun & Food village Kapeshera estate New Delhi 110037</p>
                                    <p><strong>Mumbai :</strong> GM-1 Best Colony Ghatkopar East Mumbai Maharastra 400075</p>
                                    <p><strong>Pune :</strong> Shop No 3, Mankar Chowk Opposite Axis Bank,Wakad Aundh-Hinjewadi Road - 411057</p>
                                    <p><strong>Banglore :</strong> Unit 8 & 11 No. 139 Oxford Tower Kodihalli Old airport Road Banglore- 560008</p>
                                    <p><strong>Barmer :</strong> 704, Ashapurna crown Plaza-Jaisalmer Road Barmer Rajasthan-344001</p>
                                    <p><strong>Kolkata :</strong> Shop No 5 IIIrd floor Galaxy Market Complex Green field heights New Town Rajarhat-(Near OHIO hospital) Kolkata-700156 </p>
                                    <p><strong>Hyderabad :</strong> 8-2-612/54/2 Gaffar khan colony New Road No 11 Banjara Hills Hyderabad Pin code - 500034 </p>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="get-quote-form contact-info-form">
                                    <div class="heading2"> <span>Fast And Safe</span>
                                        <h3>GET IN TOUCH</h3>
                                    </div>
                                    <p>Fill the form below and Get in touch immediately</p>
                                    <div class="contactform">
                                        <div id="formresult"></div>
                                        <form id="contactform" method="post" action="#">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input placeholder="Complete Name" class="text-field input-style" name="Name" type="text" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <input placeholder="Email Address" name="Email" class="text-field input-style" type="email" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <input placeholder="Phone" name="Phone" class="text-field input-style" type="text" required>
                                                </div>
                                                <div class="col-md-12">
                                                    <textarea placeholder="Description" class="text-field input-style" name="Message"></textarea>
                                                </div>
                                                <div class="col-md-12">

{{--                                                    <script src='https://www.google.com/recaptcha/api.js'></script>--}}

{{--                                                    <div class="g-recaptcha" data-sitekey="6Lc4dcAgAAAAAEum7JSGamyanLyGVD0xo-em6OYM"></div>--}}

                                                    <button id="quote-btn" title="" itemprop="url" type="submit" class="theme-btn"><i class="fa fa-paper-plane"></i>Contact Now</button>
                                                </div>
                                            </div>
                                        </form>
                                        <br>
                                        <img src="{{ asset('images/servicelocation.jpg') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <!-- Google apis -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>

    <script>

        $(document).ready(function () {

            "use strict";



            //** Main Img Carousel  **//

            $("#main-img-carousel").owlCarousel({

                autoplay: true,

                autoplayTimeout: 2000,

                smartSpeed: 1500,

                loop: true,

                dots: false,

                nav: false,

                margin: 10,

                items: 1,

                singleItem: true,

            });



            //** Counter Up **//

            $('.counter').counterUp({

                delay: 10,

                time: 1000

            });



            //** Blog Post Carousel **//

            $("#blog-post-carousel").owlCarousel({

                autoplay: false,

                autoplayTimeout: 3000,

                smartSpeed: 2000,

                loop: false,

                dots: false,

                nav: true,

                margin: 10,

                items: 1,

                singleItem: true,

            });



            $('#datepicker,#datepicker2').datepick();



            //** Cities Carousel **//

            $("#cities-carousel").owlCarousel({

                autoplay: false,

                autoplayTimeout: 3000,

                smartSpeed: 2000,

                loop: true,

                dots: false,

                nav: true,

                margin: 20,

                items: 1,

                singleItem: true,

                responsiveClass: true,

                responsive: {

                    0: {

                        items: 1

                    },

                    600: {

                        items: 3

                    },

                    1200: {

                        items: 3

                    }

                }

            });



            $('div.members-area').each(function () {

                $(this).children().eq(0).addClass('clicked');

                var testimo = $(this).find(".member");

                $(testimo).on("click", function () {

                    $(testimo).removeClass("clicked");

                    $(this).addClass("clicked");

                });

            });



            // Post //

            $(".post-thumb > span").on("click", function () {

                $(this).parent("div").toggleClass("slide-down");

                return false;

            });

            function initialize() {

                var myLatlng = new google.maps.LatLng(51.5015588, -0.1276913);

                var mapOptions = {

                    zoom: 14,

                    disableDefaultUI: true,

                    scrollwheel: false,

                    center: myLatlng

                }

                var map = new google.maps.Map(document.getElementById('google_map1'), mapOptions);

                var image = 'images/icon.png';

                var myLatLng = new google.maps.LatLng(51.5015588, -0.1276913);

                var beachMarker = new google.maps.Marker({

                    position: myLatLng,

                    map: map,

                    icon: image

                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
            
            function initialize2() {

                var myLatlng = new google.maps.LatLng(51.5015588, -0.1276913);

                var mapOptions = {

                    zoom: 14,

                    disableDefaultUI: true,

                    scrollwheel: false,

                    center: myLatlng

                }

                var map = new google.maps.Map(document.getElementById('google_map2'), mapOptions);
                
                var image = 'images/icon.png';

                var myLatLng = new google.maps.LatLng(51.5015588, -0.1276913);

                var beachMarker = new google.maps.Marker({

                    position: myLatLng,

                    map: map,

                    icon: image

                });
                
            }

            google.maps.event.addDomListener(window, 'load', initialize2);
            
            function initialize3() {

                var myLatlng = new google.maps.LatLng(51.5015588, -0.1276913);

                var mapOptions = {

                    zoom: 14,

                    disableDefaultUI: true,

                    scrollwheel: false,

                    center: myLatlng

                }

                var map = new google.maps.Map(document.getElementById('google_map3'), mapOptions);
                
                var image = 'images/icon.png';

                var myLatLng = new google.maps.LatLng(51.5015588, -0.1276913);

                var beachMarker = new google.maps.Marker({

                    position: myLatLng,

                    map: map,

                    icon: image

                });
                
            }

            google.maps.event.addDomListener(window, 'load', initialize3);
            
            function initialize4() {

                var myLatlng = new google.maps.LatLng(51.5015588, -0.1276913);

                var mapOptions = {

                    zoom: 14,

                    disableDefaultUI: true,

                    scrollwheel: false,

                    center: myLatlng

                }

                var map = new google.maps.Map(document.getElementById('google_map4'), mapOptions);
                
                var image = 'images/icon.png';

                var myLatLng = new google.maps.LatLng(51.5015588, -0.1276913);

                var beachMarker = new google.maps.Marker({

                    position: myLatLng,

                    map: map,

                    icon: image

                });
            }

            google.maps.event.addDomListener(window, 'load', initialize4);

        });

    </script>
@endsection
