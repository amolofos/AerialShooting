<?php
/*

	This file is the landing one of www.unmanned-evolution.com
By Dimitri Kafetzi @ http://www.kafetzisd.gr
Distributed under the Creative Commons Attribution 3.0 License

*/
?>
<?php
	session_start();
	header('Location: ./application/application.php#landing_section_wrapper');
	
?>
<!DOCTYPE HTML>
<html xml:lang="el" lang="el" dir="ltr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		
		<title lang="en">Unmanned Evolution | Air / Video Experts</title>
		<link rel="icon" type="image/png" href="application/img/unmanned-evolution.ico"/>
		<meta name="description" content="Καλώς ήλθατε στην Unmanned Evolution. Ειδικευόμαστε στην εναέρια κινηματογράφηση, εναέρια φωτογράφηση, εναέρια παρατήρηση και διάσωση. Χρησιμοποιούμε μη επανδρωμένα πτητικά μέσα -πολύπτερα, multicopters- σε συνδυασμό με κάμερες υψηλής ευκρίνειας -high definition- ώστε να έχουμε την καλύτερη θέαση από το μέγιστο δυνατό και επιθυμητό ύψος"/>
		<meta name="application-name" content="Επίσημη ιστοσελίδα relocator"/>
		<meta name="keywords" content="επίσημη ιστοσελίδα, official webpage, unmanned-evolution, unmanned.evolution, unmanned, evolution, εναέρια φωτογράφηση, εναέρια κινηματογράφηση, εναερια φωτογραφηση, εναερια κινηματογραφηση, αέρια φωτογράφηση, αέρια κινηματογράφηση, αερια φωτογραφηση, αερια κινηματογραφηση, αεροφωτογράφηση, αεροφωτογράφηση, μη επανδωμένα οχήματα, μη επανδρωμενα οχηματα, uav, multicopter, πολύπτερο, πολυπτερο, helicopter, ελικόπτερο, ελικοπτερο, εξακόπτερο, εξάπτερο, hexacopter"/>
		<meta name="author" content="Unmanned Evolution"/>
		
		<link rel="canonical" href="www.unmanned-evolution.com" />
		<link rel="shortlink" href="http://goo.gl/glmS" />
				
		<meta name="robots" content="index, follow" />
		<meta name="googlebot" content="noodp">
		<meta name="revisit-after" content="1 Days"/>
		
		<meta name="rating" content="general">
		
		<meta name="distribution" content="global" />
		<meta name="DC.title" content="Unmanned Evolution | Air / Video Experts" />
		<meta name="geo.region" content="GR-A1" />
		<meta name="geo.placename" content="Athens" />
		<meta name="geo.position" content="37.975496;23.734868" />
		<meta name="ICBM" content="37.975496, 23.734868" />

		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"/>
	<!--		<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<!--		<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
	<!--		<script src="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css"></script>
	<!--	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>-->
	<!--	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css"></script>-->
	
		<!-- <script src="application/scripts/jquery.bpopup-0.7.0.min.js"></script> -->
		<!-- <script src="application/scripts/jquery.quicksand.js"></script> -->
		<!-- Roundabout plugin : http://fredhq.com/projects/roundabout/ -->
		<!-- <script src="application/scripts/jquery.roundabout.min.js"></script>-->
		
	<!--	<script src="application/scripts/prototype.js"></script>-->
	<!--	<script src="application/scripts/scriptaculous.js"></script>-->
	<!--	<script src="application/scripts/slider.js"></script>-->
	<!--	<script src="application/scripts/effects.js"></script>-->
	<!--	<script src="application/scripts/controls.js"></script>-->
		
	<!--		<script src="application/scripts/modernizr.js"></script> -->
		
		<!-- <script src="application/scripts/ckeditor/ckeditor.js"></script> -->
	
	<!--		<link href="http://fonts.googleapis.com/css?family=GFS+Neohellenic:400,700&amp;subset=greek" rel="stylesheet" type="text/css"/> -->
	<!--		<link rel="stylesheet" type="text/css" href="application/css/fonts.css" media="all"/> -->
	<!--		<link rel="stylesheet" type="text/css" href="application/css/mobile.css" media="all"/> -->
	<!--		<link rel="stylesheet" type="text/css" href="application/css/narrow.css" media="all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)"/> -->
	<!--		<link rel="stylesheet" type="text/css" href="application/css/middle.css" media="all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)"/> -->
	<!--		<link rel="stylesheet" type="text/css" href="application/css/wide_short.css" media="all and (min-width: 1220px) and (max-height: 730px)"/> -->
	<!--		<link rel="stylesheet" type="text/css" href="application/css/wide.css" media="all and (min-width: 1220px) and (min-height: 730px)"/> -->
			
	
		<!-- dark navigation bar -->
	<!--		<link rel="stylesheet" type="text/css" href="application/css/navbar.css"/> -->
		
		<!-- Loading library FitText.js -->
		<!-- <script src="application/scripts/jquery.fittext.js"></script> -->
		
		<!-- The Compressor -->
		<!-- If your text is resizing poorly, you will want to turn tweak up/down "The Compressor". It works a little like a guitar amp. The default is `1`. -->
		<!-- $(".responsive_headline").fitText(1.2);  Turn the compressor up   (text shrinks more aggressively) -->
		<!-- $(".responsive_headline").fitText(0.8);  Turn the compressor down (text shrinks less aggressively) -->
		
		<!-- Loading library Lettering.js -->
		<!-- <script src="application/scripts/jquery.lettering.js"></script> -->
		
		<!-- Loading library FitVid.js -->
		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> -->
		<!-- <script src="application/scripts/jquery.fitvids.js"></script> -->
		
		
		<!-- Loading library SlabText.js -->
		<!-- <script src="application/scripts/jquery.slabtext.min.js"></script>
        <!-- Function to slabtext the H1 headings -->
      <!--  <script>  -->
		<!-- $(document).ready(function(){ -->
	<!-- 		function slabTextHeadlines() { -->
      <!--           $(".top_level_header_branding_name_header").slabText({ -->
                       <!--  Do not slabtext the headers if the viewport is under 380px -->
      <!--                  "viewportBreakpoint":380 -->
      <!--           }); -->
	<!-- 		}; -->
     <!--    }); -->
	<!-- 	</script> -->
	 	
		
		<!-- Loading library arctext.js -->
		<!-- <script src="./application/scripts/jquery.arctext.js"></script> -->
		
		
		<!-- Loading mediaelement video library -->
		<!-- <script src="application/scripts/video_player/mediaelement-and-player.min.js"></script> -->
		<!-- <link rel="stylesheet" href="./application/scripts/video_player/mediaelementplayer.min.css"/> -->
		<!-- 	<script src="application/scripts/video_player/mejs-feature-fontawesome.min.js"></script> -->
		<!-- 	<script src="application/scripts/video_player/mejs-feature-logo.min.js"></script> -->
		<!-- <link rel="stylesheet" href="./application/scripts/video_player/mediaelementplayer_plugins.css"/> -->
		
		<!-- Custom scripts -->
		<!-- <script src="application/scripts/unmanned_evolution.js"></script> -->
		<!-- <script src="application/scripts/resizing.js"></script> -->
		
		<!-- Enabling HTML5 tags for older IE browsers -->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
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