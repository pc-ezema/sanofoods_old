<footer class="footer footer-default-padding">
    <div class="container">
        <div class="row footer-row">
            <div class="col-lg-4 mb-30">

                <div class="footer-widget">
                    <div class="footer-logo">
                        <img src="assets/images/logo/logo-1.png" alt="logo">
                    </div>
                    <p class="mb-30">Our Strategies At Work Are The Means By Which To Achieve The Desired Goals, And Achieve Your Goals And Dreams Here.</p>
                    <!-- Btn Two -->
                    <a href="about-us.html" class="main-btn-three">
                        <div class="text-btn">
                            <span class="text-btn-one">More about Us</span>
                            <span class="text-btn-two">More about Us</span>
                        </div>
                        <div class="arrow-btn">
                            <span class="arrow-one"><i class="fas fa-caret-right"></i></span>
                            <span class="arrow-two"><i class="fas fa-caret-right"></i></span>
                        </div>
                    </a> 
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-30">
                <div class="footer-widget mb-0">
                    <h4>Company Links</h4>
                    <div class="line-footer"></div>
                    <div class="row">
                        <div class="col-6">
                            <ul class="footer-link mb-0">
                                <li>
                                    <a href="about-us.html">
                                        <span><i class="fas fa-angle-right"></i></span> About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="why-choose-us.html">
                                        <span><i class="fas fa-angle-right"></i></span> why choose us
                                    </a>
                                </li>
                                <li>
                                    <a href="our-team.html">
                                        <span><i class="fas fa-angle-right"></i></span> Meet Our Team
                                    </a>
                                </li>
                                <li>
                                    <a href="case-study-one.html">
                                        <span><i class="fas fa-angle-right"></i></span> Our Projects
                                    </a>
                                </li>

                                <li>
                                    <a href="contact-us.html">
                                        <span><i class="fas fa-angle-right"></i></span> Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                         <div class="col-6">
                            <ul class="footer-link mb-0">
                                <li>
                                    <a href="work-with-us.html">
                                        <span><i class="fas fa-angle-right"></i></span> Work with us
                                    </a>
                                </li>

                                <li>
                                    <a href="faq.html">
                                        <span><i class="fas fa-angle-right"></i></span> Faqs
                                    </a>
                                </li>

                                <li>
                                    <a href="our-clients.html">
                                        <span><i class="fas fa-angle-right"></i></span> Our clients
                                    </a>
                                </li>

                                <li>
                                    <a href="our-pricing.html">
                                        <span><i class="fas fa-angle-right"></i></span> Our Pricing
                                    </a>
                                </li>
                                <li>
                                    <a href="services-one.html">
                                        <span><i class="fas fa-angle-right"></i></span> Our Services
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="footer-widget">
                    <h4>Newsletter</h4>
                    <div class="line-footer"></div>
                    <p class="mb-15">Signup for our mailing list to get latest updates and news.</p>

                    <div class="newsletter-item">
                        <input type="email" name="email" placeholder="Your Email">
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </div>

                    <!-- List Icons Social Media-->
                    <ul class="social-media">
                       <li><a href="{{ config('app.facebook') }}" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                       <li><a href="{{ config('app.twitter') }}" class="twitter"><i class="fab fa-twitter"></i></a></li>
                       <li><a href="{{ config('app.instagram') }}" class="instagram"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row row-contact">
            <div class="col-lg-4 col-sm-6 no-padding">
                <div class="single-item">
                    <span class="flaticon-call"></span>

                    <p> {{ config('app.telephone_1') }}</p>
                    <p> {{ config('app.telephone_2') }}</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 no-padding">

                <div class="single-item">
                    <span class="flaticon-email"></span>
                    <p>  {{ config('app.email') }}</p>
                </div>  
            </div>
            <div class="col-lg-4 col-sm-12 no-padding">
                <div class="single-item">
                    <span class="flaticon-location"></span>
                    <p>{{ config('app.address') }} </p>
                </div>
            </div>
        </div>
    </div>
   <div class="footer-bar">
    <div class="container">
         <div class="footer-copy">
             <div class="row">
                <div class="col-md-6">
                 <!-- Copyright By Me NourEgy  -->
        <div class="copyright">
            &copy; {{ date('Y') }}  All Rights Reserved By
            <a href="{{ config('app.web') }}" target="_blank">{{ config('app.name') }}</a>
        </div>
                </div>
                 
                 <div class="col-md-6">
                     <ul class="links-of-footer">
            <li><a href="#">View Map</a></li> 
            <li><a href="#">Privacy</a></li> 
            <li><a href="#">Terms of Use</a></li> 
        </ul>
                </div>
             </div>
        </div>   
    </div> 
   </div>
</footer>