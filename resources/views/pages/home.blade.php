<?php 
// Intro to website
$owner_name= "Rois Khan"; 
$owner_description = "Rois Khan is a professional fashion designer and             supplier with over 12+ years of experience. 
        He worked with 'OhPolly' for 3 years as a technical manager and 3 years more as a lead product developer. 
He owns his own fashion house in Dhaka,Bangladesh and makes direct business with UK and USA clients.
Quality-Trust and passion is his motto. ";
$owner_image_link = "img/roiskhan/rois_hero.jpg";  

//Fact Area
$project_completed = 2336; 
$Happy_clients = 225; 
$order_completed = 587; 
$real_professionals = 434; 


?> 

@extends('layouts.app')




@section('content')
    



      <!-- Slider -->
      <div class="container-fluid  " data-aos="fade-up">
        <div class="row ">
          <div class="swiper-container ">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img class="image-fluid" style="width:100%" src="img/Sl01.jpg" alt=""></div>
              <div class="swiper-slide"><img class="image-fluid" style="width:100%" src="img/Sl02.jpg"></div>
              <div class="swiper-slide"><img class="image-fluid" style="width:100%" src="img/Sl03.jpg"></div>
            
            </div>
             <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
    
          </div>
        </div>
      </div>
      <!-- End de Slider -->


    
       



        <!-- start banner Area -->
           <!-- start banner Area -->
           <section class="banner-area">
            <div class="container">
              <div class="row fullscreen align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 banner-left text-center">
                  <h6>A fashion wear supplier</h6>
                  <h1>{{$owner_name}}</h1>
                  <p>
                   {{ $owner_description }}
                  </p>
                  <a href="/contact" class="primary-btn text-uppercase">Contact</a>
                </div>
                <div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
                  <img class="image-fluid" style="width:100%;" src="{{$owner_image_link}}" alt="">
                </div>
              </div>
            </div>					
          </section>
          <!-- End banner Area -->
        <!-- End banner Area -->

        <!-- Start home-about Area -->
        <section class="home-about-area pt-120">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-6 home-about-left">
                        <!-- <img class="img-fluid" src="img/about-img.png" alt=""> -->
                        <div class="container-fluid  " data-aos="fade-up" data-aos-duration="1300">
                            <div class="row ">
                              <div class="swiper-container ">
                                <div class="swiper-wrapper">
                                  <div class="swiper-slide"><img class="image-fluid" style="width:100%;" src="img/roiskhan/(4).jpg" alt=""></div>
                                  <!--<div class="swiper-slide"><img class="image-fluid" style="width:100%;" src="img/roiskhan/(7).jpg" alt=""></div>-->
                                   <div class="swiper-slide"><img class="image-fluid" style="width:100%;" src="img/roiskhan/update_ (1).jpeg" alt=""></div>
                                   <div class="swiper-slide"><img class="image-fluid" style="width:100%;" src="img/roiskhan/update_ (2).jpeg" alt=""></div>
                                   <div class="swiper-slide"><img class="image-fluid" style="width:100%;" src="img/roiskhan/update_ (3).jpeg" alt=""></div>
                                   <div class="swiper-slide"><img class="image-fluid" style="width:100%;" src="img/roiskhan/update_ (4).jpeg" alt=""></div>
                          
                        

                                 
                                
                                </div>
                                 <!-- Add Pagination WTB-->
                                <div class="swiper-pagination"></div>
                        
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-5 col-md-6 home-about-right" data-aos="zoom-in" data-aos-duration="500">
                        <h6 class=" animate__animated animate__jackInTheBox animate__delay-2s">About RIM Internationl</h6>
                        <h1 class="text-uppercase animate__animated animate__bounce animate_slower animate__infinite infinite">What we do here?</h1>
                        <p>
                          RIM International is a high-quality ladies' garment designing and supplying solution. We design or collaborate with your big ideas to bring them to life. Modern and fashionable ladies garments designing and supplying, all in one solution. 

                        </p>
                        <p>Want to make a simple deal for your business or scale-up in production? We're here to solve your problem at a fair investment. So that you get high-end quality material and business experience. We assure you of the quality product you want. Our job is to make the deal simple so that your business can boost up in no time. </p>
                        <a href="/about" class="primary-btn text-uppercase">View Full Details</a>
                    </div>
                </div>
            </div>	
        </section>
        <!-- End home-about Area -->

        <!-- Start services Area -->
        <section class="services-area section-gap" data-aos="fade-up" data-aos-duration="1500">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content  col-lg-7">
                        <div class="title text-center">
                            <h1 class="mb-10">OUR OFFERED SERVICES</h1>
                            <p>We support variety of services in ladies garment supplying business in UK, USA and more. It's not about one product sample making or millions for production, our target is to satisfy your needs!</p>
                        </div>
                    </div>
                </div>						
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services">
                            <span class="lnr lnr-pie-chart " ></span>
                            <a href="#"><h4>Short support</h4></a>
                            <p>
                                We support any ammaount of production you want. It maybe one piece or millions. We can take care of that.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services">
                            <span class="lnr lnr-users "></span>
                            <a href="#"><h4>R&D</h4></a>
                            <p>
                               We have experienced R&D department. From designing to production we can take care of everything. 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services">
                            <span class="lnr lnr-database"></span>
                            <a href="#"><h4>Fair Deal</h4></a>
                            <p>
                                We're here to make a fair deal so that you don't have to worry about your budget much. We can assure you the best bang for your budget.
                            </p>
                        </div>	
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services">
                            <span class="lnr lnr-heart"></span>
                            <a href="#"><h4>HQ Fabrics</h4></a>
                            <p>
                                Sampling a garment or making a full production, quality matters the most. We assure the best quality to price ratio in the market. Try it out. 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services">
                            <span class="lnr lnr-phone-handset"></span>
                            <a href="#"><h4>Fast and reliable communications</h4></a>
                            <p>
                                Just join our chatbox  Or leave us a mail. We'll reach you ASAP. We're here to make your business more profitable and reliable.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services">
                            <span class="lnr lnr-rocket"></span>
                            <a href="#"><h4>Sample making</h4></a>
                            <p>
                                Sampling your garment product perfectly is as important to us as to you. We support even one piece so that you can get your big product and you can make the best business profit out of it. 
                            </p>
                        </div>				
                    </div>														
                </div>
            </div>	
        </section>
        <!-- End services Area -->	

        <!-- Start fact Area -->
            <div class="title text-center" data-aos="zoom-in" data-aos-duration="2500">
                <h1 class="mb-10">Our performence</h1>
            </div>
        <section class="facts-area section-gap" id="facts-area" data-aos="fade-in" data-aos-duration="2000">
            <div class="container">				
                <div class="row">
                    <div class="col-lg-3 col-md-6 single-fact">
                        <h1 class="counter" style="font-size: 3.5rem;">{{$project_completed}}</h1>
                        <p>Projects Completed</p>
                    </div>
                    <div class="col-lg-3 col-md-6 single-fact">
                        <h1 class="counter " style="font-size: 3.5rem;">{{$Happy_clients}}</h1>
                        <p>Happy Clients</p>
                    </div>
                    <div class="col-lg-3 col-md-6 single-fact">
                        <h1 class="counter " style="font-size: 3.5rem;">{{$order_completed}}</h1>
                        <p> Order delivered</p>
                    </div>	
                    <div class="col-lg-3 col-md-6 single-fact">
                        <h1 class="counter " style="font-size: 3.5rem;">{{$real_professionals}}</h1>
                        <p>Real Professionals</p>
                    </div>												
                </div>
            </div>	
        </section>
        <!-- end fact Area -->	

        <!-- Start portfolio-area Area WTB -->
        <section class="portfolio-area section-gap" id="portfolio">
            <div class="container" data-aos-duration="1500" data-aos="fade-right">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">OUR WORK SAMPLES</h1>
                            <p>Here are some samples of our work to give you a better ide</p>
                        </div>
                    </div>
                </div>
                
                <div class="filters">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".tops">Tops</li>
                        <li data-filter=".goingout">Going out dresses</li>
                        <li data-filter=".swimsuits">Swimsuits</li>
                        <li data-filter=".seamless">Seamless</li>
                    </ul>
                </div>
                
                <div class="filters-content">
                    <div class="row grid">

                        {{-- Single  --}}
                        <div class="single-portfolio col-sm-4 all tops">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                     <img class="image img-fluid" src="media/fashion/top1.jpg" alt="">
                                </div>
                                <a href="media/fashion/bikini.jpg" class="img-pop-up">	
                                  <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                  </div>
                            </a>                              		
                            </div>
                            <div class="p-inner">
                                <h4>Top 1</h4>
                                <div class="cat">Tops</div>
                            </div>					                               
                        </div>
                        {{-- end de single WTB --}}

                        {{-- Single  --}}
                        <div class="single-portfolio col-sm-4 all tops">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                     <img class="image img-fluid" src="media/fashion/top2.jpg" alt="">
                                </div>
                                <a href="media/fashion/bikini.jpg" class="img-pop-up">	
                                  <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                  </div>
                            </a>                              		
                            </div>
                            <div class="p-inner">
                                <h4>Top 2</h4>
                                <div class="cat">Tops</div>
                            </div>					                               
                        </div>
                        {{-- end de single WTB --}}


                        {{-- Single  --}}
                        <div class="single-portfolio col-sm-4 all tops">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                     <img class="image img-fluid" src="media/fashion/top4.jpg" alt="">
                                </div>
                                <a href="media/fashion/bikini.jpg" class="img-pop-up">	
                                  <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                  </div>
                            </a>                              		
                            </div>
                            <div class="p-inner">
                                <h4>Top 4</h4>
                                <div class="cat">Tops</div>
                            </div>					                               
                        </div>
                        {{-- end de single WTB --}}

                        {{-- Single  --}}
                        <div class="single-portfolio col-sm-4 all goingout">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                     <img class="image img-fluid" src="media/fashion/go1.jpg" alt="">
                                </div>
                                <a href="media/fashion/bikini.jpg" class="img-pop-up">	
                                  <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                  </div>
                            </a>                              		
                            </div>
                            <div class="p-inner">
                                <h4>Going Out 1</h4>
                                <div class="cat">Going Out Dresses</div>
                            </div>					                               
                        </div>
                        {{-- end de single WTB --}}

                        {{-- Single  --}}
                        <div class="single-portfolio col-sm-4 all goingout">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                     <img class="image img-fluid" src="media/fashion/go2.jpg" alt="">
                                </div>
                                <a href="media/fashion/bikini.jpg" class="img-pop-up">	
                                  <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                  </div>
                            </a>                              		
                            </div>
                            <div class="p-inner">
                                <h4>Going Out 2</h4>
                                <div class="cat">Going Out Dresses</div>
                            </div>					                               
                        </div>
                        {{-- end de single WTB --}}

                        {{-- Single Swimsuits WTB --}}
                        <div class="single-portfolio col-sm-4 all swimsuits">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                     <img class="image img-fluid" src="media/fashion/ss1.jpg" alt="">
                                </div>
                                <a href="media/fashion/bikini.jpg" class="img-pop-up">	
                                  <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                  </div>
                            </a>                              		
                            </div>
                            <div class="p-inner">
                                <h4>Swim Suit 1</h4>
                                <div class="cat">Swimsuits</div>
                            </div>					                               
                        </div>
                        {{-- end de single WTB --}}

                        {{-- Single Swimsuits WTB --}}
                        <div class="single-portfolio col-sm-4 all swimsuits">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                     <img class="image img-fluid" src="media/fashion/ss2.jpg" alt="">
                                </div>
                                <a href="media/fashion/bikini.jpg" class="img-pop-up">	
                                  <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                  </div>
                            </a>                              		
                            </div>
                            <div class="p-inner">
                                <h4>Swim Suit 2</h4>
                                <div class="cat">Swimsuits</div>
                            </div>					                               
                        </div>
                        {{-- end de single WTB --}}

                        {{-- Single Swimsuits WTB --}}
                        <div class="single-portfolio col-sm-4 all seamless">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                     <img class="image img-fluid" src="media/fashion/smless1.jpg" alt="">
                                </div>
                                <a href="media/fashion/bikini.jpg" class="img-pop-up">	
                                  <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                  </div>
                            </a>                              		
                            </div>
                            <div class="p-inner">
                                <h4>Seamless 1</h4>
                                <div class="cat">Seamless</div>
                            </div>					                               
                        </div>
                        {{-- end de single WTB --}}

                        {{-- Single Swimsuits WTB --}}
                        <div class="single-portfolio col-sm-4 all seamless">
                            <div class="relative">
                                <div class="thumb">
                                    <div class="overlay overlay-bg"></div>
                                     <img class="image img-fluid" src="media/fashion/smless2.jpg" alt="">
                                </div>
                                <a href="media/fashion/bikini.jpg" class="img-pop-up">	
                                  <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                  </div>
                            </a>                              		
                            </div>
                            <div class="p-inner">
                                <h4>Seamless 2</h4>
                                <div class="cat">Seamless</div>
                            </div>					                               
                        </div>
                        {{-- end de single WTB --}}


                  
                        
                    </div>
                </div>
                <a href="/portfolio" class="primary-btn text-uppercase">Show more >></a>
            </div>
        </section>
        <!-- End portfolio-area AreaWTB -->	


@endsection