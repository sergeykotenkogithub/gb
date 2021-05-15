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
                            src="../src/assets/images/cars.jpg"
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
    <nav>
        <!-- Симантический тег навигация -->
        <a href="index.html"> Home </a>
        <a href="shoping_cart.html"> Man </a>
        <a href="single_page.html">Women</a>
        <a href="product.html">Kids</a>
        <a href="checkout.php">Accoseriese</a>
        <a href="#">Featured</a>
        <a href="#">Hot Deals</a>
    </nav>
</div>
