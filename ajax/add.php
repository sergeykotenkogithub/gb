<?php

$data = json_decode(file_get_contents('php://input'));

$response = [
    'sum' => $data->arg1 + $data->arg2,
    'min' => $data->arg1 - $data->arg2,
    'mul' => $data->arg1 * $data->arg2,
    'div' => $data->arg1 / $data->arg2,
];

header("Content-type: application/json");
echo json_encode($response);


// Попытался сделать условия

//if ($data->arg2 ==! 0) {
//    header("Content-type: application/json");
//    echo json_encode($response);
//} else {
//    $response = [
//        'div' => 'Нельзя делить на 0'
//    ];
//    header("Content-type: application/json");
//    echo json_encode($responses);
//}




