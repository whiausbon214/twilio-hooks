<?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php

require_once 'vendor/autoload.php'; // Loads the library
use Twilio\TwiML\MessagingResponse;

$response = new MessagingResponse();
$response->message("Welcome to AOBG! This number does not receive incoming messages. Please email use members@aobgrp.com for assistance.");
print $response;