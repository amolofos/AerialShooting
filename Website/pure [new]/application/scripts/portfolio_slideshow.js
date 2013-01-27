portfolio_video_ids = [ ];
portfolio_video_ids [ "default" 				 ] = [ "_AeVgCd9U0E" ];
portfolio_video_ids [ "Multi-rotor-demo-scenes" ] = [ "_AeVgCd9U0E" ];
portfolio_video_ids [ "Wedding-trailer"         ] = [ "zRsutyxTC_g" ];
portfolio_video_ids [ "Concerts"                ] = [ "AxmMFyiJ8uA" ];
portfolio_video_ids [ "Concerts_live"           ] = [ "AD5CfwNcHHM" ];
portfolio_video_ids [ "Running_man"             ] = [ "-TIOiY6qpT8" ];
portfolio_video_ids [ "Ιndustrial_area"         ] = [ "sCE-Ci_ZkKw" ];
portfolio_video_ids [ "Τourism_businesses"      ] = [ "jvBi8bLDCFk" ];
portfolio_video_ids [ "Οbservation_environment" ] = [ "L86CoQdCNaA" ];
portfolio_video_ids [ "Downhill_dirfy_2011"     ] = [ "yMjJarOY-B8" ];
portfolio_video_ids [ "Parkour_2011"            ] = [ "6SB9jgI6qks" ];
portfolio_video_ids [ "Presentation_zembili"    ] = [ "zkF5QFWbBuU" ];
portfolio_video_ids [ "Mountains"               ] = [ "rT1BICpC1Gg" ];
portfolio_video_ids [ "Concerts_Tsaligopoulou"  ] = [ "xi3cxWC5iJI" ];

var video_id;
var portfolio_player_id;
var portfolio_player;
	
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
		
		$( ".portfolio_item_media" ).css( "border", "0 none" );
		$( ".portfolio_item_media" ).css( "top", "10%" );
		$( ".portfolio_item_caption" ).css( "width", "20%" );
		$( "#portfolio_item_media_wrapper" ).css( "left", "20%" );
		$( "#portfolio_item_media_wrapper" ).css( "width", "80%" );
		$( "#portfolio_item_media_wrapper" ).css( "height", "80%" );
	}
	
	$( "#portfolio_slideshow_close > img" ).bind( "click", function( e ) {
		var href;
		var iframe;
		
		href = window.top.location.pathname;
		href = href.split( "/" );
		href = href[ href.length-1];
		e.preventDefault( );
		if ( href == "portfolio_slideshow.php" ) {
			window.location.href = "portfolio.php?lang=" + getQueryParams( "lang" );
		} else {
			window.top.document.getElementById( "portfolio_slideshow_section_wrapper" ).style.display = "none";
			iframe = window.top.document.getElementById( "portfolio_slideshow_iFrame" );
			window.top.document.getElementById( "portfolio_slideshow_section" ).removeChild( iframe );
		}
	});

	setTimeout( function( ) { $( ".addthis_button_facebook_like > iframe" ).css( "width", "80px" ); }, 1000);
});

	

function onYouTubeIframeAPIReady ( ) {
	
	if ( is_type ) {
		portfolio_player_id = $(".portfolio_item_media").attr("id");
		portfolio_player_id = portfolio_player_id.split( "_wrapper" );
		portfolio_player_id = portfolio_player_id[0];
		video_id = portfolio_video_ids[ portfolio_player_id ];
		createPlayer( portfolio_player_id, video_id );
		setVideoDimensions( portfolio_player, "portfolio", 70 );
	}
}

function createPlayer ( portfolio_player_id, video_id ) {
	
	portfolio_player = new YT.Player( portfolio_player_id, {
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
			'onStateChange': onportfolioPlayerStateChanged
		 }
	});
}

function onPlayerReady ( event ) {
	event.target.setPlaybackQuality("large");
	$( "#portfolio_item_media_wrapper" ).css( "visibility", "visible" );
	portfolio_player.playVideo();
}

function onportfolioPlayerStateChanged ( event ) {
	
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
		case "portfolio":
			wrapper_width = $( "#portfolio_item_media_wrapper" ).width();
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
	
	
	height_img = parseInt( $( ".portfolio_item_media" ).css( "height" ).split( "px" )[0] );
	width_img = parseInt( $( ".portfolio_item_media" ).css( "width" ).split( "px" )[0] );
	height_img_wrapper = parseInt( $( "#portfolio_item_media_wrapper" ).css( "height" ).split( "px" )[0] );
	width_img_wrapper = parseInt( $( "#portfolio_item_media_wrapper" ).css( "width" ).split( "px" )[0] );
	
	if( width_img > height_img ) {			
		$( ".portfolio_item_media" ).css( "height", "auto" );
		$( ".portfolio_item_media" ).css( "width", "65%" );
		height_tmp = parseInt( $( ".portfolio_item_media" ).css( "height" ).split( "px" )[0] );
		width_start = 65;
		while( (height_tmp > height_img_wrapper) && unblocker ) {
			width_start--;
			$( ".portfolio_item_media" ).css( "height", "auto" );
			$( ".portfolio_item_media" ).css( "width", width_start + "%" );
			height_tmp = parseInt( $( ".portfolio_item_media" ).css( "height" ).split( "px" )[0] );
			if ( unblocker_counter > 50 ) {
				unblocker = false;
			}
			unblocker_counter++;
		}
		width_start -= 3;
		$( ".portfolio_item_media" ).css( "width", width_start + "%" );
	} else {
		$( ".portfolio_item_media" ).css( "width", "auto" );
		$( ".portfolio_item_media" ).css( "height", "95%" );
		width_tmp = parseInt( $( ".portfolio_item_media" ).css( "width" ).split( "px" )[0] );
		height_start = 95;
		while( (width_tmp > width_img_wrapper) && unblocker ) {
			height_start--;
			$( ".portfolio_item_media" ).css( "width", "auto" );
			$( ".portfolio_item_media" ).css( "height", height_start + "%" );
			width_tmp = parseInt( $( ".portfolio_item_media" ).css( "width" ).split( "px" )[0] );
			if ( unblocker_counter > 50 ) {
				unblocker = false;
			}
			unblocker_counter++;
		}
		height_start -= 3;
		$( ".portfolio_item_media" ).css( "height", height_start + "%" );
	}
	padding_top_tmp = parseInt( $( "#portfolio_item_media_wrapper" ).css( "height" ).split( "px" )[0] ) - parseInt( $( "#portfolio_item_media_wrapper > img" ).css( "height" ).split( "px" )[0] );
	padding_top_tmp = padding_top_tmp/2;
	$( "#portfolio_item_media_wrapper" ).css( "padding-top", String(padding_top_tmp) + "px" );
	
	padding_left_tmp = parseInt( $( "#portfolio_item_media_wrapper" ).css( "width" ).split( "px" )[0] ) - parseInt( $( "#portfolio_item_media_wrapper > img" ).css( "width" ).split( "px" )[0] );
	padding_left_tmp = padding_left_tmp/2;
	$( "#portfolio_item_media_wrapper" ).css( "padding-left", String(padding_left_tmp) + "px" );
	$( "#portfolio_item_media_wrapper" ).css( "visibility", "visible" );
}

function getQueryParams( name ){

	if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search)) {
		return decodeURIComponent(name[1]);
	} else {
		return "el";
	}
}