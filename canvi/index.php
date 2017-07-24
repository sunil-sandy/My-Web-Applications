<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Creative One Page Parallax Template">
	<meta name="keywords" content="" /> 
	<meta name="author" content="sunil"> 
	<title>Canvi</title> 
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet"> 
	<link href="css/font-awesome.min.css" rel="stylesheet"> 
	<link href="css/animate.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet"> 
	  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
 
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script> 
	<script src="js/respond.min.js"></script> <![endif]
	<link rel="shortcut icon" href="images/ico/favicon.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">--> 
	<style type="text/css">
		 .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .video-container {
position: relative;
padding-bottom: 56.25%;
padding-top: 30px; height: 0; overflow: hidden;
}
 
.video-container iframe,
.video-container object,
.video-container embed {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}
.full-width-tabs > ul.nav.nav-tabs {
                display: table;
                width: 100%;
                table-layout: fixed; /* To make all "columns" equal width regardless of content */
}
.full-width-tabs > ul.nav.nav-tabs > li {
                float: none;
                display: table-cell;
}
.full-width-tabs > ul.nav.nav-tabs > li > a {
                text-align: center;
}
.nav-tabs > li {
    			width:50%;
}
	</style>
<script type="text/javascript">
	$('#myCarousel').carousel({
  interval: 5000
});

$('#carousel-text').html($('#slide-content-0').html());

// When the carousel slides, auto update the text
$('#myCarousel').on('slid.bs.carousel', function (e) {
  var id = $('.item.active').data('slide-number');
  $('#carousel-text').html($('#slide-content-'+id).html());
});
</script>
</head><!--/head-->
<body>
	<div class="preloader">
		<div class="preloder-wrap">
			<div class="preloder-inner"> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div>
			</div>
		</div>
	</div><!--/.preloader-->
	<header id="navigation"> 
		<div class="navbar navbar-inverse navbar-fixed-top" role="banner"> 
			<div class="container"> 
				<div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
					</button> 
					<a class="navbar-brand" href="index.html"><h1><img src="images/6.png" alt="logo" width="180"></h1></a> 
				</div> 
				<div class="collapse navbar-collapse"> 
					<ul class="nav navbar-nav navbar-right"> 
						<li class="scroll active"><a href="#navigation"><b>Home</b></a></li> 
						<!--<li class="scroll"><a href="#about-us">About Us</a></li> 
						<li class="scroll"><a href="#services">Services</a></li> -->
						<li class="scroll"><a href="#our-team"><b>Products</b></a></li> 
						<!--<li class="scroll"><a href="#portfolio">Portfolio</a></li> -->
						<li class="scroll"><a href="faq.html" target="_blank"><b>Faq</b></a></li> 
						
						<li class="scroll"><a href="#contact"><b>Contact</b></a></li> 
					</ul> 
				</div> 
			</div> 
		</div><!--/navbar--> 
	</header> <!--/#navigation--> 

	<section id="home">
		<div class="home-pattern"></div>
		<div id="main-carousel" class="carousel slide" data-ride="carousel"> 
			<ol class="carousel-indicators">
				<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#main-carousel" data-slide-to="1"></li>
				<li data-target="#main-carousel" data-slide-to="2"></li>
			</ol><!--/.carousel-indicators--> 
			<div class="carousel-inner">
				<div class="item active" style="background-image: url(images/slider/slidemain3.jpg)"> 
					<div class="carousel-caption"> 
						<div> 
							<h2 class="heading animated bounceInDown">'Canvi' a home automated product</h2> 
							<p class="animated bounceInUp">Make your home smarter</p> 
							<a class="btn btn-default slider-btn animated fadeIn" href="#about-us">Get Started</a> 
						</div> 
					</div> 
				</div>
				<div class="item" style="background-image: url(images/slider/slidemain2.jpg)"> 
					<div class="carousel-caption"> <div> 
						<h2 class="heading animated bounceInDown">Get All in One place</h2> 
						<p class="animated bounceInUp">Make your home smarter</p> <a class="btn btn-default slider-btn animated bounceInDown" href="#about-us">Get Started</a> 
					</div> 
				</div> 
			</div> 
			<div class="item" style="background-image: url(images/slider/slidemain.jpg)"> 
				<div class="carousel-caption"> 
					<div> 
						<h2 class="heading animated bounceInRight">Fully Efficient Module</h2> 
						<p class="animated bounceInLeft">100% efficient solution for all your needs</p> 
						<a class="btn btn-default slider-btn animated bounceInUp" href="#about-us">Get Started</a> 
					</div> 
				</div> 
			</div>
		</div><!--/.carousel-inner-->

		<a class="carousel-left member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		<a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
	</div> 

</section><!--/#home-->

<section id="about-us">
	<div class="container">
		<div class="text-center">
			<div class="col-sm-8 col-sm-offset-2">
				
			</div>
		</div>
		<div class="about-us">
			<div class="row">
				<div class="col-sm-6">
					<!--<ul class="nav nav-tabs">
						<li class="active"><a href="#about" data-toggle="tab"><i class="fa fa-chain-broken"></i> Consultants</a></li>
						<li><a href="#mission" data-toggle="tab"><i class="fa fa-th-large"></i> Learners</a></li>
						<li><a href="#community" data-toggle="tab"><i class="fa fa-users"></i> Products</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="about">
							<div class="media">
								<img class="pull-left media-object" src="images/about-us/cons.jpg" alt="about us"> 
								<div class="media-body">
									<p>We are a great team with expertise in Electrical design and Embedded programming. We can assist your startup at various levels of the product life cycle. The client holds the ownership of the product developed.</p>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="mission">
							<div class="media">
								<img class="pull-left media-object" src="images/about-us/learn.png" alt="Mission"> 
								<div class="media-body">
									<p>We at Runway LABZ are lifelong learners and we keep upto date with the technologies related to Home automation, IoT and Robotics.</p>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="community">
							<div class="media">
								<img class="pull-left media-object" src="images/about-us/products.jpg" alt="Community"> 
								<div class="media-body">
									<p>We design our products keeping in mind our customer so, our products are affordable and are quality assured. Our products are well tested before shipping and comes with a manufactures warranty. </p>
								</div>
							</div>
						</div>
					</div>-->
					<p style="text-align: justify;font-size: 20px;font-family: calibri;">Canvi is a low-cost cutting edge home automation technology that lets the user control all of his home appliances from anywhere.We design our products keeping in mind our customer so, our products are affordable and are quality assured. Our products are well tested before shipping and comes with a manufactures warranty.We are a great team with expertise in Electrical design and Embedded programming. We can assist your startup at various levels of the product life cycle. The client holds the ownership of the product developed.We at Runway LABZ are lifelong learners and we keep upto date with the technologies related to Home automation, IoT and Robotics.</p>
				</div>
				<div class="col-sm-6">
					<!--<div class="skill-bar">
						<div class="skillbar clearfix " data-percent="90%">
							<div class="skillbar-title">
								<span>HTML5 &amp; CSS3</span>
							</div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">90%</div>
						</div> <!-- End Skill Bar 
						<div class="skillbar clearfix" data-percent="85%">
							<div class="skillbar-title"><span>UI Design</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">85%</div>
						</div> <!-- End Skill Bar 
						<div class="skillbar clearfix " data-percent="70%">
							<div class="skillbar-title"><span>jQuery</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">70%</div>
						</div> <!-- End Skill Bar 
						<div class="skillbar clearfix " data-percent="60%">
							<div class="skillbar-title"><span>PHP</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">60%</div>
						</div> <!-- End Skill Bar 
						<div class="skillbar clearfix " data-percent="75%">
							<div class="skillbar-title"><span>Wordpress</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">75%</div>
						</div> <!-- End Skill Bar </div>
					</div>-->
					<div class="video-container"><iframe width="853" height="480" src="https://www.youtube.com/embed/IEus3m27tB4" frameborder="0" allowfullscreen>
					</iframe></div>
				</div>
			</div>
		</div>
	</section><!--/#about-us-->

	<section id="services" class="parallax-section">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-8 col-sm-offset-2">
					
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="our-service">
						<div class="services row">
							<div class="col-sm-4">
								<div class="single-service">
									<i class="fa fa-mobile"></i>
									<h4>Control your Home Appliances from anywhere</h4>
									
								</div>
							</div>
							<div class="col-sm-4">
								<div class="single-service">
									<i class="fa fa-bell"></i>
									<h4>Schedule your Appliances to turn On and Off</h4>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="single-service">
									<i class="fa fa-money"></i>
									
									<h4>Save Money on your Power bills</h4>
								</div>
							</div></div>
						</div>
					</div>
				</div>

				<div class="row">
				<div class="col-sm-12">
					<div class="our-service">
						<div class="services row">
							<div class="col-sm-4">
								<div class="single-service">
									<i class="fa fa-puzzle-piece" aria-hidden="true"></i>
									<h4>Seamlessy integrates in to your existing infrastucture</h4>
									
								</div>
							</div>
							<div class="col-sm-4">
								<div class="single-service">
									<i class="fa fa-wrench"></i>
									<h4>Easy to install</h4>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="single-service">
									<i class="fa fa-inr"></i>
									
									<h4>Bang for the buck</h4>
								</div>
							</div></div>
						</div>
					</div>
				</div>
			</div>
		</section><!--/#service-->

		<section id="our-team">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-8 col-sm-offset-2">
						<h2 class="title-one">Products</h2>
						
					</div>
				</div>

					 <div class="tabbable full-width-tabs">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-one" data-toggle="tab"><h3>CANVI 8X</h3></a></li>
                <li><a href="#tab-two" data-toggle="tab">
                <h3>CANVI 4X</h3></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab-one"><br><br>
                     <div class="col-md-4">
              <div class="row"> <img src="images/our-team/p2.png"  class="img-responsive" style="vertical-align: middle;"> </div>
            </div>
            <div class="col-md-8">
              <ul style="text-align: justify;font-size: 20px;font-family: 'Lato', sans-serif;background-color: #fc7700;color: honeydew;padding: 5%;list-style-type:decimal;">
              	<li> With CANVI 8X easy installation setup, it seamlessly integrates into switch boards and no rewiring required.</li>

<li> It can control upto 8 devices both dimmable or non-dimmable loads (lights,dimmable lights and fans).</li>

<li> Our design allows you to use manual switches along with the mobile app. That is it lets the user switch ON a device from the app ans switch OFF using the manual switches and vice-versa.</li>

<li>It can be used with and without router.</li>

<li> CANVI 8X includes two canvi fan regulators.</li>

<li>The operating voltage is 190v to 260v @ 50hz.</li>

<li>The maximum load it can handle is 250w per channel (light/fan).</li>

<li> The device is engineered for long life and has all the protective and safety measures in place.</li>
              </ul>
              <!--<a href="#">
              <div class="btns">View More <i class="fa fa-angle-right"></i></div>
              </a>--> </div>
                </div>
                <div class="tab-pane" id="tab-two"><br><br>
                  <div class="col-md-8">
              <ul style="text-align: justify;font-size: 20px;font-family: 'Lato', sans-serif;background-color: #fc7700;color: honeydew;padding: 5%;list-style-type: decimal;">
              <li> With CANVI 4X easy installation setup, it seamlessly integrates into switch boards and no rewiring required.</li>

<li> It can control upto 4 devices both dimmable or non-dimmable loads (lights,dimmable lights and fans).</li>

<li> Our design allows you to use manual switches along with the mobile app. That is it lets the user switch ON a device from the app ans switch OFF using the manual switches and vice-versa.</li>

<li> It can be used with and without router.</li>

<li> CANVI 4X includes two canvi fan regulators.</li>

<li>The operating voltage is 190v to 260v @ 50hz.</li>

<li> The maximum load it can handle is 250w per channel (light/fan).</li>

<li> The device is engineered for long life and has all the protective and safety measures in place.</li></p>
               </div>
              <div class="col-md-4">
             <div class="row"> <img src="images/our-team/p1.png" class="img-responsive"> </div>
            </div>
                </div>  
            </div> 
        </div> <!-- /tabbable -->


				
			</div>
		</section><!--/#Our-Team-->
		<section id="app-links">
			<div class="container">
			<div class="row text-center">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="title-one">Downloads</h2><br><br>
					
				</div>
			</div>
				<div class="row" style="text-align: center;">
				
				<div class="col-md-6">
						
						<center><img src="images/downloads/appicon.png" class="img-responsive" width="150" ></center><br>
						<p style="font-size: 38px;font-family:cursive;font-weight: bolder;text-align: center;">
				Switch to smart home <br>
				
				</p><br></br>
					<a href="#" >
						<img src="images/downloads/google_play_logo.png" width="150">
					</a><br><br>
					<a href="#">
						<img src="images/downloads/app-store-logo.png" width="150">
					</a>
				</div>
					<div class="col-md-6">
						<iframe src="slide.html" style="width: 100%;height: 460px;" frameBorder="0" scrolling="no"></iframe>
				</div>
				



				</div>
				
			</div>

			


		</section>
		

		<!--- app links --
		<section id="portfolio">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<h2 class="title-one">Portfolio</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
					</div>
				</div>
				<ul class="portfolio-filter text-center">
					<li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".html">Html</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".wordpress">Wordpress</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".joomla">Joomla</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".megento">Megento</a></li>
				</ul><!--/#portfolio-filter--
				<div class="portfolio-items">
					<div class="col-sm-3 col-xs-12 portfolio-item html">
						<div class="view efffect">
							<div class="portfolio-image">
								<img src="images/portfolio/1.jpg" alt=""></div> 
								<div class="mask text-center">
									<h3>Novel</h3>
									<h4>Lorem ipsum dolor sit amet consectetur</h4>
									<a href="#"><i class="fa fa-link"></i></a>
									<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
								</div>
							</div>
						</div>
						<div class="col-sm-3 col-xs-12 portfolio-item jooma">
							<div class="view efffect" >
								<div class="portfolio-image">
									<img src="images/portfolio/2.jpg" alt="">
								</div> 
								<div class="mask text-center">
									<h3>Novel</h3>
									<h4>Lorem ipsum dolor sit amet consectetur</h4>
									<a href="#"><i class="fa fa-link"></i></a>
									<a href="images/portfolio/big-item4.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
								</div>
							</div>
						</div>
						<div class="col-sm-3 col-xs-12 portfolio-item wordpress">
							<div class="view efffect">
								<div class="portfolio-image">
									<img src="images/portfolio/3.jpg" alt="">
								</div> 
								<div class="mask text-center">
								<h3>Novel</h3>
								<h4>Lorem ipsum dolor sit amet consectetur</h4>
								<a href="#"><i class="fa fa-link"></i></a>
								<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-12 portfolio-item megento">
						<div class="view efffect">
							<div class="portfolio-image">
								<img src="images/portfolio/4.jpg" alt="">
							</div> 
							<div class="mask text-center">
								<h3>Novel</h3>
								<h4>Lorem ipsum dolor sit amet consectetur</h4>
								<a href="#"><i class="fa fa-link"></i></a>
								<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-12 portfolio-item html">
						<div class="view efffect">
							<div class="portfolio-image">
								<img src="images/portfolio/5.jpg" alt="">
							</div> <div class="mask text-center">
							<h3>Novel</h3>
							<h4>Lorem ipsum dolor sit amet consectetur</h4>
							<a href="#"><i class="fa fa-link"></i></a>
							<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12 portfolio-item wordpress">
					<div class="view efffect">
						<div class="portfolio-image">
							<img src="images/portfolio/6.jpg" alt="">
						</div> 
						<div class="mask text-center">
							<h3>Novel</h3>
							<h4>Lorem ipsum dolor sit amet consectetur</h4>
							<a href="#"><i class="fa fa-link"></i></a>
							<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12 portfolio-item html">
					<div class="view efffect">
						<div class="portfolio-image">
							<img src="images/portfolio/7.jpg" alt="">
						</div> 
						<div class="mask text-center">
							<h3>Novel</h3>
							<h4>Lorem ipsum dolor sit amet consectetur</h4>
							<a href="#"><i class="fa fa-link"></i></a>
							<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12 portfolio-item joomla">
					<div class="view efffect">
						<div class="portfolio-image">
							<img src="images/portfolio/8.jpg" alt=""></div> 
							<div class="mask text-center">
								<h3>Novel</h3>
								<h4>Lorem ipsum dolor sit amet consectetur</h4>
								<a href="#"><i class="fa fa-link"></i></a>
								<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-12 portfolio-item html">
						<div class="view efffect">
							<div class="portfolio-image">
								<img src="images/portfolio/9.jpg" alt="">
							</div> 
							<div class="mask text-center">
								<h3>Novel</h3>
								<h4>Lorem ipsum dolor sit amet consectetur</h4>
								<a href="#"><i class="fa fa-link"></i></a>
								<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-12 portfolio-item wordpress">
						<div class="view efffect">
							<div class="portfolio-image">
								<img src="images/portfolio/10.jpg" alt=""></div> 
								<div class="mask text-center">
									<h3>Novel</h3>
									<h4>Lorem ipsum dolor sit amet consectetur</h4>
									<a href="#"><i class="fa fa-link"></i></a>
									<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
								</div>
							</div>
						</div>
						<div class="col-sm-3 col-xs-12 portfolio-item joomla">
							<div class="view efffect">
								<div class="portfolio-image">
									<img src="images/portfolio/11.jpg" alt=""></div> 
									<div class="mask text-center">
										<h3>Novel</h3>
										<h4>Lorem ipsum dolor sit amet consectetur</h4>
										<a href="#"><i class="fa fa-link"></i></a>
										<a href="images/portfolio/big-item3.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-3 col-xs-12 portfolio-item megento">
								<div class="view efffect">
									<div class="portfolio-image">
										<img src="images/portfolio/12.jpg" alt=""></div> 
										<div class="mask text-center">
											<h3>Novel</h3>
											<h4>Lorem ipsum dolor sit amet consectetur</h4>
											<a href="#"><i class="fa fa-link"></i></a>
											<a href="images/portfolio/big-item4.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div> 

					</section> <!--/#portfolio-->

					<section id="clients" class="parallax-section">
						<div class="container">
							<div class="clients-wrapper">
								<div class="row text-center">
									<div class="col-sm-8 col-sm-offset-2">
										<h2 class="title-one">Frequently asked questions</h2>
										
									</div>
								</div>
								<div id="text-carousel" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="row" style="color:honeydew;">
        <div class="col-xs-offset-1 col-xs-10" style="padding-left:30px; padding-right:30px;">
            <div class="carousel-inner " style="min-height:150px;">
                <div class="item active">
                    <div class="carousel-content ">
                          <div class="vcenter">
                        	<h3 style="text-align:center;">Q. Will I need to change my existing wiring infrastructure?</h3>
                            <h3 style="text-align:center; font-style: italic;">No, CANVI seamlessly fits into the switch boards and you absolutely have no need to alter the wiring infrastructure.</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content  ">
                        <div>                          
                            <h3 style="text-align:center;">Q. I have an inverter at home, Will CANVI work along with an inverter?</h3>
                            <h3 style="text-align:center; font-style: italic;">We designed Canvi keeping in mind “Inverter enabled homes”. So, the answer is yes Canvi works with inverters.</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content  ">
                        <div>
                        	<h3 style="text-align:center;">Q. Can I have multiple CANVI’s in my home? Will interference be a problem?</h3>
                            <h3 style="text-align:center; font-style: italic;">There won’t be any interference between devices. Hence, you can install multiple devices in a given location.</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content  ">
                        <div>
                            <h3 style="text-align:center;">Q. How do I setup CANVI?</h3>
                            <h3 style="text-align:center; font-style: italic;">Refer to the manual.</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content  ">
                        <div>                          
                            <h3 style="text-align:center;">Q. Will the mobile app work with my phone?</h3>
                            <h3 style="text-align:center; font-style: italic;">Any android phone (version dash and up) and any iOS device (version dash and up) supports our device.</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content  ">
                        <div>
                            <h3 style="text-align:center;">Q. Will my existing physical switch boards go use less?</h3>
                            <h3 style="text-align:center; font-style: italic;">No, you can turn On physically and turn OFF using the app and vice-versa.</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content  ">
                        <div>                          
                            <h3 style="text-align:center;">Q. What is the maximum load that CANVI can handle?</h3>
                            <h3 style="text-align:center; font-style: italic;">Maximum load of the CANVI is 250w each channel for resistive loads and inductive loads in canvi 8x and canvi 4x, the maximum load of the canvi smart plug is 3.5KVA.</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content  ">
                        <div>
                        	<h3 style="text-align:center;">Q. Can I control heavy loads like Geysers etc?</h3>
                            <h3 style="text-align:center; font-style: italic;">Not with the present version of our hardware. CANVI Smart Plug coming soon. Stay tuned by liking us on social media, we are getting there.</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content  ">
                        <div>
                            <h3 style="text-align:center;">Q. Will the firmware on CANVI need to be updated every now and then?</h3>
                            <h3 style="text-align:center; font-style: italic;">No, we ship the devices with the latest firmware which is fully functional and tested.</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content  ">
                        <div>                          
                            <h3 style="text-align:center;">Q. Is it possible to turn on physically and turn off in the mobile app, and vice-versa?</h3>
                            <h3 style="text-align:center; font-style: italic;">Yes, refer to question 7 for more details.</h4>
                        </div>
                    </div>
                </div>
            
            <div class="item">
                    <div class="carousel-con  tent">
                        <div>
                        	<h3 style="text-align:center;">Q. Do I need a router?</h3>
                            <h3 style="text-align:center; font-style: italic;">No, But if you have one at home that has internet connection, Canvi can connect to it.</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content  ">
                        <div>
                            <h3 style="text-align:center;">Q. Do I need internet to control CANVI remotely?</h3>
                            <h3 style="text-align:center; font-style: italic;">Yes, If you want to control Canvi from a remote location, both Canvi and your mobile should have internet.</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content  ">
                        <div>                          
                            <h3 style="text-align:center;">Q. Does the device work in real-time?</h3>
                            <h3 style="text-align:center; font-style: italic;">Yes, There is no latencies associated with Canvi. So, yes the device works in real-time.</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content  ">
                        <div>
                        	<h3 style="text-align:center;">Q. Can I dim the loads connected to CANVI?</h3>
                            <h3 style="text-align:center; font-style: italic;">If the load is a dimmable load, yes you can dim the loads.</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content  ">
                        <div>
                            <h3 style="text-align:center;">Q. How do one classify a load as dimmable or non-dimmable loads?</h3>
                            <h3 style="text-align:center; font-style: italic;">You can make dim fans and dimmable led. CFL and other appliances are non dimmable.If you make a dim to non dimmable led or any CFL bulb it will flickers.</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content  ">
                        <div>                          
                            <h3 style="text-align:center;">Q. Will my fan regulator work with CANVI?</h3>
                            <h3 style="text-align:center; font-style: italic;">We are providing the fan regulator circuits. You can replace the fan regulator circuit then it will work manual and autonomous.</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content  ">
                        <div>
                        	<h3 style="text-align:center;">Q. Is it Okay if I dim a non-dimmable loads?</h3>
                            <h3 style="text-align:center; font-style: italic;">No, you should totally avoid the idea of trying to dim a non-dimmable loads.</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content  ">
                        <div>
                            <h3 style="text-align:center;">Q. What is the use of timers in CANVI?</h3>
                            <h3 style="text-align:center; font-style: italic;">By using CANVI timer you can set the alarm to your device</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content  ">
                        <div>                          
                            <h3 style="text-align:center;">Q. Is it possible to set timers remotely?</h3>
                            <h3 style="text-align:center; font-style: italic;">Yes. You can set the timer for CANVI remotely by using Internet.</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content  ">
                        <div>
                        	<h3 style="text-align:center;">Q. Is it possible to set timer on individual appliance?</h3>
                            <h3 style="text-align:center; font-style: italic;">Yes. You can set the timer for each channel.</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content  ">
                        <div>
                            <h3 style="text-align:center;">Q. Can anyone with the app control my appliances?</h3>
                            <h3 style="text-align:center; font-style: italic;">No, only people with the password can control the appliances connected to Canvi.</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content  ">
                        <div>                          
                            <h3 style="text-align:center;">Q. Does the device come with warranty?</h3>
                            <h3 style="text-align:center; font-style: italic;">Yes, 1 year manufacturer's warranty will be provided. Refer to the documentation provided with Canvi.</h4>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </div>
    <!-- Controls --> <a class="left carousel-control" href="#text-carousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  	</a>
 	<a class="right carousel-control" href="#text-carousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>

</div>
							</div>
						</div>
					</section><!--/#clients--

					<section id="blog"> 
						<div class="container">
							<div class="row text-center clearfix">
								<div class="col-sm-8 col-sm-offset-2">
									<h2 class="title-one">Our Blog</h2>
									<p class="blog-heading">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
								</div>
							</div> 
							<div class="row">
								<div class="col-sm-4">
									<div class="single-blog">
										<img src="images/blog/1.jpg" alt="" />
										<h2>Lorem ipsum dolor sit amet</h2>
										<ul class="post-meta">
											<li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>
											<li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>
										</ul>
										<div class="blog-content">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
										</div>
										<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-detail">Read More</a>
									</div>
									<div class="modal fade" id="blog-detail" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-body">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<img src="images/blog/3.jpg" alt="" />
													<h2>Lorem ipsum dolor sit amet</h2>
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
												</div> 
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="single-blog">
										<img src="images/blog/2.jpg" alt="" />
										<h2>Lorem ipsum dolor sit amet</h2>
										<ul class="post-meta">
											<li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>
											<li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>
										</ul>
										<div class="blog-content">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
										</div>
										<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-two">Read More</a>
									</div>
									<div class="modal fade" id="blog-two" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-body">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<img src="images/blog/2.jpg" alt="" />
													<h2>Lorem ipsum dolor sit amet</h2>
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="single-blog">
										<img src="images/blog/3.jpg" alt="" />
										<h2>Lorem ipsum dolor sit amet</h2>
										<ul class="post-meta">
											<li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>
											<li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>
										</ul>
										<div class="blog-content">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
										</div>
										<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-three">Read More</a>
									</div>
									<div class="modal fade" id="blog-three" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-body">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<img src="images/blog/3.jpg" alt="" />
													<h2>Lorem ipsum dolor sit amet</h2>
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
												</div> 
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="single-blog">
										<img src="images/blog/3.jpg" alt="" />
										<h2>Lorem ipsum dolor sit amet</h2>
										<ul class="post-meta">
											<li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>
											<li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>
										</ul>
										<div class="blog-content">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
										</div>
										<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-four">Read More</a></div>
										<div class="modal fade" id="blog-four" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-body">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
														<img src="images/blog/3.jpg" alt="" />
														<h2>Lorem ipsum dolor sit amet</h2>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
													</div> 
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-blog">
											<img src="images/blog/2.jpg" alt="" />
											<h2>Lorem ipsum dolor sit amet</h2>
											<ul class="post-meta">
												<li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>
												<li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>
											</ul>
											<div class="blog-content">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
											</div>
											<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-six">Read More</a>
										</div>
										<div class="modal fade" id="blog-six" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-body">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
														<img src="images/blog/2.jpg" alt="" />
														<h2>Lorem ipsum dolor sit amet</h2>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
													</div> 
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-4">
										<div class="single-blog">
											<img src="images/blog/1.jpg" alt="" />
											<h2>Lorem ipsum dolor sit amet</h2>
											<ul class="post-meta">
												<li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>
												<li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>
											</ul>
											<div class="blog-content">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
											</div>
											<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-seven">Read More</a>
										</div>
										<div class="modal fade" id="blog-seven" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-body">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
														<img src="images/blog/1.jpg" alt="" />
														<h2>Lorem ipsum dolor sit amet</h2>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
													</div> 
												</div>
											</div>
										</div>
									</div> 
								</div> 
							</div> 
						</section> <!--/#blog-->

						<section id="contact">
							<div class="container">
								<div class="row text-center clearfix">
									<div class="col-sm-8 col-sm-offset-2">
										<div class="contact-heading">
											<h2 class="title-one">Contact Us</h2>
											<p>We are ready to recieve your queries and suggestions.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<!--<div style="width: 100%"><iframe width="100%" height="600" src="http://www.citymaps.ie/create-google-map/map.php?width=100%&amp;height=600&amp;hl=en&amp;q=razam%2Candhra%20pradesh+(Runway%20Labz%20pvt.%20ltd.)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
								-->
							</div>
							<div class="container">
								<div class="contact-details">
									
									<div class="row text-center clearfix">
										<div class="col-sm-6">
										<div class="map-responsive">
											<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.7555368743215!2d83.66078941438805!3d18.449405487450484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3c76c458bf275d%3A0x4dbdc82864104720!2sRunway+Labz+Private+Limited!5e0!3m2!1sen!2sin!4v1488792296984" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
											</div>
											<p>
												<address><p>
											<b>contact:</b><br>
											08941-252233<br>
											+919703112306<br>+917569261127 <br>
											
											</strong></address>
											</p>
										</div>
										<div class="col-sm-6"> 
											<div id="contact-form-section">
												<div class="status alert alert-success" style="display: none"></div>
												<form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
													<div class="form-group">
														<input type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name"></div>
														<div class="form-group">
															<input type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
														</div> 
														<div class="form-group">
															<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
														</div> 
														<div class="form-group">
															<button type="submit" class="btn btn-primary">Send</button>
														</div>
													</form> 
												</div>
											</div>
										</div>
									</div>
								</div> 
							</section> <!--/#contact--> 

	<footer id="footer"> 
		<div class="container"> 
			<div class="text-center"> 
				<p>Copyright &copy; 2017 - Runway Labz. | All Rights Reserved | Designed and developed by <a href="http://www.sunilkumar.xyz" target="_blank">Sunil</a></p> 
			</div> 
		</div> 
	</footer> <!--/#footer--> 

	<script type="text/javascript" src="js/jquery.js"></script> 
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script> 
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
	<script type="text/javascript" src="js/jquery.parallax.js"></script> 
	<script type="text/javascript" src="js/main.js"></script> 

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</body>
</html>