<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/grid.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/camera.css">
	<?php if( is_page_template( 'page-contact.php' ) )  { ?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/contact-form.css">
	<?php } ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-migrate-1.2.1.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/camera.js"></script>
	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.mobile.customized.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/wow/wow.js"></script>
	<script>
		$(document).ready(function () {
			if ($('html').hasClass('desktop')) {
				new WOW().init();
			}
		});
		var scsettings = { 'themedirectory' : '<?php echo get_stylesheet_directory_uri(); ?>' };
	</script>
	<!--<![endif]-->



	<!--[if lt IE 9]>
  <div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
      <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
        <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
      </map>
  </div>
  <![endif]-->
  <!--[if lt IE 9]>
  	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5shiv.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ie.css">
  <![endif]-->
</head>

<body>

	<div class="top_section">
		<ul class="soc_icons wow fadeInRight">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		</ul>

		<div class="fright marRight1">
			<a href="#" class="more_btn v2">Login</a>
			<a href="#" class="more_btn">Registration</a>
		</div>
	</div>

	<!--========================================================
														HEADER 
	=========================================================-->
	<header id="header">
		<div id="stuck_container">

						<h1><a href="index.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="logo"></a> </h1>
					
						<nav>
							<ul class="sf-menu">
								<li class="current"><a href="index.html">Home<strong></strong></a>
									<ul class="submenu">
										<li><a href="#">Lorem ipsum</a></li>
										<li><a href="#">Conse ctetur</a></li>
										<li><a href="#">Do eiusmod </a>
											<ul class="submenu2">
												<li><a href="#">News</a></li>
												<li class="last_submenu_item"><a href="#">Archive</a></li>
											</ul>
										</li>
										<li><a href="#">Incididunt ut</a></li>
										<li><a href="#">Et dolore </a></li>
										<li class="last_submenu_item"><a href="#">Ut enim ad minim</a></li>
									</ul>
								</li>
								<li><a href="index-1.html">Services<strong></strong></a></li>
								<li><a href="index-2.html">About<strong></strong></a></li>
								<li><a href="index-3.html">News<strong></strong></a></li>
								<li id="last-li"><a href="index-4.html">Contacts<strong></strong></a></li>
							</ul>
						</nav>
			<div class="clear"></div>
		</div>
	</header>
