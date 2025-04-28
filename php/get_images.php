<?php
// Отключаем вывод ошибок
error_reporting(0);
ini_set('display_errors', 0);

// Указываем путь к папке с изображениями
$folderPath = './images/banner/';

// Поддерживаемые расширения
$imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];

// Читаем содержимое папки
$files = scandir($folderPath);

// Фильтруем только файлы с нужными расширениями
$imageFiles = array_filter($files, function ($file) use ($folderPath, $imageExtensions) {
    if ($file === '.' || $file === '..') {
        return false;
    }
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    return in_array($ext, $imageExtensions);
});

// Возвращаем JSON
header('Content-Type: application/json');
echo json_encode(array_values($imageFiles));
exit;