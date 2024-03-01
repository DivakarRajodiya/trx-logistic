@extends('layouts.app')

@section('content')
    <!-- Signup Popup -->

    <div class="main-carousel overlape">

        <div class="main-img-carousel" id="main-img-carousel">

            <div class="carousel-img"><img src="{{ asset('images/banner7.jpg') }}" alt=""/></div>

            <div class="carousel-img"><img src="{{ asset('images/banner1.jpg') }}" alt=""/></div>

            <div class="carousel-img"><img src="{{ asset('images/banner2.jpg') }}" alt=""/></div>

            <div class="carousel-img"><img src="{{ asset('images/banner3.jpg') }}" alt=""/></div>

            <div class="carousel-img"><img src="{{ asset('images/banner4.jpg') }}" alt=""/></div>

            <div class="carousel-img"><img src="{{ asset('images/banner5.jpg') }}" alt=""/></div>

            <div class="carousel-img"><img src="{{ asset('images/banner6.jpg') }}" alt=""/></div>

        </div>

        <!-- Main Img Carousel -->

    </div>

    <!-- Main Carousel -->

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

    <section class="block pad80">

        <div class="topimg"><img src="{{ asset('images/top.png') }}"></div>

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="heading">

                        <h2>Providing Relentless & Unmatched Services</h2>

                        <p>TRX Logistics & Support Services Pvt. Ltd was incepted in 2011. From about a decade the
                            company has been providing relentless and unmatched services. The company was established
                            with the aim of administering premium quality employee transportation solutions in the ever
                            growing Indian market. Combining the best of two worlds in the form of technical know-how
                            and field experience, our team has been delivering targeted results with every project. </p>

                    </div>

                </div>

            </div>

            <div class="row text-center iconsec">

                <div class="col-md-4">

                    <div><img src="{{ asset('images/mission.png') }}"></div>

                    <h3>Our Mission</h3>

                    <p> We at TRX logistics aim at taking the goodwill of the company to escalating heights. We ensure
                        that we are known for our quality services, robust network and strong corporate ethics. </p>

                </div>

                <div class="col-md-4">

                    <div><img src="{{ asset('images/vision.png') }}"></div>

                    <h3>Our Vision</h3>

                    <p>To be the most preferred transport service provider in the country known for its robust
                        transparent system bearing the values of Trust, Relationship and Excellence

                    </p>

                </div>

                <div class="col-md-4">

                    <div><img src="{{ asset('images/value.png') }}"></div>

                    <h3>Our Values</h3>

                    <p>Commitment towards innovation,<br>

                        excellence & <br>

                        customer delight.</p>

                </div>

            </div>

        </div>

        <div class="bottomimg"><img src="{{ asset('images/bottom.png') }}"></div>

    </section>

    <section class="block no-padding">

        <div class="fixed-bg  layer" style="background: url({{ asset('images/parallax4.jpg') }}) no-repeat scroll;"></div>

        <div class="row">

            <div class="col-md-6 padr0"><img src="{{ asset('images/whyus.jpg') }}"></div>

            <div class="col-md-6 padl0">

                <div class="shipment-guide allwhite">

                    <div class="dark-title light ">

                        <h3>Why TRX</h3>

                    </div>

                    <p>With more than a decade of experience in the logistics and support industry, TRX has become a
                        name to reckon with. With TRX you get complete transportation solution – from routing to
                        planning and roaster making to fleet optimization. </p>

                    <div class="shipment-list">

                        <ul>

                            <li><a>Process driven Organisation striving towards Continuous Process improvement with
                                    value</a></li>

                            <li><a>100% compliance oriented organisation with all applicable laws of the land</a></li>

                            <li><a>100% trained staff members whose credentials are checked from various local
                                    authorities</a></li>

                            <li><a>Bring efficiency and effectiveness with austerity measures using technology</a></li>

                            <li><a>Expertise in various facility audits : ISO 8001, 9001, 14001, 27001, 50001, EHS, OSHA
                                    etc</a></li>

                        </ul>

                    </div>

                    <!-- Shipment List -->

                </div>

                <!-- Shipment Guide -->

            </div>

        </div>

    </section>

    <section class="block no-padding">

        <div class="fixed-bg  layer" style="background: url({{ asset('images/parallax4.jpg') }}) no-repeat scroll;"></div>

        <div class="row">

            <div class="col-md-6">

                <div class="shipment-guide  allwhite">

                    <div class="dark-title light">

                        <h3>What Benefits to you</h3>

                    </div>

                    <p>With TRX you get the best in class services at the most competent rates. You can bank upon our
                        team of experts who are there to provide their unparalleled services at every step.</p>

                    <div class="shipment-list">

                        <ul>

                            <li><a>Quality Resources</a></li>

                            <li><a>24 x7 monitoring and crisis Team</a></li>

                            <li><a>MIS, Reports, graphical presentation</a></li>

                            <li><a>Quality service delivery</a></li>

                            <li><a>Compliance preference</a></li>

                            <li><a>Trained and skilled personnel</a></li>

                        </ul>

                    </div>

                    <!-- Shipment List -->

                </div>

                <!-- Shipment Guide -->

            </div>

            <div class="col-md-6 padl0">

                <div class="cargo-shipment">

                    <div class="calculate-shipping style2">

                        <div class="dark-title">

                            <h3>Post Your Requirements</h3>

                            <span>Please fill the form below...</span></div>

                        <div class="calculate-shipping-form">

                            <form method="post" action="#">

                                <div class="row">

                                    <div class="col-md-6">

                                        <input type="text" class="text-field" name="Name" placeholder="Name" required>

                                    </div>

                                    <div class="col-md-6">

                                        <input type="email" class="text-field" name="Email" placeholder="Email"
                                               required>

                                    </div>

                                    <div class="col-md-12">

                                        <input type="text" class="text-field" name="Phone" placeholder="Contact No."
                                               required>

                                    </div>


                                    <div class="col-md-12">

                                        <textarea name="Message" class="textarea" cols="" rows="3"
                                                  placeholder="Message"></textarea>

                                    </div>

                                    <div class="col-md-12">

{{--                                        <script src='https://www.google.com/recaptcha/api.js'></script>--}}

{{--                                        <div class="g-recaptcha"--}}
{{--                                             data-sitekey="6Lc4dcAgAAAAAEum7JSGamyanLyGVD0xo-em6OYM"></div>--}}

                                        <input type="submit" name="Submit" value="Submit"/>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                    <!-- Calculate Shipping -->

                </div>

                <!-- Cargo Shipment -->

            </div>

        </div>

    </section>

    <section class="block greybg">

        <div class="topimg"><img src="{{ asset('images/top.png') }}"></div>

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="heading">

                        <h2>Our Valuable Clients</h2>

                        <p>Quality services from its experienced staffs. Over the years the company has received positive feedbacks from existing clients: </p>

                    </div>

                    <ul class="partners" id="partners">

                        <li><a href="#" title=""><img class="partners-image" itemprop="image" src="{{ asset('images/client1.png') }}" alt=""/></a></li>

                        <li><a href="#" title=""><img class="partners-image" itemprop="image" src="{{ asset('images/client2.png') }}" alt=""/></a></li>

                        <li><a href="#" title=""><img class="partners-image" itemprop="image" src="{{ asset('images/client3.png') }}" alt=""/></a></li>

                        <li><a href="#" title=""><img class="partners-image" itemprop="image" src="{{ asset('images/client4.png') }}" alt=""/></a></li>

                        <li><a href="#" title=""><img class="partners-image" itemprop="image" src="{{ asset('images/client5.png') }}" alt=""/></a></li>

                        <li><a href="#" title=""><img class="partners-image" itemprop="image" src="{{ asset('images/client6.png') }}" alt=""/></a></li>

                        <li><a href="#" title=""><img class="partners-image" itemprop="image" src="{{ asset('images/client7.png') }}" alt=""/></a></li>

                        <li><a href="#" title=""><img class="partners-image" itemprop="image" src="{{ asset('images/client8.png') }}" alt=""/></a></li>

                        <li><a href="#" title=""><img class="partners-image" itemprop="image" src="{{ asset('images/client9.png') }}" alt=""/></a></li>

                        <li><a href="#" title=""><img  class="partners-image"itemprop="image" src="{{ asset('images/client10.png') }}" alt=""/></a></li>

                    </ul>

                </div>

            </div>

        </div>

    </section>
@endsection
@section('scripts')
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
        });
    </script>
@endsection
