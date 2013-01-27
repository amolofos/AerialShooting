<?php
/*

	This file is the landing one of www.unmanned-evolution.com
By Dimitri Kafetzi @ http://www.kafetzisd.gr
Distributed under the Creative Commons Attribution 3.0 License

*/
?>
<?php
	// session_start();
	date_default_timezone_set( 'Europe/Athens' );
	header( 'Content-Type: text/html; charset=UTF-8' );
	header( 'Cache-Control: max-age=2592000' ); //30days (60sec * 60min * 24hours * 30days)
	header( 'Expires: Mon, 7 Jul 2013 05:00:00 GMT' );
	header( 'Last-Modified: ' . date("F d Y H:i:s e", getlastmod()) );
?>
<!DOCTYPE HTML>
<html xml:lang="el" lang="el" dir="ltr" xmlns="http://www.w3.org/1999/xhtml"  xmlns:addthis="http://www.addthis.com/help/api-spec" itemscope itemtype="http://schema.org/WebPage">
	<head>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="../css/mobile.css" />
		<!-- <link rel="stylesheet" type="text/css" href="css/mobile.min.css" /> -->
		<link rel="stylesheet" type="text/css" href="../css/portofolio.css" />
		<!-- <link rel="stylesheet" type="text/css" href="css/portofolio.min.css" /> -->
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title lang="en">Unmanned Evolution portofolio</title>
		<link rel="icon" type="image/png" href="../img/unmanned-evolution.ico"/>
		<meta name="description" content="Welcome at Unmanned Evolution's portofolio. You are presented with samples of our work to evaluate the quality of it. Plenty of photographs and video are categorised into : aerial cinematography, aerial photography, aerial observation and rescue, uavs (unmanned aerial vehicle - multicopters), high definition cameras."/>
		<meta name="application-name" content="Portofolio"/>
		<meta name="keywords" content="portofolio, official webpage, unmanned-evolution, unmanned.evolution, unmanned, evolution, aerial cinematography, aerial photography, unmanned aerial vehicles, uav, multicopter, helicopter, hexacopter, production, movie, movie production, video clip, marketing, weddings, search and rescue, aerial observation, greece"/>
		<meta name="author" content="Unmanned Evolution"/>
		
		<link rel="canonical" href="www.unmanned-evolution.com/application/en/portofolio.php" />
		
		<meta name="robots" content="index, follow" />
		<meta name="googlebot" content="noodp">
		<meta name="revisit-after" content="1 Days"/>
		
		<meta name="rating" content="general">
		
		<meta name="distribution" content="global" />
		<meta name="DC.title" content="Unmanned Evolution Portofolio" />
		<meta name="geo.region" content="GR-A1" />
		<meta name="geo.placename" content="Athens" />
		<meta name="geo.position" content="37.975496;23.734868" />
		<meta name="ICBM" content="37.975496, 23.734868" />
		<!-- open graph meta tags -->
		<meta property="og:locale" content="en_GB"/>
		<meta property="og:title" content="Unmanned Evolution portofolio | Air / Video Experts"/>
		<meta property="og:description" content="Portofolio of Unmmanned Evolution"/>
		<meta property="og:url" content="http://www.unmanned-evolution.com/application/en/portofolio.php/"/>
		<meta property="og:type" content="image"/>
		<meta property="og:site_name" content="Unmanned Evolution portofolio" />
		<meta property="og:image" content="http://www.unmanned-evolution.com/public/pics/Unmanned-Evolution-logo-multicopter-with-no-background.png" />
		<meta property="og:image" content="http://www.unmanned-evolution.com/public/pics/Unmanned-Evolutions-Multicopter-in-a-cloudy-day_original_300x200.png" />
		<!--  Google-compatible meta tags -->
		<meta itemprop="name" content="Unmanned Evolution | Air / Video Experts" />
		<meta itemprop="url" content="http://www.unmanned-evolution.com/application/en/portofolio.php"/>
		<meta itemprop="description" content="Portofolio of Unmmanned Evolution"/>
		<meta itemprop="image" content="http://www.unmanned-evolution.com/public/pics/Unmanned-Evolution-logo-multicopter-with-no-background.png" />
		<meta itemprop="image" content="http://www.unmanned-evolution.com/public/pics/Unmanned-Evolutions-Multicopter-in-a-cloudy-day_original_300x200.png" />
		<meta itemprop="inLanguage" content="en_GB" />
		<meta itemprop="keywords" content="portofolio, official webpage, unmanned-evolution, unmanned.evolution, unmanned, evolution, aerial cinematography, aerial photography, unmanned aerial vehicles, uav, multicopter, helicopter, hexacopter, production, movie, movie production, video clip, marketing, weddings, search and rescue, aerial observation, greece" />
		<!-- Enabling HTML5 tags for older IE browsers -->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>		
		<![endif]-->
		<!--[if IE ]>
			<link rel="stylesheet" id="ie-css"  href="./css/ie.css" type="text/css" media="all">
		<![endif]-->
		
		<!-- <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script> -->
		<!-- <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script> -->
		<!-- <script src="scripts/jquery.galleriffic.js"></script> -->
		<!-- <script src="scripts/jquery.cycle.lite.js"></script> -->
		<!-- <script src="scripts/jquery.easing.1.3.js"></script> -->
		<!-- <script src="scripts/jquery.lazyload.min.js"></script> -->
		<!-- <script src="scripts/jquery.viewport.mini.js"></script> -->
		<!-- <script src="scripts/jquery.masonry.min.js"></script> -->
		<script src="../scripts/combined.min.js"></script>
		<script src="../scripts/jquery.viewport.mini.js"></script>
		<script src="../scripts/jquery.masonry.min.js"></script>
		<!-- Custom scripts -->
		<!-- <script src="scripts/portofolio.js"></script> -->
		<script src="../scripts/portofolio.min.js"></script>

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
		
		
		<script src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5089d9595d29b9df&domready=1&async=1"></script>
		<script>
			var addthis_share = {
				"url": "http://www.unmanned-evolution.com/application/en/portofolio.php",
				"title": "Unmanned Evolution portofolio",
				"description": "Unmanned Evolution portofolio"
			};
			var addthis_config = {
				"ui_click": true,
				"ui_language": 'el',
				"data_ga_property": 'UA-35818718-1',
				"data_ga_social": true,
				"data_track_addressbar": false
			};
		</script>
	</head>
	<?php flush(); ?>
	<body id="body" class="body">
	
<?php
	// sections
	// top level header
	include 'files/top_level_header.php';
?>
		<div id="portofolio_page_wrapper">		
		
			<!-- portofolio section -->
			<div id="portofolio_section_wrapper">
				<section id="portofolio_section">
					<nav id="filter">
						<ul>
							<li id="portofolio_item">Full list</li>
							<li id="photography">Photography</li>
							<li id="video">Video</li>
							<li id="aerial_cinematography">Aerial Cinematography</li>
							<li id="marketing">Advertising</li>
							<li id="tourism">Tourism</li>
							<li id="hotels">Hotels</li>
							<li id="movies">Movies</li>
							<li id="concerts">Concerts</li>
							<li id="video_clip">Video clip</li>
							<li id="social">Social events</li>
							<li id="sports">Sports</li>
							<li id="real_estate">Real estate</li>
							<li id="archeology">Archaelogy</li>
							<li id="industry">Industry</li>
							<li id="engineering">Engineering</li>
							<li id="surveillance">Surveillance</li>
							<li id="search">Search</li>
							<li id="agriculture">Agriculture</li>
							
							<li id="mountains">Mountains</li>
							<li id="Unmanned_Evolution">Unmanned Evolution</li>
							<li id="equipment">Equipment</li>
						</ul>
					<!-- The menu items will go here (generated by jQuery) -->
					</nav>
					
					<section id="container">
						<div id="stage">
							<!-- Your portfolio items go here -->
							<!-- pictures -->
							<div id="Aerial-photography-of-married-couple-in-front-of-a-greek-church-at-Komotini_iFrame_wrapper" class="portofolio_item photography social">

							</div>
							
							<div id="Married-couple-in-front-of-a-greek-church-low-height_iFrame_wrapper" class="portofolio_item photography social">

							</div>
							
							<div id="Married-couple-at-Komotini_iFrame_wrapper" class="portofolio_item photography social">

							</div>
							
							<div id="Married-couple-in-front-of-a-greek-church_iFrame_wrapper" class="portofolio_item photography social">

							</div>
							
							<div id="Married-couple-in-front-of-a-greek-church-at-Komotini_iFrame_wrapper" class="portofolio_item photography social">

							</div>
							
							<div id="Just-Married-Couple-at-the-edge-of-a-bridge_iFrame_wrapper" class="portofolio_item photography social">

							</div>
							
							<div id="Picture-of-a-bride-through-her-window_iFrame_wrapper" class="portofolio_item photography social">

							</div>
							
							<div id="Married-couple-by-the-river-from-Goris-Photography_iFrame_wrapper" class="portofolio_item photography social">

							</div>
							
							<div id="Just-Married-Couple-at-the-edge-of-a-bridge-from-Goris-Photography_iFrame_wrapper" class="portofolio_item photography social">

							</div>
							
							<div id="Married-couple-sitting-on-a-bridge-from-Goris-Photography_iFrame_wrapper" class="portofolio_item photography social">

							</div>					
							
							<div id="Married-couple-playing-by-the-river-from-Goris-Photography_iFrame_wrapper" class="portofolio_item photography social">

							</div>

							<div id="Unmanned-Evolution-multicopter-filming-married-couple-from-Goris-Photography_iFrame_wrapper" class="portofolio_item photography social">

							</div>
							
							<div id="Unmanned-Evolution-multicopter-and-weddings-from-Goris-Photography_iFrame_wrapper" class="portofolio_item photography social">

							</div>
							
							<div id="Husband-takes-his-wife-on-hands-by-the-river-from-Goris-Photography_iFrame_wrapper" class="portofolio_item photography social">

							</div>
							
							<div id="Bride-looking-at-her-husband-from-Goris-Photography_iFrame_wrapper" class="portofolio_item photography social">

							</div>
							
							<div id="Married-couple-kissing-at-traditional-city-of-Xanthi-Greece_iFrame_wrapper" class="portofolio_item photography social">

							</div>
							
							<div id="Aerial-photo-of-a-married-couple-at-traditional-city-of-Xanthi-Greece_iFrame_wrapper" class="portofolio_item photography social">

							</div>
							
							<div id="Artistic-photo-of-a-married-couple_iFrame_wrapper" class="portofolio_item photography social">

							</div>
							
							<div id="Artistic-black-and-white-aerial-photo-of-a-married-couple_iFrame_wrapper" class="portofolio_item photography social">

							</div>
							
							<div id="Syntagma-Square-Athens-Greece_iFrame_wrapper" class="portofolio_item photography marketing tourism">

							</div>
							
							<div id="Theatre-of-Lykavittos-by-nightfall_iFrame_wrapper" class="portofolio_item photography marketing tourism reale_state hotels">

							</div>
							
							<div id="Columns-of-the-Olympian-Zeus-Athens-Greece_iFrame_wrapper" class="portofolio_item photography marketing archeology">

							</div>
							
							<div id="Panoramic-view-of-Athens-Greece_iFrame_wrapper" class="portofolio_item photography marketing real_estate">

							</div>
							
							<div id="Beach-at-sunset_iFrame_wrapper" class="portofolio_item photography marketing movies">

							</div>
							
							<div id="Arch-of-Hadrian_iFrame_wrapper" class="portofolio_item photography marketing archeology">

							</div>
							
							<div id="Entrance-of-Zappeion_iFrame_wrapper" class="portofolio_item photography marketing archeology">

							</div>
							
							<div id="Freighter-from-above-in-a-greek-port_iFrame_wrapper" class="portofolio_item photography marketing industry surveillance">

							</div>
							
							<div id="Sea-side-building-Greece_iFrame_wrapper" class="portofolio_item photography marketing tourism reale_state hotels">

							</div>
							
							<div id="Unmanned-Evolutions-Multicopter-in-a-cloudy-day_iFrame_wrapper" class="portofolio_item photography Unmanned_Evolution equipment">

							</div>
							
							<div id="Upside-down-Multicopter_iFrame_wrapper" class="portofolio_item photography Unmanned_Evolution equipment">

							</div>
							
							<div id="Unmanned-Evolution-team_iFrame_wrapper" class="portofolio_item photography Unmanned_Evolution">

							</div>
							
							<div id="Open-Field-By-River_iFrame_wrapper" class="portofolio_item photography marketing real_estate">

							</div>
							
							<div id="Sea-side-resorts_iFrame_wrapper" class="portofolio_item photography marketing tourism reale_state">

							</div>
							
							<div id="Sea-side-football-field_iFrame_wrapper" class="portofolio_item photography marketing sports reale_state">

							</div>
							
							<div id="Someone-is-watching-you-from-the-sky_iFrame_wrapper" class="portofolio_item photography Unmanned_Evolution">

							</div>
										
							<!-- ------------------------------------ -->
							<!-- videos -->
							<div id="Multi-rotor-demo-scenes_iFrame_wrapper" class="portofolio_item video aerial_cinematography">

							</div>
							
							<div id="Wedding-trailer_iFrame_wrapper" class="portofolio_item video aerial_cinematography social">

							</div>
							
							<div id="Mountains_iFrame_wrapper" class="portofolio_item video agriculture surveillance search mountains">

							</div>
							
							<div id="Concerts_iFrame_wrapper" class="portofolio_item video conserts video_clip">
								
							</div>
							
							<div id="Concerts_live_iFrame_wrapper" class="portofolio_item video conserts video_clip">

							</div>
							
							<div id="Running_man_iFrame_wrapper" class="portofolio_item video movies video_clip">

							</div>
							
							<div id="Ιndustrial_area_iFrame_wrapper" class="portofolio_item video industry engineering">

							</div>
							
							<div id="Τourism_businesses_iFrame_wrapper" class="portofolio_item video hotels real_estate marketing">

							</div>
							
							<div id="Οbservation_environment_iFrame_wrapper" class="portofolio_item video surveillance">

							</div>
							
							<div id="Downhill_dirfy_2011_iFrame_wrapper" class="portofolio_item video movies video_clip marketing sports">

							</div>
							
							<div id="Parkour_2011_iFrame_wrapper" class="portofolio_item video movies video_clip marketing sports">

							</div>
							
							<div id="Presentation_zembili_iFrame_wrapper" class="portofolio_item video movies video_clip marketing sports">

							</div>
							
							<div id="Concerts_Tsaligopoulou_iFrame_wrapper" class="portofolio_item video movies video_clip marketing sports">

							</div>
						</div>
					</section>
				
				</section>
			</div>

			<div id="portofolio_slideshow_section_wrapper">
				<section id="portofolio_slideshow_section">
				</section>
			</div>
		</div>
<?php
	// top level footer
	include 'files/top_level_footer.php';
	include 'files/terms_of_use_section.php';
	include 'files/sensitive_data_section.php';
	// include 'files/unmanned_law_section.php';
?>
	</body>
	</html>