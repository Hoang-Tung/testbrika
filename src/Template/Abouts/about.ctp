<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException();
endif;

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="	">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Toranj demo 4</title>

        <!-- CSS styles -->
        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('cake.css') ?>
        <?= $this->Html->css('/assets/css/base.css') ?>
      	<!-- /CSS styles -->
    </head>
    <body>
    	<a href="#" id="menu-toggle-wrapper">
			<div id="menu-toggle"></div>	
		</a>
		
		<!-- inner bar wrapper -->
    	<a href="#" id="inner-bar">
			<!-- Small logo -->
			<div class="logo-alt">
				<img src="../img/logo-mini.png" alt="logo-mini">
			</div>
			<!-- /Small logo -->
		</a>
		<!-- /inner bar wrapper -->

		
    	<!-- Sidebar -->	
		<div id="side-bar">
			<div class="inner-wrapper">	
				<div id="side-inner">

					<!-- Logo -->	
					<div id="logo-wrapper">
						<a href="index.html"><img src="../img/logo.png" alt="logo"></a>
					</div>
					<!-- /Logo -->	

					<div id="side-contents">

						<!-- Navigation -->	
						<ul id="navigation">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="portfolio.html">Portfolio</a>
							</li>
							<li class="current-menu-item">
								<a href="about.html">About</a>
							</li>
							<li>
								<a href="services.html">Services</a>
							</li>
							<li>
								<a href="gallery.html">Gallery</a>
							</li>
							<li>
								<a href="blog.html">Blog</a>
							</li>
							<li>
								<a href="contactus.html">Contact</a>
							</li>
						</ul>
						<!-- /Navigation -->	

					</div>	

					<!-- Sidebar footer -->	
					<div id="side-footer">
						<!-- Social icons -->	
						<ul class="social-icons">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-flickr"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
						<!-- /Social icons -->	
						<div id="copyright">
							@owwwlab
						</div>
					</div>
					<!-- /Sidebar footer -->	

				</div>
			</div>
			
							
		</div>
		<!-- /Sidebar -->	

		<!--Page main wrapper-->
		<div id="main-content"> 
			<div class="page-wrapper regular-page">
				<div class="container">

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Pages</a></li>
						<li class="active">About Toranj</li>
					</ol>
					<!--/ breadcrumbs -->

					
					<!-- page title -->
					
					<h2 class="section-title double-title">
						<span>About</span>Tornaj
					</h2>
					<!--/ page title -->


					<div class="row mb-xlarge">
						<div class="col-md-8">
							<p class="thin-text">
								Etiam luctus turpis sed magna pellentesque lobortis vestibulum. Fusce ut mi at sem dignissim aliquet nunc leo tellus. Etiam luctus turpis
							</p>	
							<p>
								This is a simple pharagraph tag. The Love Boat soon will be making another run. The Love Boat promises something for everyone. Makin their way the only way they know how. That's just a little bit more than the law will allow. It's time to put on makeup. It's time to dress up right. It's time to raise the curtain on the Muppet Show tonight. Movin' on up to the east side. We finally got a piece of the pie. So lets make the most of this beautiful day. Since we're together And you know where you were then. Girls were girls and men were men. Mister we could use a man like Herbert Hoover again. 

							</p>
						</div>

						<!-- announce-box -->
						<div class="col-md-4">
							<div class="announce-box">
								<p>We Do<span class="colored"> Serious Bussiness </span>Here Boy</p>
							</div>
						</div>
						<!--/ announce-box -->

					</div>
						
					
					
					<!-- team members -->
					<div class="row mb-xlarge">
						<div class="team-members">	
							<div class="col-md-4">
								<div class="team-item">
									<div class="team-head">
										<img src="../img/team/01.jpg" alt="">
										<ul class="team-socials">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>

									<div class="team-content">
										<h3 class="title">Cora Grimhilt</h3>
										<h4 class="subtitle">Designer</h4>
									</div>
									
								</div>
							</div>
							<div class="col-md-4">
								<div class="team-item">
									<div class="team-head">
										<img src="../img/team/02.jpg" alt="">
										<ul class="team-socials">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>

									<div class="team-content">
										<h3 class="title">Sachin Hudde</h3>
										<h4 class="subtitle">Developer</h4>
									</div>
									
								</div>
							
							</div>
							<div class="col-md-4">
								<div class="team-item">
									<div class="team-head">
										<img src="../img/team/03.jpg" alt="">
										<ul class="team-socials">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>

									<div class="team-content">
										<h3 class="title">Ivana Rasima</h3>
										<h4 class="subtitle">Money Counter</h4>
									</div>
									
								</div>
							</div>
						</div>
						
					</div>
					<!--/ team members -->

					<div class="row mb-xlarge">
						<div class="col-md-12">
							<div class="call-to-action">
								<div class="row">
									<div class="col-md-10">
										<h2 class="action-title">
											Let’s See How We Can Make You a Cup of Tea!
										</h2>
									</div>
									<div class="col-md-2">
										<a class="btn btn-toranj" href="#">Contact US</a>
									</div>
								</div>
							</div>
						</div>
					</div>


					<!--/ team carousel -->
					<div class="row mb-xlarge">
						<div class="col-md-12">
							<h2 class="bordered">Team Carousel</h2>
							<div class="ms-staff-carousel">
							    <!-- masterslider -->
							    <div class="master-slider" id="teamcarousel">
							        <div class="ms-slide">
							            <img src="../masterslider/blank.gif" data-src="../img/team/01.jpg" alt="lorem ipsum dolor sit"/> 
							            <div class="ms-info">
							                <h3>Siet Maitland</h3>
							                <h4>COMPANY CEO</h4>
							                <ul class="social-icons">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#"><i class="fa fa-flickr"></i></a></li>
												<li><a href="#"><i class="fa fa-youtube"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
							            </div>    
							        </div>
							        <div class="ms-slide">
							            <img src="../masterslider/blank.gif" data-src="../img/team/02.jpg" alt="lorem ipsum dolor sit"/>    
							              <div class="ms-info">
							                <h3>Chinweuba Geirr</h3>
							                <h4>PROGRAMMER</h4>
							                <ul class="social-icons">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#"><i class="fa fa-flickr"></i></a></li>
												<li><a href="#"><i class="fa fa-youtube"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
							            </div>    
							        </div>
							        <div class="ms-slide">
							            <img src="../masterslider/blank.gif" data-src="../img/team/03.jpg" alt="lorem ipsum dolor sit"/>
							              <div class="ms-info">
							                <h3>Pejo Carlos</h3>
							                <h4>WEB DEVELOPER</h4>
							                <ul class="social-icons">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#"><i class="fa fa-flickr"></i></a></li>
												<li><a href="#"><i class="fa fa-youtube"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
							            </div>            
							        </div>
							        <div class="ms-slide">
							            <img src="../masterslider/blank.gif" data-src="../img/team/04.jpg" alt="lorem ipsum dolor sit"/>
							             <div class="ms-info">
							                <h3>Ramessu Olegário</h3>
							                <h4>UI DESIGNER</h4>
							                <ul class="social-icons">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#"><i class="fa fa-flickr"></i></a></li>
												<li><a href="#"><i class="fa fa-youtube"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
							            </div>           
							        </div>
							        <div class="ms-slide">
							            <img src="../masterslider/blank.gif" data-src="../img/team/05.jpg" alt="lorem ipsum dolor sit"/>
							             <div class="ms-info">
							                <h3>Talaat Áleifr</h3>
							                <h4>DEVELOPER</h4>
							                <ul class="social-icons">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#"><i class="fa fa-flickr"></i></a></li>
												<li><a href="#"><i class="fa fa-youtube"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
							            </div>             
							        </div>
							        <div class="ms-slide">
							            <img src="../masterslider/blank.gif" data-src="../img/team/06.jpg" alt="lorem ipsum dolor sit"/>
							             <div class="ms-info">
							                <h3>Matan Alfonso</h3>
							                <h4>COMPANY CEO</h4>
							                <ul class="social-icons">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#"><i class="fa fa-flickr"></i></a></li>
												<li><a href="#"><i class="fa fa-youtube"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
							            </div>          
							        </div>
							        <div class="ms-slide">
							            <img src="../masterslider/blank.gif" data-src="../img/team/07.jpg" alt="lorem ipsum dolor sit"/> 
							             <div class="ms-info">
							                <h3>Kevyn Dimas</h3>
							                <h4>IT MANAGER</h4>
							                <ul class="social-icons">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#"><i class="fa fa-flickr"></i></a></li>
												<li><a href="#"><i class="fa fa-youtube"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
							            </div>    
							        </div>
							         <div class="ms-slide">
							            <img src="../masterslider/blank.gif" data-src="../img/team/08.jpg" alt="lorem ipsum dolor sit"/> 
							             <div class="ms-info">
							                <h3>Simcha Kepheus</h3>
							                <h4>SYSTEM ADMIN</h4>
							                <ul class="social-icons">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#"><i class="fa fa-flickr"></i></a></li>
												<li><a href="#"><i class="fa fa-youtube"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
							            </div>    
							        </div>
							        <div class="ms-slide">
							            <img src="../masterslider/blank.gif" data-src="../img/team/09.jpg" alt="lorem ipsum dolor sit"/>
							             <div class="ms-info">
							                <h3>Willabert Duncan</h3>
							                <h4>REVIEWER</h4>
							                <ul class="social-icons">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#"><i class="fa fa-flickr"></i></a></li>
												<li><a href="#"><i class="fa fa-youtube"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
							            </div>    
							        </div>
							    </div>
							    <!-- end of masterslider -->
							    <div class="ms-staff-info" id="teamcarousel-info"> </div>
							</div>
						</div>
					</div>
					<!--/ team carousel -->


					<hr/>
					<a class="back-to-top" href="#"></a>
				</div>
			</div>
		</div>
		<!--/Page main wrapper-->

		<!-- JavaScript files-->	
		
		<!-- jquery core -->
		<script type="text/javascript" src="../js/vendors/jquery-1.11.0.min.js"></script>

		<!-- imagesLoaded jquery plugin -->
		<script type="text/javascript" src="../js/vendors/imagesloaded.pkgd.min.js"></script>
		
		<!-- jquery isotop plugin -->
		<script type="text/javascript" src="../js/vendors/isotope.pkgd.min.js"></script>

		<!-- jquery history neede for ajax pages -->
		<script type="text/javascript" src="../js/vendors/jquery.history.js"></script>

		<!-- owwwlab jquery kenburn slider plugin -->
		<script type="text/javascript" src="../js/jquery.owwwlab-kenburns.js"></script>

		<!-- owwwlab jquery double carousel plugin -->
		<script type="text/javascript" src="../js/jquery.owwwlab-DoubleCarousel.js"></script>

		<!-- owwwwlab jquery video background plugin -->
		<script type="text/javascript" src="../js/jquery.owwwlab-video.js"></script>

		<!-- tweenmax animation framework -->
		<script type="text/javascript" src="../js/vendors/TweenMax.min.js"></script>

		<!-- jquery nice scroll plugin needed for vertical portfolio page -->
		<script type="text/javascript" src="../js/vendors/jquery.nicescroll.min.js"></script>

		<!-- jquery magnific popup needed for ligh-boxes -->
		<script type="text/javascript" src="../js/vendors/jquery.magnific-popup.js"></script>

		<!-- html5 media player -->
		<script type="text/javascript" src="../js/vendors/mediaelement-and-player.min.js"></script>

		<!-- jquery inview plugin -->
		<script type="text/javascript" src="../js/vendors/jquery.inview.min.js"></script>

		<!-- smooth scroll -->
		<script type="text/javascript" src="../js/vendors/smoothscroll.js"></script>

		

		<!-- Master Slider -->
		<script src="../masterslider/jquery.easing.min.js"></script>
		<script src="../masterslider/masterslider.min.js"></script>
		
		<!-- theme custom scripts -->
		<script type="text/javascript" src="../js/custom.js"></script>

		<!-- /JavaScript files-->	

		
    </body>
</html>