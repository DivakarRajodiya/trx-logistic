@extends('layouts.app')

@section('content')
    <!-- Signup Popup -->
    <div class="main-carousel overlape">
        <div class="carousel-img"><img src="{{ asset('images/about.jpg') }}" alt=""/></div>
        <!-- Main Img Carousel -->
    </div>
    <section class="block remove-top pad80" style="padding-bottom:0px !important;">
        <div class="topimg"><img src="{{ asset('images/top.png') }}"></div>
        <div class="container jtext">
            <div class="row p-2">
                <div class="col-md-12">
                    <div class="title2">
                        <h2>Company Profile</h2>
                    </div>
                    {{--                        <p><strong>TRX Logistics & Support Services Pvt. Ltd </strong>was incepted in 2011. From about a decade the company has been providing relentless and unmatched services. The company was established with the aim of administering premium quality employee transportation solutions in the ever growing Indian market. Combining the best of two worlds in the form of technical know-how and field experience, our team has been delivering targeted results with every project. Understanding the varying needs and requirements of our clients has and shall always be our USP. Thus, we take pride in our highly customized services. With TRX you get the best in class services at the most competent rates. You can bank upon our team of experts who are there to provide their unparalleled services at every step.--}}
                    {{--                        </p>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-md-6">--}}
                    {{--                        <img src="{{ asset('images/whyus.jpg') }}">--}}
                    {{--                    </div>--}}
                    <div>
                        <p>
                            Sai Ram Travel and Tours Pvt. Ltd. (CIN - U79110DL2023PTC412279) is a transport
                            service provider that has been in operation since 2007. Initially, it was run as a
                            proprietorship firm and in April 2023, it was formally registered as a private limited
                            company. The company specializes in catering to the transportation needs of Multi
                            Vehicles for various MNCs and call centers in the National Capital Region (NCR).
                        </p>
                        <p>
                            <b> Fleet Management and Facilities:</b><br/>
                            The company prides itself on being a leading fleet management group with over
                            hundred well-organized and disciplined fleets. All the provided fleets are the latest
                            models, well-maintained, and equipped with the latest technology, including GPS
                            devices and panic buttons for additional safety. Passengers and drivers have access to
                            seat belts and first aid boxes in all vehicles. In case of any vehicle breakdown, extra cabs
                            are available to address the issue promptly.
                        </p>
                        <p>
                            <b>Fleet and Services:</b><br/>
                            Sai Ram Travels boasts a fleet of vehicles that includes Toyota Innova, Ertiga, Swift Dzire,
                            Xcent, and Tempo Travellers, all equipped with air-conditioners and conforming to
                            current environmental norms and statutory requirements. The vehicles are registered
                            with the Transport Authority and have Taxi numbers. The company also provides standby
                            vehicles on short notice, ensuring continuity of service.
                        </p><br/>
                        <p>
                            <b>Motto and Key Performance Areas (KPAs):</b><br/>
                            The motto of Sai Ram Travel and Tours is "Safety, Punctuality, Comfort." The
                            organization aims to build lasting business partnerships with its clients and places a high
                            emphasis on safety, punctuality, providing value-added services, assisting clients in
                            optimal route generation, and regular updates and feedback to control costs effectively
                            <br/>
                        </p>
                        <p>
                            <b> Safety Measures:</b><br/>
                            The company ensures safety by employing verified drivers with completed police
                            verification and proper documentation.
                            All drivers work on a single shift for safety reasons, and they receive weekly training to
                            maintain their experience and professionalism.
                            Uniformed drivers display good behavior with passengers and do not have any addictive
                            habits.
                            <br/>
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <p>
                        <b> Vehicle Compliance:</b><br/>
                        Sai Ram Travels ensures that all its vehicles comply with emission norms (Euro 3) and
                        possess valid pollution under Control Certificates from authorized agencies. The
                        company pays road tax quarterly to the respective state departments and obtains valid
                        fitness certificates from transport authorities for all vehicles. Additionally, all vehicles
                        are comprehensively insured, including third-party insurance coverage.
                    </p>
                    <p>
                        <b>Drivers:</b><br/>
                    <ul>
                        <li>Verified Drivers - Police Verification completed with all documents</li>
                        <li>Single Shift Drivers - All drivers will have single shift only for safety reason</li>
                        <li>Uniform - Drivers with Neat and Clean Uniformed</li>
                        <li>Experienced - Experienced drivers with weekly training provided by us</li>
                        <li>Behavior - Good behaviors with passengers and non-addictive</li>
                    </ul>
                    </p>
                    <p>
                        <b>Company Registration Details: :</b><br/>
                        Company Registration Details: Sai Ram Travel and Tours Pvt. Ltd. Registered with
                        Following Details:<br/><br/>
                        <b class="margin-left">CIN: U79110DL2023PTC412279</b><br/>
                        <b class="margin-left"> PAN: ABKCS5235K</b><br/>
                        <b class="margin-left">TAN: DELS00354L</b><br/>
                        <b class="margin-left">GSTIN: 07ABKCS5235K1ZY</b>
                        <br/><br/>
                        <span>
                                Support Contacts: For Support and inquiries, you can reach out to the following
                            contacts:
                        </span><br/><br/>
                        <b class="margin-left"> L3 Ms. Anita:- {{ getContactNo1() }}</b><br/>
                        <b class="margin-left"> L2 Mr. Narender - {{ getContactNo2() }}</b><br/>
                        <b class="margin-left">L1 Accounts Manager / Shift Supervisor</b><br/>
                        <br/>
                        <span>
                                Drivers Login - All drivers will have login to update and check trips.
                        </span> <br/>
                        <span>
                            MIS Entry- All drivers will update daily MIS with their login.
                        </span> <br/> <br/>
                        <span>
                                Overall, Sai Ram Travel and Tours Pvt. Ltd. focuses on maintaining high-quality services,
                            prioritizing safety and punctuality, and establishing long-term partnerships with clients
                            in the transportation sector.
                        </span>
                        <br/> <br/>
                    </p>
                </div>
                <p class="col-md-12">
                    <b> Our Valuable Clients:</b><br/>
                    Quality services from its experienced staffs. Over the years the
                    company has received positive feedbacks from existing clients:<br /><br />
                </p>
                <div class="table-center mx-auto col-md-12">
                    <table class="table table-striped table-width table-border">
                        <thead class="border-bottom">
                        <tr>
                            <th scope="col">Sr. No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Location</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>SitusAMC</td>
                            <td>Gurugram</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Mondee Tech Pvt Ltd</td>
                            <td>Delhi</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Riya The Travel Expert</td>
                            <td>Gurugram</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>NEWGEN</td>
                            <td>Gurugram & Noida</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>DCM Data System</td>
                            <td>Gurugram</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Pearson</td>
                            <td>Noida</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>AMTEX</td>
                            <td>Gurugram</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Oracle</td>
                            <td>Gurugram</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Prexus</td>
                            <td>Gurugram</td>
                        </tr>
                        </tbody>
                    </table>
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
                            <li><a href="#" title="">
                                    <img itemprop="image" src="{{ asset('images/s7.jpg') }}" alt=""/></a>
                            </li>
                            <li><a href="#" title="">
                                    <img itemprop="image" src="{{ asset('images/s2.jpg') }}" alt=""/></a>
                            </li>
                            <li><a href="#" title="">
                                    <img itemprop="image" src="{{ asset('images/s6.jpg') }}" alt=""/></a>
                            </li>
                            <li><a href="#" title="">
                                    <img itemprop="image" src="{{ asset('images/s3.jpg') }}" alt=""/></a>
                            </li>
                            <li><a href="#" title="">
                                    <img itemprop="image" src="{{ asset('images/s4.jpg') }}" alt=""/></a>
                            </li>
                            <li><a href="#" title="">
                                    <img itemprop="image" src="{{ asset('images/s5.jpg') }}" alt=""/></a>
                            </li>
                            <li><a href="#" title="">
                                    <img itemprop="image" src="{{ asset('images/s1.jpg') }}" alt=""/></a>
                            </li>
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
            'use strict';
            //** Main Img Carousel  **//
            $('#main-img-carousel').owlCarousel({
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
                time: 1000,
            });

            //** Blog Post Carousel **//
            $('#blog-post-carousel').owlCarousel({
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
            $('#cities-carousel').owlCarousel({
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
                        items: 1,
                    },
                    600: {
                        items: 3,
                    },
                    1200: {
                        items: 3,
                    },
                },
            });

            $('div.members-area').each(function () {
                $(this).children().eq(0).addClass('clicked');
                var testimo = $(this).find('.member');
                $(testimo).on('click', function () {
                    $(testimo).removeClass('clicked');
                    $(this).addClass('clicked');
                });
            });

            // Post //
            $('.post-thumb > span').on('click', function () {
                $(this).parent('div').toggleClass('slide-down');
                return false;
            });

            function initialize () {
                var myLatlng = new google.maps.LatLng(51.5015588, -0.1276913);
                var mapOptions = {
                    zoom: 14,
                    disableDefaultUI: true,
                    scrollwheel: false,
                    center: myLatlng,
                };
                var map = new google.maps.Map(document.getElementById('google_map1'), mapOptions);

                var image = 'images/icon.png';
                var myLatLng = new google.maps.LatLng(51.5015588, -0.1276913);
                var beachMarker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    icon: image,
                });

            }

            google.maps.event.addDomListener(window, 'load', initialize);

            function initialize2 () {
                var myLatlng = new google.maps.LatLng(51.5015588, -0.1276913);
                var mapOptions = {
                    zoom: 14,
                    disableDefaultUI: true,
                    scrollwheel: false,
                    center: myLatlng,
                };
                var map = new google.maps.Map(document.getElementById('google_map2'), mapOptions);

                var image = 'images/icon.png';
                var myLatLng = new google.maps.LatLng(51.5015588, -0.1276913);
                var beachMarker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    icon: image,
                });

            }

            google.maps.event.addDomListener(window, 'load', initialize2);

            function initialize3 () {
                var myLatlng = new google.maps.LatLng(51.5015588, -0.1276913);
                var mapOptions = {
                    zoom: 14,
                    disableDefaultUI: true,
                    scrollwheel: false,
                    center: myLatlng,
                };
                var map = new google.maps.Map(document.getElementById('google_map3'), mapOptions);

                var image = 'images/icon.png';
                var myLatLng = new google.maps.LatLng(51.5015588, -0.1276913);
                var beachMarker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    icon: image,
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize3);

            function initialize4 () {
                var myLatlng = new google.maps.LatLng(51.5015588, -0.1276913);
                var mapOptions = {
                    zoom: 14,
                    disableDefaultUI: true,
                    scrollwheel: false,
                    center: myLatlng,
                };
                var map = new google.maps.Map(document.getElementById('google_map4'), mapOptions);

                var image = 'images/icon.png';
                var myLatLng = new google.maps.LatLng(51.5015588, -0.1276913);
                var beachMarker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    icon: image,
                });

            }

            google.maps.event.addDomListener(window, 'load', initialize4);
        });
    </script>
@endsection
