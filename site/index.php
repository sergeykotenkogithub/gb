<?php

//http://gb/?page=content - главная

define('TEMPLATES_DIR', 'src/layout/');
define('LAYOUTS_DIR', 'page/');


$page = 'index';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$params = [
    'name' => 'Flvby',
];

switch ($page) {
    case 'index':
        break;
//    case 'checkout':
//        $params['catalog']; //  $params['catalog'] = getCatalog
}

// функция getCatalog




echo  render($page, $params);

function render($page, $params = []) {
    return renderTemplate(LAYOUTS_DIR . 'layout', [
        'header' => renderTemplate('header', $params),
        'content' => renderTemplate($page, $params),  // Чтобы ссылки передавались на другие страницы
        'subscribe' => renderTemplate('subscribe', $params),
        'aboutCompany' => renderTemplate('aboutCompany', $params),
        'footer' => renderTemplate('footer', $params),
    ]);
}

function renderTemplate($page, $params = [])
{
      extract($params);
//    foreach ($params as $key => $value) {
//        $$key = $value;
//    }

    ob_start();
    $filename = TEMPLATES_DIR . $page . ".php";
    if (file_exists($filename)) {
        include $filename;
    }

    return ob_get_clean();
}



