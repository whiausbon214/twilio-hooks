<?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php

// this line loads the library 
require_once '/path/to/vendor/autoload.php';
use Twilio\TwiML\VoiceResponse;

$response = new VoiceResponse;
$response->say("Thank you for calling A O B G. This number does not accept incoming calls. Please dial 1 8 8 8 9 1 8 2 3 8 6 for assistance.");
print $response;
