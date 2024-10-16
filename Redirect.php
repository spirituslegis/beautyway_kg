<?php
// Устанавливаем заголовок для кэширования
header("Cache-Control: no-cache, must-revalidate"); 

// Получаем user agent
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Проверяем, iOS ли это устройство
$isIOS = strpos($userAgent, 'iPhone') !== false || strpos($userAgent, 'iPad') !== false;

// Определяем номер телефона
$phoneNumber = '996501668998'; // Замените на ваш номер (без +)

if ($isIOS) {
    // Пытаемся открыть WhatsApp, если это iOS
    header("Location: whatsapp://send?phone=$phoneNumber");
} else {
    // Открываем веб-версию для других устройств
    header("Location: https://wa.me/$phoneNumber");
}
exit();
?>
