<?php
// PHP lines for testing
//ini_set('error_reporting', E_ALL|E_STRICT);
//ini_set('display_errors', 1);

namespace CONTACTUS;

require 'components/header.php';
require_once "php/FormHandler.php";

/**
 * contact-us.php contains this method for calling the FormHandler if a $_POST
 * has been sent to this form. This is a fallback for users that have JS
 * disabled.
 *
 *
 * @author     Aaron Fruth <me@aaronfruth.com>
 */

$nameComplete 		= true;
$emailComplete 		= true;
$messageComplete 	= true;
$alertHTML				= '';

// Check if POST exists to send request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Get POST variables
	$name     = htmlspecialchars($_POST["name"]);
	$email    = htmlspecialchars($_POST["email"]);
	$interest = htmlspecialchars($_POST["interest"]);
	$message  = htmlspecialchars($_POST["message"]);

	// If name not provided, show alert
	if (!isset($name) || empty($name)) {
		$alertHTML = $alertHTML . "<div class='alert error'>Please provide a name.</div>";
	  $nameComplete = false;
	}

	// If email not provided, show alert
	if (!isset($email) || empty($email)) {
		$alertHTML = $alertHTML . "<div class='alert error'>Please provide an email address.</div>";
	  $emailComplete = false;
	}

	// If message not provided, show alert
	if (!isset($message) || empty($message)) {
		$alertHTML = $alertHTML . "<div class='alert error'>Please provide a message for us to read.</div>";
	  $messageComplete = false;
	}

	// Send record to FormHandler object if all required fields are provided
	if ($nameComplete && $emailComplete && $messageComplete) {
	  $form = new FormHandler;
		$success = $form->sendEmail($name, $email, $message);
		if ($success) {
	    echo "<div class='alert success'>Email has been successfully sent!</div>";
	  }
	}
}
?>

<h2><?php echo _("Have a question for us? Fill out the form below and we'll get in touch shortly!"); ?></h2>

<div id="alert-container">
	<?php echo $alertHTML; ?>
</div>

<form action="contact-us.php" method="post">

	<section class="left">

		<div>
			<label for="contact-name">Name: <span class="highlight">*</span></label>
			<div class="form <?php if (!$nameComplete) echo 'error'; ?>">
				<i class="fa fa-fw fa-user"></i>
				<input type="text" name="name" id="contact-name" placeholder="John Smith" />
			</div>
		</div>

		<div>
			<label for="contact-email">Email: <span class="highlight">*</span></label>
			<div class="form <?php if (!$emailComplete) echo 'error'; ?>">
				<i class="fa fa-fw fa-envelope-o"></i>
				<input type="text" name="email" id="contact-email" placeholder="Where can we email you?" />
			</div>
		</div>

		<div>
			<label for="contact-interest">I am interested in:</label>
			<div class="form">
				<select name="interest" id="contact-interest">
					<option value="noselect" selected>Choose a topic...</option>
					<option value="New Website Request">I need a new website.</option>
					<option value="SEO/Marketing Strategy">I need an SEO and Marketing strategy.</option>
					<option value="General Information">I need general information.</option>
				</select>
			</div>
		</div>

	</section>

	<section class="right">

		<label for="contact-message">Message: <span class="highlight">*</span><span class="right">* Required Fields</span></label>

		<div class="form message <?php if (!$messageComplete) echo 'error'; ?>">
			<i class="fa fa-comment-o"></i>
			<textarea name="message" id="contact-message" rows="6" placeholder="What can we help you with?"></textarea>
		</div>

		<button id="contact_submit">Submit</button>

	</section>

</form>

<?php require 'components/footer.php'; ?>
