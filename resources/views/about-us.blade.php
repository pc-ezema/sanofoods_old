@extends('layouts.frontend')

@section('breadcrumb')
 @includeIf('layouts.breadcrumb', ['title' => 'About Us' , 'subtitle' => 'Why Choose Us'])
@endsection

@section('main-content')
    
    <!--==================================================================== 
							Start Section Features One
	=====================================================================-->
    <div class="features pt-120 pb-90">
        <div class="container">
            
             
            <div class="row section-title"> 
    
                <div class="col-md-5">
                    <h2>explore features  </h2>  
                    <h3> Our Mission & Values </h3>    
                </div>
                
                <div class="col-md-5">
                    <p class="p-title-section">Our Strategies At Work Are The Means By Which To Achieve The Desired Goals, And Achieve Your Goals And Dreams Here</p>   
                </div>
                
                
            </div>
            
            <div class="row">
                
                <div class="col-md-4">
                    <div class="feat-item-one">
                        
                        <div class="content-box-feat">
                            <span class="flaticon-thinking"></span>
                            <h4>Our Mission</h4>
                            <p>Lorem Ipsum simply dummy text of the printing typesetting industry simply dummy text typesetting.</p>
                        </div>
                        
                    </div>
                </div>
                
                
                
                <div class="col-md-4">
                    <div class="feat-item-one">
                        
                        <div class="content-box-feat">
                            <span class="flaticon-idea"></span>
                            <h4>Our Vision</h4>
                            <p>Lorem Ipsum simply dummy text of the printing typesetting industry simply dummy text typesetting.</p>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-4">
                    <div class="feat-item-one">
                        
                        <div class="content-box-feat">
                            <span class="flaticon-book"></span>
                            <h4>Our Value </h4>
                            <p>Lorem Ipsum simply dummy text of the printing typesetting industry simply dummy text typesetting.</p>
                        </div>
                    </div>
                </div>
                
            
            </div>
        
        </div>
        
    </div>
        
        
        <!--==================================================================== 
                                End Section Features One
        =====================================================================-->
        
       
       <!--==================================================================== 
                                Start Section About Us Three
        =====================================================================-->
    <section id="about" class="about about-three">
            <div class="about-one pb-70 pt-120">
            <div class="container">
                <div class="row">
            
                    <div class="col-md-6 mb-50">
                        <div class="slider-about">
                            <div class="about-img-three">
                                <img src="http://placehold.it/600x523" alt="about">
    
                            </div>
                            <div class="overlay-about-three"></div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-6 mb-20">
                        <div class="info-about">
    
                            <div class="section-title-left">
                                <h2>about us</h2>
                                <h3>Build Innovative Industrial Solutions</h3>
                            </div>
         
                           <p class="p-about-thtee">FACNEX started as a small metalworking company specializing in forming bonded metals for a variety of industries. The founder of the company, NOUR ELDIN, realized that combining different minerals produces compounds that give excellent results</p>
    
                            
                            <div class="why-us mb-20">
                                <div class="row">
                                    
                                    <div class="col-sm-6 col-lg-6">
                                        <ul class="list-feat">
                                            <li><span></span>Experts Team Member</li>
                                            <li><span></span>Quality and Perfomance</li>
                                            <li><span></span>Powerful Product Strategy</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="col-sm-6 col-lg-6">
                                        <ul class="list-feat">
                                            <li><span></span>High strategy in manufacturing</li>
                                            <li><span></span>Best technology In The World</li>
                                            <li><span></span>Experts Team Member</li>
                                        </ul>
                                    </div>
                                    
                                
                                </div>  
                            </div>
                            
                            
                            <!-- Button One -->
                            <a href="#" class="main-btn-two">
                                <div class="text-btn">
                                    <span class="text-btn-one">Read More</span>
                                    <span class="text-btn-two">Read More</span>
                                </div>
                                <div class="arrow-btn">
                                    <span class="arrow-one"><i class="fas fa-caret-right"></i></span>
                                    <span class="arrow-two"><i class="fas fa-caret-right"></i></span>
                                </div>
                                
                            </a> 
                            
                            <div class="call-us">
                                
                                <span>Call us or for any inquiries</span>
                                <span class="phone-number"><a href="#">+(02) 0114-9912-318</a></span>
                                
                                
                            </div>
        
                            
                        
                        </div>
                    </div>
                    
                    
                    </div>
                    
                    
    
                </div>
            
            </div>
             
      
        
    </section>
        
        <!--==================================================================== 
                                End Section About Us three
        =====================================================================-->

@endsection