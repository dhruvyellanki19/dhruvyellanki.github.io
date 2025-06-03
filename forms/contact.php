<?php
/**
 * Requires the "PHP Email Form" library
 * Download from: https://bootstrapmade.com/php-email-form/
 * Upload to: assets/vendor/php-email-form/php-email-form.php
 */

// Your email address
$receiving_email_address = 'dhruvsai@umd.edu';

// Load the PHP Email Form library
if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
  include($php_email_form);
} else {
  die('Unable to load the "PHP Email Form" Library!');
}

// Create form handler
$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = $_POST['subject'];


// Add message content
$contact->add_message($_POST['name'], 'From');
$contact->add_message($_POST['email'], 'Email');
$contact->add_message($_POST['message'], 'Message', 10);

// Send the email
echo $contact->send();
?>
