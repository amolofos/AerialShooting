<?php
/*

By Dimitri Kafetzi @ http://www.kafetzisd.gr
Distributed under the Creative Commons Attribution 3.0 License

*/
?>
<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/contact-form-attachment.html
*/
require_once("./files/contact/include/fgcontactform.php");
$formproc = new FGContactForm();
//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient("info@unmanned-evolution.com"); //<<---Put your email address here
//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey("DYn0vPrOtuiKMAf");
$formproc->AddFileUploadField("attachments","jpg,jpeg,png,doc,docx,odt,pdf,zip,,rar,gzip,7z",2024);
?>

    <script src="./files/contact/scripts/gen_validatorv31.js"></script>
    <script src="./files/contact/scripts/fg_captcha_validator.js"></script>
	
<!-- contact section -->
	<div id="contact_section_wrapper" class="top_section_wrapper">
		<section id="contact_section" class="top_section">
			<div id="contact_section_content_wrapper">
				<ul id="contact_section_content_list">
					<li id="contact_section_content_item_info" class="contact">
						<article id="contact_article_info" class="article">
							<div id="contact_article_info_title" class="title">
								<header>
									<h3><?php if ( $language == "el" ) { echo "Πληροφορίες"; } else { echo "Information";} ?></h3>
								</header>
							</div>
							<div id="contact_article_info_content" class="content">
								<div id="contact_article_info_summary" class="summary">
									<div class="general">
										<p><span lang="en">info@unmanned-evolution.com</span></p>
									</div>
									<div>
										<p><?php if ( $language == "el" ) { echo "Τηλέφωνα"; } else { echo "Contact numbers";} ?></p>
										<p>+00 697 4464165</p>
										<p>+00 699 8314141</p>
									</div>
								</div>
							</div>
						</article>
					</li>
					<li id="contact_section_content_item_production" class="contact">
						<article id="contact_article_production" class="article">
							<div id="contact_article_production_title" class="title">
								<header>
									<h3><?php if ( $language == "el" ) { echo "Τμήμα παραγωγής"; } else { echo "Production";} ?></h3>
								</header>
							</div>
							<div id="contact_article_production_content" class="content">
								<div id="contact_article_production_summary" class="summary">
									<div class="general">
										<p><span lang="en">production@unmanned-evolution.com</span></p>
									</div>	
									<?php if ( $language == "el" ) { echo "<p>Υπεύθυνος : Γιώργος </br>Ειδικότητα : Σκηνοθέτης</p>"; } else { echo "<p>Director : George </br>Specialty : Director</p>";} ?>									
								</div>
							</div>
						</article>
					</li>
					<li id="contact_section_content_item_technical" class="contact">
						<article id="contact_article_technical" class="article">
							<div id="contact_article_technical_title" class="title">
								<header>
									<h3><?php if ( $language == "el" ) { echo "Τεχνικό τμήμα"; } else { echo "Engineers";} ?></h3>
								</header>
							</div>
							<div id="contact_article_technical_content" class="content">
								<div id="contact_article_technical_summary" class="summary">
									<div class="general">
										<p><span lang="en">technical@unmanned-evolution.com</span></p>
									</div>
									<?php if ( $language == "el" ) { echo "<p>Υπεύθυνος : Κώστας </br>Ειδικότητα : Πιλότος</p>"; } else { echo "<p>Director : Kostas </br>Specialty : Pilot</p>";} ?>
									<?php if ( $language == "el" ) { echo "<p>Υπεύθυνος : Γιώργος </br>Ειδικότητα : Τεχνικός</p>"; } else { echo "<p>Director : George </br>Specialty : Engineer</p>";} ?>
								</div>
							</div>
						</article>
					</li>
					<li id="contact_section_content_item_social" class="contact">
						<article id="contact_article_social" class="article">
							<div id="contact_article_social_title" class="title">
								<header>
									<h3><?php if ( $language == "el" ) { echo "Κοινωνικά δίκτυα"; } else { echo "Social networks";} ?></h3>
								</header>
							</div>
							<div id="contact_article_social_content" class="content">
								<div id="contact_article_social_summary" class="summary">
									<div id="social_groups">
										<div id="facebook_contact"><a href="http://www.facebook.com/unmanned.evolution/" target="_blank" style="cursor: pointer;" class="social" title="<?php if ( $language == "el") { echo "Ακολουθήστε μας στο "; } else { echo "Follow us in "; } ?>Facebook"><img src="./img/social/facebook.png" alt="Facebook"/></a></div>
										<div id="twitter_contact"><a href="https://twitter.com/Unmanned_gr" target="_blank" style="cursor: pointer;" class="social" title="<?php if ( $language == "el") { echo "Ακολουθήστε μας στο "; } else { echo "Follow us in "; } ?>Twitter"><img src="./img/social/twitter.png" alt="Twitter"/></a></div>
										<div id="linkedin_contact"><a href="http://www.linkedin.com/company/2775181?trk=NUS_DIG_CMPY-fol" target="_blank" style="cursor: pointer;" class="social" title="<?php if ( $language == "el") { echo "Ακολουθήστε μας στο "; } else { echo "Follow us in "; } ?>LinkedIn"><img src="./img/social/linkedin.png" alt="LinkedIn"/></a></div>
									</div>
									<div id="image_groups">
										<div id="youtube_contact"><a href="http://www.youtube.com/user/unmannedevolution/videos?view=0" target="_blank" style="cursor: pointer;" class="social" title="<?php if ( $language == "el") { echo "Δείτε μας στο "; } else { echo "Watch us in "; } ?>Youtube"><img src="./img/social/youtube.png" alt="Youtube"/></a></div>
										<div id="vimeo_contact"><a href="https://vimeo.com/unmannedevolution" target="_blank" style="cursor: pointer;" class="social" title="<?php if ( $language == "el") { echo "Δείτε μας στο "; } else { echo "Watch us in "; } ?>Vimeo"><img src="./img/social/vimeo.png" alt="Vimeo"/></a></div>
										<div id="flickr_contact"><a href="http://www.flickr.com/photos/unmanned-evolution/" target="_blank" style="cursor: pointer;" class="social" title="<?php if ( $language == "el") { echo "Δείτε μας στο "; } else { echo "Watch us in "; } ?>Flickr"><img src="./img/social/flickr.png" alt="Flickr"/></a></div>
									</div>
									<div id="bookmarking_groups">
										<div id="tumblr_contact"><a href="http://unmanned-evolution.tumblr.com/" target="_blank" style="cursor: pointer;" class="social" title="<?php if ( $language == "el") { echo "Δείτε μας στο "; } else { echo "Watch us in "; } ?>Tumblr"><img src="./img/social/tumblr.png" alt="Tumblr"/></a></div>
										<div id="pinterest_contact"><a href="http://pinterest.com/unmanned/" target="_blank" style="cursor: pointer;" class="social" title="<?php if ( $language == "el") { echo "Καρφιτσώστε μας στο "; } else { echo "Pin us in "; } ?>Pinterest"><img src="./img/social/pinterest.png" alt="Pinterest"/></a></div>
										<div id="stumbleupon_contact"><a href="http://www.stumbleupon.com/stumbler/Unmannedgr" target="_blank" style="cursor: pointer;" class="social" title="<?php if ( $language == "el") { echo "Σταμπαρετέ μας στο "; } else { echo "Stumple us upon "; } ?>StumbleUpon"><img src="./img/social/stumbleupon.png" alt="StumbleUpon"/></a></div>
										<div id="delicious_contact"><a href="http://delicious.com/post?url=http://www.unmanned-evolution.com/index.php%23landing_page_wrapper/&amp;title=Unmanned%20Evolution%20%7C%20Air%2FVideo%20Experts" target="_blank" style="cursor: pointer;" class="social" title="<?php if ( $language == "el") { echo "κρατήστε μας στο "; } else { echo "Bookmark us in "; } ?>Delicious"><img src="./img/social/delicious.png" alt="Delicious"/></a></div>
										<div id="digg_contact"><a href="http://digg.com/submit?phase=2&amp;url=http://www.unmanned-evolution.com/&amp;title=Unmanned%20Evolution%20%7C%20Air%2FVideo%20Experts" target="_blank" style="cursor: pointer;" class="social" title="Digg us"><img src="./img/social/digg.png" alt="Digg"/></a></div>
									</div>	
								</div>
							</div>
						</article>
					</li>
				</ul>
			</div>
			<div id="contact_section_contact_form">
				<div id="contact_sendmessage_title" class="title">
							<header>
								<h3><?php if ( $language == "el" ) { echo "Ρωτήστε μας"; } else { echo "Place a question";} ?></h3>
							</header>
				</div>
						<div id="contact_sendmessage_content">
							<form id="SendMessageForm" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
								<fieldset>
									<input type="hidden" name="submitted" id="submitted" value="1"/>
									<input type="hidden" name="<?php echo $formproc->GetFormIDInputName(); ?>" value="<?php echo $formproc->GetFormIDInputValue(); ?>"/>
									<input type="text"  class="spmhidip" name="<?php echo $formproc->GetSpamTrapInputName(); ?>" />

									<div><span class="error"><?php echo $formproc->GetErrorMessage(); ?></span></div>
									<div id="name_container" class="container">
										<label for="name"><?php if ( $language == "el" ) { echo "Όνομα"; } else { echo "Name";} ?><span class="required"> *</span></label><br>
										<input id="name" name="name" type="text" class="text" value="" required="required" placeholder="<?php if ( $language == "el" ) { echo "Το όνομα σας κρίνεται απαραίτητο!"; } else { echo "Your name is required!";} ?>""/>
										<span id="contactus_name_errorloc" class="error"></span>
									</div>
									<div id="email_container" class="container">
										<label for="email" lang="en">Email<span class="required"> *</span></label><br>
										<input id="email" name="email" type="email" class="text" value="" required="required" placeholder="<?php if ( $language == "el" ) { echo "Το email σας κρίνεται απαραίτητο!"; } else { echo "Your email is required!";} ?>"/>
										<span id="contactus_email_errorloc" class="error"></span>
									</div>
									<div id="tel_container" class="container">
										<label for="tel"><?php if ( $language == "el" ) { echo "Τηλέφωνο"; } else { echo "Phone number";} ?></label><br>
										<input id="tel" name="tel" type="tel" class="text" value=""/>
									</div>
									<div id="project_type_container" class="container">
										<label for="project_type"><?php if ( $language == "el" ) { echo "Είδος έργου"; } else { echo "Project type";} ?></label><br>
										<input id="project_type" name="project_type" type="text" class="text" value=""/>
									</div>
									<div id="message_container" class="container">
										<label for="message" id="message_label"><?php if ( $language == "el" ) { echo "Γράψτε το μήνυμα"; } else { echo "Message to send";} ?><span class="required"> *</span></label><br>		
										<textarea id="message" name="message" required="required" placeholder="<?php if ( $language == "el" ) { echo "Πείτε μας λίγα λόγια για το έργο το οποίο θέλετε να υλοποιήσουμε."; } else { echo "Describe the project to be implemented.";} ?>"></textarea>
										<span id="contactus_message_errorloc" class="error"></span>
									</div>
									<div id="attachements_container" class="container">
										<label for="attachments" id="attachments_label"><?php if ( $language == "el" ) { echo "Επισυναπτόμενα αρχεία."; } else { echo "Attachments";} ?></label><br>
										<input id="attachments" name="attachments" type="file"/>
										<span id="contactus_attachments_errorloc" class="error"></span>
									</div>
									<div id="submit_container" class="container">
										<input type="Submit" name="Submit" value="<?php if ( $language == "el" ) { echo "Αποστολή"; } else { echo "Send";} ?>" />
									</div>
									<div id="indication_container" class="indication">
										<p><?php if ( $language == "el" ) { echo "Τα πεδία με τον * κρίνονται απαραίτητα"; } else { echo "Fields with * are required.";} ?></p>
									</div>
								</fieldset>
							</form>
						</div>
			</div>
		</section>
	</div>