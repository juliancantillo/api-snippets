<?php
// NOTE: This example uses the next generation Twilio helper library - for more
// information on how to download and install this version, visit
// https://www.twilio.com/docs/libraries/php
require_once '/path/to/vendor/autoload.php';

use Twilio\Rest\Client;

// Your Account SID and Auth Token from https://www.twilio.com/console
$accountSid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$authToken = "your_auth_token";

$serviceSid = "ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";

// Initialize the client
$client = new Client($accountSid, $authToken);

// Create a notification
$notification = $client
    ->notify->services($serviceSid)
    ->notifications->create([
        ["toBinding" => '{"binding_type":"sms", "address":"+15555555555"}',
        "toBinding" =>'{"binding_type":"facebook-messenger", "address":"123456789123"}']
        "body" => "Hello Bob"
    ]);

echo $notification->body; // => Hello Bob
