{{--  Variables for the page --}}
<?php 
$site_title = "RIM International | Let's make next fashion trend";
$site_icon = "img/favicon.png" ; 
$logo = "img/logo3.png"; 
$seo_keywords = "RIM, rim, rim international, ladies garment manufacturer in bangladesh, ladies garments manufacturer, ladies sexy garmets, latest fashion manufacturer in dhaka, bangladesh, bangladesh manufacturer garments"; 
$facebook_link = "https://facebook.com"; 
$insta_link = "https://instagram.com"; 


?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="{{$site_icon}}">
        <!-- Author Meta -->
        <meta name="author" content="WTB">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="{{$seo_keywords}}">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>{{$site_title}}</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/jquery-ui.css">				
        <link rel="stylesheet" href="css/nice-select.css">							
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">				
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="styles/aos.css">
        <link rel="stylesheet" href="styles/sweeper.css">
        <link rel="stylesheet" href="styles/animate.min.css">
        <link rel="stylesheet" href="styles/main.css">

        <!-- Scripts -->
        <script src="scripts js/aos.js"></script>
        <script src="scripts js/sweeper.js"></script>
        
    </head>
    <body>	
      <header id="header" class="mb-3">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
              <div id="logo">
                <a href="/">
                <img src="{{ $logo }}" width="133px"  height="30px" alt="" title="" />
                    <!-- <p>RIM Interrnational</p> -->

              </div>
              <nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li><a href="{{ route('home')}}">Home</a></li>
                  <li><a href="{{ route('portfolio')}}">Portfolio</a></li>
                  <li><a href="{{ route('about')}}">About</a></li>
                  <li><a href="{{ route('contact')}}">Contact</a></li>
                </ul>
              </nav><!-- #nav-menu-container -->		    		
            </div>
        </div>
      </header><!-- #header -->



      {{-- Main content goes here WTBRANDS  --}}
        @yield('content')


        <!-- Start testimonial Area -->
        <section class="testimonial-area section-gap">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">What clients says about us...</h1>
                            <p>Here's some feedbac from our clients</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="active-testimonial">
                        <div class="single-testimonial item d-flex flex-row">
                            <div class="thumb">
                                <img class="img-fluid" src="img/elements/user1.png" alt="">
                            </div>
                            <div class="desc">
                                <p>
                                   
                                    When I first got into business with RIM Int. I didn't think much out of it. But when they got my job done then I was like yoooo!! This is real deal. Wish you all the best RIM International. Keep up your good service. God bless you. 		     
                                </p>
                                <h4> Celine Joe</h4>
                                <p>Toronto, UK</p>
                            </div>
                        </div>
                        <div class="single-testimonial item d-flex flex-row">
                            <div class="thumb">
                                <img class="img-fluid" src="img/elements/user2.png" alt="">
                            </div>
                            <div class="desc">
                                <p>
                                    
                                    I was a little business women who just came accross RIM International and trusted their services. It was good. Though due to pandemic some unwanted circumstances came along I'm still running my with will their reliable supply. Wish you all the best.
                                </p>
                                <h4>Fatima Guzel </h4>
                                <p>New York, USA</p>
                            </div>
                        </div>

                        <div class="single-testimonial item d-flex flex-row">
                            <div class="thumb">
                                {{-- <img class="img-fluid" src="img/elements/user2.png" alt=""> --}}
                            </div>
                            <div class="desc">
                                <p>
                                    I was having some issues with my previous suppliers back in 2017. I was terribly upset with my old suppliers delivery. But since I'm doing business with RIM International, they've been giving good service as startups. I'm happy with it. God bless ya all.  		     
                                </p>
                                <h4>Taha Kizey </h4>
                                <p>North England</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End testimonial Area -->
    
    

        <!-- Start brands Area wtB -->
        <div class="title text-center" data-aos="zoom-in" data-aos-duration="2500">
            <h1 class="mb-10">We've worked with world renowned brands </h1>
        </div>


        <section class="brands-area">
            <div class="container">
                <div class="brand-wrap">
                    <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                        <div class="col single-brand">
                            <a href="#"><img class="mx-auto" src="img/B1.jpg" alt=""></a>
                        </div>
                        <div class="col single-brand">
                            <a href="#"><img class="mx-auto" src="img/B2.jpg" alt=""></a>
                        </div>
                        <div class="col single-brand">
                            <a href="#"><img class="mx-auto" src="img/B3.jpg" alt=""></a>
                        </div>
                        <div class="col single-brand">
                            <a href="#"><img class="mx-auto" src="img/B4.jpg" alt=""></a>
                        </div>
                        <div class="col single-brand">
                            <a href="#"><img class="mx-auto" src="img/B5.jpg" alt=""></a>
                        </div>
          
                       
                    </div>
                </div>
            </div>
        </section>
        <!-- End brands Area -->			

        <!-- start footer Area -->
        <footer class="footer-area section-gap text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>About US</h4>
                            <p>
                             Your satisfaction is our main target. We are 24/7 ready to bring your next big fashion trend to the market. let's work together. 
                            </p>
                            <p class="footer-text">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <span><a href="#">RIM International</a></span></p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Newsletter</h4>
                            <p>Stay updated with our latest trends</p>
                            <div class="" id="mc_embed_signup">
                                 <form target="_self"  method="get">
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
                                    <div class="input-group-btn">
                                      <button class="btn btn-default" type="submit">
                                        <span class="lnr lnr-arrow-right"></span>
                                      </button>    
                                    </div>
                                        <div class="info"></div>  
                                  </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                        <div class="single-footer-widget">
                            <h4>Follow Me</h4>
                            <p>Let's be social</p>
                            <div class="footer-social d-flex align-items-center">
                            <a href="{{ $facebook_link}}"><i class="fa fa-facebook"></i></a>
                                <a href="{{ $insta_link }}"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer Area -->		

        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>			
                
          <script src="js/easing.min.js"></script>			
        <script src="js/hoverIntent.js"></script>
        <script src="js/superfish.min.js"></script>	
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>	
        <script src="js/jquery.tabs.min.js"></script>						
        <script src="js/jquery.nice-select.min.js"></script>	
        <script src="js/isotope.pkgd.min.js"></script>			
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/simple-skillbar.js"></script>							
        <script src="js/owl.carousel.min.js"></script>							
        <script src="js/mail-script.js"></script>	
        <script src="js/main.js"></script>	
        <script src="scripts js/main.js"></script>
        <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="ce2096d6-8ca1-4157-82ca-e929eb17ab20";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    </body>
</html>













