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
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('/assets/css/base.css') ?>
        <meta charset="utf-8">
        <meta name="description" content="	">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Toranj demo 4</title>
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
							<li class="current-menu-item">
								<a href="index.html">Home</a>
							</li>
							<li>
								<?php echo $this->Html->link('Citys', '/citys/index')?>
							</li>
							<li>
								<?php echo $this->Html->link('About', '/abouts/about')?>
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
							<li>
								<a href="https://www.facebook.com/thebrika"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.instagram.com/thebrikahouse/"><i class="fa fa-instagram"></i></a></li>
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

		<!-- Page main wrapper-->	
		<div id="main-content">
			<div class="page-wrapper">

				<!-- Master slider -->
	        	<div class="tj-ms-slider ms-skin-toranj fillmode" data-layout="fullscreen" id="homeslider">
		            
		            <div class="ms-slide">
		                <img src="../masterslider/blank.gif" data-src="../video/home/home.png" alt="lorem ipsum dolor sit"/>
		                
		                <!-- slide background video -->
				        <video data-autopause="false" data-mute="true" data-loop="true" data-fill-mode="fill">
				            <source id="mp4" src="../video/home/home.mp4" type="video/mp4"/>
				            <source id="webm" src="../video/home/home.webm" type="video/webm"/>
				        </video>
		                <div class="ms-layer caption cap-full" data-effect="front(500)"
		                        data-duration="1000"
		                        data-ease="easeOutExpo"
		                        data-delay="-100">

							<div class="vcenter-wrapper">
								<div class="cap-lg cap-lg-pushdown vcenter">
									<h2 class="cap-title allcaps">Be Thirsty Heart <br>Seek Forever Without Rest</h2>
									<a href="#" class="btn btn-transparent btn-lg">Need Wine?</a>
								</div>
							</div>
						</div>

		            </div>

		            <div class="ms-slide">
		                <img src="../masterslider/blank.gif" data-src="../img/home/01.jpg" alt="lorem ipsum dolor sit"/>    
		                <div class="ms-layer caption cap-bordered cap-bottom cap-left" data-effect="left(100)"
		                        data-duration="700"
		                        data-ease="easeOutExpo"
		                        data-delay="0">

							<h2 class="cap-title">
								Mysterious Road
							</h2>
							<div class="cap-des">
								<p>
									I want to know the joy <br/>
									of how you whisper <br/>
									"more, more, more"<br/> ~Rumi
								</p>
							</div>
						</div>
		            </div>
		            <div class="ms-slide">
		                <img src="../masterslider/blank.gif" data-src="../img/home/03.jpg" alt="lorem ipsum dolor sit"/>   
		                <div class="ms-layer caption cap-toranj" data-effect="left(100)"
		                        data-duration="700"
		                        data-ease="easeOutExpo"
		                        data-delay="0">
							<h2 class="cap-title double-title">
								<span>What you seek</span>Is Seeking You
							</h2>
							<div class="cap-des">
								<p>I want to know the joy <br/>
									of how you whisper <br/>
									"more, more, more"<br/> ~Rumi</p>
							</div>
						</div>
		            </div>
		            <div class="ms-slide">
		                <img src="../masterslider/blank.gif" data-src="../img/captions/08.jpg" alt="lorem ipsum dolor sit"/>
		                <div class="ms-layer caption cap-elegant" data-effect="front(300)"
	                        data-duration="700"
	                        data-ease="easeOutExpo"
	                        data-delay="0">

							<h2 class="cap-title">Apart From Love</h2>
							<div class="cap-des">
								<p>Everything else passes away</p>
							</div>
							<a href="#" class="btn btn-transparent btn-lg">Fall in love</a>
						</div>  
		                
		            </div>
		            <div class="ms-slide">
		                <img src="../masterslider/blank.gif" data-src="../img/captions/07.jpg" alt="lorem ipsum dolor sit"/>
		                <div class="ms-layer caption cap-bordered cap-bottom cap-right cap-reverse" data-effect="right(200)"
	                        data-duration="700"
	                        data-ease="easeOutExpo"
	                        data-delay="0">

							<h2 class="cap-title">
								Wake up
							</h2>
							<div class="cap-des">
								<p>
									This world that you dream<br>holds nothing to fear<br> ~Rumi
								</p>
							</div>
							<a href="#" class="btn btn-transparent btn-lg">Go for it</a>
						</div>              
		            </div>
		        </div>
		        <!-- /Master slider -->


				<div class="container">

		        	<!-- latest projects -->
		        	<div class="row mb-xlarge">

		        		<div class="col-md-3">
		        			<h2 class="bordered allcaps">
								Latest Projects
							</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.consectetur adipisicing elit. consectetur adipisicing elit.</p>
							<a href="portfolio.html" class="btn btn-toranj alt btn-icon"><i class="fa fa-heart"></i>View All</a>
		        		</div>

		        		<div class="col-md-9">
		        			
		        			<div class="row mb-medium">
		        				<div class="col-md-6">
		        					<a href="portfolio-1.html">
										<div class="owl-videobg autoplay dark-overlay" data-src="../video/01/01.mp4"></div>
										<div class="caption cap-bordered cap-compact cap-bottom cap-left">
											<h2 class="cap-title allcaps">
												Video<br/>Background 
											</h2>
										</div>
									</a>
		        				</div>
		        				<div class="col-md-6">
		        					<a href="portfolio-2.html">
										<div class="owl-videobg hoverPlay dark-overlay" data-src="../video/03/03.mp4"></div>
										<div class="caption cap-bordered cap-compact cap-bottom cap-left">
											<h2 class="cap-title allcaps">
												Hover<br/>your mouse
											</h2>
										</div>
									</a>
		        				</div>
		        			</div>

		        		</div>

		        	</div>
		        	<!-- /latest projects -->


		        	<!-- services section -->
		        	<div class="row mb-xlarge">
		        		<div class="col-md-12">
			        		<h2 class="bordered allcaps">
								Our services
							</h2>
							<p class="thin-text">
								Etiam luctus turpis sed magna pellentesque lobortis vestibulum. Fusce ut mi at sem dignissim aliquet nunc leo tellus. Etiam luctus turpis. Etiam luctus turpis sed magna pellentesque lobortis vestibulum. Fusce ut mi at sem dignissim aliquet nunc leo tellus. Etiam luctus turpis
							</p>
						</div>
					</div>
					

					<div class="row mb-large">
						<div class="col-md-4">
							<div class="icon-box ib-center ib-boxed">
								<i class="ib-icon fa fa-comments"></i>
								<h4 class="title">Photography</h4>
								<div class="contents">
									<p>Talk you off what, Pop Pop? Michael, I'm your older brother. I'll never be <a href="#">proud of</a> you and my son an everyone else</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box ib-center ib-boxed">
								<i class="ib-icon fa fa-coffee"></i>
								<h4 class="title">Web Design</h4>
								<div class="contents">
									<p>Talk you off what, Pop Pop? Michael, I'm your older brother. I'll never be <a href="#">proud of</a> you and my son an everyone else</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box ib-center ib-boxed">
								<i class="ib-icon fa fa-cloud"></i>
								<h4 class="title">Consulting</h4>
								<div class="contents">
									<p>Talk you off what, Pop Pop? Michael, I'm your older brother. I'll never be <a href="#">proud of</a> you and my son an everyone else</p>
								</div>
							</div>
						</div>
						
		        	</div>
		        	<!-- /services section -->


		        	<!-- contact call to action -->
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
					<!-- /contact call to action -->

					<hr/>
					<div class="row mb-large"></div>

					<!-- Footer -->
					<div class="row mb-medium">
						<div class="col-md-3">
							<div class="widget">
								<div class="widget-body">
									<img src="../img/blog/author1.jpg" class="circular img-responsive author-image" alt="image">
									
									<h5 class="text-center allcaps">Ivana Rasima</h5>
									<ul class="social-icons text-center">
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
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title lined">Gallery widget</h3>
								<div class="widget-body gallery-widget tj-lightbox-gallery">

									<!--Gallery item-->
									<a href="../img/gallery/a1.jpg" class="lightbox-gallery-item gallery-item tj-hover-4">
										<img src="../img/gallery/thumbs/sa1.jpg" class="img-fit" alt="">
										<div class="tj-overlay">
										</div>
									</a>
									<!--/Gallery item-->

									<!--Gallery item-->
									<a href="../img/gallery/a2.jpg" class="lightbox-gallery-item gallery-item tj-hover-4">
										<img src="../img/gallery/thumbs/sa2.jpg" class="img-fit" alt="">
										<div class="tj-overlay">
										</div>
									</a>
									<!--/Gallery item-->

									<!--Gallery item-->
									<a href="../img/gallery/a3.jpg" class="lightbox-gallery-item gallery-item tj-hover-4">
										<img src="../img/gallery/thumbs/sa3.jpg" class="img-fit" alt="">
										<div class="tj-overlay">
										</div>
									</a>
									<!--/Gallery item-->

									<!--Gallery item-->
									<a href="../img/gallery/a4.jpg" class="lightbox-gallery-item gallery-item tj-hover-4">
										<img src="../img/gallery/thumbs/sa4.jpg" class="img-fit" alt="">
										<div class="tj-overlay">
										</div>
									</a>
									<!--/Gallery item-->
									<!--Gallery item-->
									<a href="../img/gallery/a5.jpg" class="lightbox-gallery-item gallery-item tj-hover-4">
										<img src="../img/gallery/thumbs/sa5.jpg" class="img-fit" alt="">
										<div class="tj-overlay">
										</div>
									</a>
									<!--/Gallery item-->

									<!--Gallery item-->
									<a href="../img/gallery/a6.jpg" class="lightbox-gallery-item gallery-item tj-hover-4">
										<img src="../img/gallery/thumbs/sa6.jpg" class="img-fit" alt="">
										<div class="tj-overlay">
										</div>
									</a>
									<!--/Gallery item-->
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="widget widget-recent-posts">
								<h3 class="widget-title lined">From Blog</h3>     
    							<div class="widget-body">
    								
    								<div class="w-post">
    									<div class="w-post-image">
    										<a href="blog-single.html"><img src="../img/blog/b00-t.jpg" alt="image"></a>
    									</div>
    									<div class="w-post-content">
    										<a href="blog-single.html">
    											<span class="date">08 Feb , 2014</span>
    											<br>
    											<p>w-Post with a Featured Image</p>
    										</a>
    									</div>
    								</div>

    								<div class="w-post">
    									<div class="w-post-image">
    										<a href="blog-single.html"><img src="../img/blog/b01-t.jpg" alt="image"></a>
    									</div>
    									<div class="w-post-content">
    										<a href="blog-single.html">
    											<span class="date">08 Feb , 2014</span>
    											<br>
    											<p>w-Post with a Featured Image</p>
    										</a>
    									</div>
    								</div>

    							</div>
    						</div>
						</div>

						<div class="col-md-3">
							<div class="widget">
								<div class="widget-body">
									<h3 class="widget-title lined">HTML widget</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- /Footer -->
					<hr/>
		        	<a class="back-to-top" href="#"></a>
		        </div>

			</div>
		</div>
		<!-- /Page main wrapper-->	

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
    <footer>
    </footer>
</body>
</html>
