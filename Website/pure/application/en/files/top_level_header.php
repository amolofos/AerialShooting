<?php

/*

By Dimitri Kafetzi @ http://www.kafetzisd.gr
Distributed under the Creative Commons Attribution 3.0 License

*/
$request_uri = $_SERVER["REQUEST_URI"];
$request_uri = explode( "/", $request_uri);
$request_uri = $request_uri[ count($request_uri)-1 ];							
?>
	<!-- top level header section -->
	<div id="top_level_header_section_wrapper">
		<section id="top_level_header_section">
			
		<!-- top level branding section -->
			<div id="top_level_header_branding_section_wrapper">
				<!-- logo -->
				<div id="top_level_header_branding_logo_wrapper" class="clearfix">
					<figure>
						<a href="application.php#landing_section_wrapper">
						<img alt="Logo" src="../img/logo_medium.png"/>
						</a>
					</figure>
			 	</div>
				<header  id="top_level_header_branding_name">
					<!-- company name -->
					<a href="application.php#landing_section_wrapper">
						<span class="top_level_header_company_name" >Unmanned <span class="top_level_header_company_name_colored">Evolution</span></span>
					</a>
					<br>
					<!-- moto -->
				 	<span id="company_moto" class="company_moto">Air / Video Experts</span>
				</header> 	
			</div>

			<!-- top level navigation -->
			<div id="top_level_header_navigation_section_wrapper">
			<nav id="top_level_header_navigation_nav" class="dark">
				<ul id="top_level_header_navigation_list" class="clear">
					<li class="landing_nav"><a id="top_level_header_nav_landing" href="application.php#landing_section_wrapper">Home</a></li>
					<li class="services_nav"><a id="top_level_header_nav_services" href="application.php#services_section_wrapper">Services</a>
						<ul>
							<li class="services_nav"><a href="application.php#services_section_content_aerialvideo_wrapper">Aerial Cinematography</a></li>
							<li class="services_nav"><a href="application.php#services_section_content_aerialphoto_wrapper">Aerial Photography</a></li>
							<li class="services_nav"><a href="application.php#services_section_content_materialproduction_wrapper">Media production</a></li>
							<li class="services_nav"><a href="application.php#services_section_content_aerialobservation_wrapper">Aerial Observation</a></li>
							<li class="services_nav"><a href="application.php#services_section_content_searchandrescue_wrapper">Search and Rescue</a></li>
						</ul>
					</li>
					<li class="applications_nav"><a id="top_level_header_nav_applications" href="application.php#applications_section_wrapper">Applications</a>
						<ul>
							<li class="applications_nav"><a href="application.php#applications_section_content_social_wrapper">Concerts, Sport and Social events</a></li>
							<li class="applications_nav"><a href="application.php#applications_section_content_movies_wrapper">Movie and Video Clip production</a></li>
							<li class="applications_nav"><a href="application.php#applications_section_content_hotels_wrapper">Hotel and business marketing</a></li>
							<li class="applications_nav"><a href="application.php#applications_section_content_realestate_wrapper">Real Estate</a></li>
							<li class="applications_nav"><a href="application.php#applications_section_content_engineering_wrapper">Engineering and Industry applications</a></li>
							<li class="applications_nav"><a href="application.php#applications_section_content_environment_wrapper">Environment observation and protection</a></li>
							<li class="applications_nav"><a href="application.php#applications_section_content_searchandrescue_wrapper">Search and Rescue</a></li>
							<li class="applications_nav"><a href="application.php#applications_section_content_agriculture_wrapper">Agriculture</a></li>
							<li class="applications_nav"><a href="application.php#applications_section_content_custom_wrapper">Custum Applications</a></li>
						</ul>
					</li>
					<li id="top_level_header_navigation_list_item_portofolio"  class="portofolio_nav"><a id="top_level_header_nav_portofolio" href="portofolio.php">Portofolio</a></li>
					<li class="company_nav"><a href="application.php#company_section_wrapper">Company</a>
						<ul>
							<li class="company_nav"><a href="application.php#company_section_content_profil_wrapper">Profil</a></li>
							<li class="company_nav"><a href="application.php#company_section_content_humanresources_wrapper">Human Resources</a></li>
							<li class="company_nav"><a href="application.php#company_section_content_career_wrapper">Career</a></li>
							<li class="company_nav"><a href="application.php#company_section_content_partners_wrapper">Partners</a></li>
						</ul>
					</li>
					<li class="contact_nav"><a href="application.php#contact_section_wrapper">Contact us</a></li>
				</ul>
			</nav>
			</div>
			
			<!-- supported languages -->
			<div id="top_level_header_languages">
				<p id="top_level_header_languages_header">Choose language</p>
				<form id="top_level_header_language_form_gr" class="language_form" action="../<?php echo $request_uri; ?>">
					<input id="top_level_header_language_form_submit_gr" type="submit" value="" style="width: 20px; height: 15px; background: url(../img/flags/gr.png) no-repeat; border: 0px;">
				</form>
				<form id="top_level_header_language_form_gb" class="language_form" action="<?php echo $request_uri; ?>">
					<input id="top_level_header_language_form_submit_gr" type="submit" value="" style="width: 20px; height: 15px; background: url(../img/flags/gb.png) no-repeat; border: 0px;">
				</form>
			</div>
			
			<!-- top level socializing section -->
			<div id="top_level_header_socializing_section_wrapper">
			<section id="top_level_header_socializing_section">
				<header id="top_level_header_socializing_header">
					<p>Follow us</p>
				</header>
				<div id="top_level_header_socializing_first_list_wrapper">
					<div id="facebook_header"><a href="http://www.facebook.com/unmanned.evolution/" target="_blank" style="cursor: pointer;" class="social" title="Follow us in Facebook"><img src="../img/social/facebook.png" alt="Facebook"/></a></div>
					<div id="twitter_header"><a href="https://twitter.com/Unmanned_gr" target="_blank" style="cursor: pointer;" class="social" title="Follow us in Twitter"><img src="../img/social/twitter.png" alt="Twitter"/></a></div>
					<div id="youtube_header"><a href="http://www.youtube.com/user/unmannedevolution/videos?view=0" target="_blank" style="cursor: pointer;" class="social" title="Watch us in Youtube"><img src="../img/social/youtube.png" alt="Youtube"/></a></div>
					<div id="vimeo_header"><a href="https://vimeo.com/unmannedevolution" target="_blank" style="cursor: pointer;" class="social" title="Watch us in Vimeo"><img src="../img/social/vimeo.png" alt="Vimeo"/></a></div>
					<div id="linkedin_header"><a href="http://www.linkedin.com/company/2775181?trk=NUS_DIG_CMPY-fol" target="_blank" style="cursor: pointer;" class="social" title="Follow us in LinkedIn"><img src="../img/social/linkedin.png" alt="LinkedIn"/></a></div>
				</div>
				<div id="top_level_header_socializing_second_list_wrapper">
					<div id="flickr_header"><a href="http://www.flickr.com/photos/unmanned-evolution/" target="_blank" style="cursor: pointer;" class="social" title="Watch us in Flickr"><img src="../img/social/flickr.png" alt="Flickr"/></a></div>
					<div id="tumblr_header"><a href="http://unmanned-evolution.tumblr.com/" target="_blank" style="cursor: pointer;" class="social" title="Watch us in Tumblr"><img src="../img/social/tumblr.png" alt="Tumblr"/></a></div>
					<div id="pinterest_header"><a href="http://pinterest.com/unmanned/" target="_blank" style="cursor: pointer;" class="social" title="Pin us in Pinterest"><img src="../img/social/pinterest.png" alt="Pinterest"/></a></div>
					<div id="stumbleupon_header"><a href="http://www.stumbleupon.com/stumbler/Unmannedgr" target="_blank" style="cursor: pointer;" class="social" title="Stumble us in StumbleUpon"><img src="../img/social/stumbleupon.png" alt="StumbleUpon"/></a></div>
					<div id="delicious_header"><a href="http://delicious.com/post?url=http://www.unmanned-evolution.com/index.php%23landing_page_wrapper/&amp;title=Unmanned%20Evolution%20%7C%20Air%2FVideo%20Experts" target="_blank" style="cursor: pointer;" class="social" title="Bookmark us in Delicious"><img src="../img/social/delicious.png" alt="Delicious"/></a></div>
					<div id="digg_header"><a href="http://digg.com/submit?phase=2&amp;url=http://www.unmanned-evolution.com/&amp;title=Unmanned%20Evolution%20%7C%20Air%2FVideo%20Experts" target="_blank" style="cursor: pointer;" class="social" title="Digg us"><img src="../img/social/digg.png" alt="Digg"/></a></div>
				</div>
				
			</section>
			</div>
				
			
			
		</section>
	</div>