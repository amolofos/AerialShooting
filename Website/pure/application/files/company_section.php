<?php

/*

By Dimitri Kafetzi @ http://www.kafetzisd.gr
Distributed under the Creative Commons Attribution 3.0 License

*/
?>
<!-- company section -->
	<div id="company_section_wrapper" class="top_section_wrapper">
		<section id="company_section" class="top_section">
			<div id="company_section_content_wrapper">
				<ul id="company_section_content_list">
					<li id="company_section_content_item_social" class="company">
							<header>
								<a href="application.php?lang=<?php echo $language; ?>#company_section_content_profil_wrapper">
									<h3><?php if ( $language == "el" ) { echo $application_items["comp_profil_title"]; } else { echo $application_items["comp_profil_title_en"]; } ?></h3>
									<span><?php if ( $language == "el" ) { echo $application_items["comp_profil_more"]; } else { echo $application_items["comp_profil_more_en"]; } ?></span>
								</a>
							</header>
					</li>
					<li id="company_section_content_item_humanresources" class="company">
							<header>
								<a href="application.php?lang=<?php echo $language; ?>#company_section_content_humanresources_wrapper">
									<h3><?php if ( $language == "el" ) { echo $application_items["comp_hr_title"]; } else { echo $application_items["comp_hr_title_en"]; } ?></h3>
									<span><?php if ( $language == "el" ) { echo $application_items["comp_hr_more"]; } else { echo $application_items["comp_hr_more_en"]; } ?></span>
								</a>
							</header>
					</li>
					<li id="company_section_content_item_career" class="company">
							<header>
								<a href="application.php?lang=<?php echo $language; ?>#company_section_content_career_wrapper">
									<h3><?php if ( $language == "el" ) { echo $application_items["comp_career_title"]; } else { echo $application_items["comp_career_title_en"]; } ?></h3>
									<span><?php if ( $language == "el" ) { echo $application_items["comp_career_more"]; } else { echo $application_items["comp_career_more_en"]; } ?></span>
								</a>
							</header>
					</li>
					<li id="company_section_content_item_partners" class="company">
							<header>
								<a href="application.php?lang=<?php echo $language; ?>#company_section_content_partners_wrapper">
									<h3><?php if ( $language == "el" ) { echo $application_items["comp_partners_title"]; } else { echo $application_items["comp_partners_title_en"]; } ?></h3>
									<span><?php if ( $language == "el" ) { echo $application_items["comp_profil_more"]; } else { echo $application_items["comp_partners_more_en"]; } ?></span>
								</a>
							</header>
					</li>
				</ul>
			</div>
		</section>
	</div>
	
	<div id="company_section_content_profil_wrapper" class="company_content_wrapper">
		<section id="company_section_content_profil" class="company_content top_section">
			<header id="company_section_content_profil_header">
				<a href="application.php?lang=<?php echo $language; ?>#company_section_wrapper" class="clearfix"><img alt="<?php if ( $language == "el" ) { echo "επιστροφή"; } else { echo "return"; } ?>" src="./img/svgs/multi-back.png"/></a>
				<h3><span lang="en" class="company_name_text">Unmanned</span> <span lang="en" class="company_name_text_colored">Evolution</span></h3>
			</header>
			<article id="company_section_content_profil_article">
				<?php if ( $language == "el" ) { echo $application_items["comp_profil_article"]; } else { echo $application_items["comp_profil_article_en"]; } ?>
			</article>
		</section>
	</div>
	
	<div id="company_section_content_humanresources_wrapper" class="company_content_wrapper">
		<section id="company_section_content_humanresources" class="company_content top_section">
			<header id="company_section_content_humanresources_header">
				<a href="application.php?lang=<?php echo $language; ?>#company_section_wrapper"><img alt="<?php if ( $language == "el" ) { echo "επιστροφή"; } else { echo "return"; } ?>" src="./img/svgs/multi-back.png"  border="0" /></a>
				<h3><?php if ( $language == "el" ) { echo $application_items["comp_hr_title"]; } else { echo $application_items["comp_hr_title_en"]; } ?></h3>	
			</header>
			<article id="company_section_content_humanresources_article">
				<?php if ( $language == "el" ) { echo $application_items["comp_hr_article"]; } else { echo $application_items["comp_hr_article_en"]; } ?>
			</article>
		</section>
	</div>
	
	<div id="company_section_content_career_wrapper" class="company_content_wrapper">
		<section id="company_section_content_career" class="company_content top_section">
			<header id="company_section_content_career_header">
				<a href="application.php?lang=<?php echo $language; ?>#company_section_wrapper"><img alt="<?php if ( $language == "el" ) { echo "επιστροφή"; } else { echo "return"; } ?>" src="./img/svgs/multi-back.png"  border="0" /></a>
				<h3><span lang="en" class="company_name_text">Unmanned</span> <span lang="en" class="company_name_text_colored">Evolution</span></h3>
			</header>
			<article id="company_section_content_career_article">
				<?php if ( $language == "el" ) { echo $application_items["comp_career_article"]; } else { echo $application_items["comp_career_article_en"]; } ?>
			</article>
		</section>
	</div>
	
	<div id="company_section_content_partners_wrapper" class="company_content_wrapper">
		<section id="company_section_content_partners" class="company_content top_section">
			<header id="company_section_content_partners_header">
				<a href="application.php?lang=<?php echo $language; ?>#company_section_wrapper"><img alt="<?php if ( $language == "el" ) { echo "επιστροφή"; } else { echo "return"; } ?>" src="./img/svgs/multi-back.png"  border="0" /></a>
				<h3><?php if ( $language == "el" ) { echo $application_items["comp_partners_title"]; } else { echo $application_items["comp_partners_title_en"]; } ?></h3>
			</header>
			<article id="company_section_content_partners_article">
				<div class="company_section_content_partner_wrapper">
						<p><a class="sponsor_name" href="<?php echo $partners_items["lifeedite"]["link"]; ?>" target="_blank" style="cursor: pointer;"><?php echo $partners_items["lifeedite"][$language]["name"]; ?></a></p>
						<div class="company_section_content_partner_logo">
							<figure class="clearfix">
								<a href="<?php echo $partners_items["lifeedite"]["link"]; ?>" target="_blank" style="cursor: pointer;">
									<img src="../application/img/sponsors/<?php echo $partners_items["lifeedite"]["image"] . "." . $partners_items["lifeedite"]["type"]; ?>" alt="<?php echo $partners_items["lifeedite"][$language]["alt"]; ?>" title="<?php echo $partners_items["lifeedite"][$language]["title"]; ?>" />
								</a>
							</figure>
						</div>
						<div class="company_section_content_partner_data">
							<?php echo $partners_items["lifeedite"][$language]["article"]; ?>
						</div>
				</div>
				<div class="company_section_content_partner_wrapper">
						<p><a class="sponsor_name" href="<?php echo $partners_items["omegaproductions"]["link"]; ?>" target="_blank" style="cursor: pointer;"><?php echo $partners_items["omegaproductions"][$language]["name"]; ?></a></p>
						<div class="company_section_content_partner_logo">
							<figure class="clearfix">
								<a href="<?php echo $partners_items["omegaproductions"]["link"]; ?>" target="_blank" style="cursor: pointer;">
									<img src="../application/img/sponsors/<?php echo $partners_items["omegaproductions"]["image"] . "." . $partners_items["omegaproductions"]["type"]; ?>" alt="<?php echo $partners_items["omegaproductions"][$language]["alt"]; ?>" title="<?php echo $partners_items["omegaproductions"][$language]["title"]; ?>" />
								</a>
							</figure>
						</div>
						<div class="company_section_content_partner_data">
							<?php echo $partners_items["omegaproductions"][$language]["article"]; ?>
						</div>
				</div>
				<div class="company_section_content_partner_wrapper">
						<p><a class="sponsor_name" href="<?php echo $partners_items["noirproductions"]["link"]; ?>" target="_blank" style="cursor: pointer;"><?php echo $partners_items["noirproductions"][$language]["name"]; ?></a></p>
						<p><?php if ( $language == "el" ) { echo "Τηλεοπτικές Παραγωγές & Γραφείο Παραγωγής"; } else { echo "Television production"; } ?></p>
						<div class="company_section_content_partner_logo">
						</div>
						<div class="company_section_content_partner_data">
							<?php echo $partners_items["noirproductions"][$language]["article"]; ?>
						</div>
				</div>
				<div class="company_section_content_partner_wrapper">
					<p><a class="sponsor_name" href="<?php echo $partners_items["xriso_koufeto"]["link"]; ?>"><?php echo $partners_items["xriso_koufeto"][$language]["name"]; ?></a></p>
					<div class="company_section_content_partner_logo">
						<figure class="clearfix">
							<a>
								<img src="../application/img/sponsors/<?php echo $partners_items["xriso_koufeto"]["image"] . "." . $partners_items["xriso_koufeto"]["type"]; ?>" alt="<?php echo $partners_items["xriso_koufeto"][$language]["alt"]; ?>" title="<?php echo $partners_items["xriso_koufeto"][$language]["title"]; ?>" />
							</a>
						</figure>
					</div>
					<div class="company_section_content_partner_data">
						<?php echo $partners_items["xriso_koufeto"][$language]["article"]; ?>
					</div>
				</div>
				<div class="company_section_content_partner_wrapper">
					<p><a class="sponsor_name" href="<?php echo $partners_items["kenanidouagathi"]["link"]; ?>" target="_blank" style="cursor: pointer;"><?php echo $partners_items["kenanidouagathi"][$language]["name"]; ?></a></p>
					<div class="company_section_content_partner_logo">
						<figure class="clearfix">
							<a href="<?php echo $partners_items["kenanidouagathi"]["link"]; ?>" target="_blank" style="cursor: pointer;">
								<img src="../application/img/sponsors/<?php echo $partners_items["kenanidouagathi"]["image"] . "." . $partners_items["kenanidouagathi"]["type"]; ?>" alt="<?php echo $partners_items["kenanidouagathi"][$language]["alt"]; ?>" title="<?php echo $partners_items["kenanidouagathi"][$language]["title"]; ?>" />
							</a>
						</figure>
					</div>
					<div class="company_section_content_partner_data">
						<?php echo $partners_items["kenanidouagathi"][$language]["article"]; ?>
					</div>
				</div>
				<div class="company_section_content_partner_wrapper">
					<p><a class="sponsor_name" href="<?php echo $partners_items["sakishair"]["link"]; ?>" target="_blank" style="cursor: pointer;"><?php echo $partners_items["sakishair"][$language]["name"]; ?></a></p>
					<div class="company_section_content_partner_logo">
						<figure class="clearfix">
							<a href="<?php echo $partners_items["sakishair"]["link"]; ?>" target="_blank" style="cursor: pointer;">
								<img src="../application/img/sponsors/<?php echo $partners_items["sakishair"]["image"] . "." .  $partners_items["sakishair"]["type"]; ?>" alt="<?php echo $partners_items["sakishair"][$language]["alt"]; ?>" title="<?php echo $partners_items["sakishair"][$language]["title"]; ?>" />
							</a>
						</figure>
					</div>
					<div class="company_section_content_partner_data">
						<?php echo $partners_items["sakishair"][$language]["article"]; ?>
					</div>
				</div>
				<div class="company_section_content_partner_wrapper">
					<p><a class="sponsor_name" href="<?php echo $partners_items["goris_photography"]["link"]; ?>" target="_blank" style="cursor: pointer;"><?php echo $partners_items["goris_photography"][$language]["name"]; ?></a></p>
					<div class="company_section_content_partner_logo">
						<figure class="clearfix">
							<a href="<?php echo $partners_items["goris_photography"]["link"]; ?>" target="_blank" style="cursor: pointer;">
								<img src="../application/img/sponsors/<?php echo $partners_items["goris_photography"]["image"] . "." . $partners_items["goris_photography"]["type"]; ?>" alt="<?php echo $partners_items["goris_photography"][$language]["alt"]; ?>" title="<?php echo $partners_items["goris_photography"][$language]["title"]; ?>" />
							</a>
						</figure>
					</div>
					<div class="company_section_content_partner_data">
						<?php echo $partners_items["goris_photography"][$language]["article"]; ?>
					</div>
				</div>
			</article>
		</section>
	</div>