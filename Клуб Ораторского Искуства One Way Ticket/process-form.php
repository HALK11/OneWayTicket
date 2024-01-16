<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $message = test_input($_POST["message"]);

    // Отправляем данные на почту
    $to = "thanos2002@mail.ru"; // Замените на свой адрес электронной почты
    $subject = "Новое сообщение от $name";
    $headers = "From: $email\r\nReply-To: $email";
    
    // Опционально: уведомление отправителю
    $user_subject = "Ваше сообщение отправлено";
    $user_message = "Спасибо за ваше сообщение, $name! Мы свяжемся с вами в ближайшее время.";
    $user_headers = "From: your-email@example.com"; // Замените на свой адрес электронной почты
    
    // Отправка почты
    mail($to, $subject, $message, $headers);
    mail($email, $user_subject, $user_message, $user_headers);

    // Опционально: перенаправление пользователя на страницу "Спасибо"
    header("Location: thank-you.html");
    exit();
}

// Функция для очистки данных формы
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>