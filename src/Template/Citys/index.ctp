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
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="	">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Toranj demo 4</title>
        <?= $this->Html->meta('icon') ?>
    		<?= $this->Html->css('base.css') ?>
    		<?= $this->Html->css('cake.css') ?>
    		<?= $this->Html->css('/assets/css/base.css') ?>
        <!-- CSS styles -->
        <link rel="stylesheet" href="../assets/css/base.css">
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
								<?php echo $this->Html->link('Home', '/')?>
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

		<!-- Page main wrapper -->
		<div id="main-content" class="dark-template">
			<div class="page-wrapper">

				<!-- Sidebar -->
				<div class="page-side ajax-element">
					<div class="inner-wrapper vcenter-wrapper">
						<div class="side-content vcenter">
							<h1 class="title">
								<span class="second-part">Recent</span>
								<span>Projects</span>
							</h1>
							<div class="grid-filters-wrapper">
								<a href="#" class="select-filter"><i class="fa fa-filter"></i> Filter</a>
								<ul class="grid-filters">
								  <li class="active"><a href="#" data-filter="*">all</a></li>
								  <li><a href="#" data-filter=".web-design">Web Design</a></li>
								  <li><a href="#" data-filter=".photography">Photography</a></li>
								  <li><a href="#" data-filter=".video">Video</a></li>
								  <li><a href="#" data-filter=".print">Print</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /Sidebar -->

				<!-- Main Contents -->
				<div class="page-main ajax-element">
					<!-- portfolio wrapper -->	
					<div class="grid-portfolio same-ratio-items">
						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1" data-width-ratio="2">
							<a href="portfolio-1.html" class="ajax-portfolio normal">
								<img src="../img/portfolio/grid/18.jpg" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<h3 class="title">Project title</h3>
									<h4 class="subtitle">Short description of the project and about it</h4>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->
						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1 web-design grid-sizer">
							<a href="portfolio-1.html" class="ajax-portfolio normal">
								<img src="../img/portfolio/grid/13.jpg" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<div class="overlay-texts">
										<h3 class="title">Project title</h3>
										<h4 class="subtitle">Photography, print</h4>
									</div>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->
						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1 photography">
							<a href="portfolio-1.html" class="ajax-portfolio normal">
								<img src="../img/portfolio/grid/v02.jpg" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<h3 class="title">Project title</h3>
									<h4 class="subtitle">Short description of the project and about it</h4>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->
						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1 video">
							<a href="portfolio-1.html" class="ajax-portfolio normal">
								<img src="../img/portfolio/grid/14.jpg" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<h3 class="title">Project title</h3>
									<h4 class="subtitle">Short description of the project and about it</h4>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->
						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1 print">
							<a href="portfolio-1.html" class="ajax-portfolio normal">
								<img src="../img/portfolio/grid/15.jpg" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<h3 class="title">Project title</h3>
									<h4 class="subtitle">Short description of the project and about it</h4>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->
						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1 web-design">
							<a href="portfolio-1.html" class="ajax-portfolio normal">
								<img src="../img/portfolio/grid/v01.jpg" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<h3 class="title">Project title</h3>
									<h4 class="subtitle">Short description of the project and about it</h4>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->
						
						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1 web-design" data-width-ratio="2">
							<a href="portfolio-1.html" class="ajax-portfolio normal">
								<img src="../img/portfolio/grid/19.jpg" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<h3 class="title">Project title</h3>
									<h4 class="subtitle">Short description of the project and about it</h4>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->

						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1 print">
							<a href="portfolio-1.html" class="ajax-portfolio normal">
								<img src="../img/portfolio/grid/16.jpg" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<h3 class="title">Project title</h3>
									<h4 class="subtitle">Short description of the project and about it</h4>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->
						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1 photography">
							<a href="portfolio-1.html" class="ajax-portfolio normal">
								<img src="../img/portfolio/grid/17.jpg" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<h3 class="title">Project title</h3>
									<h4 class="subtitle">Short description of the project and about it</h4>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->
						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1 photography">
							<a href="portfolio-1.html" class="ajax-portfolio normal">
								<img src="../img/portfolio/grid/v04.jpg" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<h3 class="title">Project title</h3>
									<h4 class="subtitle">Short description of the project and about it</h4>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->	
						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1 photography">
							<a href="portfolio-1.html" class="ajax-portfolio normal">
								<img src="../img/portfolio/grid/18.jpg" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<h3 class="title">Project title</h3>
									<h4 class="subtitle">Short description of the project and about it</h4>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->	
							
						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1 video">
							<a href="portfolio-1.html" class="ajax-portfolio normal">
								<img src="../img/portfolio/grid/20.jpg" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<h3 class="title">Project title</h3>
									<h4 class="subtitle">Short description of the project and about it</h4>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->

						

						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1 print">
							<a href="portfolio-1.html" class="ajax-portfolio normal">
								<img src="../img/portfolio/grid/12.jpg" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<h3 class="title">Project title</h3>
									<h4 class="subtitle">Short description of the project and about it</h4>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->	
						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1 print">
							<a href="portfolio-1.html" class="ajax-portfolio normal">
								<img src="../img/portfolio/grid/v05.jpg" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<h3 class="title">Project title</h3>
									<h4 class="subtitle">Short description of the project and about it</h4>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->	
						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1 print">
							<a href="portfolio-1.html" class="ajax-portfolio normal">
								<img src="../img/portfolio/grid/11.jpg" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<h3 class="title">Project title</h3>
									<h4 class="subtitle">Short description of the project and about it</h4>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->	
						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1 print">
							<a href="portfolio-1.html" class="ajax-portfolio normal">
								<img src="../img/portfolio/grid/10.jpg" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<h3 class="title">Project title</h3>
									<h4 class="subtitle">Short description of the project and about it</h4>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->	
						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1 print">
							<a href="portfolio-1.html" class="ajax-portfolio normal">
								<img src="../img/portfolio/grid/v06.jpg" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<h3 class="title">Project title</h3>
									<h4 class="subtitle">Short description of the project and about it</h4>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->	
						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1 print">
							<a href="portfolio-1.html" class="ajax-portfolio normal">
								<img src="../img/portfolio/grid/09.jpg" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<h3 class="title">Project title</h3>
									<h4 class="subtitle">Short description of the project and about it</h4>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->	
						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1 print">
							<a href="portfolio-1.html" class="ajax-portfolio normal">
								<img src="../img/portfolio/grid/08.jpg" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<h3 class="title">Project title</h3>
									<h4 class="subtitle">Short description of the project and about it</h4>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->	
						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1 print">
							<a href="portfolio-1.html" class="ajax-portfolio normal">
								<img src="../img/portfolio/grid/07.jpg" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<h3 class="title">Project title</h3>
									<h4 class="subtitle">Short description of the project and about it</h4>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->	
						<!-- portfolio Item -->		
						<div class="gp-item tj-hover-1 print">
							<a href="portfolio-1.html" class="ajax-portfolio normal">
								<img src="../img/portfolio/grid/06.jpg" alt="alt" class="img-responsive">
								<!-- Item Overlay -->	
								<div class="tj-overlay">
									<h3 class="title">Project title</h3>
									<h4 class="subtitle">Short description of the project and about it</h4>
								</div>
								<!-- /Item Overlay -->	
							</a>
						</div>
						<!-- /portfolio Item -->	
						


					</div>
					<!-- /portfolio wrapper -->	
				</div>
				<!-- /Main Contents -->



				<!--Ajax folio-->
				<div id="ajax-folio-loader">
					<!-- loading css3 -->
					<div id="followingBallsG">
						<div id="followingBallsG_1" class="followingBallsG">
						</div>
						<div id="followingBallsG_2" class="followingBallsG">
						</div>
						<div id="followingBallsG_3" class="followingBallsG">
						</div>
						<div id="followingBallsG_4" class="followingBallsG">
						</div>
					</div>
				</div>
				<div id="ajax-folio-item"></div>
				<!--Ajax folio-->
			</div>
		</div>
		<!-- /Page main wrapper -->

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
		<script src="../assets/masterslider/jquery.easing.min.js"></script>
		<script src="../assets/masterslider/masterslider.min.js"></script>
		
		<!-- theme custom scripts -->
		<script type="text/javascript" src="../js/custom.js"></script>

		<!-- /JavaScript files-->	

		
    </body>
</html>