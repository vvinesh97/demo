<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Eduleb - Education HTML Template">
		<meta name="keywords" content="agency, business, corporate, creative, html5, modern, multipurpose, One Page, parallax, startup">		
		<!-- SITE TITLE -->
		<title>Eduleb - Education HTML Template</title>			
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">		
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
		<link rel="stylesheet" href="assets/fonts/themify-icons.css">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">	
		<!--jquery-simple-mobilemenu Css-->
        <link rel="stylesheet" href="assets/css/jquery-simple-mobilemenu.css">			
		<!-- MAGNIFIC CSS -->
		<link rel="stylesheet" href="assets/css/magnific-popup.css">		
		<!-- animate CSS -->
		<link rel="stylesheet" href="assets/css/animate.css">	
		<!-- Style CSS -->					
		<link rel="stylesheet" href="assets/css/style.css">					
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
    <body data-spy="scroll" data-offset="80">

		<!-- START PRELOADER -->
		<div class="preloaders">
			<span class="loader">
				<img src="assets/img/loading.gif" alt="">

			</span>
		</div>
		<!-- END PRELOADER -->		

		<!-- START NAVBAR -->  
		<div id="navigation" class="navbar-light bg-faded site-navigation">
			<div class="container-fluid">
				<div class="row">
					<div class="col-20 align-self-center">
						<div class="site-logo">
							<a href="{{ route('home') }}"><img src="assets/img/logo.png" alt=""></a>          				
						</div>
					</div><!--- END Col -->
					
					<div class="col-60 d-flex">
						<nav id="main-menu">
							<ul>
								<li><a href="{{ route('home') }}">Home</a></li>
								<li><a href="{{ route('about') }}">About</a></li>				  				  			
								<li><a href="{{ route('contact') }}">Contact</a></li>
							</ul>
						</nav>
					</div><!--- END Col -->
					
					<div class="col-20 d-none d-xl-block text-end align-self-center">
						<a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>

					</div><!--- END Col -->
					
					<ul class="mobile_menu">						
						<li><a href="{{ route('home') }}">Home</a></li>
						<li><a href="{{ route('about') }}">About</a></li>				  				  			
						<li><a href="{{ route('contact') }}">Contact</a></li>
					</ul>			
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</div> 	  
		<!-- END NAVBAR -->		

		<!-- START SECTION TOP -->
		<section class="section-top"  style= "background-image: url(assets/img/background.jpeg);">
			<div class="container">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<h1>About</h1>
						<ul>
							<li><a href="{{ route('home') }}">Home</a></li>
							<li> / About</li>
						</ul>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</section>	
		<!-- END SECTION TOP -->
		
	<!-- START CATEGORY -->
	<section class="top_cat__area section-padding" style="";  background-size:cover; background-position: center center;">
		<div class="container">									
			<div class="section-title text-center">
				<h2>Start your journey With us</h2>
				<p>We offer a brand new approach to the most basic learning paradigms. Choose from a wide range of learning options and gain new skills! Our school is know.</p>
			</div>						
			<div class="row">					
				<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="single_tp">
						<span class="sc_one">01</span>
						<h3>Expert <br />Teacher</h3>
						<p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit ut labore.</p>
					</div>
				</div><!-- END COL -->			
				<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
					<div class="single_tp">
						<span class="sc_two">02</span>
						<h3>Quality <br />Education</h3>
						<p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit ut labore.</p>
					</div>
				</div><!-- END COL -->			
				<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
					<div class="single_tp">
						<span class="sc_three">03</span>
						<h3>Remote <br />Learning</h3>
						<p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit ut labore.</p>
					</div>
				</div><!-- END COL -->	
				<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
					<div class="single_tp">
						<span class="sc_four">04</span>
						<h3>Life Time <br />Support</h3>
						<p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit ut labore.</p>
					</div>
				</div><!-- END COL -->							
			</div><!-- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END CATEGORY -->		
		
	<!-- START ABOUT US -->
	<section class="ab_area section-padding">
		<div class="container">									
			<div class="row">								
				<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="ab_img">
					</div>
				</div><!--- END COL -->						
				<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
					<div class="ab_content">
						<h2>We Are Providing The Online Course In Global World</h2>
						<p>We offer a brand new approach to the most basic learning paradigms. Choose from a wide range of learning options and gain new skills! Our school is know.</p>
						<p>We offer a brand new approach to the most basic learning paradigms. Choose from a wide range of learning options and gain new skills! Our school is know.</p>
						<ul>
							<li><span class="ti-check"></span> Get access to <b>12,000+</b> of our top courses</li>
							<li><span class="ti-check"></span> Popular topic to learn now in our online courses for student</li>
							<li><span class="ti-check"></span> Find the right instructor for you</li>
						</ul>
						<a class="btn_one" href="course.html">View All Courses <i class="ti-arrow-top-right"></i></a>
					</div>
				</div><!--- END COL -->							  
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END ABOUT US -->	
	
		<!-- START VIDEO -->
		<section class="vid_area va2" style="  background-size:cover; background-position: center center;">
			<div class="container">																
				<div class="row">
					<div class="col-lg-12 vp_top wow fadeInUDown" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="video-area2">
							<a href="https://www.youtube.com/watch?v=RXv_uIN6e-Y" class="magnific_popup video-button"><i class="fa fa-play"></i></a>
						</div>
					</div><!--- END COL -->	
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END VIDEO -->

		<!-- START COUNTER -->
		<section class="count_area counter_feature">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-folder sc_one"></span>
							<h2 class="counter-num">134</h2>
							<p>Our Online Course</p>
						</div>							
					</div>
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-medall-alt sc_two"></span>
							<h2 class="counter-num">299</h2>
							<p>Academic Programs</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-id-badge sc_three"></span>
							<h2 class="counter-num">684</h2>
							<p>Certified Students</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-user sc_four"></span>
							<h2 class="counter-num">941</h2>
							<p>Enrolled Students</p>
						</div>
					</div><!-- END COL -->						
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->		
		</section>
		<!-- END COUNTER -->

	<!-- START INSTRUCTOR+FREE COURSE -->
	<section class="insfreecourse section-padding">
		<div class="container">									
			<div class="row">								
				<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="single_ins" style="  background-size:cover; background-position: center center;">
						<div class="single_ins_content">
							<h4>Build Your Career</h4>
							<h1>Become an Instructor</h1>
							<p>Learn at your own pace, move the between multiple courses. </p>
							<a class="btn_one" href="#">Apply now <i class="ti-arrow-top-right"></i></a>
						</div>
					</div>
				</div><!--- END COL -->				
				<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="single_ins" style="  background-size:cover; background-position: center center;">
						<div class="single_ins_content">
							<h4>Build Your Career</h4>
							<h1>Get Free Courses</h1>
							<p>Learn at your own pace, move the between multiple courses. </p>
							<a class="btn_one" href="#">Contact now <i class="ti-arrow-top-right"></i></a>
						</div>
					</div>
				</div><!--- END COL -->								  
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END INSTRUCTOR+FREE COURSE -->				

		<!-- START TESTIMONIALS -->
		<section class="testi_area section-padding">
			<div class="container">
				<div class="section-title">
					<h2>What Student’s Say To Do <br />Their Online Course</h2>
				</div>						
				<div class="row">					
					<div class="col-lg-12 col-sm-12 col-xs-12">
						<div id="testimonial-slider2" class="owl-carousel">
							<div class="testimonial">
								<img src="assets/img/quote.png" alt="" />
								<div class="testimonial_content">													
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error error sit quam minus sint rem a rerum dolobus veritatis delectus.</p>
								</div>
								<div class="testi_pic_title">
									<img src="assets/img/testimonial/1.png" alt="">
									<h4>Ajmain Adil</h4>
									<p>Groton Inc</p>
								</div>
							</div><!-- END TESTIMONIAL -->
							<div class="testimonial">
							<img src="assets/img/quote.png" alt="" />
								<div class="testimonial_content">													
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error error sit quam minus sint rem a rerum dolobus veritatis delectus.</p>
								</div>
								<div class="testi_pic_title">
									<img src="assets/img/testimonial/2.png" alt="">
									<h4>Sharukh Khan</h4>
									<p>Red Chili Inc</p>
								</div>
							</div><!-- END TESTIMONIAL -->
							<div class="testimonial">
								<img src="assets/img/quote.png" alt="" />
								<div class="testimonial_content">													
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error error sit quam minus sint rem a rerum dolobus veritatis delectus.</p>
								</div>
								<div class="testi_pic_title">
									<img src="assets/img/testimonial/3.png" alt="">
									<h4>Anushka sharma</h4>
									<p>Naika Company</p>
								</div>
							</div><!-- END TESTIMONIAL -->
							<div class="testimonial">
								<img src="assets/img/quote.png" alt="" />
								<div class="testimonial_content">													
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error error sit quam minus sint rem a rerum dolobus veritatis delectus.</p>
								</div>
								<div class="testi_pic_title">
									<img src="assets/img/testimonial/4.png" alt="">
									<h4>Ajmain Adil</h4>
									<p>Groton Inc</p>
								</div>
							</div><!-- END TESTIMONIAL -->
							<div class="testimonial">
								<img src="assets/img/quote.png" alt="" />
								<div class="testimonial_content">													
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error error sit quam minus sint rem a rerum dolobus veritatis delectus.</p>
								</div>
								<div class="testi_pic_title">
									<img src="assets/img/testimonial/5.png" alt="">
									<h4>Ajmain Adil</h4>
									<p>Groton Inc</p>
								</div>
							</div><!-- END TESTIMONIAL -->
						</div><!-- END TESTIMONIAL SLIDER -->
					</div><!-- END COL -->		
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->		
		</section>
		<!-- END TESTINUNIALS -->		
		
		<!-- START FOOTER -->
		<div class="footer section-padding">
			<div class="container">				
				<div class="row">						
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single_footer">
							<a href="{{ route('home') }}"><img src="" alt=""></a>         
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis dignissim.</p>
							<div class="social_profile">
								<ul>
									<li><a href="#" class="f_facebook"><i class="ti-facebook" title="Facebook"></i></a></li>
									<li><a href="#" class="f_twitter"><i class="ti-twitter" title="Twitter"></i></a></li>
									<li><a href="#" class="f_instagram"><i class="ti-instagram" title="Instagram"></i></a></li>
									<li><a href="#" class="f_linkedin"><i class="ti-linkedin" title="LinkedIn"></i></a></li>
								</ul>
							</div>
						</div>			
					</div><!--- END COL -->						
					<div class="col-lg-2 col-sm-6 col-xs-12">
						<div class="single_footer">
							<h4>About Eduleb</h4>
							<ul>
								<li><a href="#">About us</a></li>
								<li><a href="#">Instructor Registration</a></li>
								<li><a href="#">Become A Teacher</a></li>
								<li><a href="#">All Instrustors</a></li>
								<li><a href="#">Asked Question</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>
					</div><!--- END COL -->	
					<div class="col-lg-2 col-sm-6 col-xs-12">
						<div class="single_footer">
							<h4>Popular Courese</h4>
							<ul>
								<li><a href="#">Development</a></li>
								<li><a href="#">Arts & design</a></li>
								<li><a href="#">Visual Design</a></li>
								<li><a href="#">Graphic Design</a></li>
								<li><a href="#">Code Inspection</a></li>						
								<li><a href="#">Digital Marketing</a></li>						
							</ul>
						</div>
					</div><!--- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single_footer">
							<h4>Contact Info</h4>
							<div class="sf_contact">
								<span class="ti-map"></span>
								<p>2570 Quadra Street Victoria Road, New York, Canada</p>
							</div>
							<div class="sf_contact">
								<span class="ti-mobile"></span>
								<p>+88 457 845 695</p>
							</div>
							<div class="sf_contact">
								<span class="ti-mobile"></span>
								<p><a href="tel:+88457845695">Contact Whatsapp</a></p>
							</div>
							<div class="sf_contact">
								<span class="ti-email"></span>
								<p>example@yourmail.com</p>
							</div>
						</div>
					</div><!--- END COL -->						
					<div class="col-lg-2 col-sm-6 col-xs-12">
						<div class="single_footer">
							<h4>Download App</h4>
							<p>Download our app from app store and goole play store.</p>
							<a href="{{ route('home') }}"><img src="assets/img/google-play.jpg" class="foot_img" alt=""></a>  
							<a href="{{ route('home') }}"><img src="assets/img/app-store.jpg" class="foot_img" alt=""></a>  
						</div>
					</div><!--- END COL -->	
				</div><!--- END ROW -->					
			</div><!--- END CONTAINER -->
		</div>
		<!-- END FOOTER -->	

		<!-- START FOOTER COPYRIGHT -->	
		<div class="foot_copy">
			<div class="footer_copyright">
				<p>&copy; 2024. All Rights Reserved.</p>
			</div>	
		</div>
		<!-- END FOOTER COPYRIGHT -->	
	
	<!-- Latest jQuery -->
		<script src="assets/js/jquery-1.12.4.min.js"></script>
	<!-- Latest compiled and minified Bootstrap -->
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- modernizer JS -->		
		<script src="assets/js/modernizr-2.8.3.min.js"></script>	
	<!-- jquery-simple-mobilemenu.min -->
		<script src="assets/js/jquery-simple-mobilemenu.js"></script>		
	<!-- owl-carousel min js  -->
		<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>					
	<!-- magnific-popup js -->               
		<script src="assets/js/jquery.magnific-popup.min.js"></script>						
	<!-- countTo js -->
		<script src="assets/js/jquery.inview.min.js"></script>								
	<!-- scrolltopcontrol js -->
		<script src="assets/js/scrolltopcontrol.js"></script>			
	<!-- WOW - Reveal Animations When You Scroll -->
		<script src="assets/js/wow.min.js"></script>				
	<!-- scripts js -->
		<script src="assets/js/scripts.js"></script>
    </body>
</html>