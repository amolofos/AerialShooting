/*	
	By Kafetzi Dimitri (www.kafetzisd.gr)
	This file contains custom scripts required by websites functionality

*/

/*
	Setting up the page
*/

var aerialvideo_video_index
var landing_trailer;
var services_section_trailers = [];
var applications_section_trailers = [];
services_section_trailers[0] = [];
services_section_trailers[1] = [];
services_section_trailers[2] = [];
services_section_trailers[3] = [];
services_section_trailers[4] = [];
applications_section_trailers[0] = [];
applications_section_trailers[1] = [];
applications_section_trailers[2] = [];
applications_section_trailers[3] = [];
applications_section_trailers[4] = [];
applications_section_trailers[5] = [];
applications_section_trailers[6] = [];
applications_section_trailers[7] = [];
applications_section_trailers[8] = [];
applications_section_trailers[9] = [];

var tag = document.createElement('script');
tag.src = "//www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var photo_gallery = [];
var flag = true;


$(document).ready(function(){
	if ( !(window.location.hash) ) {
		window.location += "#landing_section_wrapper"
	}
			
	setTopLevelNavBar();
	setSectionListHovering();
	
	var str = window.location.hash.slice(1);
	if ( str.indexOf("landing_section_wrapper") == 0 ) {
		$("nav > ul > li:nth-child(1)").addClass("selected");
	} else if ( str.indexOf("services_section_wrapper") == 0 ) {
		$("nav > ul > li:nth-child(2)").addClass("selected");
	} else if ( str.indexOf("applications_section_wrapper") == 0 ) {
		$("nav ul li:nth-child(3)").addClass("selected");
	} else if ( str.indexOf("company_section_wrapper") == 0 ) {
		$("nav ul li:nth-child(5)").addClass("selected");
	}  else if ( str.indexOf("contact_section_wrapper") == 0 ) {
		$("nav ul li:nth-child(6)").addClass("selected");
	}
 	
	if ( str.indexOf("services_section_content_aerialphoto_wrapper") == 0 ) {
		setAerialPhotoPhotoGallery();
	} else if ( str.indexOf("applications_section_content_social_wrapper") == 0 ) {
		setSocialPhotoPhotoGallery();
	} else if ( str.indexOf("applications_section_content_realestate_wrapper") == 0 ) {
		setRealEstatePhotoPhotoGallery();
	}
});



function setTopLevelNavBar() {
	// Requried: Navigation bar drop-down
	$("nav ul li").hover(
		function() {
			$(this).addClass("active");
			$(this).find("ul").css("display", "block");
		},
		function() {
			$(this).removeClass("active");
			$(this).find("ul").css("display", "none");
		}
	);
	
	$("nav ul li").click(
		function(){
			$(this).siblings(".selected").find(".selected").removeClass("selected");	
			$(this).siblings(".selected").removeClass("selected");
			$(this).addClass("selected");
		}
	);
	$("nav ul li ul li").click(
		function(){
			$(this).siblings(".selected").removeClass("selected");
			$(this).parent().parent().siblings(".selected").find("ul li.selected").removeClass("selected");	
			$(this).parent().parent().siblings(".selected").removeClass("selected");
			
			$(this).addClass("selected");
			$(this).parent().parent().addClass("selected");
		}
	);
	
	// Requried: Additional styling elements
	$('nav ul li ul li:first-child').prepend('<li class="arrow"></li>');
	$('nav ul li:first-child').addClass('first');
	$('nav ul li:last-child').addClass('last');				
}

function setSectionListHovering () {		
		$("#services_section_content_list li").hover(
			function(e) {
				if ( $(window).width() >= 740 ) {
					var services_css = new Array (7);
					for (i = 0; i < services_css.length; ++ i)
						services_css [i] = new Array (2);
					
					services_css[0][0] = "background"; services_css[0][1] = "rgba(252,180,31,0.3)";
					services_css[1][0] = "background"; services_css[1][1] = "rgba(192,192,192,0.3)";
					services_css[2][0] = "background"; services_css[2][1] = "rgba(210,105,30,0.3)";
					services_css[3][0] = "background"; services_css[3][1] = "url(../application/img/svgs/logosvg.png) 50% 50% no-repeat";
					services_css[4][0] = "background"; services_css[4][1] = "url(../application/img/svgs/logosvgblack.png) 50% 50% no-repeat";
					services_css[5][0] = "background"; services_css[5][1] = "rgba(50,205,50,0.3)";
					services_css[6][0] = "background"; services_css[6][1] = "rgba(135,206,235,0.3)";
						
					$(this).css( "background", "url(../application/img/metal-texture-slice.png) repeat transparent" );
					
					$(this).siblings().find("header").css( "visibility", "hidden" );
					$(this).siblings().each( function() {
							var services_index = Math.floor((Math.random()*6)+0); 
							$(this).css( services_css[services_index][0], services_css[services_index][1] );
						}
					);
				}
			},
			function(e) {
				if ( $(window).width() >= 740 ) {
					$(this).css( "background", "url(../application/img/svgs/logosvg.png) 50% 50% no-repeat transparent" );
					$(this).css( "background-color", "rgba(200,200,200,0.3)" );
					$(this).siblings().find("header").css( "visibility", "visible" );
					$(this).siblings().each( function() {
							$(this).css( "background", "url(../application/img/svgs/logosvg.png) 50% 50% no-repeat transparent" );
							$(this).css( "background-color", "rgba(200,200,200,0.3)" );
						}
					);
				}
			}
		);
		
		
		$("#applications_section_content_list li").hover(
			function(e) {
				if ( $(window).width() >= 740 ) {
					var applications_css = new Array (7);
					for (i = 0; i < applications_css.length; ++ i)
						applications_css [i] = new Array (2);
					
					applications_css[0][0] = "background-color"; applications_css[0][1] = "rgba(252,180,31,0.3)";
					applications_css[1][0] = "background-color"; applications_css[1][1] = "rgba(192,192,192,0.3)";
					applications_css[2][0] = "background-color"; applications_css[2][1] = "rgba(210,105,30,0.3)";
					applications_css[3][0] = "background"; applications_css[3][1] = "url(../application/img/svgs/logosvg.png) 50% 50% no-repeat";
					applications_css[4][0] = "background"; applications_css[4][1] = "url(../application/img/svgs/logosvgblack.png) 50% 50% no-repeat";
					applications_css[5][0] = "background-color"; applications_css[5][1] = "rgba(50,205,50,0.3)";
					applications_css[6][0] = "background-color"; applications_css[6][1] = "rgba(135,206,235,0.3)";
					
					$(this).css( "background", "url(../application/img/metal-texture-slice.png) repeat transparent" );
					
					$(this).siblings().find("header").css( "visibility", "hidden" );
					$(this).siblings().each( function() {
							var index = Math.floor((Math.random()*6)+0); 
							$(this).css( applications_css[index][0], applications_css[index][1] );
						}
					);
				}
			},
			function(e) {
				if ( $(window).width() >= 740 ) {
					$(this).siblings().find("header").css( "visibility", "visible" );
					$(this).siblings().css( "background-color", "rgba(200,200,200,0.3)" );
					$(this).siblings().css( "background", "" );
				}
			}
		);
}

function getCookie(c_name) {
	var i,x,y,ARRcookies=document.cookie.split(";");
	for (i=0;i<ARRcookies.length;i++) {
		x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
		y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
		x=x.replace(/^\s+|\s+$/g,"");
		if (x==c_name) {
			return unescape(y);
		}
	}
}
function setCookie(c_name, value, exdays) {
	var exdate = new Date();
	exdate.setDate(exdate.getDate() + exdays);
	var c_value = escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
	document.cookie=c_name + "=" + c_value;
}

function validateEmailAddress( item ) {

    var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
    
	var email = $(item).val();
    
	if ( !pattern.test(email) ) {
        $(item).parent().addClass('error');
        return false;
    }
    return true;
}


function onYouTubeIframeAPIReady() {
	
	var str = window.location.hash.slice(1);

	if ( str.indexOf("landing_section_wrapper") == 0 ) {
			createLandingTrailer();
	} else if ( str.indexOf("services_section_content_aerialvideo_wrapper") == 0 ) {
			createAerialVideoTrailer();
	} else if ( str.indexOf("services_section_content_aerialphoto_wrapper") == 0 ) {
			createAerialPhotoTrailer();
	} else if ( str.indexOf("services_section_content_materialproduction_wrapper") == 0 ) {
			createMaterialProductionTrailer();
	} else if ( str.indexOf("services_section_content_aerialobservation_wrapper") == 0 ) {
			createAerialObservationTrailer();
	} else if ( str.indexOf("services_section_content_searchandrescue_wrapper") == 0 ) {
			createSearchAndRescueServicesTrailer();
	} else if ( str.indexOf("applications_section_content_social_wrapper") == 0 ) {
			createSocialTrailer();
	} else if ( str.indexOf("applications_section_content_movies_wrapper") == 0 ) {
			createMoviesTrailer();
	} else if ( str.indexOf("applications_section_content_hotels_wrapper") == 0 ) {
			createHotelsTrailer();
	} else if ( str.indexOf("applications_section_content_realestate_wrapper") == 0 ) {
			createRealEstateTrailer();
	} else if ( str.indexOf("applications_section_content_engineering_wrapper") == 0 ) {
			createEngineeringTrailer();
	} else if ( str.indexOf("applications_section_content_environment_wrapper") == 0 ) {
			createEnvironmentTrailer();
	} else if ( str.indexOf("applications_section_content_searchandrescue_wrapper") == 0 ) {
			createSearchAndRescueApplicationsTrailer();
	} else if ( str.indexOf("applications_section_content_agriculture_wrapper") == 0 ) {
			createAgricultureTrailer();
	} else if ( str.indexOf("applications_section_content_custom_wrapper") == 0 ) {
			createCustomTrailer();
	}
}

function createLandingTrailer ( ) {
	if ( typeof landing_trailer == "undefined" ) {
		landing_trailer = new YT.Player('landing_trailer', {
			videoId: '_AeVgCd9U0E',
			playerVars: {
				'iv_load_policy': 3,
				'autoplay': 0,
				'origin': 'www.unmanned-evolution.com',
				'rel': 0,
				'wmode': 'transparent'
			},
			events: {
				'onReady': onLandingPlayerReady,
				'onStateChange': onLandingPlayerStateChanged
			}
		});
	}
	
	if ( $(window).width() >= 740 ) {
		setVideoDimensions( landing_trailer, "landing", 60 );
	} else {
		setVideoDimensions( landing_trailer, "landing", 90 );
	}
}

function createSectionTrailers ( ) {
	
	// services_section_content_aerialvideo
	section_trailers[section_trailers.length] = new YT.Player('services_aerialvideo_trailer_1', {
		height: '250',
		width: '400',
		videoId: '_AeVgCd9U0E',
		playerVars: {
			'iv_load_policy': 3,
			'autoplay': 0,
			'origin': 'www.unmanned-evolution.com',
			'rel': 0,
			'wmode': 'opaque'
		},
		 events: {
			'onReady': onPlayerReady,
			'onStateChange': onSectionPlayerStateChanged
		 }
	});
	section_trailers[section_trailers.length] = new YT.Player('services_aerialvideo_trailer_2', {
		height: '250',
		width: '400',
		videoId: 'L86CoQdCNaA',
		playerVars: {
			'iv_load_policy': 3,
			'autoplay': 0,
			'origin': 'www.unmanned-evolution.com',
			'rel': 0,
			'wmode': 'opaque'
		},
		 events: {
			'onReady': onPlayerReady,
			'onStateChange': onSectionPlayerStateChanged
		 }
	});
	
	// services_section_content_aerialphoto
		//no video
		
	// services_section_content_materialproduction
	section_trailers[section_trailers.length] = new YT.Player('services_materialproduction_trailer_1', {
		height: '250',
		width: '400',
		videoId: 'yMjJarOY-B8',
		playerVars: {
			'iv_load_policy': 3,
			'autoplay': 0,
			'origin': 'www.unmanned-evolution.com',
			'rel': 0,
			'wmode': 'opaque'
		},
		 events: {
			'onReady': onPlayerReady,
			'onStateChange': onSectionPlayerStateChanged
		 }
	});
	section_trailers[section_trailers.length] = new YT.Player('services_materialproduction_trailer_2', {
		height: '250',
		width: '400',
		videoId: 'AxmMFyiJ8uA',
		playerVars: {
			'iv_load_policy': 3,
			'autoplay': 0,
			'origin': 'www.unmanned-evolution.com',
			'rel': 0,
			'wmode': 'opaque'
		},
		 events: {
			'onReady': onPlayerReady,
			'onStateChange': onSectionPlayerStateChanged
		 }
	});
	section_trailers[section_trailers.length] = new YT.Player('services_materialproduction_trailer_3', {
		height: '250',
		width: '400',
		videoId: 'AD5CfwNcHHM',
		playerVars: {
			'iv_load_policy': 3,
			'autoplay': 0,
			'origin': 'www.unmanned-evolution.com',
			'rel': 0,
			'wmode': 'opaque'
		},
		 events: {
			'onReady': onPlayerReady,
			'onStateChange': onSectionPlayerStateChanged
		 }
	});
	
	// services_section_content_aerialobservation
		// no video
	
	// services_section_content_searchandrescue
		// no video
	
	
	// applications_section_content_social
	section_trailers[section_trailers.length] = new YT.Player('applications_social_trailer_1', {
		height: '250',
		width: '400',
		videoId: 'zRsutyxTC_g',
		playerVars: {
			'iv_load_policy': 3,
			'autoplay': 0,
			'origin': 'www.unmanned-evolution.com',
			'rel': 0,
			'wmode': 'opaque'
		},
		 events: {
			'onReady': onPlayerReady,
			'onStateChange': onSectionPlayerStateChanged
		 }
	});
	section_trailers[section_trailers.length] = new YT.Player('applications_social_trailer_2', {
		height: '250',
		width: '400',
		videoId: 'AD5CfwNcHHM',
		playerVars: {
			'iv_load_policy': 3,
			'autoplay': 0,
			'origin': 'www.unmanned-evolution.com',
			'rel': 0,
			'wmode': 'opaque'
		},
		 events: {
			'onReady': onPlayerReady,
			'onStateChange': onSectionPlayerStateChanged
		 }
	});
	
	// applications_section_content_movies
	section_trailers[section_trailers.length] = new YT.Player('applications_movies_trailer_1', {
		height: '250',
		width: '400',
		videoId: '-TIOiY6qpT8',
		playerVars: {
			'iv_load_policy': 3,
			'autoplay': 0,
			'origin': 'www.unmanned-evolution.com',
			'rel': 0,
			'wmode': 'opaque'
		},
		 events: {
			'onReady': onPlayerReady,
			'onStateChange': onSectionPlayerStateChanged
		 }
	});
	section_trailers[section_trailers.length] = new YT.Player('applications_movies_trailer_2', {
		height: '250',
		width: '400',
		videoId: '6SB9jgI6qks',
		playerVars: {
			'iv_load_policy': 3,
			'autoplay': 0,
			'origin': 'www.unmanned-evolution.com',
			'rel': 0,
			'wmode': 'opaque'
		},
		 events: {
			'onReady': onPlayerReady,
			'onStateChange': onSectionPlayerStateChanged
		 }
	});
	
	// applications_section_content_hotels
	section_trailers[section_trailers.length] = new YT.Player('applications_hotels_trailer', {
		height: '250',
		width: '400',
		videoId: 'jvBi8bLDCFk',
		playerVars: {
			'iv_load_policy': 3,
			'autoplay': 0,
			'origin': 'www.unmanned-evolution.com',
			'rel': 0,
			'wmode': 'opaque'
		},
		 events: {
			'onReady': onPlayerReady,
			'onStateChange': onSectionPlayerStateChanged
		 }
	});
	section_trailers[section_trailers.length] = new YT.Player('applications_hotels_trailer_2', {
		height: '250',
		width: '400',
		videoId: 'zkF5QFWbBuU',
		playerVars: {
			'iv_load_policy': 3,
			'autoplay': 0,
			'origin': 'www.unmanned-evolution.com',
			'rel': 0,
			'wmode': 'opaque'
		},
		 events: {
			'onReady': onPlayerReady,
			'onStateChange': onSectionPlayerStateChanged
		 }
	});
	
	// applications_section_content_realestate
		//no video
	
	// applications_section_content_engineering
	section_trailers[section_trailers.length] = new YT.Player('applications_engineering_trailer', {
		height: '250',
		width: '400',
		videoId: 'sCE-Ci_ZkKw',
		playerVars: {
			'iv_load_policy': 3,
			'autoplay': 0,
			'origin': 'www.unmanned-evolution.com',
			'rel': 0,
			'wmode': 'opaque'
		},
		 events: {
			'onReady': onPlayerReady,
			'onStateChange': onSectionPlayerStateChanged
		 }
	});

	// applications_section_content_environment
	section_trailers[section_trailers.length] = new YT.Player('applications_environment_trailer', {
		height: '250',
		width: '400',
		videoId: 'rT1BICpC1Gg',
		playerVars: {
			'iv_load_policy': 3,
			'autoplay': 0,
			'origin': 'www.unmanned-evolution.com',
			'rel': 0,
			'wmode': 'opaque'
		},
		 events: {
			'onReady': onPlayerReady,
			'onStateChange': onSectionPlayerStateChanged
		 }
	});
	
	// applications_section_content_searchandrescue
		// no video
	
	// applications_section_content_agriculture
	section_trailers[section_trailers.length] = new YT.Player('applications_agriculture_trailer', {
		height: '250',
		width: '400',
		videoId: 'rT1BICpC1Gg',
		playerVars: {
			'iv_load_policy': 3,
			'autoplay': 0,
			'origin': 'www.unmanned-evolution.com',
			'rel': 0,
			'wmode': 'opaque'
		},
		 events: {
			'onReady': onPlayerReady,
			'onStateChange': onSectionPlayerStateChanged
		 }
	});
	
	
	// applications_section_content_custom
	section_trailers[section_trailers.length] = new YT.Player('applications_custom_trailer', {
		height: '250',
		width: '400',
		videoId: '_AeVgCd9U0E',
		playerVars: {
			'iv_load_policy': 3,
			'autoplay': 0,
			'origin': 'www.unmanned-evolution.com',
			'rel': 0,
			'wmode': 'opaque'
		},
		 events: {
			'onReady': onPlayerReady,
			'onStateChange': onSectionPlayerStateChanged
		 }
	});
	
	if ( $(window).width() >= 740 ) {
		for ( var i = 0; i < section_trailers.length; i++ ) {
			setVideoDimensions( section_trailers[i], "section", 50 );
		}
	} else {
		for ( var i = 0; i < section_trailers.length; i++ ) {
			setVideoDimensions( section_trailers[i], "section", 100 );
		}
	}
}

function createAerialVideoTrailer() {
	if ( typeof services_section_trailers[0][0] == "undefined" ) {
		services_section_trailers[0][0] = createYoutubeTrailer( 'services_aerialvideo_trailer_1', 'L86CoQdCNaA' );
		setVideoDimensions( services_section_trailers[0][0], "section", 100 );
	}
}
function createAerialPhotoTrailer() {
	
}
function createMaterialProductionTrailer() {
	if ( typeof services_section_trailers[2][0] == "undefined" ) {
		services_section_trailers[2][0] = createYoutubeTrailer( 'services_materialproduction_trailer_1', 'yMjJarOY-B8' );
		setVideoDimensions( services_section_trailers[2][0], "section", 100 );
	}
	if ( typeof services_section_trailers[2][1] == "undefined" ) {
		services_section_trailers[2][1] = createYoutubeTrailer( 'services_materialproduction_trailer_2', 'AxmMFyiJ8uA' );
		setVideoDimensions( services_section_trailers[2][1], "section", 100 );
	}
	if ( typeof services_section_trailers[2][2] == "undefined" ) {
		services_section_trailers[2][2] = createYoutubeTrailer( 'services_materialproduction_trailer_3', 'AD5CfwNcHHM' );
		setVideoDimensions( services_section_trailers[2][2], "section", 100 );
	}
}
function createAerialObservationTrailer() {
	
}
function createSearchAndRescueServicesTrailer() {
	
}

function createSocialTrailer() {
	if ( typeof applications_section_trailers[0][0] == "undefined" ) {
		applications_section_trailers[0][0] = createYoutubeTrailer( 'applications_social_trailer_1', 'zRsutyxTC_g' );
		setVideoDimensions( applications_section_trailers[0][0], "section", 100 );
	}
	if ( typeof applications_section_trailers[0][1] == "undefined" ) {
		applications_section_trailers[0][1] = createYoutubeTrailer( 'applications_social_trailer_2', 'xi3cxWC5iJI' );
		setVideoDimensions( applications_section_trailers[0][1], "section", 100 );
	}
}
function createMoviesTrailer() {
	if ( typeof applications_section_trailers[1][0] == "undefined" ) {
		applications_section_trailers[1][0] = createYoutubeTrailer( 'applications_movies_trailer_1', '-TIOiY6qpT8' );
		setVideoDimensions( applications_section_trailers[1][0], "section", 100 );
	}
	if ( typeof applications_section_trailers[1][1] == "undefined" ) {
		applications_section_trailers[1][1] = createYoutubeTrailer( 'applications_movies_trailer_2', '6SB9jgI6qks' );
		setVideoDimensions( applications_section_trailers[1][1], "section", 100 );
	}
}
function createHotelsTrailer() {
	if ( typeof applications_section_trailers[2][0] == "undefined" ) {
		applications_section_trailers[2][0] = createYoutubeTrailer( 'applications_hotels_trailer', 'jvBi8bLDCFk' );
		setVideoDimensions( applications_section_trailers[2][0], "section", 100 );
	}
	if ( typeof applications_section_trailers[2][1] == "undefined" ) {
		applications_section_trailers[2][1] = createYoutubeTrailer( 'applications_hotels_trailer_2', 'zkF5QFWbBuU' );
		setVideoDimensions( applications_section_trailers[2][1], "section", 100 );
	}
}
function createRealEstateTrailer() {
	
}
function createEngineeringTrailer() {
	if ( typeof applications_section_trailers[4][0] == "undefined" ) {
		applications_section_trailers[4][0] = createYoutubeTrailer( 'applications_engineering_trailer', 'sCE-Ci_ZkKw' );
		setVideoDimensions( applications_section_trailers[4][0], "section", 100 );
	}
}
function createEnvironmentTrailer() {
	if ( typeof applications_section_trailers[5][0] == "undefined" ) {
		applications_section_trailers[5][0] = createYoutubeTrailer( 'applications_environment_trailer', 'rT1BICpC1Gg' );
		setVideoDimensions( applications_section_trailers[5][0], "section", 100 );
	}
}
function createSearchAndRescueApplicationsTrailer() {
	
}
function createAgricultureTrailer() {
	if ( typeof applications_section_trailers[7][0] == "undefined" ) {
		applications_section_trailers[7][0] = createYoutubeTrailer( 'applications_agriculture_trailer', 'rT1BICpC1Gg' );
		setVideoDimensions( applications_section_trailers[7][0], "section", 100 );
	}
}
function createCustomTrailer() {
	if ( typeof applications_section_trailers[8][0] == "undefined" ) {
		applications_section_trailers[8][0] = createYoutubeTrailer( 'applications_custom_trailer', '_AeVgCd9U0E' );
		setVideoDimensions( applications_section_trailers[8][0], "section", 100 );
	}
}


function onLandingPlayerReady ( event ) {
	event.target.setPlaybackQuality("large");
	var str = window.location.hash.slice(1);
	if ( str.indexOf("landing_section_wrapper") == 0 ) {
		landing_trailer.playVideo();
	}
}
			  
function onPlayerReady ( event ) {
	//event.target.setPlaybackQuality("large");
}

function onLandingPlayerStateChanged( event ) {
	
	var wrapper = $(event.target.getIframe()).parent("figure");
	var wrapper_div = $(event.target.getIframe()).parent("figure").parent("div");
	
	if ( $(window).width() >= 740 ) {
		if ( event.data == YT.PlayerState.PLAYING ) {
			$(wrapper).css( "background-color", "rgba(252,180,31,.3)");
			$("#landing_trailer_wrapper p").css( "color", "#fff" );	
		} else if ( event.data == YT.PlayerState.ENDED ) {
			$(wrapper).css( "background-color", "rgba(200,200,200,.3)");
			$("#landing_trailer_wrapper p").css( "color", "#000" );	
		} else if ( event.data == YT.PlayerState.PAUSED ) {		
			$(wrapper).css( "background-color", "rgba(200,200,200,.3)");
			$("#landing_trailer_wrapper p").css( "color", "#000" );	
		} else if ( event.data == YT.PlayerState.BUFFERING ) {
		
		}
	} else {
		if ( event.data == YT.PlayerState.PLAYING ) {
			$(wrapper).css( "background-color", "rgba(252,180,31,.3)");
			setVideoDimensions( event.target, "landing", 90 );
		} else if ( event.data == YT.PlayerState.ENDED ) {
			$(wrapper).css( "background-color", "rgba(200,200,200,.3)");
		} else if ( event.data == YT.PlayerState.PAUSED ) {		
			$(wrapper).css( "background-color", "rgba(200,200,200,.3)");
		} else if ( event.data == YT.PlayerState.BUFFERING ) {
		
		}
	}
	
}

function onSectionPlayerStateChanged ( event ) {
	
	var wrapper = $(event.target.getIframe()).parent("figure");
	var wrapper_div = $(event.target.getIframe()).parent("figure").parent("div");
	
	if ( $(window).width() >= 740 ) {
		if ( event.data == YT.PlayerState.PLAYING ) {
			$(wrapper).css( "width", "80%");
			$(wrapper).css( "padding-left", "10%");
			$(wrapper).css( "padding-right", "10%");
			$(wrapper_div).css( "background-color", "rgba(252,180,31,.3)");
			setVideoDimensions( event.target, "section", 100 );
		} else if ( event.data == YT.PlayerState.ENDED ) {
			$(wrapper_div).css( "background-color", "rgba(200,200,200,.3)");
			$(wrapper).css( "width", "59.5%");
			$(wrapper).css( "padding-left", "20%");
			setVideoDimensions( event.target, "section", 100 );
		} else if ( event.data == YT.PlayerState.PAUSED ) {		
			$(wrapper_div).css( "background-color", "rgba(200,200,200,.3)");
		} else if ( event.data == YT.PlayerState.BUFFERING ) {
		
		}
	} else {
		if ( event.data == YT.PlayerState.PLAYING ) {
			$(wrapper).css( "width", "90%");
			$(wrapper).css( "padding-left", "5%");
			$(wrapper_div).css( "background-color", "rgba(252,180,31,.3)");
			setVideoDimensions( event.target, "section", 100 );
		} else if ( event.data == YT.PlayerState.ENDED ) {
			$(wrapper_div).css( "background-color", "rgba(200,200,200,.3)");
			$(wrapper).css( "width", "80%");
			$(wrapper).css( "padding-left", "10%");
			setVideoDimensions( event.target, "section", 100 );
		} else if ( event.data == YT.PlayerState.PAUSED ) {
			$(wrapper_div).css( "background-color", "rgba(200,200,200,.3)");
		} else if ( event.data == YT.PlayerState.BUFFERING ) {
		
		}
	}
}

function stopVideo() {
	landing_trailer.stopVideo();
}
			  
function setVideoDimensions( target, location_type, width_perc ) {
	// setting percentage of screen that the video will take
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

function createYoutubeTrailer ( divContainerID, youtubeVideoID ) {

	return new YT.Player( divContainerID, {
			videoId: youtubeVideoID,
			playerVars: {
				'iv_load_policy': 3,
				'enablejsapi': 1,
				'autoplay': 0,
				'origin': 'www.unmanned-evolution.com',
				'rel': 0,
				'wmode': 'transparent',
				'showinfo': 0
			},
			 events: {
				'onReady': onPlayerReady,
				'onStateChange': onSectionPlayerStateChanged
			 }
	});
}
				  
$(window).bind('resize', function () {
	
	if ( $(window).width() >= 740 ) {
		
		if ( typeof landing_trailer != "undefined" ) {
			var wrapper = $(landing_trailer.getIframe()).parent("figure");
			$(wrapper).css( "background-color", "rgba(252,180,31,.3)");
			$(wrapper).css( "padding-left", "20%");
			setVideoDimensions( landing_trailer, "landing", 60 );
		}
		for ( var i = 0; i < services_section_trailers.length; i++ ) {
			for ( var j = 0; j < services_section_trailers[i].length; j++ ) {
				if ( services_section_trailers[i][j].getPlayerState() == 1 || services_section_trailers[i][j].getPlayerState() == 2 ) {
					var wrapper = $(services_section_trailers[i][j].getIframe()).parent("figure");
					var wrapper_div = $(services_section_trailers[i][j].getIframe()).parent("figure").parent("div");
					$(wrapper).css( "width", "80%");
					$(wrapper).css( "padding-left", "10%");
					$(wrapper).css( "padding-right", "10%");
					if( services_section_trailers[i][j].getPlayerState() == 1 ) {
						$(wrapper_div).css( "background-color", "rgba(252,180,31,.3)");
					} else {
						$(wrapper_div).css( "background-color", "rgba(200,200,200,.3)");
					}
					setVideoDimensions( services_section_trailers[i][j], "section", 100 );
				} else {
					var wrapper = $(services_section_trailers[i][j].getIframe()).parent("figure");
					var wrapper_div = $(services_section_trailers[i][j].getIframe()).parent("figure").parent("div");
					$(wrapper_div).css( "background-color", "rgba(200,200,200,.3)");
					$(wrapper).css( "width", "59.5%");
					$(wrapper).css( "padding-left", "20%");
					setVideoDimensions( services_section_trailers[i][j], "section", 100 );
				}
			}
		}
		for ( var i = 0; i < applications_section_trailers.length; i++ ) {
			for ( var j = 0; j < applications_section_trailers[i].length; j++ ) {
				if ( applications_section_trailers[i][j].getPlayerState() == 1 || applications_section_trailers[i][j].getPlayerState() == 2 ) {
					var wrapper = $(applications_section_trailers[i][j].getIframe()).parent("figure");
					var wrapper_div = $(applications_section_trailers[i][j].getIframe()).parent("figure").parent("div");
					$(wrapper).css( "width", "80%");
					$(wrapper).css( "padding-left", "10%");
					$(wrapper).css( "padding-right", "0%");
					if( applications_section_trailers[i][j].getPlayerState() == 1 ) {
						$(wrapper_div).css( "background-color", "rgba(252,180,31,.3)");
					} else {
						$(wrapper_div).css( "background-color", "rgba(200,200,200,.3)");
					}
					setVideoDimensions( applications_section_trailers[i][j], "section", 100 );
				} else {
					var wrapper = $(applications_section_trailers[i][j].getIframe()).parent("figure");
					var wrapper_div = $(applications_section_trailers[i][j].getIframe()).parent("figure").parent("div");
					$(wrapper_div).css( "background-color", "rgba(200,200,200,.3)");
					$(wrapper).css( "width", "59.5%");
					$(wrapper).css( "padding-left", "20%");
					setVideoDimensions( applications_section_trailers[i][j], "section", 100 );
				}
			}
		}
			
	} else {
		if ( typeof landing_trailer != "undefined" ) {
			var wrapper = $(landing_trailer.getIframe()).parent("figure");
			$(wrapper).css( "padding-left", "5%");
			$(wrapper).css( "background-color", "rgba(252,180,31,.3)");
			setVideoDimensions( landing_trailer, "landing", 90 );
		}
		for ( var i = 0; i < services_section_trailers.length; i++ ) {
			for ( var j = 0; j < services_section_trailers[i].length; j++ ) {
				if ( services_section_trailers[i][j].getPlayerState() == 1 || services_section_trailers[i][j].getPlayerState() == 2 ) {
					var wrapper = $(services_section_trailers[i][j].getIframe()).parent("figure");
					var wrapper_div = $(services_section_trailers[i][j].getIframe()).parent("figure").parent("div");$(wrapper).css( "width", "90%");
					$(wrapper).css( "padding-left", "5%");
					if( services_section_trailers[i][j].getPlayerState() == 1 ) {
						$(wrapper_div).css( "background-color", "rgba(252,180,31,.3)");
					} else {
						$(wrapper_div).css( "background-color", "rgba(200,200,200,.3)");
					}
					setVideoDimensions( services_section_trailers[i][j], "section", 100 );
				} else {
					var wrapper = $(services_section_trailers[i][j].getIframe()).parent("figure");
					var wrapper_div = $(services_section_trailers[i][j].getIframe()).parent("figure").parent("div");
					$(wrapper_div).css( "background-color", "rgba(200,200,200,.3)");
					$(wrapper).css( "width", "80%");
					$(wrapper).css( "padding-left", "0%");
					setVideoDimensions( services_section_trailers[i][j], "section", 100 );
				}
			}
		}
		for ( var i = 0; i < applications_section_trailers.length; i++ ) {
			for ( var j = 0; j < applications_section_trailers[i].length; j++ ) {
				if ( applications_section_trailers[i][j].getPlayerState() == 1 || applications_section_trailers[i][j].getPlayerState() == 2 ) {
					var wrapper = $(applications_section_trailers[i][j].getIframe()).parent("figure");
					var wrapper_div = $(applications_section_trailers[i][j].getIframe()).parent("figure").parent("div");$(wrapper).css( "width", "90%");
					$(wrapper).css( "padding-left", "5%");
					if( applications_section_trailers[i][j].getPlayerState() == 1 ) {
						$(wrapper_div).css( "background-color", "rgba(252,180,31,.3)");
					} else {
						$(wrapper_div).css( "background-color", "rgba(200,200,200,.3)");
					}
					setVideoDimensions( applications_section_trailers[i][j], "section", 100 );
				} else {
					var wrapper = $(applications_section_trailers[i][j].getIframe()).parent("figure");
					var wrapper_div = $(applications_section_trailers[i][j].getIframe()).parent("figure").parent("div");
					$(wrapper_div).css( "background-color", "rgba(200,200,200,.3)");
					$(wrapper).css( "width", "80%");
					$(wrapper).css( "padding-left", "0%");
					setVideoDimensions( applications_section_trailers[i][j], "section", 100 );
				}
			}
		}
	}
});		
				  
$(window).bind('hashchange', function () {
	var str = window.location.hash.slice(1);
	if ( typeof landing_trailer != "undefined" ) {
		if ( str.indexOf("landing_section_wrapper") == '-1' ) {
			landing_trailer.pauseVideo();
		} else if ( (str.indexOf("landing_section_wrapper") == 0) && flag ) {
			landing_trailer.playVideo();
			flag = false;
		}
	}
	
	if ( str.indexOf("landing_section_wrapper") == 0 ) {
			createLandingTrailer();
	} else if ( str.indexOf("services_section_content_aerialvideo_wrapper") == 0 ) {
			createAerialVideoTrailer();
	} else if ( str.indexOf("services_section_content_aerialphoto_wrapper") == 0 ) {
			createAerialPhotoTrailer();
			setAerialPhotoPhotoGallery();
	} else if ( str.indexOf("services_section_content_materialproduction_wrapper") == 0 ) {
			createMaterialProductionTrailer();
	} else if ( str.indexOf("services_section_content_aerialobservation_wrapper") == 0 ) {
			createAerialObservationTrailer();
	} else if ( str.indexOf("services_section_content_searchandrescue_wrapper") == 0 ) {
			createSearchAndRescueServicesTrailer();
	} else if ( str.indexOf("applications_section_content_social_wrapper") == 0 ) {
			createSocialTrailer();
			setSocialPhotoPhotoGallery();
	} else if ( str.indexOf("applications_section_content_movies_wrapper") == 0 ) {
			createMoviesTrailer();
	} else if ( str.indexOf("applications_section_content_hotels_wrapper") == 0 ) {
			createHotelsTrailer();
	} else if ( str.indexOf("applications_section_content_realestate_wrapper") == 0 ) {
			createRealEstateTrailer();
			setRealEstatePhotoPhotoGallery();
	} else if ( str.indexOf("applications_section_content_engineering_wrapper") == 0 ) {
			createEngineeringTrailer();
	} else if ( str.indexOf("applications_section_content_environment_wrapper") == 0 ) {
			createEnvironmentTrailer();
	} else if ( str.indexOf("applications_section_content_searchandrescue_wrapper") == 0 ) {
			createSearchAndRescueApplicationsTrailer();
	} else if ( str.indexOf("applications_section_content_agriculture_wrapper") == 0 ) {
			createAgricultureTrailer();
	} else if ( str.indexOf("applications_section_content_custom_wrapper") == 0 ) {
			createCustomTrailer();
	}
	for ( var i = 0; i < services_section_trailers.length; i++ ) {
		for ( var j = 0; j < services_section_trailers[i].length; j++ ) {
			if ( typeof services_section_trailers[i][j] != "undefined" ) {
				services_section_trailers[i][j].pauseVideo();
			}
		}
	}
	for ( var i = 0; i < applications_section_trailers.length; i++ ) {
		for ( var j = 0; j < applications_section_trailers[i].length; j++ ) {
			if ( typeof applications_section_trailers[i][j] != "undefined" ) {
				applications_section_trailers[i][j].pauseVideo();
			}
		}
	}
});

function setAerialPhotoPhotoGallery ( ) {
	if ( typeof photo_gallery[photo_gallery.length] == "undefined" ) {
		photo_gallery[photo_gallery.length] = $("#services_section_content_aerialphoto_figure_thumbs").galleriffic({
			delay:                     5000, // in milliseconds
			numThumbs:                 20, // The number of thumbnails to show page
			preloadAhead:              0, // Set to -1 to preload all images
			enableTopPager:            false,
			enableBottomPager:         false,
			maxPagesToShow:            20,  // The maximum number of pages to display in either the top or bottom pager
			imageContainerSel:         "#services_section_content_aerialphoto_figure_slideshow", // The CSS selector for the element within which the main slideshow image should be rendered
			renderSSControls:          false, // Specifies whether the slideshow's Play and Pause links should be rendered
			renderNavControls:         false, // Specifies whether the slideshow's Next and Previous links should be rendered
			enableHistory:             false, // Specifies whether the url's hash and the browser's history cache should update when the current slideshow image changes
			enableKeyboardNavigation:  true, // Specifies whether keyboard navigation is enabled
			autoStart:                 true, // Specifies whether the slideshow should be playing or paused when the page first loads
			syncTransitions:           false, // Specifies whether the out and in transitions occur simultaneously or distinctly
			defaultTransitionDuration: 3000 // If using the default transitions, specifies the duration of the transitions
		});
	}
}

function setSocialPhotoPhotoGallery ( ) {
	if ( typeof photo_gallery[photo_gallery.length] == "undefined" ) {
		photo_gallery[photo_gallery.length] = $("#applications_section_content_social_figure_thumbs").galleriffic({
			delay:                     5000, // in milliseconds
			numThumbs:                 20, // The number of thumbnails to show page
			preloadAhead:              0, // Set to -1 to preload all images
			enableTopPager:            false,
			enableBottomPager:         false,
			maxPagesToShow:            20,  // The maximum number of pages to display in either the top or bottom pager
			imageContainerSel:         "#applications_section_content_social_figure_slideshow", // The CSS selector for the element within which the main slideshow image should be rendered
			renderSSControls:          false, // Specifies whether the slideshow's Play and Pause links should be rendered
			renderNavControls:         false, // Specifies whether the slideshow's Next and Previous links should be rendered
			enableHistory:             false, // Specifies whether the url's hash and the browser's history cache should update when the current slideshow image changes
			enableKeyboardNavigation:  true, // Specifies whether keyboard navigation is enabled
			autoStart:                 true, // Specifies whether the slideshow should be playing or paused when the page first loads
			syncTransitions:           false, // Specifies whether the out and in transitions occur simultaneously or distinctly
			defaultTransitionDuration: 3000 // If using the default transitions, specifies the duration of the transitions
		});
	}
}

function setRealEstatePhotoPhotoGallery ( ) {
	if ( typeof photo_gallery[photo_gallery.length] == "undefined" ) {
		photo_gallery[photo_gallery.length] = $("#applications_section_content_realestate_figure_thumbs").galleriffic({
			delay:                     5000, // in milliseconds
			numThumbs:                 20, // The number of thumbnails to show page
			preloadAhead:              0, // Set to -1 to preload all images
			enableTopPager:            false,
			enableBottomPager:         false,
			maxPagesToShow:            20,  // The maximum number of pages to display in either the top or bottom pager
			imageContainerSel:         "#applications_section_content_realestate_figure_slideshow", // The CSS selector for the element within which the main slideshow image should be rendered
			renderSSControls:          false, // Specifies whether the slideshow's Play and Pause links should be rendered
			renderNavControls:         false, // Specifies whether the slideshow's Next and Previous links should be rendered
			enableHistory:             false, // Specifies whether the url's hash and the browser's history cache should update when the current slideshow image changes
			enableKeyboardNavigation:  true, // Specifies whether keyboard navigation is enabled
			autoStart:                 true, // Specifies whether the slideshow should be playing or paused when the page first loads
			syncTransitions:           false, // Specifies whether the out and in transitions occur simultaneously or distinctly
			defaultTransitionDuration: 3000 // If using the default transitions, specifies the duration of the transitions
		});
	}
}

function changeLanguage( lang ) {

	var url = document.location.pathname;
	
	if ( lang != "en" || lang != "gr" ) {
		return;
	}
	url = url.trimRight( "." );
	url = url[0];
	url = url + lang + ".php";
	console.log( url );
}