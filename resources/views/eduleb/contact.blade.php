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
		<section class="section-top" style= "background-image: url(assets/img/background.jpeg);">
			<div class="container">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<h1>Get In Touch</h1>
						<ul>
							<li><a href="{{ route('home') }}">Home</a></li>
							<li> / Contact</li>
						</ul>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</section>	
		<!-- END SECTION TOP -->
		
		<!-- START ADDRESS -->
		<section class="address_area section-padding">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_address sa_one">
							<i class="ti-map"></i>
							<h4>Our Location</h4>
							<p>3481 Melrose Place, Beverly Hills <br /> CA 90210</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_address sa_two">
							<i class="ti-mobile"></i>
							<h4>Telephone</h4>
							<p>(+1) 517 397 7100</p>
							<p>(+1) 411 315 8138</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="single_address sa_three">
							<i class="ti-email"></i>
							<h4>Send email</h4>
							<p>Info@example.com</p>
							<p>admin@example.com</p>
						</div>
					</div><!-- END COL -->			  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END ADDRESS -->	

		<!-- CONTACT -->
		<div id="contact" class="contact_area section-padding">
			<div class="container">			
				<div class="row">					
					<div class="col-lg-7 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">		
						<div class="contact">
							<form class="form" name="enq" method="post" action="contact.php" onsubmit="return validation();">
								<div class="row">
									<div class="form-group col-md-6">
										<label for="">Name</label>
										<input type="text" name="name" class="form-control" required="required">
									</div>
									<div class="form-group col-md-6">
										<label for="">Your Email</label>
										<input type="email" name="email" class="form-control" required="required">
									</div>
									<div class="form-group col-md-12">
										<label for="">Your Subject</label>
										<input type="text" name="subject" class="form-control" required="required">
									</div>
									<div class="form-group col-md-12">
										<label for="">Your Message</label>
										<textarea rows="6" name="message" class="form-control" required="required"></textarea>
									</div>
									<div class="col-md-12 text-center">
										<button type="submit" value="Send message" name="submit" id="submitButton" class="btn_one" title="Submit Your Message!">Send Message</button>
									</div>
								</div>
							</form>
						</div>
					</div><!-- END COL  -->
					<div class="col-lg-5 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">		<div class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.957183635167!2d-74.00402768559431!3d40.71895904512855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2598a1316e7a7%3A0x47bb20eb6074b3f0!2sNew%20Work%20City%20-%20(CLOSED)!5e0!3m2!1sbn!2sbd!4v1600305497356!5m2!1sbn!2sbd" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>					
					</div><!-- END COL  -->				
				</div><!-- END ROW -->				
			</div><!--- END CONTAINER -->
		</div>
		<!-- END CONTACT -->
		
		<!-- START FOOTER -->
		<div class="footer section-padding">
			<div class="container">				
				<div class="row">						
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single_footer">
							<a href="index.html"><img src="assets/img/logo.png" alt=""></a>         
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
							<a href="index.html"><img src="assets/img/google-play.jpg" class="foot_img" alt=""></a>  
							<a href="index.html"><img src="assets/img/app-store.jpg" class="foot_img" alt=""></a>  
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