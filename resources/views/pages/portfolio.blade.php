@extends('layouts.app')

@section('content')
	

	  
			<!-- start Page banner Area -->
			<section class="relative about-banner">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Portfolio				
							</h1>	
							<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/portfolio">Portfolio</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->


           <!-- Start portfolio-area Area WTB -->
        <section class="portfolio-area section-gap" id="portfolio">
            <div class="container" data-aos-duration="1500" data-aos="fade-right">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">OUR WORK SAMPLES</h1>
                            <p>Who are in extremely love with eco friendly system.</p>
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
               
            </div>
        </section>
        <!-- End portfolio-area AreaWTB -->	
			



			<!-- End contact-page Area -->

    
@endsection