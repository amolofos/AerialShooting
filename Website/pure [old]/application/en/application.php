<?php
/*

	This file is the landing one of www.unmanned-evolution.com
By Dimitri Kafetzi @ http://www.kafetzisd.gr
Distributed under the Creative Commons Attribution 3.0 License

*/
?>
<?php
	//session_start();
	date_default_timezone_set( 'Europe/Athens' );
	header( 'Content-Type: text/html; charset=UTF-8' );
	header( 'Cache-Control: max-age=2592000' ); //30days (60sec * 60min * 24hours * 30days)
	header( 'Expires: Mon, 7 Jul 2013 05:00:00 GMT' );
	header( 'Last-Modified: ' . date("F d Y H:i:s e", getlastmod()) );
?>
<!DOCTYPE html>
<html xml:lang="el" lang="el" dir="ltr" xmlns="http://www.w3.org/1999/xhtml"  xmlns:fb="http://ogp.me/ns/fb#" itemscope itemtype="http://schema.org/WebPage">
	<head>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="../css/mobile.css" />
		<!-- <link rel="stylesheet" type="text/css" href="css/mobile.min.css" /> -->
		<!-- Enabling HTML5 tags for older IE browsers -->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>		
		<![endif]-->
		<!--[if IE ]>
			<link rel="stylesheet" id="ie-css"  href="./css/ie.css" type="text/css" media="all">
		<![endif]-->
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		
		<title lang="en">Unmanned Evolution | Air / Video Experts</title>
		<link rel="icon" type="image/png" href="../img/unmanned-evolution.ico"/>
		<meta name="description" content="Welcome at Unmanned Evolution's website. We are specializing in aerial cinematography, aerial photography, aerial observation and rescue. Incorporating uavs (unmanned aerial vehicles) -multicopters- together with high definition cameras we succeed in providing the best image and video quality at the desired and maximum altitude."/>
		<meta name="application-name" content="Επίσημη ιστοσελίδα"/>
		<meta name="keywords" content="official website, official webpage, unmanned-evolution, unmanned.evolution, unmanned, evolution, aerial cinematography, aerial photography, unmanned aerial vehicles, uav, multicopter, helicopter, hexacopter, production, movie, movie production, video clip, marketing, weddings, search and rescue, aerial observation, greece"/>
		<meta name="author" content="Unmanned Evolution"/>
		
		<link rel="canonical" href="www.unmanned-evolution.com" />
		
		<meta name="revisit-after" content="1 Days"/>
		<meta name="robots" content="index, follow" />
		<meta name="googlebot" content="noodp">
		
		<meta name="rating" content="general">
		
		<meta name="distribution" content="global" />
		<meta name="DC.title" content="Unmanned Evolution | Air / Video Experts" />
		<meta name="geo.region" content="GR-A1" />
		<meta name="geo.placename" content="Athens" />
		<meta name="geo.position" content="37.975496;23.734868" />
		<meta name="ICBM" content="37.975496, 23.734868" />
		
		<!-- open graph meta tags -->
		<meta property='og:locale' content="en_GB"/>
		<meta property='og:title' content="Unmanned Evolution | Air / Video Experts"/>
		<meta property='og:description' content="Aerial cinematography and photography"/>
		<meta property='og:url' content="http://www.unmanned-evolution.com"/>
		<meta property='og:type' content="website"/>
		<meta property='og:site_name' content="Unmanned Evolution" />
		<!--  Google-compatible meta tags -->
		<meta itemprop="name" content="Unmanned Evolution | Air / Video Experts" />
		<meta itemprop="url" content="http://www.unmanned-evolution.com" />
		<meta itemprop="description" content="Aerial cinematography and photography"/>
		<meta itemprop='image' content="http://www.unmanned-evolution.com/public/pics/Unmanned-Evolution-logo-multicopter-with-no-background.png" />
		<meta itemprop='image' content="http://www.unmanned-evolution.com/public/pics/Unmanned-Evolution-logo-with-multicopter-name-and-moto.png" />
		<meta itemprop='image' content="http://www.unmanned-evolution.com/public/pics/Aerial-photography-of-married-couple-in-front-of-a-greek-church-at-Komotini_original_445x200.png" />
		<meta itemprop='image' content="http://www.unmanned-evolution.com/public/pics/Unmanned-Evolutions-Multicopter-in-a-cloudy-day_original_300x200.png" />
		<meta itemprop='inLanguage' content="en_GB" />
		<meta itemprop='keywords' content="official website, official webpage, unmanned-evolution, unmanned.evolution, unmanned, evolution, aerial cinematography, aerial photography, unmanned aerial vehicles, uav, multicopter, helicopter, hexacopter, production, movie, movie production, video clip, marketing, weddings, search and rescue, aerial observation, greece" />
		<!-- <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script> -->
		<!-- <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script> -->
		<!-- <script src="scripts/jquery.galleriffic.js"></script> -->
		<!-- <script src="scripts/jquery.cycle.lite.js"></script> -->
		<!-- <script src="scripts/jquery.easing.1.3.js"></script> -->
		<!-- <script src="scripts/jquery.lazyload.min.js"></script> -->
		<script src="../scripts/combined.min.js"></script>
		<!-- <script src="scripts/jquery.viewport.mini.js"></script> -->
		<!-- <script src="scripts/jquery.masonry.min.js"></script> -->
		<!-- Custom scripts -->
		<!-- <script src="scripts/unmanned_evolution.js"></script> -->
		<script src="../scripts/unmanned_evolution.min.js"></script>
		
		 <!-- Google analytics -->
		<script type="text/javascript">
			var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-35818718-1']);
				_gaq.push(['_setDomainName', 'unmanned-evolution.com']);
				_gaq.push(['_setAllowLinker', true]);
				_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</head>
	<?php flush(); ?>
	<body id="body" class="body">
	
<?php
	// sections
	// top level header
	include 'files/top_level_header.php';
?>
		<div id="landing_page_wrapper">
		
<?php	

	// landing section
	include 'files/landing_section.php';

	// services section
	include 'files/services_section.php';
	
	// applications section
	include 'files/applications_section.php';
	
	// company section
	include 'files/company_section.php';
	
	// contact section
	include 'files/contact_section.php';
?>
		</div>
		
<?php

	// top level footer
	include 'files/top_level_footer.php';
	include 'files/terms_of_use_section.php';
	include 'files/sensitive_data_section.php';
	include 'files/unmanned_law_section.php';
?>	

	</body>
	</html>