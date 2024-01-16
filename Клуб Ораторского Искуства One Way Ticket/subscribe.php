<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "your-email@example.com"; // Замените на свой адрес электронной почты
    $subject = "Новая подписка";
    $email = $_POST["email"];

    $message = "Пользователь с email $email хочет подписаться на вашу рассылку.";

    $headers = "From: webmaster@example.com"; // Замените на свой адрес электронной почты

    if (mail($to, $subject, $message, $headers)) {
        echo "Спасибо за подписку!";
    } else {
        echo "Произошла ошибка при отправке данных.";
    }
}
?>