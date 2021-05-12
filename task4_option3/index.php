<?php

// Задание 4. 3й Способ:

$title = "Главная страница - страница обо мне";
$about = "Информация обо мне";
$favicon = "img/1.png";
$img_1 = "img/work1.jpg";
$img_2 = "img/work2.jpg";
$img_3 = "img/work3.jpg";
$img_4 = "img/work4.jpg";
$current_year = date ( 'Y' );

$content = file_get_contents("site.html");

$content = str_replace("{{TITLE}}", $title, $content);
$content = str_replace("{{ABOUT}}", $about, $content);
$content = str_replace("{{FAVICON}}", $favicon, $content);
$content = str_replace("{{IMG_1}}", $img_1, $content);
$content = str_replace("{{IMG_2}}", $img_2, $content);
$content = str_replace("{{IMG_3}}", $img_3, $content);
$content = str_replace("{{IMG_4}}", $img_4, $content);
$content = str_replace("{{CURRENT_YEAR}}", $current_year, $content);

echo $content;
