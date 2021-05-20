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
<!-- 3 товара и цены -->
<div class="productDetail">
    <div class="container">
        <div class="productChoose">
            <h2>Product Details</h2>
            <h2>unite Price</h2>
            <h2>Quantity</h2>
            <h2>shipping</h2>
            <h2>Subtotal</h2>
            <h2>ACTION</h2>
        </div>
        <div class="horizontal"></div>
        <div class="choose">
            <div class="choose_you">
                <div class="name_choose_product1">Product Details</div>
                <a href="#"><img src="../src/assets/images/man1.jpg" alt="man1"/></a>
                <div class="choose_text">
                    <h2>Mango People T-shirt</h2>
                    <p>Color: <span>Red</span></p>
                    <p>Size: <span>Xll</span></p>
                </div>
            </div>
            <div class="choose_margin">
                <div class="name_choose">unite Price</div>
                $150
            </div>
            <div class="choose_margin">
                <div class="name_choose">Quantity</div>
                <input class="choose_number" type="text" placeholder="2"/>
            </div>
            <div class="choose_margin">
                <div class="name_choose">shipping</div>
                FREE
            </div>
            <div class="choose_margin">
                <div class="name_choose">Subtotal</div>
                $300
            </div>
            <div class="choose_margin">
                <div class="name_choose">ACTION</div>
                <a class="fa_margin" href="#"
                ><i class="fas fa-times-circle"></i
                    ></a>
            </div>
        </div>
        <div class="horizontal"></div>

        <!-- 2я картинка -->
        <div class="choose">
            <div class="choose_you">
                <div class="name_choose_product1">Product Details</div>
                <a href="#"><img src="../src/assets/images/man2.jpg" alt="man2"/></a>
                <div class="choose_text">
                    <h2>Mango People T-shirt</h2>
                    <p>Color: <span>Red</span></p>
                    <p>Size: <span>Xll</span></p>
                </div>
            </div>
            <div class="choose_margin">
                <div class="name_choose">unite Price</div>
                $150
            </div>
            <div class="choose_margin">
                <div class="name_choose">Quantity</div>
                <input class="choose_number" type="text" placeholder="2"/>
            </div>
            <div class="choose_margin">
                <div class="name_choose">shipping</div>
                FREE
            </div>
            <div class="choose_margin">
                <div class="name_choose">Subtotal</div>
                $300
            </div>
            <div class="choose_margin">
                <div class="name_choose">ACTION</div>
                <a class="fa_margin" href="#"
                ><i class="fas fa-times-circle"></i
                    ></a>
            </div>
        </div>
        <div class="horizontal"></div>

        <!-- 3я картинка -->
        <div class="choose">
            <div class="choose_you">
                <div class="name_choose_product1">Product Details</div>
                <a href="#"><img src="../src/assets/images/man3.jpg" alt="man3"/></a>
                <div class="choose_text">
                    <h2>Mango People T-shirt</h2>
                    <p>Color: <span>Red</span></p>
                    <p>Size: <span>Xll</span></p>
                </div>
            </div>
            <div class="choose_margin">
                <div class="name_choose">unite Price</div>
                $150
            </div>
            <div class="choose_margin">
                <div class="name_choose">Quantity</div>
                <input class="choose_number" type="text" placeholder="2"/>
            </div>
            <div class="choose_margin">
                <div class="name_choose">shipping</div>
                FREE
            </div>
            <div class="choose_margin">
                <div class="name_choose">Subtotal</div>
                $300
            </div>
            <div class="choose_margin">
                <div class="name_choose">ACTION</div>
                <a class="fa_margin" href="#"
                ><i class="fas fa-times-circle"></i
                    ></a>
            </div>
        </div>
        <div class="horizontal"></div>

        <div class="shopping">
            <button>CLEAR SHOPPING CART</button>
            <button>CONTINUE SHOPPING</button>
        </div>

        <!-- Adress -->

        <div class="end_buy">
            <div class="adress">
                <h2>Shipping Adress</h2>
                <form class="adress_shipping" action="#">
                    <!-- Поиск по в списке нужного -->
                    <input list="country" placeholder="Bangladesh" name="myCountry"/>
                    <datalist id="country">
                        <option value="Bangladesh"></option>
                        <option value="Austria"></option>
                        <option value="Russia"></option>
                        <option value="Greece"></option>
                        <option value="Belgium"></option>
                        <option value="Denmark"></option>
                    </datalist>

                    <input
                            type="text"
                            placeholder="State"
                            name="state"
                            pattern="^([A-Za-z]{3,})+$"
                    />

                    <input
                            type="text"
                            placeholder="Postcode/Zip"
                            name="zip"
                            pattern="^[0-9]{4,}+$"
                    />
                    <button>get a quote</button>
                </form>
            </div>

            <div class="coupon">
                <h2>coupon discount</h2>
                <p>Enter your coupon code if you have one</p>
                <form class="adress_shipping" action="#">
                    <input
                            type="text"
                            placeholder="State"
                            name="state"
                            pattern="^([A-Za-z]{3,})+$"
                    />
                    <button class="coupon_click">Apply coupon</button>
                </form>
            </div>
            <div class="checkout">
                <div class="container_checkout">
                    <aside>
                        <p>Sub total $900</p>
                        <h2>GRAND TOTAL $900</h2>
                        <div></div>
                        <button>proceed to checkout</button>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>


