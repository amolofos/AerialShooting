<?php

/*

By Dimitri Kafetzi @ http://www.kafetzisd.gr
Distributed under the Creative Commons Attribution 3.0 License

*/
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
							<li>
								<a class="thumb" name="optionalCustomIdentifier" href="./media/pictures/Arch-of-Hadrian_original.jpg" title="Η Πύλη του Αδριανού.">
									<img src="./media/pictures/Arch-of-Hadrian_original_60x30-90q.jpg" alt="Η Πύλη του Αδριανού." />
								</a>
								<div class="caption">
									<span>Η Πύλη του Αδριανού. Φωτογραφία βγαλμένη με τα μη επανδρωμένα αεροναυτικά οχήματα της Unmanned Evolution.</span>
								</div>
							</li>
							<li>
								<a class="thumb" name="optionalCustomIdentifier" href="./media/pictures/Aerial-photography-of-married-couple-in-front-of-a-greek-church-at-Komotini_original.jpg" title="Εναέρια φωτογράφιση γάμου στην Κομοτηνή">
									<img src="./media/pictures/Aerial-photography-of-married-couple-in-front-of-a-greek-church-at-Komotini_original_60x30-90q.jpg" alt="Εναέρια φωτογράφιση γάμου στην Κομοτηνή." />
								</a>
								<div class="caption">
									<span>Εναέρια φωτογράφιση γάμου στην Κομοτηνή.</span>
								</div>
							</li>
							<li>
								<a class="thumb" name="optionalCustomIdentifier" href="./media/pictures/Beach-at-sunset_original.jpg" title="Ηλιοβασίλεμα στην παραλία.">
									<img src="./media/pictures/Beach-at-sunset_original_60x34-90q.jpg" alt="Ηλιοβασίλεμα στην παραλία." />
								</a>
								<div class="caption">
									<span>Ηλιοβασίλεμα στην παραλία. Φωτογραφία βγαλμένη με τα μη επανδρωμένα αεροναυτικά οχήματα της Unmanned Evolution.</span>
								</div>
							</li>
							<li>
								<a class="thumb" name="optionalCustomIdentifier" href="./media/pictures/Theatre-of-Lykavittos-by-nightfall_original.jpg" title="Το Θέατρο του Λυκαβυττού.">
									<img src="./media/pictures/Theatre-of-Lykavittos-by-nightfall_original_60x40-90q.jpg" alt="Το Θέατρο του Λυκαβυττού." />
								</a>
								<div class="caption">
									<span>Το Θέατρο του Λυκαβυττού. Φωτογραφία βγαλμένη με τα μη επανδρωμένα αεροναυτικά οχήματα της Unmanned Evolution.</span>
								</div>
							</li>
							<li>
								<a class="thumb" name="optionalCustomIdentifier" href="./media/pictures/Columns-of-the-Olympian-Zeus-Athens-Greece_original.jpg" title="Οι στήλες του Ολυμπίου Διός.">
									<img src="./media/pictures/Columns-of-the-Olympian-Zeus-Athens-Greece_original_60x30-90q.jpg" alt="Οι στήλες του Ολυμπίου Διός." />
								</a>
								<div class="caption">
									<span>Οι στήλες του Ολυμπίου Διός. Φωτογραφία βγαλμένη με τα μη επανδρωμένα αεροναυτικά οχήματα της Unmanned Evolution.</span>
								</div>
							</li>
							<li>
								<a class="thumb" name="optionalCustomIdentifier" href="./media/pictures/Entrance-of-Zappeion_original.jpg" title="Η είσοδος από ψηλά του Ζαππείου Μεγάρου.">
									<img src="./media/pictures/Entrance-of-Zappeion_original_60x30-90q.jpg" alt="Η είσοδος από ψηλά του Ζαππείου Μεγάρου." />
								</a>
								<div class="caption">
									<span>Η είσοδος από ψηλά του Ζαππείου Μεγάρου. Φωτογραφία βγαλμένη με τα μη επανδρωμένα αεροναυτικά οχήματα της Unmanned Evolution.</span>
								</div>
							</li>
							<li>
								<a class="thumb" name="optionalCustomIdentifier" href="./media/pictures/Married-couple-in-front-of-a-greek-church-low-height_original.jpg" title="Νιόπαντρο ζευγάρι μπροστά στην εκκλησία της Αγίας Παρασκευής στην Κομοτηνή από χαμηλό ύψος">
									<img src="./media/pictures/Married-couple-in-front-of-a-greek-church-low-height_original_60x40-90q.jpg" alt="Νιόπαντρο ζευγάρι μπροστά στην εκκλησία της Αγίας Παρασκευής στην Κομοτηνή από χαμηλό ύψος" />
								</a>
								<div class="caption">
									<span>Νιόπαντρο ζευγάρι μπροστά στην εκκλησία της Αγίας Παρασκευής στην Κομοτηνή. Φωτογραφία βγαλμένη από χαμηλό ύψος με τα μη επανδρωμένα αεροναυτικά οχήματα της Unmanned Evolution.</span>
								</div>
							</li>
							<li>
								<a class="thumb" name="optionalCustomIdentifier" href="./media/pictures/Syntagma-Square-Athens-Greece_original.jpg" title="Πλατεία Συντάγματος, Αθήνα, Ελλάδα.">
									<img src="./media/pictures/Syntagma-Square-Athens-Greece_original_60x30-90q.jpg" alt="Πλατεία Συντάγματος, Αθήνα, Ελλάδα." />
								</a>
								<div class="caption">
									<span>Πλατεία Συντάγματος, Αθήνα, Ελλάδα. Φωτογραφία βγαλμένη με τα μη επανδρωμένα αεροναυτικά οχήματα της Unmanned Evolution.</span>
								</div>
							</li>
							<li>
								<a class="thumb" name="optionalCustomIdentifier" href="./media/pictures/Greek-small-port-from-above_original.jpg" title="Λιμάνι από ψηλά.">
									<img src="./media/pictures/Greek-small-port-from-above_original_60x31-90q.jpg" alt="Λιμάνι από ψηλά." />
								</a>
								<div class="caption">
									<span>Λιμάνι από ψηλά. Φωτογραφία βγαλμένη με τα μη επανδρωμένα αεροναυτικά οχήματα της Unmanned Evolution.</span>
								</div>
							</li>
							<li>
								<a class="thumb" name="optionalCustomIdentifier" href="./media/pictures/Married-couple-at-Komotini_original.jpg" title="Νιόπαντρο ζευγάρι στην εκκλησία της Αγίας παρασκευής, Κομοτηνή">
									<img src="./media/pictures/Married-couple-at-Komotini_original_30x60-90q.jpg" alt="Νιόπαντρο ζευγάρι στην εκκλησία της Αγίας παρασκευής, Κομοτηνή" />
								</a>
								<div class="caption">
									<span>Νιόπαντρο ζευγάρι στην εκκλησία της Αγίας παρασκευής, Κομοτηνή. Φωτογραφία βγαλμένη με τα μη επανδρωμένα αεροναυτικά οχήματα της Unmanned Evolution.</span>
								</div>
							</li>
							<li>
								<a class="thumb" name="optionalCustomIdentifier" href="./media/pictures/Married-couple-in-front-of-a-greek-church_original.jpg" title="Νιόπαντρο ζευγάρι σε εκκλησία της Κομοτηνής">
									<img src="./media/pictures/Married-couple-in-front-of-a-greek-church_original_60x30-90q.jpg" alt="Νιόπαντρο ζευγάρι σε εκκλησία της Κομοτηνής." />
								</a>
								<div class="caption">
									<span>Νιόπαντρο ζευγάρι σε εκκλησία της Κομοτηνής. Φωτογραφία βγαλμένη με τα μη επανδρωμένα αεροναυτικά οχήματα της Unmanned Evolution.</span>
								</div>
							</li>
							<li>
								<a class="thumb" name="optionalCustomIdentifier" href="./media/pictures/Married-couple-in-front-of-a-greek-church-at-Komotini_original.jpg" title="Νιόπαντρο ζευγάρι μπροστά στην εκκλησία της Αγίας Παρασκευής στην Κομοτηνή">
									<img src="./media/pictures/Married-couple-in-front-of-a-greek-church-at-Komotini_original_60x34-90q.jpg" alt="Νιόπαντρο ζευγάρι μπροστά στην εκκλησία της Αγίας Παρασκευής στην Κομοτηνή" />
								</a>
								<div class="caption">
									<span>Νιόπαντρο ζευγάρι μπροστά στην εκκλησία της Αγίας Παρασκευής στην Κομοτηνή</span>
								</div>
							</li>
							<li>
								<a class="thumb" name="optionalCustomIdentifier" href="./media/pictures/Picture-of-a-bride-through-her-window_original.jpg" title="Νύφη στέκεται στο παραθυρό της">
									<img src="./media/pictures/Picture-of-a-bride-through-her-window_original_60x30-90q.jpg" alt="Νύφη στέκεται στο παραθυρό της" />
								</a>
								<div class="caption">
									<span>Νύφη στέκεται στο παραθυρό της. Φωτογραφία τραβηγμένη με τα μη επανδρωμένα αεροναυτικά οχήματα της Unmanned Evolution.</span>
								</div>
							</li>
							<li>
								<a class="thumb" name="optionalCustomIdentifier" href="./media/pictures/Married-couple-by-the-river-from-Goris-Photography_original.jpg" title="Νιόπαντρο ζευγάρι δίπλα στο ποτάμι (by Goris Photography)">
									<img src="./media/pictures/Married-couple-by-the-river-from-Goris-Photography_original_60x30-90q.jpg" alt="Νιόπαντρο ζευγάρι δίπλα στο ποτάμι (by Goris Photography)" />
								</a>
								<div class="caption">
									<span>Νιόπαντρο ζευγάρι δίπλα στο ποτάμι (by Goris Photography).</span>
								</div>
							</li>
							<li>
								<a class="thumb" name="optionalCustomIdentifier" href="./media/pictures/Just-Married-Couple-at-the-edge-of-a-bridge-from-Goris-Photography_original.jpg" title="Νιόπαντρο ζευγάρι στην άκρη γέφυρας (by Goris Photography)">
									<img src="./media/pictures/Just-Married-Couple-at-the-edge-of-a-bridge-from-Goris-Photography_original_60x30-90q.jpg" alt="Νιόπαντρο ζευγάρι στην άκρη γέφυρας (by Goris Photography)" />
								</a>
								<div class="caption">
									<span>Νιόπαντρο ζευγάρι στην άκρη γέφυρας (by Goris Photography)</span>
								</div>
							</li>
							<li>
								<a class="thumb" name="optionalCustomIdentifier" href="./media/pictures/Married-couple-sitting-on-a-bridge-from-Goris-Photography_original.jpg" title="Νιόπαντρο ζευγάρι καθισμένο στη γέφυρα (by Goris Photography)">
									<img src="./media/pictures/Married-couple-sitting-on-a-bridge-from-Goris-Photography_original_40x60-90q.jpg" alt="Νιόπαντρο ζευγάρι καθισμένο στη γέφυρα (by Goris Photography)" />
								</a>
								<div class="caption">
									<span>Νιόπαντρο ζευγάρι καθισμένο στη γέφυρα (by Goris Photography)</span>
								</div>
							</li>
							<li>
								<a class="thumb" name="optionalCustomIdentifier" href="./media/pictures/Married-couple-playing-by-the-river-from-Goris-Photography_original.jpg" title="Νιόπαντρο ζευγάρι παίζει στην κοίτη ποταμιού (by Goris Photography)">
									<img src="./media/pictures/Married-couple-playing-by-the-river-from-Goris-Photography_original_60x40-90q.jpg" alt="Νιόπαντρο ζευγάρι παίζει στην κοίτη ποταμιού (by Goris Photography)" />
								</a>
								<div class="caption">
									<span>Νιόπαντρο ζευγάρι παίζει στην κοίτη ποταμιού (by Goris Photography)</span>
								</div>
							</li>
							<li>
								<a class="thumb" name="optionalCustomIdentifier" href="./media/pictures/media/pictures/Unmanned-Evolution-multicopter-filming-married-couple-from-Goris-Photography_original.jpg" title="Πολύπτερο της Unmanned Evolution κινηματογραφεί νιόπαντρο ζευγάρι (by Goris Photography)">
									<img src="./media/pictures/Unmanned-Evolution-multicopter-filming-married-couple-from-Goris-Photography_original_47x60-90q.jpg" alt="Πολύπτερο της Unmanned Evolution κινηματογραφεί νιόπαντρο ζευγάρι (by Goris Photography)" />
								</a>
								<div class="caption">
									<span>Πολύπτερο της Unmanned Evolution κινηματογραφεί νιόπαντρο ζευγάρι (by Goris Photography)</span>
								</div>
							</li>
							<li>
								<a class="thumb" name="optionalCustomIdentifier" href="./media/pictures/Unmanned-Evolution-multicopter-and-weddings-from-Goris-Photography_original.jpg" title="Πολύπτερο της Unmanned Evolution κατά την κινηματογράφηση νιόπαντρου ζευγαριού (by Goris Photography)">
									<img src="./media/pictures/Unmanned-Evolution-multicopter-and-weddings-from-Goris-Photography_original_60x40-90q.jpg" alt="Πολύπτερο της Unmanned Evolution κατά την κινηματογράφηση νιόπαντρου ζευγαριού (by Goris Photography)" />
								</a>
								<div class="caption">
									<span>Πολύπτερο της Unmanned Evolution κατά την κινηματογράφηση νιόπαντρου ζευγαριού (by Goris Photography)</span>
								</div>
							</li>
							<li>
								<a class="thumb" name="optionalCustomIdentifier" href="./media/pictures/Bride-looking-at-her-husband-from-Goris-Photography_original.jpg" title="Νύφη κοιτάζει με χαμόγελο το γαμπρό - ασπρόμαυρη φωτογραφία (by Goris Photography)">
									<img src="./media/pictures/Bride-looking-at-her-husband-from-Goris-Photography_original_40x60-90q.jpg" alt="Νύφη κοιτάζει με χαμόγελο το γαμπρό - ασπρόμαυρη φωτογραφία (by Goris Photography)" />
								</a>
								<div class="caption">
									<span>Νύφη κοιτάζει με χαμόγελο το γαμπρό - ασπρόμαυρη φωτογραφία (by Goris Photography)</span>
								</div>
							</li>
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
