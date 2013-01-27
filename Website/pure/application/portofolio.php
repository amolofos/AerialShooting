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
	
	include "application_items.php";
	include "portofolio_items.php";
	include "portofolio_nav.php";
	
	if( isset($_GET[ 'lang' ]) ) {
		$language = $_GET[ 'lang' ];
	} else {
		$language = "el";
	}
	
	$portofolio_nav_used = array (
		"portofolio_item",
		"photography",
		"video",
		"aerial_cinematography",
		"marketing",
		"tourism",
		"hotels",
		"movies",
		"concerts",
		"video_clip",
		"social",
		"sports",
		"real_estate",
		"archaeology",
		"industry",
		"engineering",
		"surveillance",
		"search",
		"agriculture",
		"mountains",
		"Unmanned_Evolution",
		"equipment"
	);
	
	$portofolio_items_used = array (
		/* ***************** picture ***************** */
		"Aerial-photography-of-married-couple-in-front-of-a-greek-church-at-Komotini",
		"Married-couple-in-front-of-a-greek-church-low-height",
		"Married-couple-at-Komotini",
		"Married-couple-in-front-of-a-greek-church",
		"Married-couple-in-front-of-a-greek-church-at-Komotini",
		"Just-Married-Couple-at-the-edge-of-a-bridge",
		"Picture-of-a-bride-through-her-window",
		"Married-couple-by-the-river-from-Goris-Photography",
		"Just-Married-Couple-at-the-edge-of-a-bridge-from-Goris-Photography",
		"Married-couple-sitting-on-a-bridge-from-Goris-Photography",							
		"Married-couple-playing-by-the-river-from-Goris-Photography",
		"Unmanned-Evolution-multicopter-filming-married-couple-from-Goris-Photography",
		"Unmanned-Evolution-multicopter-and-weddings-from-Goris-Photography",
		"Husband-takes-his-wife-on-hands-by-the-river-from-Goris-Photography",
		"Bride-looking-at-her-husband-from-Goris-Photography",
		"Married-couple-kissing-at-traditional-city-of-Xanthi-Greece",
		"Aerial-photo-of-a-married-couple-at-traditional-city-of-Xanthi-Greece",
		"Artistic-photo-of-a-married-couple",
		"Artistic-black-and-white-aerial-photo-of-a-married-couple",
		"Syntagma-Square-Athens-Greece",
		"Theatre-of-Lykavittos-by-nightfall",
		"Columns-of-the-Olympian-Zeus-Athens-Greece",
		"Panoramic-view-of-Athens-Greece",
		"Beach-at-sunset",
		"Arch-of-Hadrian",
		"Entrance-of-Zappeion",
		"Freighter-from-above-in-a-greek-port",
		"Sea-side-building-Greece",
		"Unmanned-Evolutions-Multicopter-in-a-cloudy-day",
		"Upside-down-Multicopter",
		"Unmanned-Evolution-team",
		"Open-Field-By-River",
		"Sea-side-resorts",
		"Sea-side-football-field",
		"Someone-is-watching-you-from-the-sky",
		/* ***************** videos ***************** */
		"Multi-rotor-demo-scenes",
		"Wedding-trailer",
		"Mountains",
		"Concerts",
		"Concerts_live",
		"Running_man",
		"Ιndustrial_area",
		"Τourism_businesses",
		"Οbservation_environment",
		"Downhill_dirfy_2011",
		"Parkour_2011",
		"Presentation_zembili",
		"Concerts_Tsaligopoulou"
	);
?>
<!DOCTYPE HTML>
<html xml:lang="<?php echo $language; ?>" lang="<?php echo $language; ?>" dir="ltr" xmlns="http://www.w3.org/1999/xhtml"  xmlns:addthis="http://www.addthis.com/help/api-spec" itemscope itemtype="http://schema.org/WebPage">
	<head>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="css/mobile.css" />
		<!-- <link rel="stylesheet" type="text/css" href="css/mobile.min.css" /> -->
		<link rel="stylesheet" type="text/css" href="css/portofolio.css" />
		<!-- <link rel="stylesheet" type="text/css" href="css/portofolio.min.css" /> -->
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title lang="<?php echo $language ?>"><?php if ($language == "el") { echo $application_items["prt_head_title"]; } else { echo $application_items["prt_head_title_en"]; }?></title>
		<link rel="icon" type="image/png" href="img/unmanned-evolution.ico"/>
		<meta name="description" content="<?php if ($language == "el") { echo $application_items["prt_head_description"]; } else { echo $application_items["prt_head_description_en"]; }?>"/>
		<meta name="application-name" content="<?php if ($language == "el") { echo $application_items["prt_application-name"]; } else { echo $application_items["prt_application-name_en"]; }?>"/>
		<meta name="keywords" content="<?php if ($language == "el") { echo $application_items["prt_keywords"]; } else { echo $application_items["prt_keywords_en"]; }?>"/>
		<meta name="author" content="Unmanned Evolution"/>
		
		<link rel="canonical" href="www.unmanned-evolution.com/application/portofolio.php?lang=<?php echo $language; ?>" />
		
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
		<meta property='og:locale' content="<?php if ($language == "el") { echo "el_GR"; } else { echo "en_US"; }?>"/>
		<meta property='og:locale:alternate' content="<?php if ($language == "el") { echo "en_US"; } else { echo "el_GR"; }?>"/>
		<meta property="og:title" content="Unmanned Evolution portofolio | Air / Video Experts"/>
		<meta property="og:description" content="<?php if ($language == "el") { echo $application_items["prt_graph_desription"]; } else { echo $application_items["prt_graph_desription_en"]; }?>"/>
		<meta property="og:url" content="http://www.unmanned-evolution.com/application/portofolio.php?lang=<?php echo $language; ?>"/>
		<meta property="og:type" content="image"/>
		<meta property="og:site_name" content="Unmanned Evolution portofolio" />
		<meta property="og:image" content="http://www.unmanned-evolution.com/public/pics/Unmanned-Evolution-logo-multicopter-with-no-background.png" />
		<meta property="og:image" content="http://www.unmanned-evolution.com/public/pics/Unmanned-Evolutions-Multicopter-in-a-cloudy-day_original_300x200.png" />
		<!--  Google-compatible meta tags -->
		<meta itemprop="name" content="Unmanned Evolution | Air / Video Experts" />
		<meta itemprop="url" content="http://www.unmanned-evolution.com/application/portofolio.php?lang=<?php echo $language; ?>"/>
		<meta itemprop="description" content="<?php if ($language == "el") { echo $application_items["prt_itemprop_desription"]; } else { echo $application_items["prt_itemprop_desription_en"]; }?>"/>
		<meta itemprop="image" content="http://www.unmanned-evolution.com/public/pics/Unmanned-Evolution-logo-multicopter-with-no-background.png" />
		<meta itemprop="image" content="http://www.unmanned-evolution.com/public/pics/Unmanned-Evolutions-Multicopter-in-a-cloudy-day_original_300x200.png" />
		<meta itemprop='inLanguage' content="<?php if ($language == "el") { echo "el_GR"; } else { echo "en_US"; }?>" />
		<meta itemprop="keywords" content="<?php if ($language == "el") { echo $application_items["prt_itemprop_keywords"]; } else { echo $application_items["prt_itemprop_keywords_en"]; }?>" />
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
		<script src="scripts/combined.min.js"></script>
		<script src="scripts/jquery.viewport.mini.js"></script>
		<script src="scripts/jquery.masonry.min.js"></script>
		<!-- Custom scripts -->
		<script src="scripts/portofolio.js"></script>
		<!-- <script src="scripts/portofolio.min.js"></script> -->

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
				"url": "http://www.unmanned-evolution.com/application/portofolio.php?lang=<?php echo $language; ?>",
				"title": "Unmanned Evolution portofolio",
				"description": "Unmanned Evolution portofolio"
			};
			var addthis_config = {
				"ui_click": true,
				"ui_language": '<?php echo $language; ?>',
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
							<?php	foreach ( $portofolio_nav_used as $nav_id ) {
									$html = '';
									$html .= '<li id="' . $nav_id . '">' . $portofolio_nav[$language][$nav_id] . '</li>';
									echo $html;
								}
							?>
						</ul>
					<!-- The menu items will go here (generated by jQuery) -->
					</nav>
					
					<section id="container">
						<div id="stage">
							<!-- Your portfolio items go here -->
							<?php	foreach ( $portofolio_items_used as $item_id ) {
									$html = '';
									$html .= '<div id="' . $portofolio_items[$item_id]["id"] . '_iFrame_wrapper" class="portofolio_item ' . $portofolio_items[$item_id]["nav_class"] . '">';
									$html .= '</div>';
									echo $html;
								}
							?>
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