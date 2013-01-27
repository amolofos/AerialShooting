<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/contact-form-attachment.html
*/
require_once("/include/fgcontactform.php");

$formproc = new FGContactForm();

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient("info@unmanned-evolution.com"); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey("DYn0vPrOtuiKMAf");

$formproc->AddFileUploadField("attachements","jpg,jpeg,png,doc,docx,odt,pdf,zip,gzip,7z",2024);

if(isset($_POST["submitted"]))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>
    <script src="./application/files/contact/scripts/gen_validatorv31.js"></script>
    <script src="./application/files/contact/scripts/fg_captcha_validator.js"></script>

	<!-- Form Code Start -->
	<form id="SendMessageForm" action="<?php echo $formproc->GetSelfScript(); ?>" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
		<fieldset>
			<input type="hidden" name="submitted" id="submitted" value="1"/>
			<input type="hidden" name="<?php echo $formproc->GetFormIDInputName(); ?>" value="<?php echo $formproc->GetFormIDInputValue(); ?>"/>
			<input type="text"  class="spmhidip" name="<?php echo $formproc->GetSpamTrapInputName(); ?>" />

			<div><span class="error"><?php echo $formproc->GetErrorMessage(); ?></span></div>
			<div id="name_container" class="container">
				<label for="name">Όνομα<span class="required"> *</span></label></br>
				<input id="name" name="name" type="text" class="text" value="" required="required" placeholder="Το όνομα σας κρίνεται απαραίτητο!"/>
				<span id="contactus_name_errorloc" class="error"></span>
			</div>
			<div id="email_container" class="container">
				<label for="email" lang="en">Email<span class="required"> *</span></label></br>
				<input id="email" name="email" type="email" class="text" value="" required="required" placeholder="Το email σας κρίνεται απαραίτητο!"/>
				<span id="contactus_email_errorloc" class="error"></span>
			</div>
			<div id="tel_container" class="container">
				<label for="tel">Τηλέφωνο</label></br>
				<input id="tel" name="tel" type="tel" class="text" value=""/>
			</div>
			<div id="project_type_container" class="container">
				<label for="project_type">Είδος έργου</label></br>
				<input id="project_type" name="project_type" type="text" class="text" value=""/>
			</div>
			<div id="message_container" class="container">
				<label for="message" id="message_label">Γράψτε το μήνυμα<span class="required"> *</span></label></br>		
				<textarea id="message" name="message" required="required" placeholder="Πείτε μας λίγα λόγια για το έργο το οποίο θέλετε να υλοποιήσουμε."></textarea>
				<span id="contactus_message_errorloc" class="error"></span>
			</div>
			<div id="attachements_container" class="container">
				<label for="attachments" id="attachments_label">Επισυναπτόμενα αρχεία.</label></br>
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