<div class="upper-bar upper-bar-dark  d-n-mobile d-n-tab">
    <div class="container">
        <div class="row">     
            <!-- Item Contact US Bar -->
            <div class="col-md-8">
                <div class="contact-us-bar">
                    <p>Opening Hours : Monday To Friday, 9am - 5pm</p>
                    
                </div>
            </div>
             <!-- Item Social Media  -->
            <div class="col-md-4 d-n-sm">
                <ul class="social-media-bar">
                   <li><a href="{{ config('app.facebook') }}" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                   <li><a href="{{ config('app.twitter') }}" class="twitter"><i class="fab fa-twitter"></i></a></li>
                   <li><a href="{{ config('app.instagram') }}" class="instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            
            
        </div>
    </div>
</div>
<!--==================================================================== 
                        End Upperbar 
=====================================================================-->
<!--====================================================================
                            Start Navbar
====================================================================-->
<nav class="nav-bar main-nav-bar">
    <!-- Background Color White -->    
    <div class="nav-output">
      <!-- Output Navbar -->   
      <div class="bg-gray">
        <!-- Container  -->  
        <div class="container container-nav">
            <!-- Row -->  
            <div class="row">
                <!-- Column of Logo -->  
                <div class="col-lg-3 col-sm-4 col-12">
                   <!-- My Logo -->
                   <a href="index.html" class="my-logo">
                       <img class="logo-two" src="/assets/images/logo/logo-2.png" alt="logo">
                   </a>  
                </div>  
                <div class="col-lg-3 col-sm-4 d-n-mobile">
                    <div class="single-item">
                        <span class="flaticon-email"></span>
                        
                        <h3>Email</h3>
                        <p>  {{ config('app.email') }}</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-sm-4 d-n-mobile">
                    <div class="single-item">
                        <span class="flaticon-call"></span>
                        
                        <h3>Phone</h3>
                        <p> {{ config('app.telephone_1') }}</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-sm-4 d-n-mobile d-n-tab d-n-md">
                    <div class="single-item">
                        <span class="flaticon-location"></span>
                        
                        <h3>location</h3>
                        <p>{{ config('app.location') }}</p>
                    </div>
                </div>
      
            </div>

        </div>
      </div>
    
    
    <div class="nav-menu-bar">
    <div class="sticky-navbar">
        <div class="nav-menu-main">
             <div class="container">
                <!-- Column of Links -->
                <div class="position-inherit">
                    <!-- Button Menu -->
                   <a href="#" class="navbar-toggle">
                       <span></span>
                       <span></span>
                       <span></span>
                   </a>
                    <!-- Icons  -->
                    <div class="icon-links">

                        <!-- Start Btn Search -->
                        <a href="#" class="search-btn">
                            <i class="fas fa-search"></i>
                        </a>
                        <!-- Start Btn Side Menu -->
                        <!-- Start Btn Side Menu -->
                        <a href="#" class="side-menu-btn">
                           <!-- <i class="fas fa-ellipsis-v"></i> -->
                             <span></span>
                            <span></span>
                            <span></span>
                        </a>

                    </div>

                    <!-- Main Menu Links -->                            
                    <ul id="main-menu" class="nav-menu">

                          <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                              <a href="/" class="nav-link">  Home </a>
                          </li>

                          <li class="nav-item {{ Request::is('about-us') ? 'active' : '' }}">
                            <a href="/about-us" class="nav-link">About Us</a>
                        </li>

                        <li class="nav-item {{ Request::is('our-products') ? 'active' : '' }}">
                            <a href="/our-products" class="nav-link">Products</a>
                        </li>

                          <li class="nav-item {{ Request::is('faq') ? 'active' : '' }}">
                              <a href="/faq" class="nav-link">Faq</a>
                          </li>
                          <li class="nav-item {{ Request::is('contact-us') ? 'active' : '' }}">
                              <a href="/contact-us" class="nav-link">Contact Us</a>
                          </li>
                      </ul> 

                </div>
            </div>
        </div>
    </div>
    </div>
        
   </div>
</nav>
    
    <!--====================================================================
                            End Navbar
    ====================================================================-->
<!--==================================================================== 
							Start Side Menu 
	=====================================================================-->
<div class="side-menu">
    
    <a href="#" class="close-side-menu">
        <span class="pe-7s-close"></span>
    </a>

    <div class="inner-side">
        <!-- Intro side -->
        <div class="about-side">
            <img src="/assets/images/logo/logo-2.png" alt="logo">
    
            <p>Our Strategies At Work Are The Means By Which To Achieve The Desired Goals, And Achieve Your Goals And Dreams Here.</p>
            
            <!-- Btn Two -->
            <a href="#" class="main-btn-two mt-30">
                <div class="text-btn">
                    <span class="text-btn-one">Request a Quote</span>
                    <span class="text-btn-two">Request a Quote</span>
                </div>
                <div class="arrow-btn">
                    <span class="arrow-one"><i class="fas fa-caret-right"></i></span>
                    <span class="arrow-two"><i class="fas fa-caret-right"></i></span>
                </div>
            </a> 
        
        </div>
        
        <!-- contact us -->
        <div class="contact-side">
            <h6>Contact Info</h6>
            <div class="line-side"></div>
            <div class="contact-info">

                <div class="single-contact">
                    <span class="flaticon-call"></span>
                    <div class="info-cont">
                        <p>+(02) 0114-9912-318</p>       
                        <p>+(02) 0111-7457-354</p>

                    </div>
                </div>

                <div class="single-contact">
                    <span class="flaticon-email"></span>
                    <div class="info-cont">
                        <p>Hello@example.com</p>
                        <p>support@yourwebsite.com</p>
                    </div>
                </div>

                <div class="single-contact">
                    <span class="flaticon-location"></span>
                     <div class="info-cont">
                        <p>US - Los Angeles 5135 - 4234 </p>
                        <p>In The Center Street Name Here</p>
                     </div>
                </div>


                <div class="single-contact">
                    <span class="flaticon-time"></span>
                    <div class="info-cont">    
                        <p>Monday - Fraiday, 9am - 5pm,</p>
                        <p>Saturday & Sunday - CLOSED</p>

                    </div>
                </div>


            </div>
                        
        </div>
        
        <!-- follow us -->
        <div class="follow-us">
            <h6>Follow Us</h6>
            <div class="line-side"></div>
            <!-- List Icons Social Media-->
            <ul class="social-media">
               <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
               <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
               <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
               <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
            </ul> 

        </div>
        
        
    
    </div>

</div>
<!-- Overlay Close Sidebar -->
<div class="close-menu-sidebar"></div>
    
    <!--==================================================================== 
							End Side Menu 
	=====================================================================-->
    
    <!--==================================================================== 
							Start Search  
	=====================================================================-->
<div class="search-screen">
    <a href="#" class="close-search"><span class="pe-7s-close"></span></a>
    
    <form class="input-search">
        <input type="search" placeholder="Search Here.. ">
        <button type="submit" class="search-btn"> <i class="fas fa-search"></i> </button>
    </form>
    
</div>
    <!--==================================================================== 
							End Search  
	=====================================================================-->
    

    