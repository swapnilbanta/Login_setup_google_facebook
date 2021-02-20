<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('192540051686-c7tf8jfe9o67a7eh70jsr5776tj7m1tn.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('MS8WYyKyzKruWPnx58sRDtUo');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/googleapi/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> Close your php here 