<?php
include_once 'db_connect.php';
require_once 'phpQuery/phpQuery-onefile.php';
include_once 'functions.php';

ini_set('max_execution_time', '10000');
set_time_limit(0);
ini_set('memory_limit', '2048M');

echo "<pre>";
//Дан массив запросов к поисковику, порядка 1000 штук. Получите первую десятку сайтов, которые показываются по каждому запросу в яндексе.
//Сохраните эти сайты в базу данных.
//
//$arrQuery = [
//    'июнь',
//    'июль',
//    'август',
//    'январь'
//];
//foreach ($arrQuery as $query) {
//    $decodedQuery = urlencode($query);
//    sleep(rand(3, 15));
//    $page = getPageByUrl('https://www.google.com/search?q=' . $decodedQuery . '&oq=' . $decodedQuery . '&aqs=chrome..69i57j0l7.2684j0j8&sourceid=chrome&ie=UTF-8');
//    $pq = phpQuery::newDocument($page);
//    $elems = $pq->find('.r');
//    foreach ($elems as $elem) {
//        $hrefs[] = pq($elem)->find('a')->attr('href');
//    }
//}
//var_dump($hrefs);

//-------------------------------------------------------------------------------------------

//Спарсите первую 1000 объявлений с сайта avito.ru.
//Сохраните эти объявления в базу данных.
//$header = ['Content-Type:text/html', 'X-Requested-With:XMLHttpRequest'];
//$limit = 30;
//$offset = 30;
//$locationId = 621540;
//$lastStamp = 1580204197;
//$db = DB::getConnect();
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//function addToDb($db, $name, $url)
//{
//    $sqlCheck = "SELECT * FROM `avito` WHERE `name`='$name'";
//    $statement = $db->prepare($sqlCheck);
//    $statement->execute();
//    $isBusyCountryName = $statement->fetchAll(PDO::FETCH_ASSOC);
//    if (!$isBusyCountryName) {
//        $sql = "INSERT INTO `avito` (`name`,`url`) VALUES ('$name','$url')";
//        $statement = $db->prepare($sql);
//        $statement->execute();
//    }
//}
//
//$page = getPageByUrl('https://www.avito.ru/rossiya', null, 'D:\Downloads\OSPanel\domains\localhost\ParseCodeMu\cookie.txt', null, $header);
//$pq = phpQuery::newDocument($page);
//$elems = $pq->find('.styles-root-WJh3P');
//foreach ($elems as $elem) {
//    $name = pq($elem)->find('.styles-root-2nfT7')->text();
//    $url = 'https://www.avito.ru' . pq($elem)->find('.styles-root-2nfT7 a')->attr('href');
//    addToDb($db, $name, $url);
//}
//
//for ($i = 0; $i < 3; ++$i) {
//    $page3 = getPageByUrl('https://www.avito.ru/web/1/main/items?locationId=' . $locationId . '&lastStamp=' . $lastStamp . '&limit=' . $limit . '&offset=' . $offset, null, 'D:\Downloads\OSPanel\domains\localhost\ParseCodeMu\cookie.txt', null, $header);
//    $page3 = json_decode($page3, true);
//    sleep(rand(2, 4));
//    $count = count($page3['items']);
//    for ($j = 0; $j < $count; ++$j) {
//        $name = $page3['items'][$j]['title'];
//        $url = 'https://www.avito.ru' . $page3['items'][$j]['urlPath'];
//        addToDb($db, $name, $url);
//    }
//    $offset += 30;
//}
//$db = null;
//var_dump($hrefs);
//var_dump($page3['items'][28]['title']);
//var_dump($page3['items'][28]['urlPath']);
//var_dump(count($page3['items']));