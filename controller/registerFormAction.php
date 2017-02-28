<?php
include_once 'registerController.php';
include_once 'loginController.php';

session_start();

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$password = $_POST['password'];
$hash = md5( rand(0,1000) );
$duplicateEmail = existingEmail($email);

// see if account has already been created
if ($duplicateEmail) {
    // notify the front end that
    // the user email already exists in the database
    // with the flag in the url
    header("Location: ../pages/register.php?fail");
}

// Create the new user in the database
else {
    // add the user into the database
    addUser($email, $password, $first, $last, $hash);

	
	$to      = $email; // Send email to our user
	$subject = "Register | Verification"; // Give the email a subject
	$message = "
Hi $first,

Thank you for registering!
Your account has been created, you can log in after you have activated your account. 

Please click the following link to activate your account:
http://www.squaducsd.com/pages/activate.php?email=$email&hash=$hash";

$headers = "From: account" . "\r\n"; // Set from headers
mail($_POST['email'], $subject, $message, $headers);
	
	
    // redirect to the homepage
    header("Location: ../pages/login.php?verify");
}