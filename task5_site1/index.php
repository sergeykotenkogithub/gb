<?php

// Render

function renderTemplate($page, $header = '', $pageTitle = '', $price = '', $comments = '',  $footer = '', $title = '', $btnPagetitle_1 = '', $btnPagetitle_2 = '', $logo = '')
{
    ob_start();
    include 'templates/' . $page . ".php";

    return ob_get_clean();
}

// Переменные в шаблоне

$btnPagetitle_1 = "Créer mon compte";
$btnPagetitle_2 = "Voir la vidéo";
$logo = "assets/img/logo.svg";
$title = "Pakko";

// Render модулей

$header = renderTemplate('header',"", "", "", "", "", "", "", "", $logo);
$pageTitle = renderTemplate('pageTitle', "", "", "", "", "", "", $btnPagetitle_1, $btnPagetitle_2);
$price = renderTemplate('price');
$comments = renderTemplate('comments');
$footer = renderTemplate('footer', "", "", "", "", "", "", "", "", $logo);

echo renderTemplate('layouts/layout', $header, $pageTitle, $price, $comments, $footer, $title);;


