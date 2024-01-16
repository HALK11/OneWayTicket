<?php
require 'vendor/autoload.php'; // Подключите autoload.php из библиотеки php-telegram-bot/core

use Telegram\Bot\Api;

$token = '6949313260:AAEI9U9Jwn5gfi5o-egvf0tClFfA9C_1krQ'; // Замените на токен своего бота

$telegram = new Api($token);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $phone = $_POST["phone"];

    $message = "Новая заявка:\n\nИмя: $name\nФамилия: $surname\nНомер телефона: $phone";

    // Замените YOUR_CHAT_ID на ID вашего чата с ботом
    $chatId = '-1002042006618';

    try {
        $telegram->sendMessage(['chat_id' => $chatId, 'text' => $message]);
        echo "Данные успешно отправлены!";
    } catch (Exception $e) {
        echo "Произошла ошибка: " . $e->getMessage();
    }
}
?>