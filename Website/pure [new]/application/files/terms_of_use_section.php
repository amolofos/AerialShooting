<?php

/*

By Dimitri Kafetzi @ http://www.kafetzisd.gr
Distributed under the Creative Commons Attribution 3.0 License

*/
?>
<!-- company section -->
	<div id="termsofuse_section_wrapper" class="termsofuse_content_wrapper">
		<section id="termsofuse_section" class="termsofuse_content top_section">
			<header id="termsofuse_section_content_header">
				<a href="application.php?lang=<?php echo $language; ?>#landing_section_wrapper" class="clearfix"><img alt="<?php if ( $language == "el" ) { echo "επιστροφή"; } else { echo "return"; } ?>" src="./img/svgs/multi-back.png"/></a>
				<h3><?php if ( $language == "el" ) { echo $application_items["terms_of_use_title"]; } else { echo $application_items["terms_of_use_title_en"]; } ?></h3>
			</header>
			<article id="termsofuse_section_content_article">
				<?php if ( $language == "el" ) { echo $application_items["terms_of_use_article"]; } else { echo $application_items["terms_of_use_article_en"]; } ?>
			</article>
		</section>
	</div>