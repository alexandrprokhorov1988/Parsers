<?php
include_once 'db_connect.php';
require_once 'phpQuery/phpQuery-onefile.php';
include_once 'functions.php';

ini_set('max_execution_time', '10000');
set_time_limit(0);
ini_set('memory_limit', '2048M');

echo "<pre>";

//Спарсите все товары с этого сайта metal100.ru.
//Реализуйте многопоточный парсинг.
//$header = ['Content-Type:text/html', 'X-Requested-With:XMLHttpRequest'];
//$page = getPageByUrl('http://metal100.ru/', null, null, null, $header);
//$pq = phpQuery::newDocument($page);
//$url = [];
//foreach ($pq->find('.categories a') as $elem) {
//    $pages = pq($elem)->attr('href');
//    $assort[] = pq($elem)->text();
//    $url[] = 'http://metal100.ru/' . $pages;
//}
////var_dump($assort);
//
////multi
//
//$page3 = getPageByMultipleUrl($url, null, null, null, $header);
//foreach ($page3 as $elem) {
//    $pq = phpQuery::newDocument($elem);
//    $elems = $pq->find('.aBlock');
//    foreach ($elems as $elem2) {
//        $pq2 = pq($elem2);
//        $product[] = trim($pq2->text());
//    }
//}
//var_dump($product);