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
						<a href="application.php?lang=<?php echo $language; ?>#landing_section_wrapper">
						<img alt="<?php if ( $language == "el") { echo "Λογότυπο"; } else { echo "Logo"; } ?>" src="./img/logo_medium.png"/>
						</a>
					</figure>
			 	</div>
				<header  id="top_level_header_branding_name">
					<!-- company name -->
					<a href="application.php?lang=<?php echo $language; ?>#landing_section_wrapper">
						<span class="top_level_header_company_name" lang="en">Unmanned <span class="top_level_header_company_name_colored" lang="en">Evolution</span></span>
					</a>
					<br>
					<!-- moto -->
				 	<span id="company_moto" class="company_moto" lang="en">Air / Video Experts</span>
				</header> 	
			</div>

			<!-- top level navigation -->
			<div id="top_level_header_navigation_section_wrapper">
			<nav id="top_level_header_navigation_nav" class="dark">
				<ul id="top_level_header_navigation_list" class="clear">
					<li class="landing_nav"><a id="top_level_header_nav_landing" href="application.php?lang=<?php echo $language; ?>#landing_section_wrapper"><?php if ( $language == "el") { echo "Αρχική"; } else { echo "Home"; } ?></a></li>
					<li class="services_nav"><a id="top_level_header_nav_services" href="application.php?lang=<?php echo $language; ?>#services_section_wrapper"><?php if ( $language == "el") { echo "Υπηρεσίες"; } else { echo "Services"; } ?></a>
						<ul>
							<li class="services_nav"><a href="application.php?lang=<?php echo $language; ?>#services_section_content_aerialvideo_wrapper"><?php if ( $language == "el" ) { echo $application_items["serv_aerial_cinematography_title"]; } else { echo $application_items["serv_aerial_cinematography_title_en"]; } ?></a></li>
							<li class="services_nav"><a href="application.php?lang=<?php echo $language; ?>#services_section_content_aerialphoto_wrapper"><?php if ( $language == "el" ) { echo $application_items["serv_aerial_photography_title"]; } else { echo $application_items["serv_aerial_photography_title_en"]; } ?></a></li>
							<li class="services_nav"><a href="application.php?lang=<?php echo $language; ?>#services_section_content_materialproduction_wrapper"><?php if ( $language == "el" ) { echo $application_items["serv_material_production_title"]; } else { echo $application_items["serv_material_production_title_en"]; } ?></a></li>
							<li class="services_nav"><a href="application.php?lang=<?php echo $language; ?>#services_section_content_aerialobservation_wrapper"><?php if ( $language == "el" ) { echo $application_items["serv_aerial_observation_title"]; } else { echo $application_items["serv_aerial_observation_title_en"]; } ?></a></li>
							<li class="services_nav"><a href="application.php?lang=<?php echo $language; ?>#services_section_content_searchandrescue_wrapper"><?php if ( $language == "el" ) { echo $application_items["serv_search_and_rescue_title"]; } else { echo $application_items["serv_search_and_rescue_title_en"]; } ?></a></li>
						</ul>
					</li>
					<li class="applications_nav"><a id="top_level_header_nav_applications" href="application.php?lang=<?php echo $language; ?>#applications_section_wrapper"><?php if ( $language == "el") { echo "Εφαρμογές"; } else { echo "Applications"; } ?></a>
						<ul>
							<li class="applications_nav"><a href="application.php?lang=<?php echo $language; ?>#applications_section_content_social_wrapper"><?php if ( $language == "el" ) { echo $application_items["appl_social_title"]; } else { echo $application_items["appl_social_title_en"]; } ?></a></li>
							<li class="applications_nav"><a href="application.php?lang=<?php echo $language; ?>#applications_section_content_movies_wrapper"><?php if ( $language == "el" ) { echo $application_items["appl_movies_title"]; } else { echo $application_items["appl_movies_title_en"]; } ?></a></li>
							<li class="applications_nav"><a href="application.php?lang=<?php echo $language; ?>#applications_section_content_hotels_wrapper"><?php if ( $language == "el" ) { echo $application_items["appl_hotels_title"]; } else { echo $application_items["appl_hotels_title_en"]; } ?></a></li>
							<li class="applications_nav"><a href="application.php?lang=<?php echo $language; ?>#applications_section_content_realestate_wrapper"><?php if ( $language == "el" ) { echo $application_items["appl_real_estate_title"]; } else { echo $application_items["appl_real_estate_title_en"]; } ?></a></li>
							<li class="applications_nav"><a href="application.php?lang=<?php echo $language; ?>#applications_section_content_engineering_wrapper"><?php if ( $language == "el" ) { echo $application_items["appl_engineering_title"]; } else { echo $application_items["appl_engineering_title_en"]; } ?></a></li>
							<li class="applications_nav"><a href="application.php?lang=<?php echo $language; ?>#applications_section_content_environment_wrapper"><?php if ( $language == "el" ) { echo $application_items["appl_environment_title"]; } else { echo $application_items["appl_environment_title_en"]; } ?></a></li>
							<li class="applications_nav"><a href="application.php?lang=<?php echo $language; ?>#applications_section_content_searchandrescue_wrapper"><?php if ( $language == "el" ) { echo $application_items["appl_search_and_rescue_title"]; } else { echo $application_items["appl_search_and_rescue_title_en"]; } ?></a></li>
							<li class="applications_nav"><a href="application.php?lang=<?php echo $language; ?>#applications_section_content_agriculture_wrapper"><?php if ( $language == "el" ) { echo $application_items["appl_agriculture_title"]; } else { echo $application_items["appl_agriculture_title_en"]; } ?></a></li>
							<li class="applications_nav"><a href="application.php?lang=<?php echo $language; ?>#applications_section_content_custom_wrapper"><?php if ( $language == "el" ) { echo $application_items["appl_custom_title"]; } else { echo $application_items["appl_custom_title_en"]; } ?></a></li>
						</ul>
					</li>
					<li id="top_level_header_navigation_list_item_portofolio"  class="portofolio_nav"><a id="top_level_header_nav_portofolio" href="portofolio.php?lang=<?php echo $language; ?>"><?php if ( $language == "el") { echo "Χαρτοφυλάκιο"; } else { echo "Portofolio"; } ?></a></li>
					<li class="company_nav"><a href="application.php#company_section_wrapper"><?php if ( $language == "el") { echo "Εταιρία"; } else { echo "Company"; } ?></a>
						<ul>
							<li class="company_nav"><a href="application.php?lang=<?php echo $language; ?>#company_section_content_profil_wrapper">Προφίλ</a></li>
							<li class="company_nav"><a href="application.php?lang=<?php echo $language; ?>#company_section_content_humanresources_wrapper">Ανθρώπινο Δυναμικό</a></li>
							<li class="company_nav"><a href="application.php?lang=<?php echo $language; ?>#company_section_content_career_wrapper">Καριέρα</a></li>
							<li class="company_nav"><a href="application.php?lang=<?php echo $language; ?>#company_section_content_partners_wrapper">Συνεργάτες</a></li>
						</ul>
					</li>
					<li class="contact_nav"><a href="application.php?lang=<?php echo $language; ?>#contact_section_wrapper"><?php if ( $language == "el") { echo "Επικοινωνία"; } else { echo "Contact us"; } ?></a></li>
				</ul>
			</nav>
			</div>
			
			<!-- supported languages -->
			<div id="top_level_header_languages">
				<p id="top_level_header_languages_header" lang="en">Choose language</p>
				<form id="top_level_header_language_form_gr" class="language_form" action="<?php echo $request_uri; ?>" method="GET">
					<input id="top_level_header_language_form_submit_gr" name="lang" value="el" type="submit" style="width: 20px; height: 15px; background: url(img/flags/gr.png) no-repeat; border: 0px;">
				</form>
				<form id="top_level_header_language_form_en" class="language_form" action="<?php echo $request_uri; ?>" method="GET">
					<input id="top_level_header_language_form_submit_en" name="lang" value="en" type="submit" value="" style="width: 20px; height: 15px; background: url(img/flags/gb.png) no-repeat; border: 0px;">
				</form>
			</div>
			
			<!-- top level socializing section -->
			<div id="top_level_header_socializing_section_wrapper">
			<section id="top_level_header_socializing_section">
				<header id="top_level_header_socializing_header">
					<p><?php if ( $language == "el") { echo "Βρείτε μας και στο"; } else { echo "Follow us"; } ?></p>
				</header>
				<div id="top_level_header_socializing_first_list_wrapper">
					<div id="facebook_header"><a href="http://www.facebook.com/unmanned.evolution/" target="_blank" style="cursor: pointer;" class="social" title="<?php if ( $language == "el") { echo "Ακολουθήστε μας στο "; } else { echo "Follow us in "; } ?>Facebook"><img src="./img/social/facebook.png" alt="Facebook"/></a></div>
					<div id="twitter_header"><a href="https://twitter.com/Unmanned_gr" target="_blank" style="cursor: pointer;" class="social" title="<?php if ( $language == "el") { echo "Ακολουθήστε μας στο "; } else { echo "Follow us in "; } ?>Twitter"><img src="./img/social/twitter.png" alt="Twitter"/></a></div>
					<div id="youtube_header"><a href="http://www.youtube.com/user/unmannedevolution/videos?view=0" target="_blank" style="cursor: pointer;" class="social" title="<?php if ( $language == "el") { echo "Δείτε μας στο "; } else { echo "Watch us in "; } ?>Youtube"><img src="./img/social/youtube.png" alt="Youtube"/></a></div>
					<div id="vimeo_header"><a href="https://vimeo.com/unmannedevolution" target="_blank" style="cursor: pointer;" class="social" title="<?php if ( $language == "el") { echo "Δείτε μας στο "; } else { echo "Watch us in "; } ?>Vimeo"><img src="./img/social/vimeo.png" alt="Vimeo"/></a></div>
					<div id="linkedin_header"><a href="http://www.linkedin.com/company/2775181?trk=NUS_DIG_CMPY-fol" target="_blank" style="cursor: pointer;" class="social" title="<?php if ( $language == "el") { echo "Ακολουθήστε μας στο "; } else { echo "Follow us in "; } ?>LinkedIn"><img src="./img/social/linkedin.png" alt="LinkedIn"/></a></div>
				</div>
				<div id="top_level_header_socializing_second_list_wrapper">
					<div id="flickr_header"><a href="http://www.flickr.com/photos/unmanned-evolution/" target="_blank" style="cursor: pointer;" class="social" title="<?php if ( $language == "el") { echo "Δείτε μας στο "; } else { echo "Watch us in "; } ?>Flickr"><img src="./img/social/flickr.png" alt="Flickr"/></a></div>
					<div id="tumblr_header"><a href="http://unmanned-evolution.tumblr.com/" target="_blank" style="cursor: pointer;" class="social" title="<?php if ( $language == "el") { echo "Δείτε μας στο "; } else { echo "Watch us in "; } ?>Tumblr"><img src="./img/social/tumblr.png" alt="Tumblr"/></a></div>
					<div id="pinterest_header"><a href="http://pinterest.com/unmanned/" target="_blank" style="cursor: pointer;" class="social" title="<?php if ( $language == "el") { echo "Καρφιτσώστε μας στο "; } else { echo "Pin us in "; } ?>Pinterest"><img src="./img/social/pinterest.png" alt="Pinterest"/></a></div>
					<div id="stumbleupon_header"><a href="http://www.stumbleupon.com/stumbler/Unmannedgr" target="_blank" style="cursor: pointer;" class="social" title="<?php if ( $language == "el") { echo "Σταμπαρετέ μας στο "; } else { echo "Stumple us upon "; } ?>StumbleUpon"><img src="./img/social/stumbleupon.png" alt="StumbleUpon"/></a></div>
					<div id="delicious_header"><a href="http://delicious.com/post?url=http://www.unmanned-evolution.com/index.php%23landing_page_wrapper/&amp;title=Unmanned%20Evolution%20%7C%20Air%2FVideo%20Experts" target="_blank" style="cursor: pointer;" class="social" title="<?php if ( $language == "el") { echo "κρατήστε μας στο "; } else { echo "Bookmark us in "; } ?>Delicious"><img src="./img/social/delicious.png" alt="Delicious"/></a></div>
					<div id="digg_header"><a href="http://digg.com/submit?phase=2&amp;url=http://www.unmanned-evolution.com/&amp;title=Unmanned%20Evolution%20%7C%20Air%2FVideo%20Experts" target="_blank" style="cursor: pointer;" class="social" title="Digg us"><img src="./img/social/digg.png" alt="Digg"/></a></div>
				</div>
				
			</section>
			</div>
				
			
			
		</section>
	</div>