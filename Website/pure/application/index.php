<?php
/*

	This file is the landing one of www.unmanned-evolution.com
By Dimitri Kafetzi @ http://www.kafetzisd.gr
Distributed under the Creative Commons Attribution 3.0 License

*/
?>
<?php
	date_default_timezone_set( 'Europe/Athens' );
	header( 'Content-Type: text/html; charset=UTF-8' );
	header( 'Cache-Control: max-age=2592000' ); //30days (60sec * 60min * 24hours * 30days)
	header( 'Expires: Mon, 7 Jul 2013 05:00:00 GMT' );
	header( 'Last-Modified: ' . date("F d Y H:i:s e", getlastmod()) );
	header('Location: ./application.php?lang=el#landing_section_wrapper');
?>
<!DOCTYPE html>
<html xml:lang="el" lang="el" dir="ltr" xmlns="http://www.w3.org/1999/xhtml"  xmlns:fb="http://ogp.me/ns/fb#" itemscope itemtype="http://schema.org/WebPage">
	<head>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="css/mobile.css" />
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
		<link rel="icon" type="image/png" href="img/unmanned-evolution.ico"/>
		<meta name="description" content="Καλώς ήλθατε στην Unmanned Evolution. Ειδικευόμαστε στην εναέρια κινηματογράφηση, εναέρια φωτογράφηση, εναέρια παρατήρηση και διάσωση. Χρησιμοποιούμε μη επανδρωμένα πτητικά μέσα -πολύπτερα, multicopters- σε συνδυασμό με κάμερες υψηλής ευκρίνειας -high definition- ώστε να έχουμε την καλύτερη θέαση από το μέγιστο δυνατό και επιθυμητό ύψος"/>
		<meta name="application-name" content="Επίσημη ιστοσελίδα"/>
		<meta name="keywords" content="επίσημη ιστοσελίδα, official webpage, unmanned-evolution, unmanned.evolution, unmanned, evolution, εναέρια φωτογράφηση, εναέρια κινηματογράφηση, εναερια φωτογραφηση, εναερια κινηματογραφηση, αέρια φωτογράφηση, αέρια κινηματογράφηση, αερια φωτογραφηση, αερια κινηματογραφηση, αεροφωτογράφηση, αεροφωτογράφηση, μη επανδωμένα οχήματα, μη επανδρωμενα οχηματα, uav, multicopter, πολύπτερο, πολυπτερο, helicopter, ελικόπτερο, ελικοπτερο, εξακόπτερο, εξάπτερο, hexacopter, παραγωγή, ταινιών, βιντεο κλιπ, κινηματογράφηση, aerial photo, aerialphoto, greece, Ελλάδα"/>
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
		<meta property='og:locale' content="el_GR"/>
		<meta property='og:title' content="Unmanned Evolution | Air / Video Experts"/>
		<meta property='og:description' content="Εναέρια κινηματογράφηση και φωτογράφιση | Aerial cinematography and photography"/>
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
		<meta itemprop="description" content="Εναέρια κινηματογράφηση και φωτογράφιση | Aerial cinematography and photography"/>
		<meta itemprop='image' content="http://www.unmanned-evolution.com/public/pics/Unmanned-Evolution-logo-multicopter-with-no-background.png" />
		<meta itemprop='image' content="http://www.unmanned-evolution.com/public/pics/Unmanned-Evolution-logo-with-multicopter-name-and-moto.png" />
		<meta itemprop='image' content="http://www.unmanned-evolution.com/public/pics/Aerial-photography-of-married-couple-in-front-of-a-greek-church-at-Komotini_original_445x200.png" />
		<meta itemprop='image' content="http://www.unmanned-evolution.com/public/pics/Unmanned-Evolutions-Multicopter-in-a-cloudy-day_original_300x200.png" />
		<meta itemprop='inLanguage' content="el_GR" />
		<meta itemprop='keywords' content="επίσημη ιστοσελίδα, official webpage, unmanned-evolution, unmanned.evolution, unmanned, evolution, εναέρια φωτογράφηση, εναέρια κινηματογράφηση, εναερια φωτογραφηση, εναερια κινηματογραφηση, αέρια φωτογράφηση, αέρια κινηματογράφηση, αερια φωτογραφηση, αερια κινηματογραφηση, αεροφωτογράφηση, αεροφωτογράφηση, μη επανδωμένα οχήματα, μη επανδρωμενα οχηματα, uav, multicopter, πολύπτερο, πολυπτερο, helicopter, ελικόπτερο, ελικοπτερο, εξακόπτερο, εξάπτερο, hexacopter, παραγωγή, ταινιών, βιντεο κλιπ, κινηματογράφηση, aerial photo, aerialphoto, greece, Ελλάδα" />
		
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

		
	</body>
	</html>