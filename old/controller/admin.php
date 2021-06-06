<?php

//.............Админ........................................

function adminController($params) {

    $params['order'] = adminOrder();

    $templateName = '/admin/admin';

    return render($templateName, $params);
}

// Админ страница с определённым заказом

function adminOrderController($params) {

    $id = (int)$_GET['id'];
    $params['order'] = adminOrderItem($id);
    $params['summ'] = adminOrderTotal($id);
    $params['status'] = adminOrderStatus($id);

    $templateName = '/admin/adminOrder';

    return render($templateName, $params);
}