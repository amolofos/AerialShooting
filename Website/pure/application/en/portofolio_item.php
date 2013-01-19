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
	
	include "portofolio_items.php";
	
	$type = $_GET[ 'type' ];
	$id   = $_GET[ 'id' ];
	
?>
<!DOCTYPE HTML>
<html xml:lang="el" lang="el" dir="ltr" xmlns="http://www.w3.org/1999/xhtml"  xmlns:addthis="http://www.addthis.com/help/api-spec" itemscope itemtype="http://schema.org/WebPage">
	<head>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="../css/portofolio_item.css"/>
		<!-- <link rel="stylesheet" type="text/css" href="css/portofolio_item.min.css"/> -->
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>Unmanned Evolution portofolio | <?php echo $portofolio_items[$id]["title"]?></title>
		<link rel="icon" type="image/png" href="../img/unmanned-evolution.ico"/>
		<meta name="description" content="Welcame at Unmanned Evolution's portofolio. You are presented with <?php if($type=="image"){echo "the following photography";} elseif($type=="video"){echo "the following video";}?> : <?php echo $portofolio_items[$id]["title"]?>."/>
		<meta name="application-name" content="Sample of Unmanned Evolution works."/>
		<meta name="keywords" content="portofolio, official webpage, unmanned-evolution, unmanned.evolution, unmanned, evolution, aerial cinematography, aerial photography, unmanned aerial vehicles, uav, multicopter, helicopter, hexacopter, production, movie, movie production, video clip, marketing, weddings, search and rescue, aerial observation, greece, <?php echo $portofolio_items[$id]["tags"]?>"/>
		<meta name="author" content="Unmanned Evolution"/>
		
		<link rel="canonical" href="http://www.unmanned-evolution.com/application/en/portofolio_item.php?type=<?php echo $type?>&id=<?php echo $id?>" />
		
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
		<meta property='og:locale' content="en_GB"/>
		<meta property='og:title' content="<?php echo $portofolio_items[$id]["title"]?>"/>
		<meta property='og:description' content="<?php echo $portofolio_items[$id]["caption"]?>"/>
		<meta property='og:url' content="http://www.unmanned-evolution.com/application/en/portofolio_slideshow.php?type=<?php echo $type?>&id=<?php echo $id?>"/>
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
		<meta property="article:section"         content="<?php echo $portofolio_items[$id]["category"]?>">
		<meta property="article:tag"             content="<?php echo $portofolio_items[$id]["tags"]?>">
		<!--  Google-compatible meta tags -->
		<meta itemprop="name" content="<?php echo $portofolio_items[$id]["title"]?>" />
		<meta itemprop="url" content="http://www.unmanned-evolution.com/application/en/portofolio_slideshow.php?type=<?php echo $type?>&id=<?php echo $id?>"/>
		<meta itemprop="description" content="<?php echo $portofolio_items[$id]["caption"]?>"/>
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
		<meta itemprop="inLanguage" content="en_GB" />
		<meta itemprop="keywords" content="portofolio, official webpage, unmanned-evolution, unmanned.evolution, unmanned, evolution, aerial cinematography, aerial photography, unmanned aerial vehicles, uav, multicopter, helicopter, hexacopter, production, movie, movie production, video clip, marketing, weddings, search and rescue, aerial observation, greece, <?php echo $portofolio_items[$id]["tags"]?>" />
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

		<script src="../scripts/portofolio_item.js"></script>
		<!-- <script src="scripts/portofolio_item.min.js"></script> -->
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
				"url": "http://www.unmanned-evolution.com/application/en/portofolio_slideshow.php?type=<?php echo $type?>&id=<?php echo $portofolio_items[$id]["id"]?>",
				"title": "<?php echo $portofolio_items[$id]["title"]?>",
				"description": "<?php echo $portofolio_items[$id]["caption"]?>"
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
	<?php flush(); ?>
	<body>
		<figure id="<?php echo $portofolio_items[$id]["id"]?>_figure" class="portofolio_item_figure" itemscope itemtype="http://schema.org/<?php if ( $type == "image" ) { echo "Photograph"; } elseif ( $type == "image" ) { echo "Movie"; }?>">
			<header id="<?php echo $portofolio_items[$id]["id"]?>_header" >
				<div id="<?php echo $portofolio_items[$id]["id"]?>_share_social" class="portofolio_item_share_social addthis_toolbox addthis_default_style">
					<a class="addthis_button_facebook"></a>
					<a class="addthis_button_twitter"></a>
					<a class="addthis_button_linkedin"></a>
					<?php
						if ( $type == "image" ) {
							$html = '<a class="addthis_button_pinterest_pinit"></a>';
							echo $html;
						}
					?>
					<a class="addthis_button_stumbleupon"></a>
					<a class="addthis_button_tumblr"></a>
					<a class="addthis_button_digg"></a>
					<a class="addthis_button_delicious"></a>
					<a class="addthis_button_reddit"></a>
					<a class="addthis_button_compact"></a>
					<a class="addthis_bubble_style"></a>
				</div>
				<div id="<?php echo $portofolio_items[$id]["id"]?>_full" class="portofolio_item_full"  target="_parent"></div>
			</header>
			<article id="<?php echo $portofolio_items[$id]["id"]?>_article" class="clearfix <?php echo $type?>">
				<?php
					if ( $type == "image" ) {
						$html = "";
						$html = '<img id="' . $portofolio_items[$id]["id"] . '" class="lazy portofolio_item_media"  data-original="../media/pictures/' . $portofolio_items[$id]["original"] . '.' . $portofolio_items[$id]["type"] . '" src="../media/pictures/' . $portofolio_items[$id]["small"] . '.' . $portofolio_items[$id]["type"] . '" alt="' . $portofolio_items[$id]["alt"] . '" title="' . $portofolio_items[$id]["title"] . '" itemprop="image"/>';
						echo $html;
					} elseif ( $type == "video" ) {
						$html = "";
						$html = '<div id="' . $portofolio_items[$id]["id"] . '_wrapper" class="portofolio_item_media" title="' . $portofolio_items[$id]["title"] . '">';
						$html .= '<div id="' . $portofolio_items[$id]["id"] . '" class="player" itemprop="video"></div>';
						$html .= '</div>';
						echo $html;
					}
				?>
				<div id="<?php echo $portofolio_items[$id]["id"]?>_caption" class="portofolio_item_caption">
					<p itemprop="description"><?php echo $portofolio_items[$id]["caption"]?></p>
				</div>
			</article>
			<footer id="<?php echo $portofolio_items[$id]["id"]?>_footer">
				<div id="<?php echo $portofolio_items[$id]["id"]?>_share_counters" class="portofolio_item_share_counters addthis_toolbox">
					<a class="addthis_button_facebook_like" fb:like:layout="box_count"></a>
					<a class="addthis_button_tweet" tw:via="unmanned_gr" tw:count="vertical"></a>
					<?php
						if ( $type == "image" ) {
							echo '<a class="addthis_button_pinterest_pinit" pi:pinit:media="http://www.unmanned-evolution.com/application/media/pictures/' . $portofolio_items[$id]["original"] . '.' . $portofolio_items[$id]["type"] . '" pi:pinit:layout="vertical"></a>';
						}
					?>
					<a class="addthis_button_linkedin_counter"></a>
					<a class="addthis_button_stumbleupon_badge"></a>
				</div>
			</footer>
		</figure>
											

	</body>
	</html>