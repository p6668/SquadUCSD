<?php

include_once "loginController.php";
include_once "dbController.php";
include_once "sendInviteAndMessageController.php";

session_start();

// In this action controller, we assume the scenario to be one user intends to invite another user to form a group.

// assume we get the user's and receiver's ID's
$userid = getUserId();
$receiverid = $_SESSION['profileid'];
$fromurl = $_SESSION['fromurl'];

$conn = connectToDB();

// this is the custom message the user wants to send along with the invite request
$message = ($_POST['messageboxform']);
$hash = md5(rand(0, 10000));

// add a request to the Invite HashCode Table
addInviteRequestToDB($conn, $userid, $receiverid, $hash);

// send the email request to the receiver
sendInviteEmail($conn, $userid, $receiverid, $message, $hash);

//header("Location: ../pages/index.php");
header("Location: $fromurl");
