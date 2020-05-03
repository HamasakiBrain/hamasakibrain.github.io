<?php

if (isset($_POST["name"])) {$name = $_POST["name"];}
if (isset($_POST["email"])) {$email = $_POST["email"];}
if (isset($_POST["phone"])) {$phone = $_POST["phone"];}
if (isset($_POST["message"])) {$message = $_POST["message"];}

$token = "1006752858:AAE5pl1gk39bKzKjz7sXFcCaYV6UQVghbbo";

$chat_id = "1032471977";

$arr = [
    "Имя: " => $name,
    "Почта: " => $email,
    "Телефон: " => $phone,
    "Сообщение: " => $message
];

foreach ($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A"; 
}

$send = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
