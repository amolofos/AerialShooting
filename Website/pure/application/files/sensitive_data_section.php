<?php

/*

By Dimitri Kafetzi @ http://www.kafetzisd.gr
Distributed under the Creative Commons Attribution 3.0 License

*/
?>
<!-- company section -->
	<div id="sensitivedata_section_wrapper" class="sensitivedata_content_wrapper">
		<section id="sensitivedata_section" class="sensitivedata_content top_section">
			<header id="sensitivedata_section_content_header">
				<a href="application.php#landing_section_wrapper" class="clearfix"><img alt="<?php if ( $language == "el" ) { echo "επιστροφή"; } else { echo "return"; } ?>" src="./img/svgs/multi-back.png"/></a>
				<h3><?php if ( $language == "el" ) { echo $application_items["private_data_title"]; } else { echo $application_items["private_data_title_en"]; } ?></h3>
			</header>
			<article id="sensitivedata_section_content_article">
				<?php if ( $language == "el" ) { echo $application_items["private_data_article"]; } else { echo $application_items["private_data_article_en"]; } ?>
			</article>
		</section>
	</div>