<?php
// Replace 'your_telegram_bot_token' and 'your_chat_id' with your Telegram bot token and chat ID
$telegram_bot_token = '7183322305:AAGPseUgP7JH0ErKpSKhJBEHTQfhkXwrJzs';
$chat_id = '-1002185942859';

// Retrieve the data from the form
$field1 = $_POST['field1'];
$field2 = $_POST['field2'];
$field3 = $_POST['field3'];

// Format the message
$message = "Field 1: $field1\nField 2: $field2\nField 3: $field3";

// Send the message to Telegram
$send_message_url = "https://api.telegram.org/bot$telegram_bot_token/sendMessage?chat_id=$chat_id&text=" . urlencode($message);

file_get_contents($send_message_url);

// Redirect to a thank you page or back to the form
header("Location: index.html");
exit;
?>
