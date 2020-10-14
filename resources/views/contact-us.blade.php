@extends('layouts.frontend')

@section('breadcrumb')
 @includeIf('layouts.breadcrumb')
@endsection

@section('main-content')
<section class="contact-us-page  pt-120 pb-60">  
    <div class="container">
        
        
        <div class="row">
            
            
            <div class="col-12">
                
                
                <div class="contact-us-meta">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="contact-item">
                                <div class="inner-contact">
                                    <span><i class="fa fa-phone"></i></span>
                                    <h4>Phone</h4>
                                </div>
                                
                                <p>{{ config('app.telephone_1') }}</p>
                                <p>{{ config('app.telephone_2') }}</p>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-sm-6">
                            <div class="contact-item">
                                <div class="inner-contact">
                                    <span><i class="fa fa-envelope"></i></span>
                                    <h4>Email</h4>
                                </div>
                                
                                <p>{{ config('app.email') }}</p>
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-3 col-sm-6">
                            <div class="contact-item">
                                <div class="inner-contact">
                                    <span><i class="fa fa-location-arrow"></i></span>
                                    <h4>Address</h4>
                                </div>
                                
                                <p style="line-height: 1.3rem">{{ config('app.address') }}</p>
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-3 col-sm-6">
                            <div class="contact-item">
                                <div class="inner-contact">
                                    <span><i class="fas fa-clock"></i></span>
                                    <h4>Online work </h4>
                                </div>
                                
                                <p>Monday - Fraiday, 9am - 5pm,</p>
                                <p>Saturday & Sunday - CLOSED</p>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="line-contact"></div>
                    
                    <div class="row">
                        
                         <div class="col-lg-6 mb-50">
                            <div class="img-contact">
                             <iframe width="600" height="450" id="map" src="https://maps.google.com/maps?q=20%2C%20Oba%20Ogunusi%20Road%2C%20Akiode%20Bus%20stop%2C%20Ojudu%20Berger%2C%20Lagos%2C%20Nigeria&t=&z=13&ie=UTF8&iwloc=&output=embed" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                            {{-- <div class="img-contact">
                                <iframe id="map" width="600" height="450" aria-hidden="false" tabindex="0"
></iframe>
                            </div> --}}
                             

                        </div>
                        
                        <div class="col-lg-6 mb-50">
                            

                                <div class="section-title-left">
                                    <h4 class="title-inner-page">Write To Us. </h4>
                                </div>

                                
                            @includeIf('layouts.error_template')
                            
                            <form class="form" method="POST" action="/contact-us">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="fullname" placeholder="Your FullName">
                                        </div>

                                    </div>  

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Your Email">
                                        </div>

                                    </div>
                                    
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Your Phone Number">
                                        </div>

                                    </div>
                                    

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="subject" placeholder="subject">
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea placeholder="Your Message Here " name="message"></textarea>
                                        </div>
                                    </div>
                                </div>


                          
                                     <!-- Button two -->
                    <button type="submit" class="main-btn-two">
                        <div class="text-btn">
                            <span class="text-btn-one">Send Message</span>
                            <span class="text-btn-two">Send Message</span>
                        </div>
                        <div class="arrow-btn">
                            <span class="arrow-one"><i class="fas fa-caret-right"></i></span>
                            <span class="arrow-two"><i class="fas fa-caret-right"></i></span>
                        </div>
                    </button>
                            </form>

                            
                            

                        </div>
                        
                       
                        
                    </div>
                    
                    
                    
                </div>
            </div>
       
        </div>
    </div>  
</section>
@endsection