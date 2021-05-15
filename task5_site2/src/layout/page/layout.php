<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?=$title?></title>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
            integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
            crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../src/layout/styles/style.css"/>
    <!-- Подключение bootstrap -->
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
            crossorigin="anonymous"
    />
</head>

<body>

<?=$header?>

<!-- Заканчивается меню -->
<!-- 2й блок -->
<div class="promo">
    <div class="container">
        <div class="promoWrap">
            <div class="promoTopText">THE BRAND</div>
            <div class="promoBottomText">OF LUXERIOUS <span>FASHION</span></div>
        </div>
    </div>
</div>

<div class="topOffer">
    <div class="container">
        <div class="hotDeal">
            <div class="offerLabel">
                HOT DEAL
                <div>FOR MEN</div>
            </div>
        </div>
        <div class="offer30">
            <div class="offerLabel">
                30% OFFER
                <div>WOMEN</div>
            </div>
        </div>
        <div class="luxirous">
            <div class="offerLabel">
                LUXIROUS & TRENDY
                <div>ACCESORIES</div>
            </div>
        </div>
        <div class="forKids">
            <div class="offerLabel">
                NEW ARRIVALS
                <div>FOR KIDS</div>
            </div>
        </div>
    </div>
</div>

<!-- Featured -->
<div class="featured">
    <div class="fetured-Items">Fetured Items</div>
    <div class="featured-text">
        Shop for items based on what we featured in this week
    </div>
</div>

<!-- Блок с 8ю картинками -->
<div class="featured_buy">
    <div class="container">
        <!-- Тут вставляется catalog.js -->
        <div class="feature_block" id="catalog">
        </div>
    </div>
</div>

<!-- Блок с кнопкой All product -->

<div class="allProduct">
    <button class="allProduct_click">Browse All Product &#10142;</button>
</div>

<!-- Блок offer 30% -->

<div class="offer_for_women">
    <div class="container">
        <div class="offer_picture">
            30% <span>OFFER</span>
            <div>FOR WOMEN</div>
        </div>

        <div class="advantages">
            <div class="advantages_container">
                <div class="advantages_text">
                    <img
                            class="advantages_picture"
                            src="../src/assets/images/car.svg"
                            alt="car"
                    />
                    <h2>Free Delivery</h2>
                    <p>
                        Worldwide delivery on all. Authorit tively morph next-generation
                        innov tion with extensive models.
                    </p>
                </div>

                <div class="advantages_text">
                    <img src="../src/assets/images/percent.svg" alt="percent"/>
                    <h2>Sales & discounts</h2>
                    <p>
                        Worldwide delivery on all. Authorit tively morph next-generation
                        innov tion with extensive models.
                    </p>
                </div>

                <div class="advantages_text">
                    <img src="../src/assets/images/crown.svg" alt="crown"/>
                    <h2>Quality assurance</h2>
                    <p>
                        Worldwide delivery on all. Authorit tively morph next-generation
                        innov tion with extensive models.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<?=$subscribe?>

<?=$aboutCompany?>

<?=$footer?>

<script src="../src/components/index/basket.js"></script>
<script src="../src/components/index/catalog.js"></script>

</body>
</html>
