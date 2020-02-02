<?php
include_once 'db_connect.php';
require_once 'phpQuery/phpQuery-onefile.php';
include_once 'functions.php';
ini_set('max_execution_time', '10000');
set_time_limit(0);
ini_set('memory_limit', '2048M');
echo "<pre>";

//Дана страница, отдающая XML: страница с XML.
//Выведите на экран имя и возраст пользователя.
//$xml = simplexml_load_file('http://old.code.mu/exercises/advanced/php/parsing/rabota-s-xml-v-php/1/1.xml');
//echo $xml->user->name;
//echo $xml->user->age;

//-------------------------------------------------------------------------------------------

//Дана страница, отдающая XML: страница с XML.
//Выведите на экран имя, возраст и зарплату пользователя.
//$xml = simplexml_load_file('http://old.code.mu/exercises/advanced/php/parsing/rabota-s-xml-v-php/2/1.xml');
//echo $xml->user;
//echo $xml->user['age'];
//echo $xml->user['salary'];

//-------------------------------------------------------------------------------------------

//Дана страница, отдающая XML: страница с XML.
//Выведите на экран имена и возраста пользователей.
//$xml = simplexml_load_file('http://old.code.mu/exercises/advanced/php/parsing/rabota-s-xml-v-php/3/1.xml');
//foreach($xml as $user){
//    echo $user->{user-name};
//    echo $user->age;
//}

//-------------------------------------------------------------------------------------------

//Дана страница, отдающая XML: страница с XML.
//Выведите на экран столбец пользователей, а рядом с ними - города, в которых они были.
//$xml = simplexml_load_file('http://old.code.mu/exercises/advanced/php/parsing/rabota-s-xml-v-php/4/1.xml');
//foreach ($xml as $user) {
//    echo "<br>" . $user->name;
//    foreach ($user->cities->city as $city) {
//        echo $city;
//    }
//}

//-------------------------------------------------------------------------------------------

//Дан сайт eax.me.
//Спарсите контенты его статей, используя sitemap.xml.
//$xml = simplexml_load_file('https://eax.me/sitemap.xml');
//$header = ['Content-Type: text/html; charset=utf-8'];
//$a = (json_decode(json_encode($xml), true));
//foreach ($a['url'] as $url) {
//    $urls[] = $url['loc'];
//}
//$page = getPageByMultipleUrl($urls, null, null, null, $header);
//
//foreach ($page as $a) {
//    $string = mb_convert_encoding($a,'HTML-ENTITIES','UTF-8');;
//    $pq = phpQuery::newDocument($string);
//    foreach ($pq->find('#content') as $elem) {
//        $text[] = pq($elem)->text();
//    }
//}
//
//var_dump($text);

//-------------------------------------------------------------------------------------------

//Дан сайт ru-mi.com.
//Спарсите все товары из раздела "смартфоны", используя sitemap.xml.
//$xml = simplexml_load_file('https://ru-mi.com/index.php?route=feed/google_sitemap');
//$header = ['Content-Type: text/html; charset=utf-8'];
//$siteLinksArray = (json_decode(json_encode($xml), true));
//$findme = 'smartfon-xiaomi';
//foreach ($siteLinksArray['url'] as $url) {
//    if (strpos($url['loc'], $findme)) {
//        $urls[] = $url['loc'];
//    }
//}
//array_splice($urls, 0, 1);
//$page = getPageByMultipleUrl($urls, null, null, null, $header);
//
//foreach ($page as $a) {
//    $string = mb_convert_encoding($a, 'HTML-ENTITIES', 'UTF-8');
//    $pq = phpQuery::newDocument($string);
//    $elems = $pq->find('.product-info');
//    foreach ($elems as $elem) {
//        $pq = pq($elem);
//        $nameOld = $pq->find('.right h1')->text();
//        $name = preg_replace('#[^a-zа-яё\d()]+#iu', '', $nameOld);
//        $price = trim($pq->find('.price')->text());
//        $memory = $pq->find('.left_info_product_series_color_pamat')->text();
//        $img = $pq->find('.image_product a')->attr('href');
//        $extension = substr(strrchr($img, '.'), 1);
//        $fileName = 'images/simplexml/' . $name . '.' . $extension;
//        if (file_exists($fileName)) {
//            echo "Файл существует " . $fileName . "<br>";
//        } else {
//            file_put_contents($fileName, file_get_contents($img));
//            echo "Название ". $name." цена ". $price." память ". $memory." картинка ". $fileName." <br>";
//        }
//    }
//}
//var_dump($urls);
//var_dump($nameOld);
//var_dump($name);
//var_dump($price);
//var_dump($memory);
//var_dump($img);

