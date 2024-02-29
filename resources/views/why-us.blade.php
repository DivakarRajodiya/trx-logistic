@extends('layouts.app')
@section('content')
    <!-- Signup Popup -->
    <div class="main-carousel overlape">
        <div class="carousel-img"><img src="images/about.jpg" alt="" /></div>

        <!-- Main Img Carousel -->
    </div>
    <section class="block remove-top pad80">
        <div class="topimg"><img src="{{ asset('images/top.png') }}"></div>
        <div class="container jtext">

            <div class="row">
                <div class="col-md-12">
                    <div class="title2">
                        <h2>Why Us</h2>
                    </div>

                    <p>With more than a decade of experience in the logistics and support industry, TRX has become a name to reckon with. With TRX you get complete transportation solution – from routing to planning and roaster making to fleet optimization. We have always set up international level quality standards. With a fleet size of more than 300 vehicles we effectively manage about 50, 000 trips a month.</p>
                    <p>Some of the features of our services that give us a leading edge over our competitors include –</p>
                    <p>&nbsp;</p>
                </div></div>


            <div class="row">
                <div class="col-md-6">

                    <div class="shipment-list" style="margin-top:0px;"><ul>	<li>Using latest technology solutions to provide incomparable safety</li>
                            <li>Monitoring and tracking vehicles using GPS via control room</li>
                            <li>An effective communication network via mobile phones and walki-talkies</li>
                            <li>Adhering to state transport policy and statutory compliance efficiently</li>
                            <li>Frequent ‘safe driver training’ rendered by reputed agencies</li>
                            <li>GPRS enabled tracking system for greater security</li>
                            <li>Tailor made MIS and billing options available</li>
                            <li>Site supervisors equipped with Walki-talkie</li>
                            <li>Providing alcohol breath analyzer on request</li>
                            <li>Following strict code of conduct</li>
                            <li>Adhering to state transport policy and statutory compliance efficiently</li>
                            <li>Frequent ‘safe driver training’ rendered by reputed agencies</li>
                        </ul></div>

                </div>
                <div class="col-md-6">

                    <img src="{{ asset('images/whyus.jpg') }}">

                </div>
                <div class="col-md-12">
                    <p>&nbsp;&nbsp;</p>
                    <p>We provide these solutions to a variety of corporate houses at zero investment. Thus, ensuring that they covet their attention to the core business and leave the administrative tasks for an expert, and who better that TRX. We maintain high standards of service and at no cost compromise with quality and security. </p></div>
            </div>
        </div> <div class="bottomimg"><img src="{{ asset('images/bottom.png') }}"></div>
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
