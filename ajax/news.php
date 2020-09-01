<?php

$response = [];
if(isset($_REQUEST['title'], $_REQUEST['date'], $_REQUEST['text']) && !empty($_REQUEST['title']) && !empty($_REQUEST['date']) && !empty($_REQUEST['text'])){
    $title = htmlspecialchars($_REQUEST['title']);
    $text = htmlspecialchars($_REQUEST['text']);
    $arDate = explode('-', $_REQUEST['date']);
    $date = $arDate[2] . '.' . $arDate['1'] . '.' . $arDate[0];

    $str = $title . ';' . $date . ';' . $text;
    file_put_contents('../news.csv', $str . PHP_EOL, FILE_APPEND);
    $response['success'] = true;
}else{
    $response['error'] = 'Заполните все поля';
}

echo json_encode($response);