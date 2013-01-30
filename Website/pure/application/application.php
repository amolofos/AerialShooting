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
	
	include "application_items.php";
	include "portofolio_items.php";
	include "partners_items.php";
	
	if( isset($_GET[ 'lang' ]) ) {
		$language = $_GET[ 'lang' ];
		if ( $language != "el" || $language != "en" ) {
			$language = $_GET[ 'lang' ];
		}
	} else {
		$language = "el";
	}
?>
<!DOCTYPE html>
<html xml:lang="<?php echo $language; ?>" lang="<?php echo $language; ?>" dir="ltr" xmlns="http://www.w3.org/1999/xhtml"  xmlns:fb="http://ogp.me/ns/fb#" itemscope itemtype="http://schema.org/WebPage">
	<head>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="css/mobile.css" />
		<link rel="stylesheet" type="text/css" href="css/font_<?php echo $language; ?>.css" />
		<!-- <link rel="stylesheet" type="text/css" href="css/mobile.min.css" /> -->
		<!-- Enabling HTML5 tags for older IE browsers -->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>		
		<![endif]-->
		<!--[if IE ]>
			<link rel="stylesheet" id="ie-css"  href="./css/ie.css" type="text/css" media="all">
		<![endif]-->
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		
		<title lang="<?php echo $language ?>"><?php if ($language == "el") { echo $application_items["app_head_title"]; } else { echo $application_items["app_head_title_en"]; }?></title>
		<link rel="icon" type="image/png" href="img/unmanned-evolution.ico"/>
		<meta name="description" content="<?php if ($language == "el") { echo $application_items["app_head_description"]; } else { echo $application_items["app_head_description_en"]; }?>"/>
		<meta name="application-name" content="<?php if ($language == "el") { echo $application_items["app_application-name"]; } else { echo $application_items["app_application-name_en"]; }?>"/>
		<meta name="keywords" content="<?php if ($language == "el") { $keywords = $application_items["app_keywords_en"]; $keywords .= $application_items["app_keywords"]; echo $keywords; } else { echo $application_items["app_keywords_en"]; }?>"/>
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
		<meta property='og:locale' content="<?php if ($language == "el") { echo "el_GR"; } else { echo "en_US"; }?>"/>
		<meta property='og:locale:alternate' content="<?php if ($language == "el") { echo "en_US"; } else { echo "el_GR"; }?>"/>
		<meta property='og:title' content="Unmanned Evolution | Air / Video Experts"/>
		<meta property='og:description' content="<?php if ($language == "el") { echo $application_items["app_graph_desription"]; } else { echo $application_items["app_graph_desription_en"]; }?>"/>
		<meta property='og:url' content="http://www.unmanned-evolution.com"/>
		<meta property='og:type' content="website"/>
		<meta property='og:site_name' content="Unmanned Evolution" />
		<!--  <meta property='og:image' content="http://www.unmanned-evolution.com/public/pics/Unmanned-Evolution-logo-multicopter-with-no-background.png" /> -->
		<!--  <meta property='og:image' content="http://www.unmanned-evolution.com/public/pics/Unmanned-Evolution-logo-with-multicopter-name-and-moto.png" /> -->
		<!--  <meta property='og:image' content="http://www.unmanned-evolution.com/public/pics/Aerial-photography-of-married-couple-in-front-of-a-greek-church-at-Komotini_original_445x200.png" /> -->
		<!--  <meta property='og:image' content="http://www.unmanned-evolution.com/public/pics/Unmanned-Evolutions-Multicopter-in-a-cloudy-day_original_300x200.png" /> -->
		<!--  Google-compatible meta tags -->
		<meta itemprop="name" content="Unmanned Evolution | Air / Video Experts" />
		<meta itemprop="url" content="http://www.unmanned-evolution.com" />
		<meta itemprop="description" content="<?php if ($language == "el") { echo $application_items["app_itemprop_desription"]; } else { echo $application_items["app_itemprop_desription_en"]; }?>"/>
		<meta itemprop='image' content="http://www.unmanned-evolution.com/public/pics/Unmanned-Evolution-logo-multicopter-with-no-background.png" />
		<meta itemprop='image' content="http://www.unmanned-evolution.com/public/pics/Unmanned-Evolution-logo-with-multicopter-name-and-moto.png" />
		<meta itemprop='image' content="http://www.unmanned-evolution.com/public/pics/Aerial-photography-of-married-couple-in-front-of-a-greek-church-at-Komotini_original_445x200.png" />
		<meta itemprop='image' content="http://www.unmanned-evolution.com/public/pics/Unmanned-Evolutions-Multicopter-in-a-cloudy-day_original_300x200.png" />
		<meta itemprop='inLanguage' content="<?php if ($language == "el") { echo "el_GR"; } else { echo "en_US"; }?>" />
		<meta itemprop='keywords' content="<?php if ($language == "el") { $keywords = $application_items["app_itemprop_keywords"]; $keywords .= $application_items["app_itemprop_keywords_en"]; echo $keywords; } else { echo $application_items["app_itemprop_keywords_en"]; }?>"/>
		<!-- <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script> -->
		<!-- <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script> -->
		<!-- <script src="scripts/jquery.galleriffic.js"></script> -->
		<!-- <script src="scripts/jquery.cycle.lite.js"></script> -->
		<!-- <script src="scripts/jquery.easing.1.3.js"></script> -->
		<!-- <script src="scripts/jquery.lazyload.min.js"></script> -->
		<script src="scripts/combined.min.js"></script>
		<!-- <script src="scripts/jquery.viewport.mini.js"></script> -->
		<!-- <script src="scripts/jquery.masonry.min.js"></script> -->
		<!-- Custom scripts -->
		<!-- <script src="scripts/unmanned_evolution.js"></script> -->
		<script src="scripts/unmanned_evolution.min.js"></script>
		
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