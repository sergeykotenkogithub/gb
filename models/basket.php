<?php

function deleteBasketItem($id) {
    return getOneResultInto("DELETE FROM `basket` where id = {$id};");
}

function getBasketItem($session) {
    return getAssocResult("SELECT basket.id as basket_id, goods.id as goods_id, goods.name as name, goods.price as price, basket.session_id as session_id, goods.image as image, basket.quantity FROM basket, goods WHERE basket.goods_id=goods.id AND session_id='{$session}'");
}

//function countGoodsBasketItem($session) {
//    return getOneResult("SELECT count(id) as count FROM basket WHERE session_id = '{$session}' ");
//}
function countGoodsBasketItem($session) {
    return getOneResult("SELECT sum(quantity) as `count` FROM basket WHERE session_id = '{$session}' ");
}

function getSumBasket($session) {
    return getOneResult("SELECT SUM(goods.price) as summ FROM basket, goods WHERE basket.goods_id = goods.id AND session_id = '{$session}'");
}

function getBasket() {
    return getAssocResult("SELECT goods_id, session_id FROM `basket`");
}

////////
///
function changeBasketQuantity($id) {
    return getOneResultInto("UPDATE `basket` SET `quantity` = quantity + 1 WHERE `goods_id` = {$id};");
}