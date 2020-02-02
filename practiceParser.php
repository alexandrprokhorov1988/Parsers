<?php
include_once 'db_connect.php';
require_once 'phpQuery/phpQuery-onefile.php';
include_once 'functions.php';
ini_set('max_execution_time', '10000');
set_time_limit(0);
ini_set('memory_limit', '2048M');

echo "<pre>";

//Спарсите погоду на текущую неделю с этого сайта pogoda.by за Минск.
//Сделайте так, чтобы в парсере можно было задать один из этих городов Беларуси: Витебск, Могилев, Гродно, Гомель, Брест и парсер должен взять погоду для этого города.
//$header = ['Content-Type:text/html; charset=utf-8'];
//$link = 'http://www.pogoda.by/';
//$page = getPageByUrl($link, null, '/cookie.txt', null, $header);
//$pq = phpQuery::newDocument($page);
//$elems = $pq->find('.menu td .sr');
//$cityName = [];
//foreach ($elems as $elem) {
//    $cityName = pq($elem)->find('a')->text();
//    $cityNumber[$cityName] = trim(pq($elem)->find('a')->attr('href'), '/');
//}
//var_dump($cityNumber); //$out.='"'.$cityName.'"'.'=>'.'"'.$cityNumber.'",'."<br>";
//
//$header = ['X-Requested-With:XMLHttpRequest', 'Content-Type:text/html'];
//$cityNumber = [                 //массив полученный парсингом
//    "Барановичи" => "26941",
//    "Березино" => "26853",
//    "Березинский зап." => "26959",
//    "Бобруйск" => "26961",
//    "Борисов" => "26759",
//    "Брагин" => "33124",
//    "Брест" => "33008",
//    "Василевичи" => "33038",
//    "Верхнедвинск" => "26554",
//    "Вилейка" => "26745",
//    "Витебск" => "26666",
//    "Волковыск" => "26923",
//    "Воложин" => "26748",
//    "Высокое" => "33001",
//    "Ганцевичи" => "26947",
//    "Гомель" => "33041",
//    "Горки" => "26774",
//    "Гродно" => "26825",
//    "Гродно2" => "26820",
//    "Докшицы" => "26657",
//    "Дрогичин" => "33011",
//    "Езерище" => "26566",
//    "Житковичи" => "33027",
//    "Жлобин" => "26966",
//    "Жодино" => "26034",
//    "Ивацевичи" => "26938",
//    "Калинковичи" => "26020",
//    "Кличев" => "26864",
//    "Костюковичи" => "26887",
//    "Лельчицы" => "33105",
//    "Лепель" => "26659",
//    "Лида" => "26832",
//    "Лынтупы" => "26645",
//    "Любань" => "26955",
//    "М.Горка" => "26855",
//    "Минск" => "26850",
//    "Могилёв" => "26862",
//    "Мозырь" => "33036",
//    "Молодечно" => "26001",
//    "Мстиславль" => "26779",
//    "Нарочь" => "26649",
//    "Новогрудок" => "26836",
//    "Октябрь" => "26950",
//    "Орша" => "26763",
//    "Ошмяны" => "26736",
//    "Пинск" => "33019",
//    "Полесская" => "33015",
//    "Полоцк" => "26653",
//    "Пружаны" => "26929",
//    "Светлогорск" => "26004",
//    "Сенно" => "26668",
//    "Славгород" => "26878",
//    "Слуцк" => "26951"
//];
//$city = 'Березино';
//if (isset($cityNumber[$city])) {
//    $link2 = 'http://6.pogoda.by/' . $cityNumber[$city];        //$link2 = 'http://6.pogoda.by/26853';
//    $page2 = getPageByUrl($link2, null, '/cookie.txt', null, $header);
//    //$page2 = iconv('Windows-1251', 'UTF-8', $page2);
//    $pq = phpQuery::newDocument($page2);
//    $elems2 = $pq->find('#forecast tr');
//    foreach ($elems2 as $elem2) {
//        $day = pq($elem2)->find('td:first-child')->text();    //день
//        $temp = pq($elem2)->find('td:nth-child(2)')->text();     //-3..-5
//        $weather = pq($elem2)->find('td:nth-child(4n)')->text(); //Облачно с прояснениями.Без осадко
//        $speed = pq($elem2)->find('td:nth-child(5n)')->text();   //6–8, С-З,порыв 12
//        $atm= pq($elem2)->find('td:nth-child(6n)')->text();      //1011[758]
//        $wet = pq($elem2)->find('td:nth-child(7n)')->text();     //85
//        echo "день $day температура $temp скорость ветра $speed давление $atm влажность $wet <br>";
//    }
//}
//
//var_dump($day);

//-------------------------------------------------------------------------------------------

//Автоматически определите страну по IP с помощью сервиса ru.smart-ip.net/geoip.
//$userIp = '94.100.31.188';  //$userIp = $_SERVER['REMOTE_ADDR'];
//$page = getPageByUrl('http://ru.smart-ip.net/geoip/' . $userIp . '/auto');
//$pq = phpQuery::newDocument($page);
//$elems = $pq->find('.smart-grid-row');
//foreach ($elems as $elem) {
//    $country = trim(pq($elem)->find('td')->text());
//}
//
//var_dump($country);

//-------------------------------------------------------------------------------------------

//Автоматически определите ТИЦ и PR сайта с помощью сервиса www.cy-pr.com.
//$header = ['Content-Type:text/html', 'X-Requested-With:XMLHttpRequest'];
//$site = 'https://www.php.net/manual/ru/function.mb-convert-encoding.php';
//$domen = parse_url($site)['host'];
//$page = getPageByUrl('https://www.cy-pr.com/a/' . $domen, null, 'D:\Downloads\OSPanel\domains\localhost\ParseCodeMu\cookie.txt', null, $header);
//$string = mb_convert_encoding($page, 'HTML-ENTITIES','UTF-8');
//$pq = phpQuery::newDocument($string);
//$elems = $pq->find('div.htips');
//foreach ($elems as $elem) {
//    $index[] = pq($elem)->text();
//}
//
//preg_match("#[0-9]+#", $index[1], $matches);
//echo "Индекс тИЦ $matches[0]";