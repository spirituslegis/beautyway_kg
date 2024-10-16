<?php
// Устанавливаем заголовок для кэширования
header("Cache-Control: no-cache, must-revalidate"); 

// Получаем user agent
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Проверяем, iOS ли это устройство
$isIOS = strpos($userAgent, 'iPhone') !== false || strpos($userAgent, 'iPad') !== false;

// Определяем номер телефона
$phoneNumber = '+996501668998'; // Замените на ваш номер

// Устанавливаем ссылки
$whatsappAppLink = "whatsapp://send?phone=$phoneNumber";
$whatsappWebLink = "https://wa.me/$phoneNumber";

// Перенаправление в зависимости от устройства
if ($isIOS) {
    // Пытаемся открыть WhatsApp, если это iOS
    header("Location: $whatsappAppLink");
    exit();
} else {
    // Открываем веб-версию для других устройств
    header("Location: $whatsappWebLink");
    exit();
}
?>
