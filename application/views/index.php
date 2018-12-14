<?php $this->load->view('header');?>
<body data-spy="scroll" data-target="#navbar-example">

	<div id="preloader"></div>

	<header>
		<!-- header-area start -->
		<div id="sticker" class="header-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">

						<!-- Navigation -->
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<!-- Brand -->
								<a class="navbar-brand page-scroll sticky-logo" href="index.html">
									<!-- <h1><span>e</span>Business</h1> -->
									 <h1><?php echo COMPONY_NAME;?></h1> 
									<!-- Uncomment below if you prefer to use an image logo -->
									<img src="<?php echo base_url() ?>assets/img/logo.png" alt="" title="">
								</a>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
								<ul class="nav navbar-nav navbar-right">
									<li class="active">
										<a class="page-scroll" href="#home">Home</a>
									</li>
									<li>
										<a class="page-scroll" href="#about">About</a>
									</li>
									<li>
										<a class="page-scroll" href="#services">Services</a>
									</li>
									<li>
										<a class="page-scroll" href="#team">Team</a>
									</li>
									<li>
										<a class="page-scroll" href="#portfolio">Service Details</a>
									</li>

								<!-- 	<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Drop Down<span class="caret"></span></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href=# >Drop Down 1</a></li>
											<li><a href=# >Drop Down 2</a></li>
										</ul> 
									</li>

									<li>
										<a class="page-scroll" href="#blog">Blog</a>
									</li> -->
									<li>
										<a class="page-scroll" href="#contact">Contact</a>
									</li>
								</ul>
							</div>
							<!-- navbar-collapse -->
						</nav>
						<!-- END: Navigation -->
					</div>
				</div>
			</div>
		</div>
		<!-- header-area end -->
	</header>
	<!-- header end -->

	<!-- Start Slider Area -->
	<div id="home" class="slider-area ">
		<div class="bend niceties preview-2">
			<div id="ensign-nivoslider" class="slides">
				<img src="<?php echo base_url() ?>assets/img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
				<img src="<?php echo base_url() ?>assets/img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
				<img src="<?php echo base_url() ?>assets/img/slider/slider3.jpg" alt="" title="#slider-direction-3" />
			</div>

			<!-- direction 1 -->
			<div id="slider-direction-1" class="slider-direction slider-one">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="slider-content">
								<!-- layer 1 -->
								<div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
									<h2 class="title1">Vision</h2>
								</div>
								<!-- layer 2 -->
								<div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
									<h1 class="title2 hidden-xs">To be the preferred international logistics service company by creating long term relationships with competent partners and satisfying the needs of our customers.</h1>

									<h1 class="title2 visible-xs">Preferred international logistics service company</h1>
								</div>
								<!-- layer 3 -->
								<div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
									<a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
									<!-- <a class="ready-btn page-scroll" href="#about">Learn More</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- direction 2 -->
			<div id="slider-direction-2" class="slider-direction slider-two">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="slider-content text-center">
								<!-- layer 1 -->
								<div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
									<h2 class="title1">Mission</h2>
								</div>
								<!-- layer 2 -->
								<div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
									<h1 class="title2 hidden-xs">We will contribute to the success of our customers by working in partnership with them to facilitate the movement of their freight effectively and efficiently, keeping them informed at all times.</h1>
									<h1 class="title2 visible-xs">Contribute to the success of our customers</h1>
								</div>
								<!-- layer 3 -->
								<div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
									<a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
									<!-- <a class="ready-btn page-scroll" href="#about">Learn More</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- direction 3 -->
			<div id="slider-direction-3" class="slider-direction slider-two">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="slider-content">
								<!-- layer 1 -->
								<div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
									<h2 class="title1">Objective </h2>
								</div>
								<!-- layer 2 -->
								<div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
									<h1 class="title2 hidden-xs">To direct the processes related to the logistics of supply of goods and services in Jastrack companies, aiming at sustainable development, preservation of corporate integrity and efficiency in the acquisition and administration of goods and services. </h1>

									<h1 class="title2 visible-xs">Logistics of supply of goods and services</h1>
								</div>
								<!-- layer 3 -->
								<div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
									<a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
									<!-- <a class="ready-btn page-scroll" href="#about">Learn More</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Slider Area -->

	<!-- Start About area -->
	<div id="about" class="about-area area-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="section-headline text-center">
						<h2>About <?php echo COMPONY_NAME_FULL; ?></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- single-well start-->
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="well-left">
						<div class="single-well">
							<a href="#">
								<img src="<?php echo base_url() ?>assets/img/about/1.jpg" alt="">
							</a>
						</div>
					</div>
				</div>
				<!-- single-well end-->
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="well-middle">
						<div class="single-well">
							<a href="#">
								<h4 class="sec-head">Who we are</h4>
							</a>
							<p>
								The company, engaged in Transportation, is a family enterprise founded by the “AV-Trans Solutions” 4 years ago. Now We have divert to Jastrack Logistics Service Pvt Ltd have been offering Supply chain,3PL and Warehouse logistics as a family enterprise since the beginning as a small-scale company as well as these days as a company crowd to make the best of personal relationships and direct contacts with customers. 
							</p>
							<ul>
								<li>
									<i class="fa fa-check"></i> Best Services in Industry
								</li>
								<li>
									<i class="fa fa-check"></i> Dedicated team
								</li>
								<li>
									<i class="fa fa-check"></i> Warehouses
								</li>
								<li>
									<i class="fa fa-check"></i> On time delivery
								</li>
								<!-- <li>
									<i class="fa fa-check"></i> Make Quality Products
								</li> -->
							</ul>
						</div>
					</div>
				</div>
				<!-- End col-->
			</div>
		</div>
	</div>
	<!-- End About area -->

	<!-- Start Service area -->
	<div id="services" class="services-area area-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="section-headline services-head text-center">
						<h2>Our Services</h2>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="services-contents">
					<!-- Start Left services -->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="about-move">
							<div class="services-details">
								<div class="single-services">
									<a class="services-icon" href="#">
										<i class="fas fa-truck-moving"></i>
									</a>
									<h4>Transport Management </h4>
									<p>
										Get the tools you need for full visibility and effective, efficient transportation management with Jastrack’s transportation management solutions (TMS)
									</p>
								</div>
							</div>
							<!-- end about-details -->
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="about-move">
							<div class="services-details">
								<div class="single-services">
									<a class="services-icon" href="#">
										<i class="fas fa-cart-arrow-down"></i>
									</a>
									<h4>Milk Run Delivery Services</h4>
									<p>
										An effective transportation management system has to be implemented to control the cost of transportation and inventory. 
									</p>
								</div>
							</div>
							<!-- end about-details -->
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<!-- end col-md-4 -->
						<div class=" about-move">
							<div class="services-details">
								<div class="single-services">
									<a class="services-icon" href="#">
										<i class="fas fa-warehouse"></i>
									</a>
									<h4>Warehouse & Distribution</h4>
									<p>
										You bring the best to your customers when you have a distribution network that is flexible, responsive, and efficient.
									</p>
								</div>
							</div>
							<!-- end about-details -->
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<!-- end col-md-4 -->
						<div class=" about-move">
							<div class="services-details">
								<div class="single-services">
									<a class="services-icon" href="#">
										<i class="fas fa-boxes"></i>
									</a>
									<h4>3PL Services</h4>
									<p>
										3PLs, in addition to all these business enhancement activities, would bring the relevant relationships to your organizations resulting in creating sustainable value to your business.
									</p>
								</div>
							</div>
							<!-- end about-details -->
						</div>
					</div>
					<!-- End Left services -->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<!-- end col-md-4 -->
						<div class=" about-move">
							<div class="services-details">
								<div class="single-services">
									<a class="services-icon" href="#">
										<i class="fas fa-dolly"></i>
									</a>
									<h4>In Plant – Line feeding</h4>
									<p>
										In a synchronous and fast-paced assembly line operation, it is crucial that the right parts are being supplied at the right time and at the right place
									</p>
								</div>
							</div>
							<!-- end about-details -->
						</div>
					</div>
					<!-- End Left services -->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<!-- end col-md-4 -->
						<div class=" about-move">
							<div class="services-details">
								<div class="single-services">
									<a class="services-icon" href="#">
										<i class="fas fa-project-diagram"></i>
									</a>
									<h4>Reverse Logistics</h4>
									<p>
										Reverse logistics the innovative global automotive consumer market is getting more and more matures, as well as the market competition, rising consumer status and resource utilization. 
									</p>
								</div>
							</div>
							<!-- end about-details -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Service area -->

	<!-- our-skill-area start -->

	<!-- our-skill-area end -->

	<!-- Faq area start -->

	<!-- End Faq Area -->

	<!-- Start Wellcome Area -->

	<!-- End Wellcome Area -->

	<!-- Start team Area -->
	<div id="team" class="our-team-area area-padding bak-2 hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="section-headline text-center">
						<h2>Our Team</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="team-top">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single-team-member pull-right">
							<div class="team-img">
								<a href="#">
									<img src="<?php echo base_url() ?>assets/img/team/javid_mulani.jpg" alt="">
								</a>
								<div class="team-social-icon text-center">
									<p>Mr. Javid Mulani, the Executive Director of the Company, has most decades of experience in the supply chain sector like 3PL Logistics, and Warehouse Operations. Besides this, Mr. Javid is an well-known and 15+ years vast experience in Logistics service industries.
									</p>
								</div>
							</div>
							<div class="team-content text-center">
								<h4>Javid Mulani</h4>
								<p>Executive Director</p>
							</div>
						</div>
					</div>
					<!-- End column -->
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single-team-member  pull-left">
							<div class="team-img">
								<a href="#">
									<img class="team2" src="<?php echo base_url() ?>assets/img/team/Sadanand_math.jpg" alt="">
								</a>
								<div class="team-social-icon text-center">
									<ul>
										<li>
											Mr. Sadanand Math, the Executive Director of the Company, has most decades of experience in the supply chain sector like Transportation, 3PL Logistics, and Warehouse Operations.
										</li>
										<li>
											Besides this, Mr. Math is an well-known and 18+ years vast experience in Logistics service industries.
										</li>
									</ul>
								</div>
							</div>
							<div class="team-content text-center">
								<h4>
								Sadanand Math </h4>
								<p>Executive Director</p>
							</div>
						</div>
					</div>
					<!-- End column -->
					
				</div>
			</div>
		</div>
	</div>

		<div id="team" class="our-team-area area-padding bak-2 visible-xs">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="section-headline text-center">
						<h2>Our Team</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="team-top">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single-team-member" style="width: 100%;">
							<div class="team-img">
								<a href="#">
									<img src="<?php echo base_url() ?>assets/img/team/javid_mulani.jpg" alt="">
								</a>
								<div class="team-social-icon text-center">
									<p>Mr. Javid Mulani, the Executive Director of the Company, has most decades of experience in the supply chain sector like 3PL Logistics, and Warehouse Operations. Besides this, Mr. Javid is an well-known and 15+ years vast experience in Logistics service industries.
									</p>
								</div>
							</div>
							<div class="team-content text-center">
								<h4>Javid Mulani</h4>
								<p>Executive Director</p>
							</div>
						</div>
					</div>
					<!-- End column -->
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single-team-member " style="width: 100%;">
							<div class="team-img">
								<a href="#">
									<img class="team2" src="<?php echo base_url() ?>assets/img/team/Sadanand_math.jpg" alt="">
								</a>
								<div class="team-social-icon text-center">
									<ul>
										<li>
											Mr. Sadanand Math, the Executive Director of the Company, has most decades of experience in the supply chain sector like Transportation, 3PL Logistics, and Warehouse Operations.
										</li>
										<li>
											Besides this, Mr. Math is an well-known and 18+ years vast experience in Logistics service industries.
										</li>
									</ul>
								</div>
							</div>
							<div class="team-content text-center">
								<h4>
								Sadanand Math </h4>
								<p>Executive Director</p>
							</div>
						</div>
					</div>
					<!-- End column -->
					
				</div>
			</div>
		</div>
	</div>
	<!-- End Team Area -->

	<!-- Start reviews Area -->
	
	<!-- End reviews Area -->

	<!-- Start portfolio Area -->
	<div id="portfolio" class="portfolio-area area-padding fix">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="section-headline text-center">
						<h2>Service Details</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Start Portfolio -page -->
				<div class="awesome-project-1 fix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="awesome-menu ">
							<ul class="project-menu">
								<li>
									<a href="#" class="active" data-filter="*">All</a>
								</li>
								<li>
									<a href="#" data-filter=".tms">Transport Management Solutions</a>
								</li>
								<li>
									<a href="#" data-filter=".mrds">Milk Run Delivery Services
</a>
								</li>
								<li>
									<a href="#" data-filter=".wd">Warehouse & Distribution
</a>
								</li>
								<li>
									<a href="#" data-filter=".3pl">3PL Services

</a>
								</li>
								<li>
									<a href="#" data-filter=".iplf">In Plant – Line feeding
</a>
								</li>
								<li><br>
									<a href="#" data-filter=".rl">Reverse Logistics

</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="awesome-project-content">
					<!-- single-awesome-project start -->
					<div class="col-md-4 col-sm-4 col-xs-12 tms">
						<div class="single-awesome-project">
							<div class="awesome-img">
								<a href="#"><img src="<?php echo base_url() ?>assets/img/portfolio/transport_magt_Solution.jpg" alt="" /></a>
								<div class="add-actions text-center">
									<div class="project-dec">
										<a class="venobox" data-gall="myGallery" href="<?php echo base_url() ?>assets/img/portfolio/transport_magt_Solution.jpg">
											<h4>Transport Management Solutions
</h4>
											<!-- <span>Web Development</span> -->
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- single-awesome-project end -->
					<!-- single-awesome-project start -->
					<div class="col-md-4 col-sm-4 col-xs-12 mrds">
						<div class="single-awesome-project">
							<div class="awesome-img">
								<a href="#"><img src="<?php echo base_url() ?>assets/img/portfolio/mil_run_service.jpg" alt="" /></a>
								<div class="add-actions text-center">
									<div class="project-dec">
										<a class="venobox" data-gall="myGallery" href="<?php echo base_url() ?>assets/img/portfolio/mil_run_service.jpg">
											<h4>Milk Run Delivery Services</h4>
											<!-- <span>Photosho</span> -->
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- single-awesome-project end -->
					<!-- single-awesome-project start -->
					<div class="col-md-4 col-sm-4 col-xs-12 wd">
						<div class="single-awesome-project">
							<div class="awesome-img">
								<a href="#"><img src="<?php echo base_url() ?>assets/img/portfolio/warehouse.jpg" alt="" /></a>
								<div class="add-actions text-center">
									<div class="project-dec">
										<a class="venobox" data-gall="myGallery" href="<?php echo base_url() ?>assets/img/portfolio/warehouse.jpg">
											<h4>Warehouse & Distribution</h4>
											<!-- <span>Web Design</span> -->
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- single-awesome-project end -->
					<!-- single-awesome-project start -->
					<div class="col-md-4 col-sm-4 col-xs-12 3pl">
						<div class="single-awesome-project">
							<div class="awesome-img">
								<a href="#"><img src="<?php echo base_url() ?>assets/img/portfolio/3pl.jpg" alt="" /></a>
								<div class="add-actions text-center">
									<div class="project-dec">
										<a class="venobox" data-gall="myGallery" href="<?php echo base_url() ?>assets/img/portfolio/3pl.jpg">
											<h4>3PL Services</h4>
											<!-- <span>Web design</span> -->
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- single-awesome-project end -->
					<!-- single-awesome-project start -->
					<div class="col-md-4 col-sm-4 col-xs-12 iplf">
						<div class="single-awesome-project">
							<div class="awesome-img">
								<a href="#"><img src="<?php echo base_url() ?>assets/img/portfolio/in_plant.jpg" alt="" /></a>
								<div class="add-actions text-center text-center">
									<div class="project-dec">
										<a class="venobox" data-gall="myGallery" href="<?php echo base_url() ?>assets/img/portfolio/in_plant.jpg">
											<h4>In Plant – Line feeding</h4>
											<!-- <span>Web Development</span> -->
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- single-awesome-project end -->
					<!-- single-awesome-project start -->
					<div class="col-md-4 col-sm-4 col-xs-12  rl">
						<div class="single-awesome-project">
							<div class="awesome-img">
								<a href="#"><img src="<?php echo base_url() ?>assets/img/portfolio/reverse_logistic.jpg" alt="" /></a>
								<div class="add-actions text-center">
									<div class="project-dec">
										<a class="venobox" data-gall="myGallery" href="<?php echo base_url() ?>assets/img/portfolio/reverse_logistic.jpg">
											<h4>Reverse Logistics
</h4>
<!-- 											<span>Photoshop</span>
 -->										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- single-awesome-project end -->
				</div>
			</div>
		</div>
	</div>
	<!-- awesome-portfolio end -->
	<!-- start pricing area -->
	
	<!-- End pricing table area -->
	<!-- Start Testimonials -->
	
	<!-- End Testimonials -->
	<!-- Start Blog Area -->
	
	<!-- End Blog -->
	<!-- Start Suscrive Area -->
	
	<!-- End Suscrive Area -->
	<!-- Start contact Area -->
	<div id="contact" class="contact-area bak-2">
		<div class="contact-inner area-padding">
			<div class="contact-overly"></div>
			<div class="container ">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
							<h2>Contact us</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Start contact icon column -->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="contact-icon text-center">
							<div class="single-icon">
								<i class="fa fa-mobile"></i>
								<p>
									Call: <?php echo COMPONY_CONTACT;?><br>
									<span>Monday-Friday (9am-5pm)</span>
								</p>
							</div>
						</div>
					</div>
					<!-- Start contact icon column -->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="contact-icon text-center">
							<div class="single-icon">
								<i class="fas fa-envelope"></i>
								<p>
									Email: <a href="mailto:<?php echo COMPONY_EMAIL;?>"><?php echo COMPONY_EMAIL;?></a><br>
									<span>Web: <a href="<?php echo COMPONY_SITE;?>" target="_blank"><?php echo COMPONY_SITE;?></a></span>
								</p>
							</div>
						</div>
					</div>
					<!-- Start contact icon column -->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="contact-icon text-center">
							<div class="single-icon">
								<i class="fas fa-map-marked-alt"></i>
								<p>
									PAVANI PARK B-Wing,	Gat No. 447/1E, <br>
									Kharabwadi, Post Chakan, Tal Khed,<br>
									Dist. Pune Maharashtra - 410501 India
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">

					<!-- Start Google Map -->
					<div class="col-md-6 col-sm-6 col-xs-12">
						<!-- Start Map -->
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3777.836807032006!2d73.83715031489633!3d18.7608250872695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2ca0005699691%3A0xfdd44f1c5fc1f0!2sPavani+Park!5e0!3m2!1sen!2sin!4v1544293240986" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
						<!-- End Map -->
					</div>
					<!-- End Google Map -->

					<!-- Start  contact -->
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="form contact-form">
							<div id="sendmessage">Your message has been sent. Thank you!</div>
							<div id="errormessage"></div>
							<form action="<?php echo base_url().'index.php/home/email'?>" method="post" role="form" class="contactForm">
								<div class="form-group">
									<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
									<div class="validation"></div>
								</div>
								<div class="form-group">
									<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
									<div class="validation"></div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
									<div class="validation"></div>
								</div>
								<div class="form-group">
									<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
									<div class="validation"></div>
								</div>
								<div class="text-center"><button type="submit">Send Message</button></div>
							</form>
						</div>
					</div>
					<!-- End Left contact -->
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact Area -->
	<?php $this->load->view('footer');?>