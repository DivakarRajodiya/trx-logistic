@extends('layouts.app')
@section('content')
    <!-- Signup Popup -->

    <div class="main-carousel overlape">

        <div class="carousel-img"><img src="{{ asset('images/client.jpg') }}" alt="" /></div>



        <!-- Main Img Carousel -->

    </div>

    <section class="block remove-top pad80"  style="background-image:url({{ asset('images/bg.jpg') }})">

        <div class="topimg"><img src="{{ asset('images/top.png') }}"></div>

        <div class="container jtext">

            <div class="row">

                <div class="col-md-12">

                    <div class="title2">

                        <h2>Client</h2>

                    </div>



                    <ul class="client">

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client2.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client3.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client4.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client5.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client6.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client8.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client9.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client10.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client11.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client12.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client13.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client14.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client15.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client16.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client17.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client18.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client19.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client20.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client21.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client22.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client23.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client24.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client25.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client26.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client27.jpg') }}" alt="" /></a></li>

                        <li><a href="#" title=""><img itemprop="image" src="{{ asset('images/client28.jpg') }}" alt="" /></a></li>

                    </ul>











                </div>





            </div>

        </div> <div class="bottomimg"><img src="{{ asset('images/bottom.png') }}"></div>

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
