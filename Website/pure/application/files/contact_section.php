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
									<h3>Πληροφορίες</h3>
								</header>
							</div>
							<div id="contact_article_info_content" class="content">
								<div id="contact_article_info_summary" class="summary">
									<div class="general">
										<p><span lang="en">info@unmanned-evolution.com</span></p>
									</div>
								</div>
							</div>
						</article>
					</li>
					<li id="contact_section_content_item_production" class="contact">
						<article id="contact_article_production" class="article">
							<div id="contact_article_production_title" class="title">
								<header>
									<h3>Τμήμα παραγωγής</h3>
								</header>
							</div>
							<div id="contact_article_production_content" class="content">
								<div id="contact_article_production_summary" class="summary">
									<div class="general">
										<p><span lang="en">production@unmanned-evolution.com</span></p>
									</div>	
									<p>Υπεύθυνος : Κωμάκης Γιώργος </br>Ειδικότητα : Σκηνοθέτης</p>
								</div>
							</div>
						</article>
					</li>
					<li id="contact_section_content_item_technical" class="contact">
						<article id="contact_article_technical" class="article">
							<div id="contact_article_technical_title" class="title">
								<header>
									<h3>Τεχνικό τμήμα</h3>
								</header>
							</div>
							<div id="contact_article_technical_content" class="content">
								<div id="contact_article_technical_summary" class="summary">
									<div class="general">
										<p><span lang="en">technical@unmanned-evolution.com</span></p>
									</div>
									<p>Υπεύθυνος : Ιμανιμίδης Κωνσταντίνος </br>Ειδικότητα : Πιλότος</p>
									<p>Υπεύθυνος : Φανταουτσάκης Γιώργος </br>Ειδικότητα : Τεχνικός</p>
								</div>
							</div>
						</article>
					</li>
					<li id="contact_section_content_item_social" class="contact">
						<article id="contact_article_social" class="article">
							<div id="contact_article_social_title" class="title">
								<header>
									<h3>Κοινωνικά δίκτυα</h3>
								</header>
							</div>
							<div id="contact_article_social_content" class="content">
								<div id="contact_article_social_summary" class="summary">
									<div id="social_groups">
										<div id="facebook_contact"><a href="http://www.facebook.com/unmanned.evolution/" target="_blank" style="cursor: pointer;" class="social" title="Ακολουθήστε μας στο Facebook"><img src="./img/social/facebook.png" alt="Facebook"/></a></div>
										<div id="twitter_contact"><a href="https://twitter.com/Unmanned_gr" target="_blank" style="cursor: pointer;" class="social" title="Ακολουθήστε μας στο Twitter"><img src="./img/social/twitter.png" alt="Twitter"/></a></div>
										<div id="linkedin_contact"><a href="#" target="_blank" style="cursor: pointer;" class="social" title="Ακολουθήστε μας στο LinkedIn"><img src="./img/social/linkedin.png" alt="LinkedIn"/></a></div>
									</div>
									<div id="image_groups">
										<div id="youtube_contact"><a href="http://www.youtube.com/user/unmannedevolution/videos?view=0" target="_blank" style="cursor: pointer;" class="social" title="Δείτε μας στο Facebook"><img src="./img/social/youtube.png" alt="Youtube"/></a></div>
										<div id="vimeo_contact"><a href="https://vimeo.com/unmannedevolution" target="_blank" style="cursor: pointer;" class="social" title="Δείτε μας στο Vimeo"><img src="./img/social/vimeo.png" alt="Vimeo"/></a></div>
										<div id="flickr_contact"><a href="#" target="_blank" style="cursor: pointer;" class="social" title="Δείτε μας στο Flickr"><img src="./img/social/flickr.png" alt="Flickr"/></a></div>
									</div>
									<div id="bookmarking_groups">
										<div id="pinterest_contact"><a href="http://pinterest.com/unmanned/" target="_blank" style="cursor: pointer;" class="social" title="Καρφιτσώστε μας στο Pinterest"><img src="./img/social/pinterest.png" alt="Pinterest"/></a></div>
										<div id="tumblr_contact"><a href="http://unmanned-evolution.tumblr.com/" target="_blank" style="cursor: pointer;" class="social" title="Δείτε μας στο Tumblr"><img src="./img/social/tumblr.png" alt="Tumblr"/></a></div>
										<div id="stumbleupon_contact"><a href="http://www.stumbleupon.com/stumbler/Unmannedgr" target="_blank" style="cursor: pointer;" class="social" title="Σταμπαρετέ μας στο StumbleUpon"><img src="./img/social/stumbleupon.png" alt="StumbleUpon"/></a></div>
										<div id="delicious_contact"><a href="http://delicious.com/post?url=http://www.unmanned-evolution.com/index.php%23landing_page_wrapper/&amp;title=Unmanned%20Evolution%20%7C%20Air%2FVideo%20Experts" target="_blank" style="cursor: pointer;" class="social" title="Κρατήστε μας στο Delicious"><img src="./img/social/delicious.png" alt="Delicious"/></a></div>
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
								<h3>Ρωτήστε μας</h3>
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
										<label for="name">Όνομα<span class="required"> *</span></label><br>
										<input id="name" name="name" type="text" class="text" value="" required="required" placeholder="Το όνομα σας κρίνεται απαραίτητο!"/>
										<span id="contactus_name_errorloc" class="error"></span>
									</div>
									<div id="email_container" class="container">
										<label for="email" lang="en">Email<span class="required"> *</span></label><br>
										<input id="email" name="email" type="email" class="text" value="" required="required" placeholder="Το email σας κρίνεται απαραίτητο!"/>
										<span id="contactus_email_errorloc" class="error"></span>
									</div>
									<div id="tel_container" class="container">
										<label for="tel">Τηλέφωνο</label><br>
										<input id="tel" name="tel" type="tel" class="text" value=""/>
									</div>
									<div id="project_type_container" class="container">
										<label for="project_type">Είδος έργου</label><br>
										<input id="project_type" name="project_type" type="text" class="text" value=""/>
									</div>
									<div id="message_container" class="container">
										<label for="message" id="message_label">Γράψτε το μήνυμα<span class="required"> *</span></label><br>		
										<textarea id="message" name="message" required="required" placeholder="Πείτε μας λίγα λόγια για το έργο το οποίο θέλετε να υλοποιήσουμε."></textarea>
										<span id="contactus_message_errorloc" class="error"></span>
									</div>
									<div id="attachements_container" class="container">
										<label for="attachments" id="attachments_label">Επισυναπτόμενα αρχεία.</label><br>
										<input id="attachments" name="attachments" type="file"/>
										<span id="contactus_attachments_errorloc" class="error"></span>
									</div>
									<div id="submit_container" class="container">
										<input type="Submit" name="Submit" value="Αποστολή" />
									</div>
									<div id="indication_container" class="indication">
										<p>Τα πεδία με τον * κρίνονται απαραίτητα</p>
									</div>
								</fieldset>
							</form>
						</div>
			</div>
		</section>
	</div>