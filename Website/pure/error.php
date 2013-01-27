<?php
/*

	This file is the landing one of www.unmanned-evolution.com
By Dimitri Kafetzi @ http://www.kafetzisd.gr
Distributed under the Creative Commons Attribution 3.0 License

*/
?>
<?php
	session_start();
?>
<!DOCTYPE HTML>
<html xml:lang="el" lang="el" dir="ltr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		
		<meta name="application-name" content="Error page"/>
		<meta name="keywords" content="error, unmanned-evolutio, unmanned, evolution, εναέρια φωτογράφηση, εναέρια κινηματογράφηση, εναερια φωτογραφηση, εναερια κινηματογραφηση, αέρια φωτογράφηση, αέρια κινηματογράφηση, αερια φωτογραφηση, αερια κινηματογραφηση, αεροφωτογράφηση, αεροφωτογράφηση, μη επανδωμένα οχήματα, μη επανδρωμενα οχηματα, uav, multicopter, πολύπτερο, πολυπτερο, helicopter, ελικόπτερο, ελικοπτερο"/>
		<meta name="author" content="Unmanned Evolution"/>
		<meta name="robots" content="index, nofollow" />
		<meta name="googlebot" content="noodp">
		<meta name="rating" content="general">
		<meta name="distribution" content="global" />
		<meta name="DC.title" content="Unmanned Evolution portfolio" />
		<meta name="geo.region" content="GR-A1" />
		<meta name="geo.placename" content="Athens" />
		<meta name="geo.position" content="37.975496;23.734868" />
		<meta name="ICBM" content="37.975496, 23.734868" />

		<meta name="revisit-after" content="1 Days"/>
	
		<!-- MUST be altered -->
		<link rel="canonical" href="www.unmanned-evolution.com/application/error.php" />
		<link rel="shortlink" href="http://goo.gl/w8ZDF" />
		<meta name="description" content="Σελίδα λάθους της Unmanned Evolution."/>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"/>
		
		<link rel="icon" type="image/png" href="img/favicon.ico"/>
		<title>Unmanned Evolution error page</title>
		
		<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
	
		<link href="http://fonts.googleapis.com/css?family=GFS+Neohellenic:400,700&amp;subset=greek" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="css/fonts.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="css/error_page.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="css/mobile.css" media="all"/>
		<!-- <link rel="stylesheet" type="text/css" href="css/narrow.css" media="all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)"/> -->
		<!-- <link rel="stylesheet" type="text/css" href="css/middle.css" media="all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)"/> -->
		<link rel="stylesheet" type="text/css" href="css/wide_short.css" media="all and (min-width: 300px)"/>
		<!-- <link rel="stylesheet" type="text/css" href="css/wide.css" media="all and (min-width: 1220px) and (min-height: 730px)"/> -->
	
		<!-- dark navigation bar -->
		<link rel="stylesheet" type="text/css" href="css/navbar.css"/>		
		
		<!-- Custom scripts -->
		<script src="scripts/unmanned_evolution.js"></script>
		<script src="scripts/resizing.js"></script>
			
		<!-- Enabling HTML5 tags for older IE browsers -->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>			
			$(document).ready(function() {
				if( !getCookie("unmannedevolution") ) {
				setCookie("unmannedevolution", 'firsttime', 365);
				}
				
				if ( window.location == "http://localhost/pure/application/application.php") {
					window.location += "#landing_section_wrapper";
					$("#top_level_header_nav_landing").parent().addClass("selected");
				}
			});
		</script>
		
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
	<body id="body" class="body">
	
<?php
	// sections
	// top level header
	include 'files/top_level_header.php';
?>
		<div id="error_page_wrapper">		
			<div id="error_figure_wrapper">
				<figure>
					<img src="img/logo_medium.png" alt="Λογότυπο" title="Λογότυπο της Unammaned Evolution" />
				</figure>
			</div>
			<p>Δυστυχώς παρουσιάστηκε κάποιο πρόβλημα.</p>
			<p>Συγχωρέστε μας για την ταλαιπωρία σας.</p>
			<p>Παρακαλούμε πλοηγηθείτε στην επιθυμητή σελίδα μέσω του κετνρικού μενού</p>
		</div>
<?php

	include 'files/top_level_footer.php';
?>
	
	
	</body>
</html>