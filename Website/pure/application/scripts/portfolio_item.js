
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

var type;
var portfolio_player;
var social_init = 0;

$(document).ready(function(){
	var type_item;
	
	
	
	type = $( "article" ).hasClass( "video" );
	$( ".addthis_button_facebook_like iframe" ).css( "width", "70px" );
	if ( type ) {
		var tag;
		var firstScriptTag;
		tag = document.createElement('script');
		tag.src = "//www.youtube.com/iframe_api";
		firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	}
	
	$( ".portfolio_item_full" ).bind( "click", function( e ) {
		var type;
		var id;
		
		e.preventDefault();
		if( window.top.innerWidth >= 740 ) {
			id = $( this ).parent( "header" ).attr( "id" );
			id = id.split( "_header" );
			id = id[0];
			
			if ( !($( this ).siblings( "article" ).hasClass( "video" )) ) {
				type = "image";
			} else {
				type = "video";
			}
			
			show_slideshow( e, type, id );
		}
	});
	$( "article" ).bind( "click", function( e ) {
		var type;
		var id;
		
		e.preventDefault();
		if( window.top.innerWidth >= 740 ) {
			id = $( this ).attr( "id" );
			id = id.split( "_article" );
			id = id[0];
			
			if ( $( this ).hasClass( "video" ) ) {
				type = "video";
			} else {
				type = "image";
			}
			
			show_slideshow( e, type, id );
		}
	});
	
	$( "article" ).hover(
		function( e ) {
			if( window.top.innerWidth >= 740 ) {
				if ( !social_init ) {
					var tag;
					var firstScriptTag;
					tag = document.createElement('script');
					tag.src = "http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5089d9595d29b9df&domready=1&async=1";
					firstScriptTag = document.getElementsByTagName('script')[0];
					firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
					social_init = 1;
					setTimeout( function(){addthis.init();}, 500 );
				}
			}
		},
		function( e ) {
			
		}	
	);
});

function show_slideshow( e, type, id ) {
	var id_item = id;
	var type_item = type;
	
	slideshow_builder( id_item );
	window.top.document.getElementById( "portfolio_slideshow_section_wrapper" ).style.display = "block";
}

function slideshow_builder( id ) {
	
	var type_item;
	var iframe;
	var iframe_span;
	var iframe_tag;
	var onload;
	var portfolio_slideshow_section_wrapper;
	var portfolio_slideshow_section;
	
	if ( type ) {
		type_item = "video";
	} else {
		type_item = "image";
	}
	
	portfolio_slideshow_section_wrapper = window.top.document.getElementById( "portfolio_slideshow_section_wrapper" );
	portfolio_slideshow_section = window.top.document.getElementById( "portfolio_slideshow_section" );
	if ( portfolio_slideshow_section.firstChild ) {
		portfolio_slideshow_section.removeChild( portfolio_slideshow_section.firstChild );
	}
	
	iframe = document.createElement( "iframe" );
	iframe.frameBorder = "0";
	iframe.scrolling = "no";
	iframe.src = "portfolio_slideshow.php?lang=" + getQueryParams( "lang" ) + "&slide=embed" + "&type=" + type_item + "&id=" + id;
	iframe.id = "portfolio_slideshow_iFrame";
	iframe.style.width = "100%";
	iframe.style.height = "100%";
	
	iframe_span =  document.createElement( "span" );
	iframe_span.text = "Δυστυχώς προέκυψε κάποιο πρόβλημα με την συγκεκριμένη φωτογραφία.";
	iframe.appendChild( iframe_span );
	
	portfolio_slideshow_section.appendChild( iframe );
	
}

function onYouTubeIframeAPIReady ( ) {
	type = $( "article" ).hasClass( "video" );
	if ( type ) {
		portfolio_player_id = $(".portfolio_item_media").attr("id");
		portfolio_player_id = portfolio_player_id.split( "_wrapper" );
		portfolio_player_id = portfolio_player_id[0];
		video_id = portfolio_video_ids[ portfolio_player_id ];
		createPlayer( portfolio_player_id, video_id );
	}
}

function createPlayer ( portfolio_player_id, video_id ) {
	
	var portfolio_player_id_tmp = portfolio_player_id;
	var video_id_tmp = video_id;
	
	portfolio_player = new YT.Player( portfolio_player_id_tmp, {
		videoId: video_id_tmp,
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
	event.target.setPlaybackQuality( "large" );
}

function onportfolioPlayerStateChanged ( event ) {
	
	var wrapper = $(event.target.getIframe()).parent(" figure" );
	var wrapper_div = $(event.target.getIframe()).parent( "figure" ).parent( "div" );
	var iframe = event.target.getIframe();
	
	if ( $(window).width() >= 740 ) {
		if ( event.data == YT.PlayerState.PLAYING ) {
			/*
			setVideoDimensions( event.target, "portfolio", 100 );
			
			$(wrapper).css( "width", "100%" );
			$(wrapper).css( "height", "100%" );
			

			$(iframe).css("background-color", "rgba(252,180,31,0.3)");
			$(iframe).css("z-index", "400");
			*/
		} else if ( event.data == YT.PlayerState.ENDED ) {
			/*
			setVideoDimensions( event.target, "portfolio", 25 );
			$(wrapper_div).css("width", "auto");
			$(iframe).css("background-color", "rgba(200,200,200,0.3)");
			$(iframe).css("z-index", "0");
			*/
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
			wrapper_width = $(window).width();
			break;		
	}
		
	video_width_n = Math.round(wrapper_width*width_perc/100);
	video_height_n = Math.round(video_width_n/1.77);
	target.setSize( video_width_n, video_height_n );
}

$(window).bind( "load", function( ) {

	//setTimeout( function( ) { $("img.lazy").lazyload(); }, 500 );
});

function getQueryParams( name ){

	if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search)) {
		return decodeURIComponent(name[1]);
	} else {
		return "el";
	}
}