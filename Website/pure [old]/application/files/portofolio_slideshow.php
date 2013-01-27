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
	
	include "../portofolio_items.php";
	include "../application_items.php";
	
	if( isset($_GET[ 'lang' ]) ) {
		$language = $_GET[ 'lang' ];
		if ( $language != "el" || $language != "en" ) {
			$language = $_GET[ 'lang' ];
		}
	} else {
		$language = "el";
	}	
	$type = $_GET[ 'type' ];
	$id   = $_GET[ 'id' ];
?>
<!DOCTYPE HTML>
<html xml:lang="<?php echo $language; ?>" lang="<?php echo $language; ?>" dir="ltr" xmlns="http://www.w3.org/1999/xhtml"  xmlns:addthis="http://www.addthis.com/help/api-spec" itemscope itemtype="http://schema.org/WebPage">
	<head>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="css/mobile.css"/>
		<link rel="stylesheet" type="text/css" href="css/portofolio.css"/>
		<!-- <link rel="stylesheet" type="text/css" href="css/mobile.min.css"/> -->
		<!-- <link rel="stylesheet" type="text/css" href="css/portofolio_slideshow.min.css"/> -->
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>Unmanned Evolution portofolio slideshow | <?php echo $portofolio_items[$id][$language]["title"]?></title>
		<link rel="icon" type="image/png" href="img/unmanned-evolution.ico"/>
		<meta name="description" content="Καλώς ήλθατε στo χαρτοφυλάκιο -portofolio- της Unmanned Evolution. Σας παρουσιάζουμε <?php if($type=="image"){echo "την ακόλουθη φωτογραφία";} elseif($type=="video"){echo "το ακόλουθο video";}?> : <?php echo $portofolio_items[$id]["title"]?>."/>
		
		
		<meta name="application-name" content="<?php if ($language == "el") { echo $application_items["itm_application-name"]; } else { echo $application_items["itm_application-name_en"]; } ?>"/>
		<meta name="keywords" content="<?php if ( $language == "el" ) { echo $application_items[$id]["sld_keywords"]; } else { echo $application_items[$id]["sld_keywords_en"]; } ?> <?php echo $portofolio_items[$id][$language]["tags"]?>"/>
		<meta name="author" content="Unmanned Evolution"/>
		
		<link rel="canonical" href="http://www.unmanned-evolution.com/application/portofolio_slideshow.php?lang=<?php echo $language; ?>&type=<?php echo $type?>&id=<?php echo $id?>" />
		<!-- <link rel="shortlink" href="http://goo.gl/LluDd" /> -->
		
		<meta name="robots" content="index, follow" />
		<meta name="googlebot" content="noodp">
		<meta name="revisit-after" content="1 Days"/>
		
		<meta name="rating" content="general">
		
		<meta name="distribution" content="global" />
		<meta name="DC.title" content="Unmanned Evolution Slideshow" />
		<meta name="geo.region" content="GR-A1" />
		<meta name="geo.placename" content="Athens" />
		<meta name="geo.position" content="37.975496;23.734868" />
		<meta name="ICBM" content="37.975496, 23.734868" />
		<!-- open graph meta tags -->
		<meta property='og:locale' content="<?php if ($language == "el") { echo "el_GR"; } else { echo "en_US"; }?>"/>
		<meta property='og:locale:alternate' content="<?php if ($language == "el") { echo "en_US"; } else { echo "el_GR"; }?>"/>
		<meta property='og:title' content="<?php echo $portofolio_items[$id][$language]["title"]?>"/>
		<meta property='og:description' content="<?php echo $portofolio_items[$id][$language]["caption"]?>"/>
		<meta property='og:url' content="http://www.unmanned-evolution.com/application/portofolio_slideshow.php?lang=<?php echo $language; ?>&type=<?php echo $type?>&id=<?php echo $id?>"/>
		<?php 
			if ( isset( $portofolio_items[$id]["small"] ) ) {
				$html = "";
				$html = '<meta property="og:image" content="http://www.unmanned-evolution.com/application/media/pictures/' . $portofolio_items[$id]["small"] . '" />';
				echo $html;
			} else {
				$html = "";
				$html = '<meta property="og:video" content="http://www.youtube.com/watch?v=' . $portofolio_items[$id]["host_id"] . '" />';
				echo $html;
			}
		?>		
		<meta property='og:type' content="article"/>
		<meta property="og:site_name" content="Unmanned Evolution portofolio" />
		<meta property="article:author"          content="Unmanned Evolution">
		<meta property="article:section"         content="<?php echo $portofolio_items[$id][$language]["category"]?>">
		<meta property="article:tag"             content="<?php echo $portofolio_items[$id][$language]["tags"]?>">
		<!--  Google-compatible meta tags -->
		<meta itemprop="name" content="<?php echo $portofolio_items[$id][$language]["title"]?>" />
		<meta itemprop="url" content="http://www.unmanned-evolution.com/application/portofolio_slideshow.php?lang=<?php echo $language; ?>&type=<?php echo $type?>&id=<?php echo $id?>"/>
		<meta itemprop="description" content="<?php echo $portofolio_items[$id][$language]["caption"]?>"/>
		<?php 
			if ( isset( $portofolio_items[$id]["small"] ) ) {
				$html = "";
				$html = '<meta itemprop="image" content="http://www.unmanned-evolution.com/application/media/pictures/' . $portofolio_items[$id]["small"] . '" />';
				echo $html;
				$html = "";
				$html = '<meta itemprop="thumbnailUrl" content="http://www.unmanned-evolution.com/application/media/pictures/' . $portofolio_items[$id]["thumb"] . '" />';
				echo $html;
			} else {
				$html = "";
				$html = '<meta itemprop="video" content="http://www.youtube.com/watch?v=' . $portofolio_items[$id]["host_id"] . '" />';
				echo $html;
			}
		?>
		<meta itemprop="inLanguage" content="<?php if ($language == "el") { echo "el_GR"; } else { echo "en_US"; }?>"/>
		<meta itemprop="keywords" content="<?php if ( $language == "el" ) { echo $application_items[$id]["sld_itemprop_keywords"]; } else { echo $application_items[$id]["sld_itemprop_keywords_en"]; } ?> <?php echo $portofolio_items[$id][$language]["tags"]?>"/>
	
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
		
		<script src="scripts/portofolio_slideshow.js"></script>
		<!-- <script src="scripts/portofolio_slideshow.min.js"></script> -->
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

		<script>
			var addthis_share = {
				"url": "http://www.unmanned-evolution.com/application/portofolio_slideshow.php?lang=<?php echo $language; ?>&type=<?php echo $type?>&id=<?php echo $portofolio_items[$id]["id"]?>",
				"title": "<?php echo $portofolio_items[$id][$language]["title"]?>",
				"description": "<?php echo $portofolio_items[$id][$language]["caption"]?>"
			};
			var addthis_config = {
				"ui_click": true,
				"ui_language": 'el',
				"data_ga_property": 'UA-35818718-1',
				"data_ga_social": true,
				"data_track_addressbar": true
			};
		</script>
	</head>
	
	<body>
		<div id="portofolio_slideshow_wrapper">
			<section id="portofolio_slideshow">
				
				<article id="<?php echo $portofolio_items[$id]["id"]?>_article" class="clearfix <?php echo $type?>" itemscope itemtype="http://schema.org/<?php if ( $type == "image" ) { echo "Photograph"; } elseif ( $type == "image" ) { echo "Movie"; }?>">
					<header id="portofolio_slideshow_header" class="clearfix">
						<div id="portofolio_slideshow_close">
							<img alt="επιστροφή" src="./img/navbar/left-pointing-arrow.png" title="επιστροφή" border="0" />
						</div>
					</header>
					<div id="portofolio_slideshow_media_wrapper">
						<figure id="portofolio_slideshow_media_figure">
							<div id="portofolio_slideshow_social" class="addthis_toolbox addthis_floating_style addthis_counter_style addthis_32x32_style">
								<a class="addthis_button_facebook_like" fb:like:layout="box_count"></a>
								<a class="addthis_button_facebook_send"></a>
								<a class="addthis_button_tweet" tw:via="unmanned_gr" tw:count="vertical"></a>
								<?php
									if ( $type == "image" ) {
										echo '<a class="addthis_button_pinterest_pinit" pi:pinit:media="http://www.unmanned-evolution.com/application/media/pictures/' . $portofolio_items[$id]["original"] . '.' . $portofolio_items[$id]["type"] . '" pi:pinit:layout="vertical"></a>';
									}
								?>
								<a class="addthis_button_linkedin_counter"></a>
								<a class="addthis_button_stumbleupon_badge"></a>
								<a class="addthis_button_tumblr"></a>
								<a class="addthis_button_delicious"></a>
								<a class="addthis_button_digg"></a>
								<a class="addthis_button_compact"></a>
							</div>
							<div id="portofolio_item_media_wrapper" class="portofolio_item_media_wrapper">
								<?php
									if ( $type == "image" ) {
										$html = "";
										$html .= '<img id="' . $portofolio_items[$id]["id"] . '" class="portofolio_item_media"  data-original="media/pictures/' . $portofolio_items[$id]["original"] . '.' . $portofolio_items[$id]["type"] . '" src="media/pictures/' . $portofolio_items[$id]["original"] . '.' . $portofolio_items[$id]["type"] . '"  onload="imagePlacing( )" alt="' . $portofolio_items[$id][$language]["alt"] . '" title="' . $portofolio_items[$id][$language]["title"] . '"  itemprop="image"/>';
										echo $html;
									} elseif ( $type == "video" ) {
										$html = "";
										$html = '<div id="' . $portofolio_items[$id]["id"] . '_wrapper" class="portofolio_item_media" title="' . $portofolio_items[$id][$language]["title"] . '">';
										$html .= '<div id="' . $portofolio_items[$id]["id"] . '" class="player" itemprop="video"></div>';
										$html .= '</div>';
										echo $html;
									}
								?>
							</div>
							<div id="<?php echo $portofolio_items[$id]["id"]?>_caption" class="portofolio_item_caption">
								<p itemprop="description"><?php echo $portofolio_items[$id][$language]["caption"]?></p>
							</div>
						</figure>
					</div>
				</article>
			</section>
		</div>
									
	</body>