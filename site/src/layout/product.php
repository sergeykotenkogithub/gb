<div class="newArrivals">
    <div class="container">
        <h2 class="newArrivalsText">New Arrivals</h2>
        <div class="menuSmall">
            <nav>
                <!-- Симантический тег -->
                <a href="#"> Home /</a>
                <a href="#"> Men /</a>
                <a href="#"> New Arrivals /</a>
            </nav>
        </div>
    </div>
</div>

<!-- Bootstrap!!!!! Выпадающие меню  -->

<div class="all_shopinh">
    <div class="container">
        <div class="dropdown_menu_category">
            <div class="accordion btn_one_product" id="accordionExample">
                <div class="card category_cart">
                    <div class="card-header card-header_product" id="headingOne">
                        <h2 class="mb-0 mb-0-product">
                            <button
                                    class="btn btn-link btn-block text-left btn_product_click"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseOne"
                                    aria-expanded="true"
                                    aria-controls="collapseOne"
                            >
                                CATEGORY <span><i class="fas fa-caret-down"></i></span>
                            </button>
                        </h2>
                    </div>

                    <div
                            id="collapseOne"
                            class="collapse show"
                            aria-labelledby="headingOne"
                            data-parent="#accordionExample"
                    >
                        <div class="card-body class card-body_product">
                            <div>
                                <a class="noDecorate_product" href="#">Accessories</a>
                            </div>
                            <div><a class="noDecorate_product" href="#">Bags</a></div>
                            <div><a class="noDecorate_product" href="#">Denim</a></div>
                            <div>
                                <a class="noDecorate_product" href="#"
                                >Hoodies & Sweatshirts</a
                                >
                            </div>
                            <div>
                                <a class="noDecorate_product" href="#">Jackets & Coats</a>
                            </div>
                            <div><a class="noDecorate_product" href="#">Pants</a></div>
                            <div><a class="noDecorate_product" href="#">Polos</a></div>
                            <div><a class="noDecorate_product" href="#">Shirts</a></div>
                            <div><a class="noDecorate_product" href="#">Shoes</a></div>
                            <div><a class="noDecorate_product" href="#">Shorts</a></div>
                            <div>
                                <a class="noDecorate_product" href="#">Sweaters & Knits</a>
                            </div>
                            <div><a class="noDecorate_product" href="#">T-Shirts</a></div>
                            <div><a class="noDecorate_product" href="#">Tanks</a></div>
                        </div>
                    </div>
                </div>
                <div class="card category_cart">
                    <div class="card-header card-header_product" id="headingTwo">
                        <h2 class="mb-0 mb-0-product">
                            <button
                                    class="btn btn-link btn-block text-left collapsed btn_product_click"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseTwo"
                                    aria-expanded="false"
                                    aria-controls="collapseTwo"
                            >
                                BRAND <span><i class="fas fa-caret-down"></i></span>
                            </button>
                        </h2>
                    </div>
                    <div
                            id="collapseTwo"
                            class="collapse"
                            aria-labelledby="headingTwo"
                            data-parent="#accordionExample"
                    >
                        <div class="card-body"></div>
                    </div>
                </div>
                <div class="card category_cart">
                    <div class="card-header card-header_product" id="headingThree">
                        <h2 class="mb-0 mb-0-product">
                            <button
                                    class="btn btn-link btn-block text-left collapsed btn_product_click"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseThree"
                                    aria-expanded="false"
                                    aria-controls="collapseThree"
                            >
                                DESIGNER <span><i class="fas fa-caret-down"></i></span>
                            </button>
                        </h2>
                    </div>
                    <div
                            id="collapseThree"
                            class="collapse"
                            aria-labelledby="headingThree"
                            data-parent="#accordionExample"
                    >
                        <div class="card-body"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Блок справа от выпадающего меню -->
        <div class="all_product">
            <div class="block_form_product">
                <div class="trending_now">
                    <h3>TRENDING NOW</h3>
                    <div>
                        <h4>Bohemian</h4>
                        <h4>Floral</h4>
                        <h4>Lace</h4>
                        <h4>Floral</h4>
                        <h4>Lace</h4>
                        <h4>Bohemian</h4>
                    </div>
                </div>
                <div class="size_product_form">
                    <h3>SIZE</h3>
                    <div class="size_product_form_block">
                        <div><input type="checkbox" name="a" value="XXS"/> XXS</div>
                        <div><input type="checkbox" name="a" value="XS"/> XS</div>
                        <div><input type="checkbox" name="a" value="S"/> S</div>
                        <div><input type="checkbox" name="a" value="M"/> M</div>
                        <div><input type="checkbox" name="a" value="L"/> L</div>
                        <div><input type="checkbox" name="a" value="XL"/> XL</div>
                        <div><input type="checkbox" name="a" value="XXL"/> XXL</div>
                    </div>
                </div>
                <div class="price_product_form">
                    <h3>PRICE</h3>

                    <div class="range_product_form">
                        <input
                                type="text"
                                class="js-range-slider"
                                name="my_range"
                                value=""
                        />

                        <!-- Как на вебинаре указание значений -->
                        <!-- <form oninput="result.value=range2.value" action="" method="post">
                                    <input name="range" id="range2" type="range" value="10" step="0.1">
                                    <br>
                                    Значение range:
                                    <output name="result" for="range2">0</output>
                                      </form>    -->
                    </div>
                    <div class="price_form">
                        <div>$52</div>
                        <div>$400</div>
                    </div>
                </div>
            </div>
            <div class="sort_product">
                <div class="sort">
                    <a href="#">
                        <div class="sortby sortby2">Sort By</div>
                    </a>
                    <!-- <div class="sortby_2">Name</div> -->
                    <div class="sortby_2">
                        <button class="dropbtn_product">Name</button>
                        <div class="dropdown-content_product dropdown_content_2">
                            <a href="#">Price</a>
                            <a href="#">Popular</a>
                            <a href="#">Brand</a>
                        </div>
                        <i class="fas fa-caret-down"></i>
                    </div>
                </div>
                <div class="sort show_product">
                    <a href="#">
                        <div class="sortby sortby2">Show</div>
                    </a>
                    <!-- <div class="sortby_2">Name</div> -->
                    <div class="sortby_2">
                        <button class="dropbtn_product">09</button>
                        <div class="dropdown-content_product">
                            <a href="#">12</a>
                            <a href="#">18</a>
                            <a href="#">21</a>
                        </div>
                        <i class="fas fa-caret-down"></i>
                    </div>
                </div>
            </div>

            <!-- Блок с выбранными товарами -->

            <div class="all_product_show_category">
                <div class="show_category">
                    <!-- 1 -->
                    <div class="featuredBuyItem">
                        <a href="#">
                            <div class="addToCart">
                                <div class="coverAddtoCart">
                                    <div class="backColor">
                                        <!-- Задний фон картинки -->
                                        <img
                                                class="cartBuy"
                                                src="../src/assets/images/carsBuy.png"
                                                alt="cartBuy"
                                        />
                                        <h2>Add to Cart</h2>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img
                                        class="img_product_size"
                                        src="../src/assets/images/pr1.jpg"
                                        alt="buy1"
                                />
                            </div>
                        </a>
                        <div class="name_buy_item">Mango People T-shirt</div>
                        <div class="price_item">$52.00</div>
                    </div>
                    <!-- 2 -->
                    <div class="featuredBuyItem">
                        <a href="#">
                            <div class="addToCart">
                                <div class="coverAddtoCart">
                                    <div class="backColor">
                                        <!-- Задний фон картинки -->
                                        <img
                                                class="cartBuy"
                                                src="../src/assets/images/carsBuy.png"
                                                alt="cartBuy"
                                        />
                                        <h2>Add to Cart</h2>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img
                                        class="img_product_size"
                                        src="../src/assets/images/pr2.jpg"
                                        alt="buy1"
                                />
                            </div>
                        </a>
                        <div class="name_buy_item">Mango People T-shirt</div>
                        <div class="price_item">$52.00</div>
                    </div>

                    <div class="featuredBuyItem">
                        <a href="#">
                            <div class="addToCart">
                                <div class="coverAddtoCart">
                                    <div class="backColor">
                                        <!-- Задний фон картинки -->
                                        <img
                                                class="cartBuy"
                                                src="../src/assets/images/carsBuy.png"
                                                alt="cartBuy"
                                        />
                                        <h2>Add to Cart</h2>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img
                                        class="img_product_size"
                                        src="../src/assets/images/pr3.jpg"
                                        alt="buy1"
                                />
                            </div>
                        </a>
                        <div class="name_buy_item">Mango People T-shirt</div>
                        <div class="price_item">$52.00</div>
                    </div>

                    <div class="featuredBuyItem">
                        <a href="#">
                            <div class="addToCart">
                                <div class="coverAddtoCart">
                                    <div class="backColor">
                                        <!-- Задний фон картинки -->
                                        <img
                                                class="cartBuy"
                                                src="../src/assets/images/carsBuy.png"
                                                alt="cartBuy"
                                        />
                                        <h2>Add to Cart</h2>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img
                                        class="img_product_size"
                                        src="../src/assets/images/pr4.jpg"
                                        alt="buy1"
                                />
                            </div>
                        </a>
                        <div class="name_buy_item">Mango People T-shirt</div>
                        <div class="price_item">$52.00</div>
                    </div>

                    <div class="featuredBuyItem">
                        <a href="#">
                            <div class="addToCart">
                                <div class="coverAddtoCart">
                                    <div class="backColor">
                                        <!-- Задний фон картинки -->
                                        <img
                                                class="cartBuy"
                                                src="../src/assets/images/carsBuy.png"
                                                alt="cartBuy"
                                        />
                                        <h2>Add to Cart</h2>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img
                                        class="img_product_size"
                                        src="../src/assets/images/pr5.jpg"
                                        alt="buy1"
                                />
                            </div>
                        </a>
                        <div class="name_buy_item">Mango People T-shirt</div>
                        <div class="price_item">$52.00</div>
                    </div>

                    <div class="featuredBuyItem">
                        <a href="#">
                            <div class="addToCart">
                                <div class="coverAddtoCart">
                                    <div class="backColor">
                                        <!-- Задний фон картинки -->
                                        <img
                                                class="cartBuy"
                                                src="../src/assets/images/carsBuy.png"
                                                alt="cartBuy"
                                        />
                                        <h2>Add to Cart</h2>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img
                                        class="img_product_size"
                                        src="../src/assets/images/pr6.jpg"
                                        alt="buy1"
                                />
                            </div>
                        </a>
                        <div class="name_buy_item">Mango People T-shirt</div>
                        <div class="price_item">$52.00</div>
                    </div>

                    <div class="featuredBuyItem">
                        <a href="#">
                            <div class="addToCart">
                                <div class="coverAddtoCart">
                                    <div class="backColor">
                                        <!-- Задний фон картинки -->
                                        <img
                                                class="cartBuy"
                                                src="../src/assets/images/carsBuy.png"
                                                alt="cartBuy"
                                        />
                                        <h2>Add to Cart</h2>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img
                                        class="img_product_size"
                                        src="../src/assets/images/pr7.jpg"
                                        alt="buy1"
                                />
                            </div>
                        </a>
                        <div class="name_buy_item">Mango People T-shirt</div>
                        <div class="price_item">$52.00</div>
                    </div>

                    <div class="featuredBuyItem">
                        <a href="#">
                            <div class="addToCart">
                                <div class="coverAddtoCart">
                                    <div class="backColor">
                                        <!-- Задний фон картинки -->
                                        <img
                                                class="cartBuy"
                                                src="../src/assets/images/carsBuy.png"
                                                alt="cartBuy"
                                        />
                                        <h2>Add to Cart</h2>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img
                                        class="img_product_size"
                                        src="../src/assets/images/pr8.jpg"
                                        alt="buy1"
                                />
                            </div>
                        </a>
                        <div class="name_buy_item">Mango People T-shirt</div>
                        <div class="price_item">$52.00</div>
                    </div>

                    <div class="featuredBuyItem">
                        <a href="#">
                            <div class="addToCart">
                                <div class="coverAddtoCart">
                                    <div class="backColor">
                                        <!-- Задний фон картинки -->
                                        <img
                                                class="cartBuy"
                                                src="../src/assets/images/carsBuy.png"
                                                alt="cartBuy"
                                        />
                                        <h2>Add to Cart</h2>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img
                                        class="img_product_size"
                                        src="../src/assets/images/pr9.jpg"
                                        alt="buy1"
                                />
                            </div>
                        </a>
                        <div class="name_buy_item">Mango People T-shirt</div>
                        <div class="price_item">$52.00</div>
                    </div>

                    <!-- Бутсрап пагинация -->
                </div>

                <div class="next_product_all">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&#60;</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link next_page_product" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">...20</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&gt;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <button>View All</button>
                </div>
            </div>
        </div>
        <!-- конец контейнера -->
    </div>
</div>

<!-- Преимущества - машина, корона, проценты -->
<div class="advantages_product_page">
    <div class="container">
        <div class="free_delivery">
            <img src="../src/assets/images/car.svg" alt="car"/>
            <h3>Free Deliver</h3>
            <p>
                Worldwide delivery on all. Authorit tively morph next-generation
                innov tion with extensive models.
            </p>
        </div>

        <div class="free_delivery">
            <img src="../src/assets/images/percent.svg" alt="car"/>
            <h3>Sales & discounts</h3>
            <p>
                Worldwide delivery on all. Authorit tively morph next-generation
                innov tion with extensive models.
            </p>
        </div>

        <div class="free_delivery">
            <img src="../src/assets/images/crown.svg" alt="car"/>
            <h3>Quality assurance</h3>
            <p>
                Worldwide delivery on all. Authorit tively morph next-generation
                innov tion with extensive models.
            </p>
        </div>
    </div>
</div>

<!-- Js позунок -->

<!--jQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--Plugin JavaScript file-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
<script>
    "use strict";
    $(".js-range-slider").ionRangeSlider({
        type: "double",
        min: 0,
        max: 1000,
        from: 200,
        to: 500,
        grid: true,
    });
</script>

<!-- Скрипт bootstrap -->

<script
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"
></script>
<script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"
></script>
<script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"
></script>
