<?php

function renderTemplate($page, $header = '', $subscribe = '', $aboutCompany = '', $footer = '', $title = '')
{
    ob_start();
    include 'src/layout/' . $page . ".php";

    return ob_get_clean();
}

$header = renderTemplate('header');
$subscribe = renderTemplate('subscribe');
$aboutCompany = renderTemplate('aboutCompany');
$footer = renderTemplate('footer');
$title = "Home";

echo renderTemplate('page/layout', $header, $subscribe, $aboutCompany, $footer, $title);

// Страница checkout. Так и не понял, как сделать переход на новую страницу

/*
function renderTemplate2($page)
{
    ob_start();
    include 'src/layout/' . $page . ".php";

    return ob_get_clean();
}

echo renderTemplate2('page/checkout');
*/