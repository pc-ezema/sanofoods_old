@extends('layouts.frontend')

@section('breadcrumb')
 @includeIf('layouts.breadcrumb', ['title' => 'Products' , 'subtitle' => 'Our Products'])
@endsection

@section('main-content')

    <!--==================================================================== 
							Start Section Portfolio 
	=====================================================================-->
    <section id="portfolio" class="portfolio portfolio-page portfolio-two pt-120 pb-90">
        <div class="container">
          <div class="row">
              <div class="col">
                  <div class="filter-group">
                      <!-- Control List -->
                      <ul id="control" class="list-control">
                         <li class="active" data-filter="all">All</li>
                         <li data-filter="1">Energy</li>
                         <li data-filter="2">Mechanics </li>
                         <li data-filter="3">Gas & Oil</li>
                          <li data-filter="4">manufacturing</li>
                     </ul>
                  </div>
  
              </div>
          </div>
            
           <!-- End Row 1 Column -->
          <!-- Start Row 2 Column -->
          <div id="filtr-container" class="row">
              
              <!-- Column Image -->
              <div class="col-sm-6 col-lg-4 filtr-item" data-category="2" data-sort="value">
                  <div class="case-item">
                      <div class="img-case">
                          <!-- Image OF Case -->
                          <img src="http://placehold.it/600x550" alt="case">
  
                          <div class="overlay-case">
                              <div class="inner-overlay">
                                  <!-- Text OF Case -->
                                  <div class="case-study-text"> 
                                      
                                      <div class="text-of-case">
                                          <div class="tag-case">  Mechanics robots </div>
                                         <h5> <a href="case-study-single.html"> Mechanics of mechanical robots in major states </a> </h5>
                                      </div>
                                      
                                      <div class="links-case">
                                          <div class="link-case">
                                              <a href="case-study-single.html"><i class="fas fa-link"></i></a>
                                          </div>
  
                                          <div class="zoom-case">
                                          <a href="http://placehold.it/600x550"><i class="fas fa-search-plus"></i></a>
                                          </div>
                                      </div>
                                      
                                  </div> 
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              
              <!-- Column Image -->
              <div class="col-sm-6 col-lg-4 filtr-item" data-category="3" data-sort="value">
                  <div class="case-item">
                      <div class="img-case">
                          <!-- Image OF Case -->
                          <img src="http://placehold.it/600x550" alt="case">
  
                          <div class="overlay-case">
                              <div class="inner-overlay">
                                  <!-- Text OF Case -->
                                  <div class="case-study-text"> 
                                      
                                       <div class="text-of-case">
                                         <div class="tag-case"> gas oil  </div>
                                        <h5> <a href="case-study-single.html">  Extract oil and gas from the large city </a> </h5>
                                      </div>
                                      
                                      <div class="links-case">
                                          <div class="link-case">
                                              <a href="case-study-single.html"><i class="fas fa-link"></i></a>
                                          </div>
  
                                          <div class="zoom-case">
                                          <a href="http://placehold.it/600x550"><i class="fas fa-search-plus"></i></a>
                                          </div>
                                      </div>
                                  </div> 
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              
              <!-- Column Image -->
              <div class="col-sm-6 col-lg-4 filtr-item" data-category="4" data-sort="value">
                  <div class="case-item">
                      <div class="img-case">
                          <!-- Image OF Case -->
                          <img src="http://placehold.it/600x550" alt="case">
  
                          <div class="overlay-case">
                              <div class="inner-overlay">
                                  <!-- Text OF Case -->
                                  <div class="case-study-text"> 
                                      <div class="text-of-case">
                                          <div class="tag-case">  engineers Factory  </div>
                                          <h5> <a href="case-study-single.html"> Training engineers on the manufacture of heavy products </a> </h5>
                                      </div>
                                      
                                      <div class="links-case">
                                          <div class="link-case">
                                              <a href="case-study-single.html"><i class="fas fa-link"></i></a>
                                          </div>
  
                                          <div class="zoom-case">
                                          <a href="http://placehold.it/600x550"><i class="fas fa-search-plus"></i></a>
                                          </div>
                                      </div>
                                  </div> 
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              
              <!-- Column Image -->
              <div class="col-sm-6 col-lg-4 filtr-item" data-category="2" data-sort="value">
                  <div class="case-item">
                      <div class="img-case">
                          <!-- Image OF Case -->
                          <img src="http://placehold.it/600x550" alt="case">
  
                          <div class="overlay-case">
                              <div class="inner-overlay">
                                  <!-- Text OF Case -->
                                  <div class="case-study-text"> 
                                      
                                       <div class="text-of-case">
                                          <div class="tag-case">   Factory Indusrial  </div>
                                           <h5> <a href="case-study-single.html">  Automated control industry for control of companies </a> </h5>
                                      </div>
                                      
                                      <div class="links-case">
                                          <div class="link-case">
                                              <a href="case-study-single.html"><i class="fas fa-link"></i></a>
                                          </div>
  
                                          <div class="zoom-case">
                                          <a href="http://placehold.it/600x550"><i class="fas fa-search-plus"></i></a>
                                          </div>
                                      </div>
                                  </div> 
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              
              <!-- Column Image -->
              <div class="col-sm-6 col-lg-4 filtr-item" data-category="3" data-sort="value">
                  <div class="case-item">
                      <div class="img-case">
                          <!-- Image OF Case -->
                          <img src="http://placehold.it/600x550" alt="case">
  
                          <div class="overlay-case">
                              <div class="inner-overlay">
                                  <!-- Text OF Case -->
                                  <div class="case-study-text"> 
                                      
                                       <div class="text-of-case">
                                           <div class="tag-case">  Energy electrical  </div>
                                            <h5> <a href="case-study-single.html">  Wind power generation in America</a> </h5>
                                      </div>
                                      
                                      <div class="links-case">
                                          <div class="link-case">
                                              <a href="case-study-single.html"><i class="fas fa-link"></i></a>
                                          </div>
  
                                          <div class="zoom-case">
                                          <a href="http://placehold.it/600x550"><i class="fas fa-search-plus"></i></a>
                                          </div>
                                      </div>
                                  </div> 
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              
              <!-- Column Image -->
              <div class="col-sm-6 col-lg-4 filtr-item" data-category="1" data-sort="value">
                  <div class="case-item">
                      <div class="img-case">
                          <!-- Image OF Case -->
                          <img src="http://placehold.it/600x550" alt="case">
  
                          <div class="overlay-case">
                              <div class="inner-overlay">
                                  <!-- Text OF Case -->
                                  <div class="case-study-text"> 
                                      
                                      
                                      <div class="text-of-case">
                                           <div class="tag-case">  electrical Energy </div>
                                          <h5> <a href="case-study-single.html">  innovative electrothermal energy storage system   </a> </h5>
                                      </div>
                                      
                                      
                                      <div class="links-case">
                                          <div class="link-case">
                                              <a href="case-study-single.html"><i class="fas fa-link"></i></a>
                                          </div>
  
                                          <div class="zoom-case">
                                          <a href="http://placehold.it/600x550"><i class="fas fa-search-plus"></i></a>
                                          </div>
                                      </div>
                                  </div> 
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
  
          </div>
            
            
        </div>
  </section>
      <!--==================================================================== 
                                  End Section Portfolio 
      =====================================================================-->
@endsection