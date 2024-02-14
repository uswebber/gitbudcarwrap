<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$addressess = $_POST['zipcode']; 
$programmingLanguage = $_POST['New Employment Information Form Submission'];

$to = "sleemtunechi@gmail.com";
$subject = "New Employment Information Form Submission"; 
$message = "Name: $name\nEmail: $email\nPhone: $phone\nAddress: $address\nZipcode: $addressess\nPreferred Programming Language: $programmingLanguage";
$headers = "From: $email";

mail($to, $subject, $message, $headers);

$telegramChatId = "1518802425";
$telegramBotToken = "6408662648:AAH2eNQ8KpmV4nJHbbPnUB5vhQe4K1HpNh0";
$telegramMessage = "New Employment Information Form Submission:\nName: $name\nEmail: $email\nPhone: $phone\nAddress: $address\nZipcode: $addressess\nPreferred Programming Language: $programmingLanguage";

$telegramApiUrl = "https://api.telegram.org/bot$telegramBotToken/sendMessage?chat_id=$telegramChatId&text=" . urlencode($telegramMessage);
file_get_contents($telegramApiUrl);

header("Location: confirmation.php?status=success");
exit();
?>