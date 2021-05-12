
<?php

// Задание 4. 1й Способ:

/*
Используя имеющийся HTML-шаблон, сделать так, чтобы главная страница генерировалась через PHP.
Создать блок переменных в начале страницы.
Сделать так, чтобы h1, title и текущий год генерировались в блоке контента из созданных переменных.
*/

const IMG = "img/";
$title = "Главная страница - страница обо мне";
$about = "Информация обо мне";
$favicon = "1.png";
$img_1 = "work1.jpg";
$img_2 = "work2.jpg";
$img_3 = "work3.jpg";
$img_4 = "work4.jpg";
$current_year = date ( 'Y' );
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?=$title?></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/style.css"/>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <link rel="icon" href=<?=IMG.$favicon?> type="image/x-icon">
    </head>

    <body>
        <section>
            <h1><?=$about?></h1>
            <p>
                Краткая биография обо мне
                Родился в 1985 году в городе Москва. Закончил в 2008 году МАИ.
                На данный момент работаю ведущим инженером в крупной авиакомпании.
                Поскольку я люблю авиацию, то хотел бы поделиться несколькими интересными
                фотографиями на эту тему
            </p>

            <br><br>

            <div class="swiper-container wrapper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?=IMG.$img_1?>" alt="work1">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?=IMG.$img_2?>" alt="work2">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?=IMG.$img_3?>" alt="work3">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?=IMG.$img_4?>"alt="work4">
                    </div>
                </div>

                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <br><br>
            <br><br>
        </section>

        <footer>
            <b>Просто пример жирного текста</b>
            <br><br>
            <?=$current_year?>
        </footer>

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
