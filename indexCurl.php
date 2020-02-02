<?php
include_once 'db_connect.php';
require_once 'phpQuery/phpQuery-onefile.php';
include_once 'functions.php';

ini_set('max_execution_time', '10000');
set_time_limit(0);
ini_set('memory_limit', '2048M');

//Даны страницы: 1.php, 2.php, 3.php, 4.php, 5.php.
//Вручную сделайте массив ссылок на эти страницы. Переберите циклом этот массив и с помощью CURL зайдите на каждую страницу. Спарсите title, h1, контент каждой страницы и сохраните их в базу данных.
//При сохранении очистите контент от лишних тегов.
$arr = [
    'http://old.code.mu/exercises/advanced/php/parsing/rabota-s-bibliotekoj-curl-v-php/1/1.php',
    'http://old.code.mu/exercises/advanced/php/parsing/rabota-s-bibliotekoj-curl-v-php/1/2.php',
    'http://old.code.mu/exercises/advanced/php/parsing/rabota-s-bibliotekoj-curl-v-php/1/3.php',
    'http://old.code.mu/exercises/advanced/php/parsing/rabota-s-bibliotekoj-curl-v-php/1/4.php',
    'http://old.code.mu/exercises/advanced/php/parsing/rabota-s-bibliotekoj-curl-v-php/1/5.php'
];
function add($arr)
{
    $db = DB::getConnect();
    foreach ($arr as $value) {
        $page = getPageByUrl($value);
        preg_match_all('#<title>(.+?)</title>#su', $page, $title);
        preg_match_all('#<h1>(.+?)</h1>#su', $page, $headers);
        preg_match_all('#<p[^>]*?>(.*?)</p>#su', $page, $content);
        $headers = $headers[1][0];
        $title = $title[1][0];
        $content = strip_tags(implode(PHP_EOL, $content[1]));
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO `curl` (`title`, `headers`, `content`, `date`) VALUES ('$title', '$headers', '$content', NOW())";
        $statement = $db->prepare($sql);
        $statement->execute();
    }
}

//add($arr);

echo "<pre>";
/*
$str = '<a href="1.html">1</a><a href="2.html">2</a><a href="3.html">3</a>';
$pq = phpQuery::newDocument($str);

$links = $pq->find('a');
foreach ($links as $link) {
    $pqLink = pq($link); //pq делает объект phpQuery
    $text[] = $pqLink->html();
    $href[] = $pqLink->attr('href');
}

var_dump($text);
var_dump($href);*/


//Используя CURL получите HTML код страницы по ссылке выше и для этой страницы с помощью phpQuery решите следующие задачи:
//Получите содержимое content, footer, sidebar.
$arr2 = 'http://old.code.mu/exercises/advanced/php/parsing/rabota-s-bibliotekoj-phpquery-v-php/1/1.php';
$str = getPageByUrl($arr2);
$pq = phpQuery::newDocument($str);
$content = $pq->find('#content')->html();
$sidebar = $pq->find('.sidebar')->html();
$footer = $pq->find('#footer')->html();
//var_dump($content);
//var_dump($sidebar);
//var_dump($footer);


//Получите все абзацы
$allP = $pq->find('p');
foreach ($allP as $p) {
    $pw = pq($p);
    $p1[] = $pw->html();
}
//var_dump($p1);


//Получите все ссылки.
$allHref = $pq->find('a');
foreach ($allHref as $href) {
    $hrefss = pq($href);
    $hrefs[] = $hrefss->html();
    $text[] = $hrefss->attr('href');

}
/*var_dump($hrefs);
var_dump($text);*/


//Получите все абзацы с классом www.
$pwww = $pq->find('p.www');
foreach ($pwww as $p) {
    $ps[] = pq($p)->html();
}
//var_dump($ps);
//Получите все ссылки из #content.
$allHrefsFromContent = $pq->find('#content a');
foreach ($allHrefsFromContent as $a) {
    $b = pq($a);
    $c[] = $b->attr('href');
}
//var_dump($c);


//Получите содержимое всех абзацев из #content.
$allpFromContent = $pq->find('#content p');
foreach ($allpFromContent as $a) {
    $allpFromContentB[] = pq($a)->html();
}
//var_dump($allpFromContentB);


//Получите все ссылки с классом www.
$allLinksWithwww = $pq->find('a.www');
foreach ($allLinksWithwww as $a) {
    $allLinksWithwwwB[] = pq($a)->html();
    $allLinksWithwwwc[] = pq($a)->attr('href');
}
//var_dump($allLinksWithwwwc);


//Получите все ссылки с классом www из #content.
$allLinksWithwwwFromContent = $pq->find('#content a.www');
foreach ($allLinksWithwwwFromContent as $a) {
    $allLinksWithwwwFromContentB[] = pq($a)->html();
    $allLinksWithwwwFromContentc[] = pq($a)->attr('href');
}
//var_dump($allLinksWithwwwFromContentc);


//Получите все ссылки из пагинации .pag.
$allLinksFromPag = $pq->find('.pag a');
foreach ($allLinksFromPag as $a) {
    $allLinksFromPagB[] = pq($a)->html();
    $allLinksFromPagC[] = pq($a)->attr('href');
}
//var_dump($allLinksFromPagC);


//Получите активную ссылку из пагинации .pag.
$allLinksFromPagActive = $pq->find('.pag .active a');
foreach ($allLinksFromPagActive as $a) {
    $allLinksFromPagActiveB[] = pq($a)->html();
    $allLinksFromPagActiveC[] = pq($a)->attr('href');
}
//var_dump($allLinksFromPagActiveC);


//Получите содержимое абзаца с классом "eee" из #footer.
$pFromFooter = $pq->find('#footer p.eee');
foreach ($pFromFooter as $a) {
    $pFromFooterB[] = pq($a)->html();
    $pFromFooterC[] = pq($a)->attr('href');
    $pFromFooterD[] = pq($a)->text();
}
//var_dump($pFromFooterD);



//Используя CURL получите HTML код страницы по ссылке выше и для этой страницы с помощью phpQuery решите следующие задачи:
$arr3 = 'http://old.code.mu/exercises/advanced/php/parsing/rabota-s-bibliotekoj-phpquery-v-php/2/1.php';
$str2 = getPageByUrl($arr3);
$pqs = phpQuery::newDocument($str2);

//Удалите все картинки.
/*$elem = $pq->find('img')->remove();
$text = $pq->html();*/
//var_dump($text);


//Удалите абзацы с классом "more" из полученного контента.
/*$pqs->find('p.more')->remove();
var_dump($pqs->html());*/


//Оберните все абзацы дивами.
/*$elem = $pqs->find('p')->wrap('<div>');
$text = $pqs->html();
var_dump($text);*/


//Во все абзацы вставьте тег <b> вовнутрь.
/*$elem = $pqs->find('p')->wrapInner('<b>');
$text = $pqs->html();
var_dump($text);*/


//Ссылки сделайте просто текстом.
/*$elem = $pqs->find('a');
foreach ($elem as $aa){
    $c = pq($aa);
    $c->replaceWith($c->html());
    $text[] = $c->html();
}
//$text = $pqs->html();
var_dump($text);*/


//Тег <h2 class="block"> из контента сделайте просто ссылками.
/*$elem = $pqs->find('#content h2');
$header = [];
foreach ($elem as $elems) {
    $headers = pq($elems);
    $headers->wrap('<a>')->replaceWith($headers->html());
    $links[] = $headers->html();
}
var_dump($links);*/


//Тег <h2 class="block"> из контента сделайте просто ссылками.
/*$elem = $pqs->find('#content h2 a')->parent();
foreach($elem as $elems) {
    $headers = pq($elems);
    $links[] = $headers->html();
}
var_dump($links);*/


//Тег <h2 class="block"> из контента сделайте просто текстом, а не ссылками.
/*$elem = $pqs->find('#content h2');
foreach($elem as $elems) {
    $headers = pq($elems);
    $headers->replaceWith($headers->text());
    $links[] = $headers->html();
}
var_dump($links);*/

//-------------------------------------------------------------------------------------------

//Зайдите на страницу dominos.by и получите названия и ссылки на все пиццы с этой страницы.
/*$arr4 = 'dominos.by';
$str3 = getPageByUrl($arr4);
$pqs = phpQuery::newDocument($str3);
$elem = $pqs->find('.product-card__title');
$elem2 = $pqs->find('.product-card__description');
foreach ($elem as $a){
    $b = pq($a);
    $realNames[] = $b->text();
}
foreach ($elem2 as $a){
    $b = pq($a);
    $description[] = $b->text();
}
$arrs = array_combine($realNames,$description);
var_dump($arrs);*/
//Зайдите на страницу wildwolfs.ru и получите названия и ссылки на всех рыб с этой страницы (внизу, синие).
/*$arr21 = 'http://wildwolfs.ru/vidi-rus';
$str21 = getPageByUrl($arr21);
$pq21 = phpQuery::newDocument($str21);
$links21 = $pq21->find('.table0 a');
foreach ($links21 as $link21) {
    $bs21 = pq($link21);
    $text21[] = $bs21->html();
    $href21[] = $bs21->attr('href');
}
var_dump(array_combine($text21, $href21));*/

//-------------------------------------------------------------------------------------------

//Зайдите на страницу hramy.ru, спарсите все города России вместе с их районом и регионом.
/*$arr22 = 'https://hramy.ru/regions/city_abc.htm';
$str22 = getPageByUrl($arr22);
$pq22 = phpQuery::newDocument($str22);
$links22 = $pq22->find('#table2 tr');
$i = 0;
foreach ($links22 as $link22) {
    $bs22 = pq($link22);
    $text22[$i]['cities'] = $bs22->find('td:first')->text();
    $text22[$i]['district'] = $bs22->find('td:eq(1)')->text();
    $text22[$i]['region'] = $bs22->find('td:eq(3)')->text();
    $i++;
}
var_dump($text22);*/

//-------------------------------------------------------------------------------------------

//Зайдите на страницу rbt.ru и получите названия всех категорий и всех подкатегорий для каждой категории.
//$page = getPageByUrl('https://www.rbt.ru/');
//$pq = phpQuery::newDocumentHTML($page);
//$rows = $pq->find('div[class=catalogue-main] > div.catalogue-info');
//$result= [];
//
//foreach ($rows as $row) {
//    $pqRows = pq($row);
//    $category = trim($pqRows->find('a[class=link link_size_21 link_underline_disabled catalogue-info__header]')->text());
//    $rows2 = $pqRows->find('div[class=catalogue-info__subcategories] > a');
//    foreach ($rows2 as $row2) {
//        $pqRows2 = pq($row2);
//        $result[$category][] = trim($pqRows2->find('span')->html());
//    }
//}
//var_dump($result);