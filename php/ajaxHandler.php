<?php

namespace CONTACTUS;

require_once "FormHandler.php";

/**
 * ajaxHandler is a method for calling the FormHandler through an AJAX
 * from the front-end. This method will either save the message, or will return
 *
 *
 * @author     Aaron Fruth <me@aaronfruth.com>
 */

$success = false;
$msg = "Error";

$nameComplete 		= true;
$emailComplete 		= true;
$messageComplete 	= true;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// get POST parameters
	$name     = htmlspecialchars($_POST["name"]);
	$email    = htmlspecialchars($_POST["email"]);
	$interest = htmlspecialchars($_POST["interest"]);
	$message  = htmlspecialchars($_POST["message"]);

	// if name is not provided, send error
  if (!isset($name) || empty($name)) {
    $msg = "No Name Provided";
    $nameComplete = false;
  }

	// if email is not provided, send error
  if (!isset($email) || empty($email)) {
    $msg = "No Email Provided";
    $emailComplete = false;
  }

	// if message is not provided, send error
  if (!isset($message) || empty($message)) {
    $msg = "No Message Provided";
    $messageComplete = false;
  }


	// if all required fields are provided, save record
  if ($nameComplete && $emailComplete && $messageComplete) {
    $form = new FormHandler;
    $formSuccess = $form->sendEmail($name, $email, $message, $interest);
    if ($formSuccess) {
      $success = true;
      $msg = "Message Sent!";
    }
  }

} else {
  $msg = 'No $_POST Provided';
}

// Return JSON string to AJAX call
$response = array('success' => $success, 'msg' => $msg);
$jsonString = json_encode($response, JSON_PRETTY_PRINT);
echo $jsonString;

?>
