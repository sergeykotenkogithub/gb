<div class="container">
    <div class="catalogWrapper">

        <? foreach ($goods as $item): ?>
            <div class="catalog">
                <form action="/goods" method="post">
                    <input hidden type="text" name="goods_id" value="<?= $item['id'] ?>">
                    <input hidden type="text" name="price" value="<?= $item['price'] ?>">
                    <a href="/goodsItem/?id=<?= $item['id'] ?>">
                        <div>
                            <h2><?= $item['name'] ?></h2>
                            <img src="/img/goods/<?= $item['image'] ?>" width="150"> <br>
                            <div class="price"> Цена: <span class="rub"> <?= $item['price'] ?></span>
                            </div>
                            <br>
                        </div>
                    </a>
                    <button type="submit" class="buy">Купить</button>
                </form>
            </div>
        <? endforeach; ?>

    </div>
</div>


