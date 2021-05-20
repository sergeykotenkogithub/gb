<header>
    <div class="header">
        <div class="container">
            <a class="noDecor" href="index.html">
                <div class="logo">BRAN<span>D</span></div>
            </a>
            <form class="topSearch" action="#">
                <button class="searchBrowse">
                    Browse
                    <i class="fas fa-caret-down"></i>
                </button>
                <input type="text" placeholder="Search for Item..."/>
                <button class="searchButton"><i class="fas fa-search"></i></button>
            </form>

            <!-- Подгрузка с Js корзины  -->
            <div id="basket">
                <div class="img_Cart_header" id="clickCart" name>
                    <div class="cartScale">
                        <img
                            class="cart"
                            src="/src/assets/images/cars.jpg"
                            alt="cars"
                            id="basket-btn"
                        /><span class="cartNumber">2</span>
                    </div>
                    <div class="buyCart hidden" id="basket-inner">
                        <div class="cartBuyItems" id="basket-items"></div>

                        <div class="priceBuyCart">
                            <div class="priceTextTotal">TOTAL:</div>
                            <p class="priceTextTotal">
                                $ <span id="basket-sum">500.00</span>
                            </p>
                        </div>
                        <button>CHECKOUT</button>
                        <button>GO TO CART</button>
                    </div>
                </div>
            </div>

            <!-- Мой аккаунт кнопка -->
            <button class="myAccount">
                My Account
                <i class="fas fa-caret-down"></i>
            </button>
        </div>
    </div>
</header>

<div class="topNav">
    <?php
    $b = [
        'name' => [
            'Home',
            'Man',
            'Women',
            'Kids',
            'Accoseriese',
            'Featured',
            'Hot Deals',
        ],
        'href' => [
            '/',
            '/?page=shopping_cart',
            '/?page=single_page',
            '/?page=product',
            '/?page=_checkout',
            '#',
            '#',
        ]
    ];


    $ul = "<nav>";
        $d = $b['name'];
        $e = $b['href'];
        for ($i = 0; $i < count($d); $i++) {
            $ul  .= "<a href='$e[$i]'>$d[$i]</a>";
        }
        $ul .= "</nav>";
    echo $ul;
    ?>
</div>
<!--<nav>-->
<!--     Симантический тег навигация -->
<!--    <a href="/"> Home </a>-->
<!--    <a href="/?page=shopping_cart"> Man </a>-->
<!--    <a href="/?page=single_page">Women</a>-->
<!--    <a href="/?page=product">Kids</a>-->
<!--    <a href="/?page=_checkout">Accoseriese</a>-->
<!--    <a href="#">Featured</a>-->
<!--    <a href="#">Hot Deals</a>-->
<!--</nav>-->

