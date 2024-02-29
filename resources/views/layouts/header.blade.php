<header class="fancy-header stick">

    <!-- Top Sec -->

    <div class="logo-menu-sec">

        <div class="logo-menu bg-color-light">

            <div class="logo"><a href="{{ route('home') }}" title=""><img itemprop="image" src="{{ asset('images/logo.png') }}" alt=""/></a>
            </div>

            <div class="quick-contact">

                <ul>

                    <li><img src="{{ asset('images/phone.png') }}" alt=""/> <span>{{ config('app.company_landline_no') }}</span>

                        <p>Call Us Now</p>

                    </li>

                    <li><img src="{{ asset('images/sms.png') }}" alt=""/> <span>{{ config('app.company_email1') }}</span>

                        <p>Have Any Question?</p>

                    </li>

                </ul>

            </div>

        </div>

        <nav class="menu-curve">

            <ul>

                <li><a href="{{ route('home') }}" title="">HOME</a></li>

                <li class="menu-item-has-children"><a href="" title="">About Us</a>

                    <ul>

                        <li><a href="{{ route('company-profile') }}">Company Profile</a></li>


                        <li><a href="{{ route('why-us') }}">Why us</a></li>

                    </ul>

                </li>

                <li><a href="{{ route('services') }}" title="">SERVICES</a></li>

                <li><a href="{{ route('client') }}" title="">CLIENTS</a></li>

                <li><a href="{{ route('contact') }}" title="">CONTACT US</a></li>

            </ul>

        </nav>

    </div>

    <!-- Logo Menu Sec -->

</header>

<!--Responsive header-->
<div class="responsive-header"><span class="top-sec-btn"><i class="fa fa-angle-double-down"></i></span>

    <div class="responsive-top-sec">

        <div class="responsive-top-bar top-bar">

            <div class="container"><span class="cargo-time">Opening Time :<i>08:00AM - 9:00PM</i></span>

                <div class="connect-us">

                    <ul class="social-btn">

                        <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>

                        <li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>

                        <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>

                    </ul>

                </div>

            </div>

        </div>

        <!-- Responsive Top Bar -->

        <div class="responsive-quick-contact">

            <div class="container">

                <div class="quick-contact">

                    <ul>

                        <li><img src="{{ asset('images/phone.png') }}" alt=""/> <span>011-49093349</span>

                            <p>Call Us Now</p>

                        </li>

                        <li><img src="{{ asset('images/sms.png') }}" alt=""/> <span>info@trxlogistic.com</span>

                            <p>Have Any Question?</p>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

        <!-- Responsive Quick Contact -->

    </div>

    <div class="responsive-nav">

        <div class="container">

            <div class="responsive-logo">

                <div class="logo"><a href="{{ route('home') }}" title=""><img itemprop="image" src="{{ asset('images/logo.png') }}" alt=""/></a>
                </div>

            </div>

            <span class="responsive-btn"><i class="fa fa-list"></i></span>

            <div class="responsive-menu"><span class="close-btn"><i class="fa fa-close"></i></span>

                <ul>

                    <li><a href="{{ route('home') }}" title="">HOME</a></li>

                    <li class="menu-item-has-children"><a href="" title="">About Us</a>

                        <ul>

                            <li><a href="{{ route('company-profile') }}">Company Profile</a></li>


                            <li><a href="{{ route('why-us') }}">Why us</a></li>

                        </ul>

                    </li>

                    <li><a href="{{ route('services') }}" title="">SERVICES</a></li>

                    <li><a href="{{ route('client') }}" title="">CLIENTS</a></li>

                    <li><a href="{{ route('contact') }}" title="">CONTACT US</a></li>

                </ul>

            </div>

            <!-- Responsive Menu -->

        </div>

    </div>

</div>
