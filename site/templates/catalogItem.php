<div class="container">
    <div>
        <h2><?=$catalog['name']?></h2>
        <div class="catalogItemImg">
            <img  src="/img/catalog/<?=$catalog['image']?>">
        </div>
        <div><?=$catalog['description']?> </div>
        <div class="rub catalogItemPrice">Цена:<?=$catalog['price']?></div>
        <button class="buy">КУПИТЬ</button>

        <div class="feedbackCatalog">
            <h2>Отзывы:</h2>
            <div> <?=$feedback['name']?> : <?=$feedback['feedback']?></div>
        </div>

    </div>
</div>
