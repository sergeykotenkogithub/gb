<!DOCTYPE html>
<html>
    <head>
        <title><?=$title?></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    </head>
    <body>
        <section>
            <h1><?=$about?></h1>
            Краткая биография обо мне
            Родился в 1985 году в городе Москва. Закончил в 2008 году МАИ.
            На данный момент работаю ведущим инженером в крупной авиакомпании.
            Поскольку я люблю авиацию, то хотел бы поделиться несколькими интересными
            фотографиями на эту тему
            <br><br>
            <div class="swiper-container wrapper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="img/work1.jpg" alt="work1">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/work2.jpg" alt="work2">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/work3.jpg" alt="work3">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/work4.jpg" alt="work4">
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
            <?=$year?>
        </footer>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>