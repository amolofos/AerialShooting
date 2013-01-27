<?php

/*

By Dimitri Kafetzi @ http://www.kafetzisd.gr
Distributed under the Creative Commons Attribution 3.0 License

*/

/*
 Contains the photo's ids that should be displayed into the slideshow of aerial photo section
*/
$social_slideshow = array (
	"Aerial-photography-of-married-couple-in-front-of-a-greek-church-at-Komotini",
	"Married-couple-in-front-of-a-greek-church",
	"Picture-of-a-bride-through-her-window",
	"Just-Married-Couple-at-the-edge-of-a-bridge",
	"Married-couple-by-the-river-from-Goris-Photography",
	"Just-Married-Couple-at-the-edge-of-a-bridge-from-Goris-Photography",
	"Married-couple-sitting-on-a-bridge-from-Goris-Photography",
	"Married-couple-playing-by-the-river-from-Goris-Photography",
	"Unmanned-Evolution-multicopter-filming-married-couple-from-Goris-Photography",
	"Unmanned-Evolution-multicopter-and-weddings-from-Goris-Photography",
	"Bride-looking-at-her-husband-from-Goris-Photography"
);
$realestate_slideshow = array (
	"Panoramic-view-of-Athens-Greece",
	"Sea-side-building-Greece",
	"Microlimano-Piraeus-Greece"
);

?>
<!-- applications section -->
	<div id="applications_section_wrapper" class="top_section_wrapper">
		<section id="applications_section" class="top_section">
			<div id="applications_section_content_wrapper">
				<ul id="applications_section_content_list">
					<!-- ------------------------------------------------------------ -->
					<li id="applications_section_content_item_1" class="application">
						<header class="application_social">
							<a href="application.php?lang=<?php echo $language; ?>#applications_section_content_social_wrapper">
								<h3><?php if ( $language == "el" ) { echo $application_items["appl_social_title"]; } else { echo $application_items["appl_social_title_en"]; } ?></h3>
								<span><?php if ( $language == "el" ) { echo $application_items["appl_social_more"]; } else { echo $application_items["appl_social_more_en"]; } ?></span>
							</a>
						</header>								
					</li>
					<!-- ------------------------------------------------------------ -->					
					<li id="applications_section_content_item_2" class="application">
						<header id="applications_list_movies_header" class="application_movies">
							<a href="application.php?lang=<?php echo $language; ?>#applications_section_content_movies_wrapper">
								<h3><?php if ( $language == "el" ) { echo $application_items["appl_movies_title"]; } else { echo $application_items["appl_movies_title_en"]; } ?></h3>
								<span><?php if ( $language == "el" ) { echo $application_items["appl_movies_more"]; } else { echo $application_items["appl_movies_more_en"]; } ?></span>
							</a>
						</header>
					</li>
					<!-- ------------------------------------------------------------ -->					
					<li id="applications_section_content_item_3" class="application">
						<header class="application_hotels">
							<a href="application.php?lang=<?php echo $language; ?>#applications_section_content_hotels_wrapper">
								<h3><?php if ( $language == "el" ) { echo $application_items["appl_hotels_title"]; } else { echo $application_items["appl_hotels_title_en"]; } ?></h3>
								<span><?php if ( $language == "el" ) { echo $application_items["appl_hotels_more"]; } else { echo $application_items["appl_hotels_more_en"]; } ?></span>
							</a>
						</header>
					</li>
					<!-- ------------------------------------------------------------ -->
					<li id="applications_section_content_item_4" class="application">
						<header class="application_realestate">
							<a href="application.php?lang=<?php echo $language; ?>#applications_section_content_realestate_wrapper">
								<h3><?php if ( $language == "el" ) { echo $application_items["appl_real_estate_title"]; } else { echo $application_items["appl_real_estate_title_en"]; } ?></h3>
								<span><?php if ( $language == "el" ) { echo $application_items["appl_real_estate_more"]; } else { echo $application_items["appl_real_estate_more_en"]; } ?></span>
							</a>
						</header>
					</li>
					<!-- ------------------------------------------------------------ -->
					<li id="applications_section_content_item_5" class="application">
						<header class="application_engineering">
							<a href="application.php?lang=<?php echo $language; ?>#applications_section_content_engineering_wrapper">
								<h3><?php if ( $language == "el" ) { echo $application_items["appl_engineering_title"]; } else { echo $application_items["appl_engineering_title_en"]; } ?></h3>
								<span><?php if ( $language == "el" ) { echo $application_items["appl_engineering_more"]; } else { echo $application_items["appl_engineering_more_en"]; } ?></span>
							</a>
						</header>
						
					</li>
					<!-- ------------------------------------------------------------ -->
					<li id="applications_section_content_item_6" class="application">
						<header class="application_enviroment">
							<a href="application.php?lang=<?php echo $language; ?>#applications_section_content_environment_wrapper">
								<h3><?php if ( $language == "el" ) { echo $application_items["appl_environment_title"]; } else { echo $application_items["appl_environment_title_en"]; } ?></h3>
								<span><?php if ( $language == "el" ) { echo $application_items["appl_environment_more"]; } else { echo $application_items["appl_environment_more_en"]; } ?></span>
							</a>
						</header>
					</li>
					<!-- ------------------------------------------------------------ -->
					<li id="applications_section_content_item_7" class="application">
						<header class="application_searchandrescue">
							<a href="application.php?lang=<?php echo $language; ?>#applications_section_content_searchandrescue_wrapper">
								<h3><?php if ( $language == "el" ) { echo $application_items["appl_search_and_rescue_title"]; } else { echo $application_items["appl_search_and_rescue_title_en"]; } ?></h3>
								<span><?php if ( $language == "el" ) { echo $application_items["appl_search_and_rescue_more"]; } else { echo $application_items["appl_search_and_rescue_more_en"]; } ?></span>
							</a>
						</header>
					</li>
					<!-- ------------------------------------------------------------ -->
					<li id="applications_section_content_item_8" class="application">
						<header class="application_agriculture">
							<a href="application.php?lang=<?php echo $language; ?>#applications_section_content_agriculture_wrapper">
								<h3><?php if ( $language == "el" ) { echo $application_items["appl_agriculture_title"]; } else { echo $application_items["appl_agriculture_title_en"]; } ?></h3>
								<span><?php if ( $language == "el" ) { echo $application_items["appl_agriculture_more"]; } else { echo $application_items["appl_agriculture_more_en"]; } ?></span>
							</a>
						</header>						
					</li>
					<!-- ------------------------------------------------------------ -->
					<li id="applications_section_content_item_9" class="application">
						<header class="application_custom">
							<a href="application.php?lang=<?php echo $language; ?>#applications_section_content_custom_wrapper">
								<h3><?php if ( $language == "el" ) { echo $application_items["appl_custom_title"]; } else { echo $application_items["appl_custom_title_en"]; } ?></h3>
								<span><?php if ( $language == "el" ) { echo $application_items["appl_custom_more"]; } else { echo $application_items["appl_custom_more_en"]; } ?></span>
							</a>
						</header>						
					</li>
					<!-- ------------------------------------------------------------ -->
					<li id="applications_section_content_item_9" class="application">				
						<header class="application_info">
							<a href="application.php?lang=<?php echo $language; ?>#contact_section_wrapper">
								<h3><?php if ( $language == "el" ) { echo "Προτείνεται τη δικιά σας εφαρμογή"; } else { echo "Inform us about your project"; } ?></h3>
								<span><?php if ( $language == "el" ) { echo "πληροφορίες"; } else { echo "more..."; } ?></span>
							</a>
						</header>						
					</li>						
				</ul>
			</div>
		</section>
	</div>
	
	<div id="applications_section_content_social_wrapper" class="application_content_wrapper">
		<section id="applications_section_content_social" class="application_content top_section">
			<header id="applications_section_content_social_header">
				<a href="application.php?lang=<?php echo $language; ?>#applications_section_wrapper"><img alt="<?php if ( $language == "el" ) { echo "επιστροφή"; } else { echo "return"; } ?>" src="./img/svgs/multi-back.png"  border="0" /></a>
				<h3><?php if ( $language == "el" ) { echo $application_items["appl_social_title"]; } else { echo $application_items["appl_social_title_en"]; } ?></h3>
			</header>
			<div id="applications_section_content_social_figure_wrapper_1" class="application_figure_wrapper">
				<figure id="applications_section_content_social_figure_1">
					<div id="applications_social_trailer_1" class="player"></div>
				</figure>
			</div>
			<div id="applications_section_content_social_figure_wrapper_2" class="application_figure_wrapper">
				<figure id="applications_section_content_social_figure_2">
					<div id="applications_social_trailer_2" class="player"></div>
				</figure>
			</div>
			<article id="applications_section_content_social_article">
				<?php if ( $language == "el" ) { echo $application_items["appl_social_article"]; } else { echo $application_items["appl_social_article_en"]; } ?>
			</article>
			<div id="applications_section_content_social_figure_wrapper_2" class="application_figure_wrapper">
				<figure class="clearfix photo" id="applications_section_content_social_figure_2">				
					<div id="applications_section_content_social_figure_slideshow" class="slideshow"></div>
					<div id="applications_section_content_social_figure_caption" class="caption"></div>
					<div id="applications_section_content_social_figure_thumbs" class="thumbs_div">
						<ul class="thumbs noscript">
							<?php	foreach ( $social_slideshow as $photo_id ) {
									$html = '';
									$html .= '<li>';
									$html .= '<a class="thumb" href="./media/pictures/' . $portfolio_items[$photo_id]["original"] . '.' . $portfolio_items[$photo_id]["type"] . '" title="' . $portfolio_items[$photo_id][$language]["title"] . '">';
									$html .= '<img src="./media/pictures/' . $portfolio_items[$photo_id]["thumb"] . '.' . $portfolio_items[$photo_id]["type"] . '" alt="' . $portfolio_items[$photo_id][$language]["alt"] . '" />';
									$html .= '</a>';
									$html .= '<div class="caption">';
									$html .= '<span>' . $portfolio_items[$photo_id][$language]["caption"] . '</span>';
									$html .= '</div>';
									$html .= '</li>';
									echo $html;
								}
							?>
						</ul>
					</div>
				</figure>
			</div>
		</section>
	</div>
	
	<div id="applications_section_content_movies_wrapper" class="application_content_wrapper">
		<section id="applications_section_content_movies" class="application_content top_section">
			<header id="applications_section_content_movies_header">
				<a href="application.php?lang=<?php echo $language; ?>#applications_section_wrapper"><img alt="<?php if ( $language == "el" ) { echo "επιστροφή"; } else { echo "return"; } ?>" src="./img/svgs/multi-back.png"  border="0" /></a>
				<h3><?php if ( $language == "el" ) { echo $application_items["appl_movies_title"]; } else { echo $application_items["appl_movies_title_en"]; } ?></h3>
			</header>
			<div id="applications_section_content_movies_figure_wrapper_1" class="application_figure_wrapper">
				<figure id="applications_section_content_movies_figure_1">
					<div id="applications_movies_trailer_1" class="player"></div>
				</figure>
			</div>
			<article id="applications_section_content_movies_article">
				<?php if ( $language == "el" ) { echo $application_items["appl_movies_article"]; } else { echo $application_items["appl_movies_article_en"]; } ?>
			</article>
			<div id="applications_section_content_movies_figure_wrapper_2" class="application_figure_wrapper">
				<figure id="applications_section_content_movies_figure_2">
					<div id="applications_movies_trailer_2" class="player"></div>
				</figure>
			</div>
		</section>
	</div>

	<div id="applications_section_content_hotels_wrapper" class="application_content_wrapper">
		<section id="applications_section_content_hotels" class="application_content top_section">
			<header id="applications_section_content_hotels_header">
				<a href="application.php?lang=<?php echo $language; ?>#applications_section_wrapper"><img alt="<?php if ( $language == "el" ) { echo "επιστροφή"; } else { echo "return"; } ?>" src="./img/svgs/multi-back.png"  border="0" /></a>
				<h3><?php if ( $language == "el" ) { echo $application_items["appl_hotels_title"]; } else { echo $application_items["appl_hotels_title_en"]; } ?></h3>
			</header>
			<div id="applications_section_content_hotels_figure_wrapper" class="application_figure_wrapper">
				<figure id="applications_section_content_hotels_figure">
					<div id="applications_hotels_trailer" class="player"></div>
				</figure>
			</div>
			<article id="applications_section_content_hotels_article">
				<?php if ( $language == "el" ) { echo $application_items["appl_hotels_article"]; } else { echo $application_items["appl_hotels_article_en"]; } ?>
			</article>
			<div id="applications_section_content_hotels_figure_wrapper_2" class="application_figure_wrapper">
				<figure id="applications_section_content_hotels_figure_2">
					<div id="applications_hotels_trailer_2" class="player"></div>
				</figure>
			</div>
		</section>
	</div>
	
	<div id="applications_section_content_realestate_wrapper" class="application_content_wrapper">
		<section id="applications_section_content_realestate" class="application_content top_section">
			<header id="applications_section_content_realestate_header">
				<a href="application.php?lang=<?php echo $language; ?>#applications_section_wrapper"><img alt="<?php if ( $language == "el" ) { echo "επιστροφή"; } else { echo "return"; } ?>" src="./img/svgs/multi-back.png"  border="0" /></a>
				<h3><?php if ( $language == "el" ) { echo $application_items["appl_real_estate_title"]; } else { echo $application_items["appl_real_estate_title_en"]; } ?></h3>
			</header>
			<div id="applications_section_content_realestate_figure_wrapper" class="application_figure_wrapper">
				<figure class="clearfix photo" id="applications_section_content_realestate_figure">				
					<div id="applications_section_content_realestate_figure_slideshow" class="slideshow"></div>
					<div id="applications_section_content_realestate_figure_caption" class="caption"></div>
					<div id="applications_section_content_realestate_figure_thumbs" class="thumbs_div">
						<ul class="thumbs noscript">
							<?php	foreach ( $realestate_slideshow as $photo_id ) {
									$html = '';
									$html .= '<li>';
									$html .= '<a class="thumb" href="./media/pictures/' . $portfolio_items[$photo_id]["original"] . '.' . $portfolio_items[$photo_id]["type"] . '" title="' . $portfolio_items[$photo_id][$language]["title"] . '">';
									$html .= '<img src="./media/pictures/' . $portfolio_items[$photo_id]["thumb"] . '.' . $portfolio_items[$photo_id]["type"] . '" alt="' . $portfolio_items[$photo_id][$language]["alt"] . '" />';
									$html .= '</a>';
									$html .= '<div class="caption">';
									$html .= '<span>' . $portfolio_items[$photo_id][$language]["caption"] . '</span>';
									$html .= '</div>';
									$html .= '</li>';
									echo $html;
								}
							?>
						</ul>
					</div>
				</figure>
			</div>
			<article id="applications_section_content_realestate_article">
				<?php if ( $language == "el" ) { echo $application_items["appl_real_estate_article"]; } else { echo $application_items["appl_real_estate_article_en"]; } ?>
			</article>
		</section>
	</div>
	
	<div id="applications_section_content_engineering_wrapper" class="application_content_wrapper">
		<section id="applications_section_content_engineering" class="application_content top_section">
			<header id="applications_section_content_engineering_header">
				<a href="application.php?lang=<?php echo $language; ?>#applications_section_wrapper"><img alt="<?php if ( $language == "el" ) { echo "επιστροφή"; } else { echo "return"; } ?>" src="./img/svgs/multi-back.png"  border="0" /></a>
				<h3><?php if ( $language == "el" ) { echo $application_items["appl_engineering_title"]; } else { echo $application_items["appl_engineering_title_en"]; } ?></h3>
			</header>
			<div id="applications_section_content_engineering_figure_wrapper" class="application_figure_wrapper">
				<figure id="applications_section_content_engineering_figure">
					<div id="applications_engineering_trailer" class="player"></div>
				</figure>
			</div>
			<article id="applications_section_content_engineering_article">
				<?php if ( $language == "el" ) { echo $application_items["appl_engineering_article"]; } else { echo $application_items["appl_engineering_article_en"]; } ?>
			</article>
		</section>
	</div>
	
	<div id="applications_section_content_environment_wrapper" class="application_content_wrapper">
		<section id="applications_section_content_environment" class="application_content top_section">
			<header id="applications_section_content_environment_header">
				<a href="application.php?lang=<?php echo $language; ?>#applications_section_wrapper"><img alt="<?php if ( $language == "el" ) { echo "επιστροφή"; } else { echo "return"; } ?>" src="./img/svgs/multi-back.png"  border="0" /></a>
				<h3><?php if ( $language == "el" ) { echo $application_items["appl_environment_title"]; } else { echo $application_items["appl_environment_title_en"]; } ?></h3>
			</header>
			<div id="applications_section_content_environment_figure_wrapper" class="application_figure_wrapper">
				<figure id="applications_section_content_environment_figure">
					<div id="applications_environment_trailer" class="player"></div>
				</figure>
			</div>
			<article id="applications_section_content_environment_article">
				<?php if ( $language == "el" ) { echo $application_items["appl_environment_article"]; } else { echo $application_items["appl_environment_article_en"]; } ?>
			</article>
		</section>
	</div>
	
	<div id="applications_section_content_searchandrescue_wrapper" class="application_content_wrapper">
		<section id="applications_section_content_searchandrescue" class="application_content top_section">
			<header id="applications_section_content_searchandrescue_header">
				<a href="application.php?lang=<?php echo $language; ?>#applications_section_wrapper"><img alt="<?php if ( $language == "el" ) { echo "επιστροφή"; } else { echo "return"; } ?>" src="./img/svgs/multi-back.png"  border="0"/></a>
				<h3><?php if ( $language == "el" ) { echo $application_items["appl_search_and_rescue_title"]; } else { echo $application_items["appl_search_and_rescue_title_en"]; } ?></h3>
			</header>
			<article id="applications_section_content_searchandrescue_article">
				<?php if ( $language == "el" ) { echo $application_items["appl_search_and_rescue_article"]; } else { echo $application_items["appl_search_and_rescue_article_en"]; } ?>
			</article>
		</section>
	</div>
	
	<div id="applications_section_content_agriculture_wrapper" class="application_content_wrapper">
		<section id="applications_section_content_agriculture" class="application_content top_section">
			<header id="applications_section_content_agriculture_header">
				<a href="application.php?lang=<?php echo $language; ?>#applications_section_wrapper"><img alt="<?php if ( $language == "el" ) { echo "επιστροφή"; } else { echo "return"; } ?>" src="./img/svgs/multi-back.png"  border="0"/></a>
				<h3><?php if ( $language == "el" ) { echo $application_items["appl_agriculture_title"]; } else { echo $application_items["appl_agriculture_title_en"]; } ?></h3>
			</header>
			<div id="applications_section_content_agriculture_figure_wrapper" class="application_figure_wrapper">
				<figure id="applications_section_content_agriculture_figure">
					<div id="applications_agriculture_trailer" class="player"></div>
				</figure>
			</div>
			<article id="applications_section_content_agriculture_article">
				<?php if ( $language == "el" ) { echo $application_items["appl_agriculture_article"]; } else { echo $application_items["appl_agriculture_article_en"]; } ?>
			</article>
		</section>
	</div>
	
	<div id="applications_section_content_custom_wrapper" class="application_content_wrapper">
		<section id="applications_section_content_custom" class="application_content top_section">
			<header id="applications_section_content_custom_header">
				<a href="application.php?lang=<?php echo $language; ?>#applications_section_wrapper"><img alt="<?php if ( $language == "el" ) { echo "επιστροφή"; } else { echo "return"; } ?>" src="./img/svgs/multi-back.png"  border="0" /></a>
				<h3><?php if ( $language == "el" ) { echo $application_items["appl_custom_title"]; } else { echo $application_items["appl_custom_title_en"]; } ?></h3>	
			</header>
			<div id="applications_section_content_custom_figure_wrapper" class="application_figure_wrapper">
				<figure id="applications_section_content_custom_figure">
					<div id="applications_custom_trailer" class="player"></div>
				</figure>
			</div>
			<article id="applications_section_content_custom_article">
				<?php if ( $language == "el" ) { echo $application_items["appl_custom_article"]; } else { echo $application_items["appl_custom_article_en"]; } ?>
			</article>
		</section>
	</div>
	
	
	