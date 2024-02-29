@extends('layouts.app')
@section('content')
    <section class="block remove-top pad60" style="padding-bottom:0px !important;">



        <div class="container jtext">
            <div class="row">

                <section class="servicesfour">
                    <ul>
                        <li><a href=""><img src="{{ asset('images/1.jpg') }}">
                                <div class="imgname">Routing & Roastering</div>
                            </a></li>
                        <li><a href=""><img src="{{ asset('images/2.jpg') }}">
                                <div class="imgname">Fleet Management</div>
                            </a></li>
                        <li><a href=""><img src="{{ asset('images/3.jpg') }}">
                                <div class="imgname">Customized MIS & Billing</div>
                            </a></li>
                        <li><a href=""><img src="{{ asset('images/4.jpg') }}">
                                <div class="imgname">Safety & Security</div>
                            </a></li>
                    </ul>
                </section>

                <div class="clearfix"></div>

                <br>
                &nbsp;
                <div class="col-md-4">
                    <div class="title2">
                        <h2>Our Services</h2>
                    </div>

                    <h4>Provides Complete Transportation Solutions along with:
                    </h4>
                    <br>

                    <div class="shipment-list" style="margin-top:0px;"><ul>
                            <li>Employee Transportation Services<br>
                                (End 2 End)</li>
                            <li>Chauffer Driven Services - on disposal</li>
                            <li>Event and Conferences (Transportation)</li>
                            <li>Long Term Rentals</li>
                            <li>Coach Rental </li>
                            <li>On Call Services </li>
                            <li>Shuttle Services </li>

                            &nbsp;<br>

                        </ul></div>




                </div>
                <div class="col-md-8">

                    <div class="main-carousel">
                        <div class="main-img-carousel" id="main-img-carousel">
                            <div class="carousel-img"><img src="{{ asset('images/banner7.jpg') }}" alt="" /></div>
                            <div class="carousel-img"><img src="{{ asset('images/banner1.jpg') }}" alt="" /></div>
                            <div class="carousel-img"><img src="{{ asset('images/banner2.jpg') }}" alt="" /></div>
                            <div class="carousel-img"><img src="{{ asset('images/banner3.jpg') }}" alt="" /></div>
                            <div class="carousel-img"><img src="{{ asset('images/banner4.jpg') }}" alt="" /></div>
                            <div class="carousel-img"><img src="{{ asset('images/banner5.jpg') }}" alt="" /></div>
                            <div class="carousel-img"><img src="{{ asset('images/banner6.jpg') }}" alt="" /></div>
                        </div>
                        <!-- Main Img Carousel -->
                    </div>


                </div>

            </div>
        </div>



        <div class="bottomimg"><img src="{{ asset('images/bottom.png') }}"></div>
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
