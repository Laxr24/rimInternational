<?php 
				
	$fashiondesigning = 70; 
	$communication = 85; 
	$delivery = 95; 
	$experience = 80; 
	$shippingMethod = 90; 
				
?>




@extends('layouts.app')
	
@section('content')
		<!-- start banner Area -->
		<section class="about-banner" data-aos="fade-in" data-aos-duration="2000">
			<div class="container">				
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">
							About Me				
						</h1>	
						<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/about"> About Me</a></p>
					</div>	
				</div>
			</div>
		</section>
		<!-- End banner Area -->	

		<!-- Start home-about Area 1 -->
		<section class="home-about-area section-gap">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-lg-5 col-md-6  home-about-left" data-aos="zoom-in" data-aos-duration="2000" >
						<h6>About Rois Khan</h6>
						<h1 class="text-uppercase">Career</h1>
						<p>
							Back in 2010 Rois Khan started his career in a ladies' garments supplying company. Along with his career life, he worked very hard and gained success in a very short time.He worked 3 years as technical manager and 3 years as lead product developer with 'OhPolly'. And still, he is continuing his career as a lead product developer for the European countries.  
						</p>
						<!-- <a href="#" class="primary-btn text-uppercase">View Full Details</a> -->
					</div>

					<div class="col-lg-6 col-md-6 home-about-right" data-aos="fade-in" data-aos-duration="2000">
						<img class="img-fluid" src="img/roiskhan/(6).jpg" alt="">
					</div>
					
					<div class="col-lg-12 pt-60">
						<p>
							He has experience in ladies' garment pattern mastery, Technical management in the garments sector, working with the R&D department as a product developer and more.
						</p>
						<p>
							He has been working with OHPolly and other businesses for many years in the industry. 
							He has stupendous experience in product and pattern development and as lead product developer for European countries. 								
						</p>
				
					</div>
				</div>
			
			</div>	
		</section>
		<!-- End home-about Area -->	


		<!-- Start home-about Area 2 -->
		<section class="home-about-area section-gap">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-lg-6 col-md-6 home-about-left" data-aos="fade-in" data-aos-duration="2000">
						<img class="img-fluid" src="media/factory/factory.jpg" alt="">
					</div>
					<div class="col-lg-5 col-md-6 home-about-right" data-aos="zoom-in" data-aos-duration="2000" >

						<h1 class="text-uppercase">RIM International</h1>
						<p>
							During his career, <b>Rois Khan</b> had big dream to build up an industry. That's why he worked so hard and planned to establish his supplying production. That's how he was able to establish a new fashion wear supply era in Bangladesh AKA RIM International. 
						</p>
						<!-- <a href="#" class="primary-btn text-uppercase">View Full Details</a> -->
					</div>


					{{-- Descending WTB --}}
					<div class="col-lg-5 col-md-6 home-about-right" data-aos="zoom-in" data-aos-duration="2000" >
					
						<h1 class="text-uppercase">Our Goal</h1>
						<p>
							
						The goal of RIM International is to make the deal simple and easy. If you want to start your first business or want to extend it to a whole new level, RIM International is the perfect match.
						</p>
						<!-- <a href="#" class="primary-btn text-uppercase">View Full Details</a> -->
					</div>
					<div class="col-lg-6 col-md-6  mt-2 home-about-left" data-aos="fade-in" data-aos-duration="2000">
						<img class="img-fluid" src="img/roiskhan/(8).jpg" alt="">
					</div>



					{{-- Ascending WTB --}}

					<div class="col-lg-6 col-md-6 home-about-left" data-aos="fade-in" data-aos-duration="2000">
						<img class="img-fluid" src="img/roiskhan/update_ (3).jpeg" alt="">
					</div>
					<div class="col-lg-5 col-md-6 home-about-right" data-aos="zoom-in" data-aos-duration="2000" >
						<h6>Workflow</h6>
						<h1 class="text-uppercase">Simple deal </h1>
						<p>
							You just provide a picture or artwork or share your idea with us. Then we'll develop your product and make a fair deal with you so that your business gets up and running in no time. From product development to shipping, we've all solutions for you. 

						</p>
						<!-- <a href="#" class="primary-btn text-uppercase">View Full Details</a> -->
					</div>





					<div class="col-lg-12 pt-60">
						<p>
							
							We assure you the best product in the market with the best quality fabric and services. We're the top-ranked International ladies garment supplier in Bangladesh. We mostly work with European countries because that is our area of expertise.  
						</p>
						{{-- <p>
							The quality of today’s video game was not at all there when video game first conceptualized and played ever. During the formulative years, video games were created by using various interactive electronic devices with various display formats. The first ever video game was designed in 1947 by Thomas T. Goldsmith Jr. 								
						</p> --}}
						<h4 class="pt-30">Expertise</h4>	
					</div>
				</div>


				{{-- Skillbar Start WTB --}}

				<div class="row skillbar-wraps">					
					<div class="col-lg-6 skill-left">
						<div class="single-skill">
							<p>
								Fashion Designing {{$fashiondesigning}}%
							</p>
							<div class="skill" data-width="{{$fashiondesigning}}"></div>
						</div>
						<div class="single-skill">
							<p>
								Communication {{$communication}}%
							</p>
							<div class="skill" data-width="{{$communication}}"></div>
						</div>
						<div class="single-skill">
							<p>
								Work delivery {{$delivery}}%
							</p>
							<div class="skill" data-width="{{$delivery}}"></div>
						</div>																				
					</div>
					<div class="col-lg-6 skill-right">
						<div class="single-skill">
							<p>
								Experience with world wide clients {{$experience}}%
							</p>
							<div class="skill" data-width="{{$experience}}"></div>
						</div>								
						<div class="single-skill">
							<p>
								Shipping method {{$shippingMethod}}%
							</p>
							<div class="skill" data-width="{{$shippingMethod}}"></div>
						</div>
						
					</div>
				</div>

				{{--  End of Skillbar WTB --}}
			</div>	
		</section>
		<!-- End home-about Area -->




			<!-- Start timeline Area WTB -->
			<section class="timeline pb-120" data-aos="fade-in" data-aos-duration="3000">
				<div class="text-center">
					<div class="menu-content pb-70">
						<div class="title text-center">
							<h1 class="mb-10">Our workflow</h1>
							<p>The way we take care of your business</p>
						</div>
					</div>
				</div>				
				  <ul>
					<li>
					  <div class="content">
						<h4>
						  <time>Hear from you</time>
						</h4>
						<p>We hear from you in detailes so that we can work in the most efficient way. </p>
					  </div>
					</li>
					<li>
					  <div class="content">
						  <img class="img-fluid mx-auto d-block mb-30" src="img/about/c-logo.png" alt="">
						<h4>
						  <time>Create a schedual</time>
						</h4>
						<p>We recommend to schedual  complete our task in not time. </p>
					  </div>
					</li>
					<li>
					  <div class="content">
						<h4>
						  <time>R&D</time>
						</h4>
						<p>We develop your product with suitable fabric, design and whatever is needed</p>
					  </div>
					</li>
					<li>
						<div class="content">
						  <h4>
							<time>Ready for production</time>
						  </h4>
						  <p>Get ready for production or sampling</p>
						</div>
					</li>
					<li>
						<div class="content">
						  <h4>
							<time>Delivery</time>
						  </h4>
						  <p>We deliver your product safely to you so that you start your business.</p>
						</div>
					</li>
				   
				   
				  </ul>
				</section>		
	
				<!-- End timeline Area -->




	
@endsection

		

	