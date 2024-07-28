<?php
// Replace 'your_telegram_bot_token' and 'your_chat_id' with your Telegram bot token and chat ID
$telegram_bot_token = 'your_telegram_bot_token';
$chat_id = 'your_chat_id';

// Retrieve the data from the form
$field1 = $_POST['field1'];
$field2 = $_POST['field2'];
$field3 = $_POST['field3'];

// Format the message
$message = "Field 1: $field1\nField 2: $field2\nField 3: $field3";

// Prepare the URL for sending the message
$send_message_url = "https://api.telegram.org/bot$telegram_bot_token/sendMessage";

// Use curl to send the message
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $send_message_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
    'chat_id' => $chat_id,
    'text' => $message
]));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the request
$response = curl_exec($ch);

// Check for errors
if(curl_error($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo 'Message sent!';
}

// Close the curl session
curl_close($ch);

// Redirect to a thank you page or back to the form
header("Location: index.html");
exit;
?>
