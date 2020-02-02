<?php
include_once 'db_connect.php';
require_once 'phpQuery/phpQuery-onefile.php';
include_once 'functions.php';

ini_set('max_execution_time', '10000');
set_time_limit(0);
ini_set('memory_limit', '2048M');

echo "<pre>";

//Сделайте парсер, который заберет все ссылки из главного меню, затем перейдет по каждой из них, спарсит содержимое контента страниц и сохранит в базу данных контент страницы, тайтл страницы, url страницы.
//$page = getPageByUrl('http://old.code.mu/exercises/advanced/php/parsing/poetapnyj-parsing-i-metod-pauka/1/index.php');
//$pq = phpQuery::newDocument($page);
//$urls = [];
//$texst = [];
//$elems = $pq->find('#menu a');
//foreach ($elems as $item) {
//    $elem = pq($item);
//    $text[] = $elem->text();
//    $urls[] = $elem->Attr('href');
//}
//foreach ($urls as $url) {
//    $page = getPageByUrl('http://old.code.mu/exercises/advanced/php/parsing/poetapnyj-parsing-i-metod-pauka/1/index.php');
//    $pq = phpQuery::newDocument($page);
//
//    $content = trim($pq->find('#content')->text());
//    $title = trim($pq->find('title')->text());
//    $url_page = 'http://old.code.mu/exercises/advanced/php/parsing/poetapnyj-parsing-i-metod-pauka/1/index.php' . $url;
//
//    $db = DB::getConnect();
//    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $sql = "INSERT INTO `spider` (`title`, `content`, `url`) VALUES ('$title', '$content', '$url_page')";
//    $statement = $db->prepare($sql);
//    $statement->execute();
//}

//-------------------------------------------------------------------------------------------

//Спарсите все анекдоты из определенного раздела сайта anekdoty.ru.
//Сохраните их в базу данных. При сохранении очистите их от лишних тегов.
//$page = getPageByUrl('https://anekdoty.ru/');
//$pq = phpQuery::newDocument($page);
//$elems = $pq->find('.col a');
//foreach ($elems as $item) {
//    $elem = pq($item);
//    $urls[] = $elem->Attr('href');
//}
//$count = count($urls);
//$link = mt_rand(1, $count);*//*
//foreach ($urls as $ass){ //time limit
//    $pageSecond = getPageByUrl('https://anekdoty.ru/' . $ass);
//    $pqSecond = phpQuery::newDocument($pageSecond);
//    $joke = $pqSecond->find('.item-list p');
//    foreach ($joke as $item) {
//        $pq = pq($item);
//        $jokes = strip_tags($pq->text());
//        $db = DB::getConnect();
//        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        $sql = "INSERT INTO `jokes` (`name`) VALUES ('$jokes')";
//        $statement = $db->prepare($sql);
//        $statement->execute();
//    }
//}

//-------------------------------------------------------------------------------------------

//Спарсите все статьи с сайта plotva.by. Обратите внимание на интересную пагинацию.
//Решите задачу вначале поэтапным парсингом, а потом методом паука.
//$page = getPageByUrl('https://plotva.by/');
//$pq = phpQuery::newDocument($page);
//$elems = $pq->find('#categmenu0 a');
//foreach ($elems as $item) {
//    $elem = pq($item);
//    $urls[] = $elem->Attr('href');
//}
//foreach ($urls as $ass) { //time limit
//    $pageSecond = getPageByUrl($ass);
//    $pqSecond = phpQuery::newDocument($pageSecond);
//    $joke = $pqSecond->find('.name');
//    foreach ($joke as $item) {
//        $pq = pq($item);
//        $jokes[] = $pq->text();
//        /*foreach ($jokes as $a){
//            $db = DB::getConnect();
//            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            $sql = "INSERT INTO `plotva` (`url`,`text`) VALUES ('$ass','$a')";
//            $statement = $db->prepare($sql);
//            $statement->execute();
//        }*/
//    }
//}
//var_dump($urls);
//var_dump($jokes);

//-------------------------------------------------------------------------------------------

//Спарсите все статьи с сайта ribalovu.ru.
//Сохраните в базу данных контент страницы, тайтл, ссылку на главную картинку с этой страницы.
//Решите задачу вначале поэтапным парсингом, а потом методом паука.
//$page = getPageByUrl('http://www.ribalovu.ru/');
//$pq = phpQuery::newDocument($page);
//$elems = $pq->find('#menu-left-menu a');
//$url = [];
//foreach ($elems as $elem) {
//    $pq = pq($elem);
//    $url[] = $pq->attr('href');
//}
//$logo = $pq->find('#logo');
//$log = pq($logo)->Attr('href');
//
//$arr2 = [];
//$text2 = [];
//foreach ($url as $cont) {
//    $page = getPageByUrl($cont);
//    $pq = phpQuery::newDocument($page);
//    $content = $pq->find('.articleBox');
//    foreach ($content as $cont2) {
//        $pq2 = pq($cont2);
//        $arr2[] = $pq2->find('p')->text();
//        $text2[] = $pq2->find('h2 a')->text();
//        $img2[] = $pq2->find('.contImg')->html();
//    }
//}
//$img = pq($img)->attr('href');
//$db = DB::getConnect();
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$sql = "INSERT INTO `ribalovu` (`title`,`content`, `img`) VALUES ('$title','$content','$img')";
//$statement = $db->prepare($sql);
//$statement->execute();
//var_dump($url);
//var_dump($arr2);
//var_dump($text2);
//var_dump($img2);