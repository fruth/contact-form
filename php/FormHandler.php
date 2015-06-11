<?php

namespace CONTACTUS;
use PHPMailer;
use Mysqli;

require_once "PHPMailer/PHPMailerAutoload.php";
require_once "config.php";

/**
 * FormHandler is the PHP class that manages data from the AJAX or PHP
 * form
 *
 * @author     Aaron Fruth <me@aaronfruth.com>
 */

class FormHandler {

  // Public call for saving message record and sending email alert
  public function sendEmail($name, $email, $message, $interest) {
    $emailSuccess  = $this->sendEmailNotification($name, $email, $message, $interest);
    $serverSuccess = $this->saveEmailToServer($name, $email, $message);
    return $emailSuccess && $serverSuccess;
  }

  // Private function for saving email to MySQL database
  private function saveEmailToServer($name, $email, $message, $interest) {

    $config = new Config;

    $mysql = new mysqli('localhost', $config->databaseUsername, $config->databasePassword, $config->databaseName);

    if ($mysql->connect_error) {
      die("Connection failed: " . $mysql->connect_error);
    }

    $stmt = $mysql->prepare( "INSERT INTO contact_us (name, email, message) VALUES (?, ?, ?)" );
    $stmt->bind_param('sss', $name, $email, $message);
    $success = $stmt->execute();

    $stmt->close();
    $mysql->close();

    return $success;
  }

  // Private function for sending email alert to an administrator
  private function sendEmailNotification($name, $email, $message, $interest) {

    $config = new Config;

    if (!isset($interest) ||
        empty($interest)  ||
        $interest == 'noselect') {
      $interest = "No Interest Received";
    }

    $mailContent =  '<h2>' . $name . ' has sent a message!</h2>' .
                    '<p>' .
                      $message . '<br /><br />' . $interest .
                    '</p>';

    $mail = new PHPMailer;
    $mail->SMTPDebug = 3;                                   // Enable verbose debug output
    $mail->Host = 'smtp.gmail.com';                         // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                                 // Enable SMTP authentication
    $mail->Username = $config->emailUsername;               // SMTP username
    $mail->Password = $config->emailPassword;               // SMTP password
    $mail->SMTPSecure = 'tls';                              // Enable TLS encryption, `ssl` also accepted
    $mail->Port = '587';                                    // TCP port to connect to

    $mail->From = $email;                                   // From Email Address
    $mail->FromName = $name;                                // From User Name
    $mail->addAddress('atfruth@gmail.com', 'Aaron Fruth');  // Add a recipient

    $mail->isHTML(true);                                    // Set as HTML
    $mail->Subject = $name . ' has sent a message!';        // Subject Line
    $mail->Body    = $mailContent;                          // Message from User

    $success = true;

    if(!$mail->send()) {
        $success = false;
    }

    return $success;
  }
}

?>
