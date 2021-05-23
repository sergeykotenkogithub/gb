<?php

// Пути файлов
define('ROOT', $_SERVER['DOCUMENT_ROOT']); // Так и не понял как реализовать с include
define('TEMPLATES_DIR', '../templates/');
define('LAYOUT_DIR', 'layouts/main');
$pathRoot = dirname(ROOT);

// Вывод сообщений об отправки

$messageUpload = [
    'OK' => 'Файл успешно загружен',
    'ERROR' => 'Ошибка',
    'JPG' => 'Можно загружать только jpg-файлы',
    'DOUBLE' => 'Файл существует, выберите другое имя файла!',
    'BIGSIZE' => 'Размер файла не больше 5 мб',
    'NOTPHP' => 'Загрузка php-файлов запрещена!',
    'NOTIMG' => 'Можно загружать только jpg-файлы, неверное содержание файла, не изображение',
];

// Подключение модулей
include $pathRoot . "/engine/menu.php";
include $pathRoot . "/engine/function.php";
include $pathRoot . "/engine/getFileImg.php";
include $pathRoot . "/engine/classSimpleImage.php";
include $pathRoot . "/engine/uploadFile.php";

// ...........................

//include "../engine/menu.php";
//include "../engine/function.php";
//include "../engine/getFileImg.php";
//include "../engine/classSimpleImage.php";
//include "../engine/uploadFile.php";