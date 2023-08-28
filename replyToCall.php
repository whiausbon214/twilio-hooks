<?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php

// Your Account SID and Auth Token from console.twilio.com
$sid = "ACce886bd0b9a64c2ad6939b9f16d160fc";
$token = "d0156e30e8e2a4a38f2d982c5409a5ad";
$client = new Twilio\Rest\Client($sid, $token);

// this line loads the library 
require_once '/path/to/vendor/autoload.php';
use Twilio\TwiML\VoiceResponse;

$response = new VoiceResponse;
$response->say("Thank you for calling A O B G. This number does not accept incoming calls. Please dial 1 8 8 8 9 1 8 2 3 8 6 for assistance.");
print $response;
