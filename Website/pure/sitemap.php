<?php
/*

	This file is the landing one of www.unmanned-evolution.com
By Dimitri Kafetzi @ http://www.kafetzisd.gr
Distributed under the Creative Commons Attribution 3.0 License

*/
include "application/portofolio_items.php";

$sitemap_filename = "sitemap.xml";

$media_dir = "http://www.unmanned-evolution.com/application/media/pictures";
$slide_url = "http://www.unmanned-evolution.com/application/portofolio_slideshow.php";
$priority_image = '1.00';
$freq_image = 'monthly';

$url_gen   = array (
	"first" => array (
		"protocol" => "http://",
		"domain"   => "www.unmanned-evolution.com",
		"query"    => "",
		"priority" => "1.00",
		"freq"     => "weekly"
	),
	"application" => array (
		"protocol" => "http://",
		"domain"   => "www.unmanned-evolution.com/application/application.php",
		"query"    => "",
		"priority" => "1.00",
		"freq"     => "weekly"
	),
	"application_el" => array (
		"protocol" => "http://",
		"domain"   => "www.unmanned-evolution.com/application/application.php",
		"query"    => "?lang=el",
		"priority" => "1.00",
		"freq"     => "weekly"
	),
	"application_en" => array (
		"protocol" => "http://",
		"domain"   => "www.unmanned-evolution.com/application/application.php",
		"query"    => "?lang=en",
		"priority" => "1.00",
		"freq"     => "weekly"
	),
	"portofolio" => array (
		"protocol" => "http://",
		"domain"   => "www.unmanned-evolution.com/application/portofolio.php",
		"query"    => "",
		"priority" => "1.00",
		"freq"     => "weekly"
	),
	"portofolio_el" => array (
		"protocol" => "http://",
		"domain"   => "www.unmanned-evolution.com/application/portofolio.php",
		"query"    => "?lang=el",
		"priority" => "1.00",
		"freq"     => "weekly"
	),
	"portofolio_en" => array (
		"protocol" => "http://",
		"domain"   => "www.unmanned-evolution.com/application/portofolio.php",
		"query"    => "?lang=en",
		"priority" => "1.00",
		"freq"     => "weekly"
	),
);

?>
<?php

$dom = new DOMDocument( '1.0', 'UTF-8' );

$urlset = $dom->appendChild( new DOMElement( 'urlset' ) );
$dom->createAttributeNS( 'http://www.sitemaps.org/schemas/sitemap/0.9', 'xmlns' );
$dom->createAttributeNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:attr' );
$dom->createAttributeNS( 'http://www.google.com/schemas/sitemap-video/1.1', 'video:attr' );

foreach( $url_gen as $url_item) {
	$url        = $urlset->appendChild( new DOMElement( 'url' ) );
	$loc        = $url->appendChild( new DOMElement( 'loc' ) );
	$loc->appendChild( new DOMText( $url_item["protocol"] . $url_item["domain"] . urlencode( $url_item["query"] ) ) );
	$priority   =  $url->appendChild( new DOMElement( 'priority' ) );
	$priority->appendChild( new DOMText(  $url_item["priority"] ) );
	$changefreq =  $url->appendChild( new DOMElement( 'changefreq' ) );
	$changefreq->appendChild( new DOMText( $url_item["freq"] ) );
}

foreach( $portofolio_items as $url_item) {
	
	if ( $url_item["type"] != "youtube" ) {
		$url_el        = $urlset->appendChild( new DOMElement( 'url' ) );
		$loc_el        = $url_el->appendChild( new DOMElement( 'loc' ) );
		$loc_el->appendChild( new DOMText( $slide_url . '?lang=el&slide=st&type=image&id=' . $url_item["id"] ) );
		$priority_el   =  $url_el->appendChild( new DOMElement( 'priority' ) );
		$priority_el->appendChild( new DOMText(  $priority_image ) );
		$changefreq_el =  $url_el->appendChild( new DOMElement( 'changefreq' ) );
		$changefreq_el->appendChild( new DOMText( $freq_image ) );
		
		$image_original_el = $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:image' );
		$url_el->appendChild( $image_original_el );			
		$image_original_el_loc = $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:loc' );
		$image_original_el->appendChild( $image_original_el_loc );
		$image_original_el_loc->appendChild( new DOMText( $media_dir . '/' . $url_item["original"] . '.' . $url_item["type"] ) );
		$image_original_el_title = $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:title' );
		$image_original_el->appendChild( $image_original_el_title );
		$image_original_el_title->appendChild( new DOMText( $url_item["el"]["title"] ) );
		$image_original_el_caption =  $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:caption' );
		$image_original_el->appendChild( $image_original_el_caption );
		$image_original_el_caption->appendChild( new DOMText( $url_item["el"]["caption"] ) );
		
		$image_small_el = $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:image' );
		$url_el->appendChild( $image_small_el );			
		$image_small_el_loc = $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:loc' );
		$image_small_el->appendChild( $image_small_el_loc );
		$image_small_el_loc->appendChild( new DOMText( $media_dir . '/' . $url_item["small"] . '.' . $url_item["type"] ) );
		$image_small_el_title = $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:title' );
		$image_small_el->appendChild( $image_small_el_title );
		$image_small_el_title->appendChild( new DOMText( $url_item["el"]["title"] ) );
		$image_small_el_caption =  $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:caption' );
		$image_small_el->appendChild( $image_small_el_caption );
		$image_small_el_caption->appendChild( new DOMText( $url_item["el"]["caption"] ) );
		
		$image_thumb_el = $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:image' );
		$url_el->appendChild( $image_thumb_el );			
		$image_thumb_el_loc = $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:loc' );
		$image_thumb_el->appendChild( $image_thumb_el_loc );
		$image_thumb_el_loc->appendChild( new DOMText( $media_dir . '/' . $url_item["thumb"] . '.' . $url_item["type"] ) );
		$image_thumb_el_title = $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:title' );
		$image_thumb_el->appendChild( $image_thumb_el_title );
		$image_thumb_el_title->appendChild( new DOMText( $url_item["el"]["title"] ) );
		$image_thumb_el_caption =  $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:caption' );
		$image_thumb_el->appendChild( $image_thumb_el_caption );
		$image_thumb_el_caption->appendChild( new DOMText( $url_item["el"]["caption"] ) );
		

		$url_en        = $urlset->appendChild( new DOMElement( 'url' ) );
		$loc_en        = $url_en->appendChild( new DOMElement( 'loc' ) );
		$loc_en->appendChild( new DOMText( $slide_url . '?lang=en&slide=st&type=image&id=' . $url_item["id"] ) );
		$priority_en   =  $url_en->appendChild( new DOMElement( 'priority' ) );
		$priority_en->appendChild( new DOMText(  $priority_image ) );
		$changefreq_en =  $url_en->appendChild( new DOMElement( 'changefreq' ) );
		$changefreq_en->appendChild( new DOMText( $freq_image ) );
		
		$image_original_en = $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:image' );
		$url_en->appendChild( $image_original_en );			
		$image_original_en_loc = $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:loc' );
		$image_original_en->appendChild( $image_original_en_loc );
		$image_original_en_loc->appendChild( new DOMText( $media_dir . '/' . $url_item["original"] . '.' . $url_item["type"] ) );
		$image_original_en_title = $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:title' );
		$image_original_en->appendChild( $image_original_en_title );
		$image_original_en_title->appendChild( new DOMText( $url_item["en"]["title"] ) );
		$image_original_en_caption =  $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:caption' );
		$image_original_en->appendChild( $image_original_en_caption );
		$image_original_en_caption->appendChild( new DOMText( $url_item["en"]["caption"] ) );
		
		$image_small_en = $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:image' );
		$url_en->appendChild( $image_small_en );			
		$image_small_en_loc = $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:loc' );
		$image_small_en->appendChild( $image_small_en_loc );
		$image_small_en_loc->appendChild( new DOMText( $media_dir . '/' . $url_item["small"] . '.' . $url_item["type"] ) );
		$image_small_en_title = $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:title' );
		$image_small_en->appendChild( $image_small_en_title );
		$image_small_en_title->appendChild( new DOMText( $url_item["en"]["title"] ) );
		$image_small_en_caption =  $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:caption' );
		$image_small_en->appendChild( $image_small_en_caption );
		$image_small_en_caption->appendChild( new DOMText( $url_item["en"]["caption"] ) );
		
		$image_thumb_en = $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:image' );
		$url_en->appendChild( $image_thumb_en );			
		$image_thumb_en_loc = $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:loc' );
		$image_thumb_en->appendChild( $image_thumb_en_loc );
		$image_thumb_en_loc->appendChild( new DOMText( $media_dir . '/' . $url_item["thumb"] . '.' . $url_item["type"] ) );
		$image_thumb_en_title = $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:title' );
		$image_thumb_en->appendChild( $image_thumb_en_title );
		$image_thumb_en_title->appendChild( new DOMText( $url_item["en"]["title"] ) );
		$image_thumb_en_caption =  $dom->createElementNS( 'http://www.google.com/schemas/sitemap-image/1.1', 'image:caption' );
		$image_thumb_en->appendChild( $image_thumb_en_caption );
		$image_thumb_en_caption->appendChild( new DOMText( $url_item["en"]["caption"] ) );
	}
}

$dom->save( $sitemap_filename );

?>