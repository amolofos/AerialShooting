portofolio_video_ids = [ ];
portofolio_video_ids [ "default" 				 ] = [ "_AeVgCd9U0E" ];
portofolio_video_ids [ "Multi-rotor-demo-scenes" ] = [ "_AeVgCd9U0E" ];
portofolio_video_ids [ "Wedding-trailer"         ] = [ "zRsutyxTC_g" ];
portofolio_video_ids [ "Concerts"                ] = [ "AxmMFyiJ8uA" ];
portofolio_video_ids [ "Concerts_live"           ] = [ "AD5CfwNcHHM" ];
portofolio_video_ids [ "Running_man"             ] = [ "-TIOiY6qpT8" ];
portofolio_video_ids [ "Ιndustrial_area"         ] = [ "sCE-Ci_ZkKw" ];
portofolio_video_ids [ "Τourism_businesses"      ] = [ "jvBi8bLDCFk" ];
portofolio_video_ids [ "Οbservation_environment" ] = [ "L86CoQdCNaA" ];
portofolio_video_ids [ "Downhill_dirfy_2011"     ] = [ "yMjJarOY-B8" ];
portofolio_video_ids [ "Parkour_2011"            ] = [ "6SB9jgI6qks" ];
portofolio_video_ids [ "Presentation_zembili"    ] = [ "zkF5QFWbBuU" ];
portofolio_video_ids [ "Mountains"               ] = [ "rT1BICpC1Gg" ];
portofolio_video_ids [ "Concerts_Tsaligopoulou"  ] = [ "xi3cxWC5iJI" ];

var video_id;
var portofolio_player_id;
var portofolio_player;
	
var is_type;

$(document).ready(function( ) {
	var item_type = "video";
	var item_id = "default";
	var href;

	var tag_add_this;
	var firstScriptTag_add_this;
	tag_add_this = document.createElement('script');
	tag_add_this.src = "http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5089d9595d29b9df&domready=1&async=1";
	firstScriptTag_add_this = document.getElementsByTagName('script')[0];
	firstScriptTag_add_this.parentNode.insertBefore(tag_add_this, firstScriptTag_add_this);
	setTimeout( function(){ addthis.init(); }, 700 );

	is_type = $( "article" ).hasClass( "video" );
	if( !is_type ) {
		//setTimeout( function( ) { imagePlacing( ); }, 2500);
	} else {
		var tag;
		var firstScriptTag;
		tag = document.createElement('script');
		tag.src = "//www.youtube.com/iframe_api";
		firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
		
		$( ".portofolio_item_media" ).css( "border", "0 none" );
		$( ".portofolio_item_media" ).css( "top", "10%" );
		$( ".portofolio_item_caption" ).css( "width", "20%" );
		$( "#portofolio_item_media_wrapper" ).css( "left", "20%" );
		$( "#portofolio_item_media_wrapper" ).css( "width", "80%" );
		$( "#portofolio_item_media_wrapper" ).css( "height", "80%" );
	}
	
	$( "#portofolio_slideshow_close > img" ).bind( "click", function( e ) {
		var href;
		var iframe;
		
		href = window.top.location.pathname;
		href = href.split( "/" );
		href = href[ href.length-1];
		e.preventDefault( );
		if ( href == "portofolio_slideshow.php" ) {
			window.location.href = "portofolio.php?lang=" + getQueryParams( "lang" );
		} else {
			window.top.document.getElementById( "portofolio_slideshow_section_wrapper" ).style.display = "none";
			iframe = window.top.document.getElementById( "portofolio_slideshow_iFrame" );
			window.top.document.getElementById( "portofolio_slideshow_section" ).removeChild( iframe );
		}
	});

	setTimeout( function( ) { $( ".addthis_button_facebook_like > iframe" ).css( "width", "80px" ); }, 1000);
});

	

function onYouTubeIframeAPIReady ( ) {
	
	if ( is_type ) {
		portofolio_player_id = $(".portofolio_item_media").attr("id");
		portofolio_player_id = portofolio_player_id.split( "_wrapper" );
		portofolio_player_id = portofolio_player_id[0];
		video_id = portofolio_video_ids[ portofolio_player_id ];
		createPlayer( portofolio_player_id, video_id );
		setVideoDimensions( portofolio_player, "portofolio", 70 );
	}
}

function createPlayer ( portofolio_player_id, video_id ) {
	
	portofolio_player = new YT.Player( portofolio_player_id, {
		videoId: video_id,
		playerVars: {
			'iv_load_policy': 3,
			'autoplay': 0,
			'origin': 'www.unmanned-evolution.com',
			'rel': 0,
			'wmode': 'opaque'
		},
		 events: {
			'onReady': onPlayerReady,
			'onStateChange': onPortofolioPlayerStateChanged
		 }
	});
}

function onPlayerReady ( event ) {
	event.target.setPlaybackQuality("large");
	$( "#portofolio_item_media_wrapper" ).css( "visibility", "visible" );
	portofolio_player.playVideo();
}

function onPortofolioPlayerStateChanged ( event ) {
	
	var wrapper = $(event.target.getIframe()).parent("figure");
	var wrapper_div = $(event.target.getIframe()).parent("figure").parent("div");
	var iframe = event.target.getIframe();
	
	if ( $(window).width() >= 740 ) {
		if ( event.data == YT.PlayerState.PLAYING ) {
		} else if ( event.data == YT.PlayerState.ENDED ) {
		} else if ( event.data == YT.PlayerState.PAUSED ) {
		} else if ( event.data == YT.PlayerState.BUFFERING ) {
		} 
	}
}

function setVideoDimensions( target, location_type, width_perc ) {
	
	var wrapper_width = $(window).width();
	var video_width_n;
	var video_height_n;
	
	switch ( location_type ) {
		case "landing":
			wrapper_width = $(window).width();
			break;
		case "section":
			wrapper_width = $(target.getIframe()).parent("figure").width();
			break;
		case "portofolio":
			wrapper_width = $( "#portofolio_item_media_wrapper" ).width();
			break;		
	}
		
	video_width_n = Math.round(wrapper_width*width_perc/100);
	video_height_n = Math.round(video_width_n/1.77);
	target.setSize( video_width_n, video_height_n );
}

function imagePlacing( ) {
	var width_img;
	var height_img;
	var height_tmp;
	var width_tmp;
	var width_img_wrapper;
	var height_img_wrapper;
	var width_start;
	var height_start;
	var padding_left_tmp;
	var padding_top_tmp;
	var unblocker = true;
	var unblocker_counter = 0;
	
	
	height_img = parseInt( $( ".portofolio_item_media" ).css( "height" ).split( "px" )[0] );
	width_img = parseInt( $( ".portofolio_item_media" ).css( "width" ).split( "px" )[0] );
	height_img_wrapper = parseInt( $( "#portofolio_item_media_wrapper" ).css( "height" ).split( "px" )[0] );
	width_img_wrapper = parseInt( $( "#portofolio_item_media_wrapper" ).css( "width" ).split( "px" )[0] );
	
	if( width_img > height_img ) {			
		$( ".portofolio_item_media" ).css( "height", "auto" );
		$( ".portofolio_item_media" ).css( "width", "65%" );
		height_tmp = parseInt( $( ".portofolio_item_media" ).css( "height" ).split( "px" )[0] );
		width_start = 65;
		while( (height_tmp > height_img_wrapper) && unblocker ) {
			width_start--;
			$( ".portofolio_item_media" ).css( "height", "auto" );
			$( ".portofolio_item_media" ).css( "width", width_start + "%" );
			height_tmp = parseInt( $( ".portofolio_item_media" ).css( "height" ).split( "px" )[0] );
			if ( unblocker_counter > 50 ) {
				unblocker = false;
			}
			unblocker_counter++;
		}
		width_start -= 3;
		$( ".portofolio_item_media" ).css( "width", width_start + "%" );
	} else {
		$( ".portofolio_item_media" ).css( "width", "auto" );
		$( ".portofolio_item_media" ).css( "height", "95%" );
		width_tmp = parseInt( $( ".portofolio_item_media" ).css( "width" ).split( "px" )[0] );
		height_start = 95;
		while( (width_tmp > width_img_wrapper) && unblocker ) {
			height_start--;
			$( ".portofolio_item_media" ).css( "width", "auto" );
			$( ".portofolio_item_media" ).css( "height", height_start + "%" );
			width_tmp = parseInt( $( ".portofolio_item_media" ).css( "width" ).split( "px" )[0] );
			if ( unblocker_counter > 50 ) {
				unblocker = false;
			}
			unblocker_counter++;
		}
		height_start -= 3;
		$( ".portofolio_item_media" ).css( "height", height_start + "%" );
	}
	padding_top_tmp = parseInt( $( "#portofolio_item_media_wrapper" ).css( "height" ).split( "px" )[0] ) - parseInt( $( "#portofolio_item_media_wrapper > img" ).css( "height" ).split( "px" )[0] );
	padding_top_tmp = padding_top_tmp/2;
	$( "#portofolio_item_media_wrapper" ).css( "padding-top", String(padding_top_tmp) + "px" );
	
	padding_left_tmp = parseInt( $( "#portofolio_item_media_wrapper" ).css( "width" ).split( "px" )[0] ) - parseInt( $( "#portofolio_item_media_wrapper > img" ).css( "width" ).split( "px" )[0] );
	padding_left_tmp = padding_left_tmp/2;
	$( "#portofolio_item_media_wrapper" ).css( "padding-left", String(padding_left_tmp) + "px" );
	$( "#portofolio_item_media_wrapper" ).css( "visibility", "visible" );
}

function getQueryParams( name ){

	if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search)) {
		return decodeURIComponent(name[1]);
	} else {
		return "el";
	}
}