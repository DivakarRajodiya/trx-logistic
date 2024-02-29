@extends('layouts.app')

@section('content')
    <!-- Signup Popup -->
    <div class="main-carousel overlape">
        <div class="carousel-img"><img src="{{ asset('images/about.jpg') }}" alt="" /></div>

        <!-- Main Img Carousel -->
    </div>
    <section class="block remove-top pad80" style="padding-bottom:0px !important;">
        <div class="topimg"><img src="{{ asset('images/top.png') }}"></div>
        <div class="container jtext">
            <div class="row">
                <div class="col-md-6">
                    <div class="title2">
                        <h2>Company Profile</h2>
                    </div>

                    <p><strong>TRX Logistics & Support Services Pvt. Ltd </strong>was incepted in 2011. From about a decade the company has been providing relentless and unmatched services. The company was established with the aim of administering premium quality employee transportation solutions in the ever growing Indian market. Combining the best of two worlds in the form of technical know-how and field experience, our team has been delivering targeted results with every project. Understanding the varying needs and requirements of our clients has and shall always be our USP. Thus, we take pride in our highly customized services. With TRX you get the best in class services at the most competent rates. You can bank upon our team of experts who are there to provide their unparalleled services at every step.
                    </p>


                </div>
                <div class="col-md-6">

                    <img src="{{ asset('images/whyus.jpg') }}">


                </div>

            </div>
        </div>
        <section class="block greybg">
            <div class="topimg"><img src="{{ asset('images/top.png') }}"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>Industries served </h2>
                        </div>
                        <ul class="partners" id="partners">
                            <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/s7.jpg') }}" alt="" /></a></li>
                            <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/s2.jpg') }}" alt="" /></a></li>
                            <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/s6.jpg') }}" alt="" /></a></li>
                            <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/s3.jpg') }}" alt="" /></a></li>
                            <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/s4.jpg') }}" alt="" /></a></li>
                            <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/s5.jpg') }}" alt="" /></a></li>
                            <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/s1.jpg') }}" alt="" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <div class="bottomimg"><img src="{{ asset('images/bottom.png') }}"></div>
    </section>

    <!-- Region Popup -->
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
