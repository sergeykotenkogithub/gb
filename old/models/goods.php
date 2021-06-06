<?php

// Вывод всех товаров

function getAllCatalog() {
    $sql = "SELECT * FROM `goods`";
    return getAssocResult($sql);
}

// Отдельная страница одного товара

function getOneCatalog($id) {
    return getOneResult("SELECT * FROM goods WHERE id = {$id}");
}

function getItemFeedback($id) {
    return getOneResult("SELECT g.id, g.name, f.name, f.feedback FROM goods g join feedback f on g.id = f.goods_id WHERE g.id = {$id}");
}

function comparisonGoodsBasket($id, $session) {
    $sql = "SELECT goods_id FROM basket where goods_id = '{$id}' AND session_id = '{$session}'";
    return getAssocResult($sql);
}
