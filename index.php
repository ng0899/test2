<?php
$file = file("news.csv");

$arNews = [];
foreach($file as $f){
    $arrNews = explode(';', $f);
    $news['title'] = $arrNews[0];
    $news['date'] = $arrNews[1];
    $news['text'] = $arrNews[2];
    $arNews[] = $news;
}

?>
<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Новости</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <div class="main">
            <div class="title">
                <h1>Новости</h1>
            </div>
            <div class="news">
                <?if(!empty($arNews)):?>
                <?foreach($arNews as $news):?>
                <!-- News Item -->
                <div class="news-item">
                    <div class="news-title">
                        <h2><?=$news['title']?></h2>
                        <span class="date"><?=$news['date']?></span>
                    </div>
                    <div class="news-text">
                        <?=$news['text']?>
                    </div>
                    <div class="more">
                        <a href="#">Читать полностью ...</a>
                    </div>
                </div>
                <!-- News Item END -->
                <?endforeach;?>
                <?endif;?>
            </div>
        </div>
    </body>
</html>
