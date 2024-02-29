<footer>
    <section class="block">
        <div class="parallax dark" data-velocity="-.2" style="background: rgba(0, 0, 0, 0) url({{ asset('images/parallax2.jpg') }}) no-repeat 50% 0;"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 column">
                            <div class="widget forpmar">
                                <div class="heading2">
                                    <h3>Contact Info</h3>
                                    <p><strong>Address :</strong><br>
                                        {{ config('app.company_address') }} <br> {{ config('app.company_city') }}</p>
                                    <p><strong>Landline No. :</strong><br>
                                        {{ config('app.company_landline_no') }}</p>
                                    <p><strong>Contact No. :</strong><br>
                                        {{ config('app.company_contact_person_name') }} - {{ getContactNo1() }}, <br> {{ getContactNo2() }}</p>
                                    <p><strong>Email :</strong><br>
                                        {{ config('app.company_email1') }}, {{ config('app.company_email2') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 column">
                            <div class="row">
                                <div class="col-md-5 column">
                                    <div class="widget">
                                        <div class="heading2">
                                            <h3>Quick Links</h3>
                                        </div>
                                        <div class="links-widget">
                                            <ul>
                                                <li><a href="{{ route('home') }}" title="">Home</a></li>
                                                <li><a href="{{ route('company-profile') }}" title="">About</a></li>
                                                <li><a href="{{ route('why-us') }}" title="">Why Us</a></li>

                                                <li><a href="{{ route('client') }}" title="">Clients</a></li>

                                                <li><a href="{{ route('contact') }}" title="">Contact Us</a></li>

                                            </ul>

                                        </div>

                                    </div>

                                    <!-- Widget -->

                                </div>

                                <div class="col-md-7 column">

                                    <div class="widget">

                                        <div class="heading2">

                                            <h3>Our Services</h3>

                                        </div>

                                        <div class="links-widget">

                                            <ul>

                                                <li><a href="{{ route('services') }}" title="">Employee Transportation
                                                        Services<br>

                                                        (End 2 End)</a></li>

                                                <li><a href="{{ route('services') }}" title="">Airport Transfers</a></li>

                                                <li><a href="{{ route('services') }}" title="">Event &
                                                        Conferences(Transportation)</a></li>

                                                <li><a href="{{ route('services') }}" title="">Chauffeur Driven Services</a>
                                                </li>

                                                <li><a href="{{ route('services') }}" title="">Shuttle Services</a></li>

                                                <li><a href="{{ route('services') }}" title="">Long Term Car Rental</a></li>

                                                <li><a href="{{ route('services') }}" title="">Coach Rental</a></li>

                                            </ul>

                                        </div>

                                    </div>

                                    <!-- Widget -->

                                </div>

                            </div>

                        </div>

                        <div class="col-md-4 column">

                            <div class="widget blue1">

                                <div class="heading2">

                                    <h3>Newsletter Subscribe</h3>

                                </div>

                                <div class="subscription-form">

                                    <p itemprop="description">Subscribe your email id for latest updates @ TRX</p>

                                    <form>

                                        <input type="text" placeholder="Enter Your Email Address"/>

                                        <a title="" href="#" class="theme-btn" data-toggle="modal"
                                           data-target="#submission-message"><i class="fa fa-paper-plane"></i>SUBMIT
                                            NOW</a>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <div class="bottom-line">

        <div class="container">

            <div class="row">

                <div class="col-md-12 column"> <span class="text-center">&copy;

                    <script type="text/javascript">document.write(new Date().getFullYear());</script>

                    {{ config('app.name') }} - All Rights Reserved</span>
                </div>

            </div>

        </div>

    </div>

    <div class="blank"></div>

</footer>
<!-- Region Popup -->
