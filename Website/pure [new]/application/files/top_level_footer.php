<?php

/*

By Dimitri Kafetzi @ http://www.kafetzisd.gr
Distributed under the Creative Commons Attribution 3.0 License

*/
?>
	<!-- top level footer section -->
	<div id="top_level_footer_section_wrapper">
		<footer id="top_level_footer_section">
			
			<!-- top level footer law section -->
			<section id="top_level_footer_law_section">
					<p><a href="application.php?lang=<?php echo $language; ?>#termsofuse_section_wrapper"><?php if ( $language == "el" ) { echo $application_items["terms_of_use_title"]; } else { echo $application_items["terms_of_use_title_en"]; } ?></a> | <a href="application.php?lang=<?php echo $language; ?>#sensitivedata_section_wrapper"><?php if ( $language == "el" ) { echo $application_items["private_data_title"]; } else { echo $application_items["private_data_title_en"]; } ?></a></p>
			</section>
			
			<!-- top level footer contact us section -->
			<section id="top_level_footer_contact_section">
				<p><a href="application.php?lang=<?php echo $language; ?>#contact_section_wrapper"><?php if ( $language == "el" ) { echo "Επικοινωνήστε μαζί μας"; } else { echo "Contact us"; } ?></a></p>
			</section>
				
			<!-- top level footer copyright section -->
			<section id="top_level_footer_copyright_section">
				<p class="top_level_footer_copyright">
					&copy; <?php if ( $language == "el" ) { echo "Δικαίωμα κτήσης"; } else { echo "Copyright"; } ?>
					<span class="company_name_text" lang="en">Unmanned</span> 
					<span class="company_name_text_colored" lang="en">Evolution</span>
				</p>
			</section>
			
			<!-- top level footer acknowledgement section -->
			<section id="top_level_footer_acknowledgement_section">
				<p class="top_level_footer_acknowledgement">
					<span><?php if ( $language == "el" ) { echo "Λογότυπο και Τυπογραφία"; } else { echo "Logo and Typography"; } ?> : <a href="http://gr.linkedin.com/pub/george-voulgaris/47/753/89" target="_blank" style="cursor: pointer;" title="LinkedIn Profile of Voulgaris George"><?php if ( $language == "el" ) { echo "Βούλγαρης Γιώργος"; } else { echo "Voulgaris George"; } ?></a></span>
					 -- 
					<span><?php if ( $language == "el" ) { echo "Προγραμματιστής"; } else { echo "Developer"; } ?> : <a href="http://gr.linkedin.com/in/kafetzisd" target="_blank" style="cursor: pointer;" title="LinkedIn Profile of Kafetzis Dimitris"><?php if ( $language == "el" ) { echo "Καφετζής Δημήτρης"; } else { echo "Kafetzis Dimitris"; } ?></a></span>
				</p>
			</section>
			
		</footer>
	</div>