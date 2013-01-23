<?php

/*

By Dimitri Kafetzi @ http://www.kafetzisd.gr
Distributed under the Creative Commons Attribution 3.0 License

*/

/*
 Contains the photo's ids that should be displayed into the slideshow of aerial photo section
*/
$aerialphoto_slideshow = array (
	"Arch-of-Hadrian",
	"Aerial-photography-of-married-couple-in-front-of-a-greek-church-at-Komotini",
	"Beach-at-sunset",
	"Theatre-of-Lykavittos-by-nightfall",
	"Columns-of-the-Olympian-Zeus-Athens-Greece",
	"Entrance-of-Zappeion",
	"Married-couple-in-front-of-a-greek-church-low-height",
	"Syntagma-Square-Athens-Greece",
	"Greek-small-port-from-above",
	"Married-couple-at-Komotini",
	"Married-couple-in-front-of-a-greek-church",
	"Married-couple-in-front-of-a-greek-church-at-Komotini",
	"Picture-of-a-bride-through-her-window",
	"Married-couple-by-the-river-from-Goris-Photography",
	"Just-Married-Couple-at-the-edge-of-a-bridge-from-Goris-Photography",
	"Married-couple-sitting-on-a-bridge-from-Goris-Photography",
	"Married-couple-playing-by-the-river-from-Goris-Photography",
	"Unmanned-Evolution-multicopter-filming-married-couple-from-Goris-Photography",
	"Unmanned-Evolution-multicopter-and-weddings-from-Goris-Photography",
	"Bride-looking-at-her-husband-from-Goris-Photography"
);
?>		
	<!-- services section -->
	<div id="services_section_wrapper" class="top_section_wrapper">
		<section id="services_section" class="top_section">
			<div id="services_section_content_wrapper">
				<ul id="services_section_content_list">
					<li id="services_section_content_item_aerialvideo" class="service">
						<header>
							<a href="application.php?lang=<?php echo $language; ?>#services_section_content_aerialvideo_wrapper">
								<h3><?php if ( $language == "el" ) { echo $application_items["serv_aerial_cinematography_title"]; } else { echo $application_items["serv_aerial_cinematography_title_en"]; } ?></h3>
								<span><?php if ( $language == "el" ) { echo $application_items["serv_aerial_cinematography_more"]; } else { echo $application_items["serv_aerial_cinematography_more_en"]; } ?></span>
							</a>
						</header>
					</li>
					<li id="services_section_content_item_aerialphoto" class="service">
						<header>
							<a href="application.php?lang=<?php echo $language; ?>#services_section_content_aerialphoto_wrapper">
								<h3><?php if ( $language == "el" ) { echo $application_items["serv_aerial_photography_title"]; } else { echo $application_items["serv_aerial_photography_title_en"]; } ?></h3>
								<span><?php if ( $language == "el" ) { echo $application_items["serv_aerial_photography_more"]; } else { echo $application_items["serv_aerial_photography_more_en"]; } ?></span>
							</a>
						</header>
					</li>
					<li id="services_section_content_item_materialproduction" class="service">
						<header>
							<a href="application.php?lang=<?php echo $language; ?>#services_section_content_materialproduction_wrapper">
								<h3><?php if ( $language == "el" ) { echo $application_items["serv_material_production_title"]; } else { echo $application_items["serv_material_production_title_en"]; } ?></h3>
								<span><?php if ( $language == "el" ) { echo $application_items["serv_material_production_more"]; } else { echo $application_items["serv_material_production_more_en"]; } ?></span>
							</a>
						</header>
					</li>
					<li id="services_section_content_item_aerialobservation" class="service">
						<header>
							<a href="application.php?lang=<?php echo $language; ?>#services_section_content_aerialobservation_wrapper">
								<h3><?php if ( $language == "el" ) { echo $application_items["serv_aerial_observation_title"]; } else { echo $application_items["serv_aerial_observation_title_en"]; } ?></h3>
								<span><?php if ( $language == "el" ) { echo $application_items["serv_aerial_observation_more"]; } else { echo $application_items["serv_aerial_observation_more_en"]; } ?></span>
							</a>
						</header>
					</li>
					<li id="services_section_content_item_searchandrescue" class="service">
						<header>
							<a href="application.php?lang=<?php echo $language; ?>#services_section_content_searchandrescue_wrapper">
								<h3><?php if ( $language == "el" ) { echo $application_items["serv_search_and_rescue_title"]; } else { echo $application_items["serv_search_and_rescue_title_en"]; } ?></h3>
								<span><?php if ( $language == "el" ) { echo $application_items["serv_search_and_rescue_more"]; } else { echo $application_items["serv_search_and_rescue_more_en"]; } ?></span>
							</a>
						</header>
					</li>
				</ul>
			</div>
		</section>
	</div>
	
	
	<div id="services_section_content_aerialvideo_wrapper" class="service_content_wrapper">		
		<section id="services_section_content_aerialvideo" class="service_content top_section">
			<header id="services_section_content_aerialvideo_header">
				<a href="application.php?lang=<?php echo $language; ?>#services_section_wrapper"><img alt="<?php if ( $language == "el" ) { echo "επιστροφή"; } else { echo "return"; } ?>" src="./img/svgs/multi-back.png" title="επιστροφή" border="0" /></a>
				<h3><?php if ( $language == "el" ) { echo $application_items["serv_aerial_cinematography_title"]; } else { echo $application_items["serv_aerial_cinematography_title_en"]; } ?></h3>	
			</header>
			<div id="services_section_content_aerialvideo_figure_wrapper_1" class="service_figure_wrapper">
				<figure id="services_section_content_aerialvideo_figure_1">
					<div id="services_aerialvideo_trailer_1" class="player"></div>
				</figure>
			</div>
			<article id="services_section_content_aerialvideo_article">
				<?php if ( $language == "el" ) { echo $application_items["serv_aerial_cinematography_article"]; } else { echo $application_items["serv_aerial_cinematography_article_en"]; } ?>
			</article>
		</section>
	</div>
	
	<div id="services_section_content_aerialphoto_wrapper" class="service_content_wrapper">
		<section id="services_section_content_aerialphoto" class="service_content top_section">
			<header id="services_section_content_aerialphoto_header">
				<a href="application.php?lang=<?php echo $language; ?>#services_section_wrapper"><img alt="<?php if ( $language == "el" ) { echo "επιστροφή"; } else { echo "return"; } ?>" src="./img/svgs/multi-back.png" title="επιστροφή" border="0" /></a>
				<h3><?php if ( $language == "el" ) { echo $application_items["serv_aerial_photography_title"]; } else { echo $application_items["serv_aerial_photography_title_en"]; } ?></h3>
			</header>
			<div id="services_section_content_aerialphoto_figure_wrapper" class="service_figure_wrapper">
				<figure class="clearfix photo" id="applications_section_content_aerialphoto_figure">
					<div id="services_section_content_aerialphoto_figure_slideshow" class="slideshow"></div>
					<div id="services_section_content_aerialphoto_figure_caption" class="caption"></div>
					<div id="services_section_content_aerialphoto_figure_thumbs" class="thumbs_div">
						<ul class="thumbs noscript">
						<?php	foreach ( $aerialphoto_slideshow as $photo_id ) {
									$html = '';
									$html .= '<li>';
									$html .= '<a class="thumb" href="./media/pictures/' . $portofolio_items[$photo_id]["original"] . '.' . $portofolio_items[$photo_id]["type"] . '" title="' . $portofolio_items[$photo_id][$language]["title"] . '">';
									$html .= '<img src="./media/pictures/' . $portofolio_items[$photo_id]["thumb"] . '.' . $portofolio_items[$photo_id]["type"] . '" alt="' . $portofolio_items[$photo_id][$language]["alt"] . '" />';
									$html .= '</a>';
									$html .= '<div class="caption">';
									$html .= '<span>' . $portofolio_items[$photo_id][$language]["caption"] . '</span>';
									$html .= '</div>';
									$html .= '</li>';
									echo $html;
								}
						?>
						</ul>
					</div>
				</figure>
			</div>
			<article id="services_section_content_aerialphoto_article">
				<?php if ( $language == "el" ) { echo $application_items["serv_aerial_photography_article"]; } else { echo $application_items["serv_aerial_photography_article_en"]; } ?>
			</article>
		</section>
	</div>
	
	<div id="services_section_content_materialproduction_wrapper" class="service_content_wrapper">
		<section id="services_section_content_materialproduction" class="service_content top_section">
			<header id="services_section_content_materialproduction_header">
				<a href="application.php?lang=<?php echo $language; ?>#services_section_wrapper"><img alt="<?php if ( $language == "el" ) { echo "επιστροφή"; } else { echo "return"; } ?>" src="./img/svgs/multi-back.png" title="επιστροφή" border="0"/></a>
				<h3><?php if ( $language == "el" ) { echo $application_items["serv_material_production_title"]; } else { echo $application_items["serv_material_production_title_en"]; } ?></h3>
			</header>
			<div id="services_section_content_materialproduction_figure_wrapper_1" class="service_figure_wrapper">
				<figure id="services_section_content_materialproduction_figure_1">
					<div id="services_materialproduction_trailer_1" class="player"></div>
				</figure>
			</div>
			<article id="services_section_content_materialproduction_article">
				<h3><?php if ( $language == "el" ) { echo $application_items["serv_material_production_article"]; } else { echo $application_items["serv_material_production_article_en"]; } ?></h3>
			</article>
			<div id="services_section_content_materialproduction_figure_wrapper_2" class="service_figure_wrapper">
				<figure id="services_section_content_materialproduction_figure_2">
					<div id="services_materialproduction_trailer_2" class="player"></div>
				</figure>
				<figure id="services_section_content_materialproduction_figure_3">
					<div id="services_materialproduction_trailer_3" class="player"></div>
				</figure>
			</div>
		</section>
	</div>
	
	<div id="services_section_content_aerialobservation_wrapper" class="service_content_wrapper">
		<section id="services_section_content_aerialobservation" class="service_content top_section">
			<header id="services_section_content_aerialobservation_header">
				<a href="application.php?lang=<?php echo $language; ?>#services_section_wrapper"><img alt="<?php if ( $language == "el" ) { echo "επιστροφή"; } else { echo "return"; } ?>" src="./img/svgs/multi-back.png" title="επιστροφή"  border="0" /></a>
				<h3><?php if ( $language == "el" ) { echo $application_items["serv_aerial_observation_title"]; } else { echo $application_items["serv_aerial_observation_title_en"]; } ?></h3>
			</header>
			<article id="services_section_content_aerialobservation_article" class="under_construction">
				<h3><?php if ( $language == "el" ) { echo $application_items["serv_aerial_observation_article"]; } else { echo $application_items["serv_aerial_observation_article_en"]; } ?></h3>
			</article>
		</section>
	</div>
	
	<div id="services_section_content_searchandrescue_wrapper" class="service_content_wrapper">
		<section id="services_section_content_searchandrescue" class="service_content top_section">
			<header id="services_section_content_searchandrescue_header">
				<a href="application.php?lang=<?php echo $language; ?>#services_section_wrapper"><img alt="<?php if ( $language == "el" ) { echo "επιστροφή"; } else { echo "return"; } ?>" src="./img/svgs/multi-back.png" title="επιστροφή"  border="0" /></a>
				<h3><?php if ( $language == "el" ) { echo $application_items["serv_search_and_rescue_title"]; } else { echo $application_items["serv_search_and_rescue_title_en"]; } ?></h3>
			</header>
			<article id="services_section_content_searchandrescue_article" class="under_construction">
				<h3><?php if ( $language == "el" ) { echo $application_items["serv_search_and_rescue_article"]; } else { echo $application_items["serv_search_and_rescue_article_en"]; } ?></h3>
			</article>
		</section>
	</div>
