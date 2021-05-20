<?php
/*
6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на
генерируемое через PHP. Необходимо представить
пункты меню как элементы массива и вывести их циклом.
Подумать, как можно реализовать меню с вложенными подменю?
Попробовать его реализовать. Важное, при желании можно сделать на движке 3. ВАЖНОЕ!
*/
$b = [
    'name' => [
        [
            "Меню1" => [
                "name2" => [
                    "Подменю1",
                    "Подменю2",
                    "Подменю3",
                ],
                "link" => [
                    "https://www.youtube.com/",
                    "https://www.facebook.com/",
                    "https://mail.ru/",
                ]
            ]

        ],
        "Меню2",
        "Меню3",
        "Меню4",
    ],
    'href' => [
        "https://yandex.ru/",
        "https://www.google.ru/",
        "https://www.rambler.ru/",
        "https://ru.search.yahoo.com/",
    ]
];


$ul = "<ul>"; // Первый ul

$d = $b['name'];
$e = $b['href'];


for ($i = 0; $i < count($d); $i++) {  // Названий столько же, сколько и ссылок потому выбрал $d
    if (is_array($d[$i])) {//

        foreach ($d[$i] as $key => $value) {
            $vc = $d[$i];
            $d[$i] = $key; // value это массив Меню1 // Чтобы выводилось Меню1
            $ud = "<ul>";  // Второй ul

            foreach ($value as $key2 => $value2) {
                for ($k =0; $k < count($value2); $k++) {
                    if ($key2 == 'name2') {
                        $allName2 .= "$value2[$k] ";   // Получаю строку из массива name2 (тоесть из названий подменю)
                    }
                    if ($key2 == 'link') {
                        $allLink .= "$value2[$k] ";    // Получаю строку из массива link (тоесть из названий ссылок подменю)
                    }
                }
                $trimmed = rtrim($allName2, " "); // Чтоб удалить в конце пробел
                $trimmed2 = rtrim($allLink, " "); // Чтоб удалить в конце пробел

                $name2 = explode(" ", $trimmed); // Из строки в массив
                $link = explode(" ", $trimmed2); // Из строки в массив
            }

            for ($k = 0; $k < count($name2); $k++) {
                $ud .= "<li><a href='$link[$k]'>$name2[$k];</a></li>";
            }

            $ud .= "</ul>";
        }

        $ul .= "<li><a href='$e[$i]'>$d[$i];</a></li> $ud";

    } else {
        $ul .= "<li><a href='$e[$i]'>$d[$i];</a></li>";
    }
}

$ul .= "</ul>";
echo $ul;