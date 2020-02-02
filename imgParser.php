<?php
include_once 'db_connect.php';
require_once 'phpQuery/phpQuery-onefile.php';
include_once 'functions.php';

ini_set('max_execution_time', '10000');
set_time_limit(0);
ini_set('memory_limit', '2048M');

echo "<pre>";
//Спарсите название, описание и фотки всех рыб со страницы rybalku.ru.
//Название и описание сохраните в базу данных, а фотки - в папку.
//$page = getPageByUrl('https://rybalku.ru/');
//$pq = phpQuery::newDocument($page);
//$elems = $pq->find('tr');
//$db = DB::getConnect();
//foreach ($elems as $elem) {
//    $pq = pq($elem);
//    $text = $pq->find('td:nth-child(3n)')->text();
//    $name = $pq->find('td:nth-child(2n)')->text();
//    $img = $pq->find('td:nth-child(1n) img')->Attr('src');
//    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $sql = "INSERT INTO `rybalku` (`name`,`text`) VALUES ('$name','$text')";
//    $statement = $db->prepare($sql);
//    // $statement->execute();
//    $extension = substr(strrchr($img, '.'), 1);
//    $img = file_get_contents($img);
//    file_put_contents('images/' . $name . '.' . $extension, $img);
//}
//$db = null;
/*var_dump($name);
var_dump($text);
var_dump($img);*/

//-------------------------------------------------------------------------------------------

//Спарсите название и флаги стран со страницы 33tura.ru/flagi.
//Название сохраните в базу данных, а флаги - в папку.
//$page = getPageByUrl('https://33tura.ru/flagi');
//$pq = phpQuery::newDocument($page);
//$elems = $pq->find('table td table td');
//$db = DB::getConnect();
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$countryName = [];
//foreach ($elems as $elem) {
//    $pq = pq($elem);
//    $countryName[] = $pq->text();
//    $imgHrefs[] = $pq->find('a')->attr('href');
//}
//for ($i = 0; $i < 3; $i++) {
//    $pageFlag = getPageByUrl('https://33tura.ru' . $imgHrefs[$i]);
//    $pqFlag = phpQuery::newDocument($pageFlag);
//    $flagsImg[] = $pqFlag->find('img')->attr('src');
//    $extension = substr(strrchr($flagsImg[$i], '.'), 1);
//    $url = 'https://33tura.ru' . $flagsImg[$i];
//    $fileName = 'images/flags/' . $countryName[$i] . '.' . $extension;
//    if (file_exists($fileName)) {
//        echo "Файл существует " . $fileName . "<br>";
//    } else {
//        file_put_contents($fileName, file_get_contents($url));
//    }
//    $sqlCheck = "SELECT * FROM `flags` WHERE `countryName`='$countryName[$i]'";
//    $statement = $db->prepare($sqlCheck);
//    $statement->execute();
//    $isBusyCountryName = $statement->fetchAll(PDO::FETCH_ASSOC);
//    if (!$isBusyCountryName) {
//        $sql = "INSERT INTO `flags` (`countryName`,`url`) VALUES ('$countryName[$i]','$fileName')";
//        $statement = $db->prepare($sql);
//        $statement->execute();
//    }
//}
//$db = null;
////var_dump($countryName);
////var_dump($imgHrefs);
//var_dump($flagsImg);

//-------------------------------------------------------------------------------------------


//Зайдите на следующую страницу pizzaru.ru/cherepovets и спарсите названия и фотки всех пицц с этой страницы.
//Сохраните названия пицц в базу данных, а фотки - в папку.
//$page = getPageByUrl('http://pizzaru.ru/cherepovets');
//$pq = phpQuery::newDocument($page);
//$elems = $pq->find('.product-box');
//$db = DB::getConnect();
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//foreach ($elems as $elem) {
//    $pq = pq($elem);
//    $a = $pq->find('div.text-consist')->remove();
//    $namePizza = trim($pq->find('.product-title')->remove('div.text-consist')->text());
//    $img = $pq->find('img')->attr('data-url');
//    $extension = substr(strrchr($img, '.'), 1);
//    $fileName = 'images/pizza/' . $namePizza . '.' . $extension;
//    if (file_exists($fileName)) {
//        echo "Файл существует " . $fileName . "<br>";
//    } else {
//        file_put_contents($fileName, file_get_contents($img));
//    }
//    $sqlCheck = "SELECT * FROM `pizza` WHERE `name`='$namePizza'";
//    $statement = $db->prepare($sqlCheck);
//    $statement->execute();
//    $isBusyCountryName = $statement->fetchAll(PDO::FETCH_ASSOC);
//    if (!$isBusyCountryName) {
//        $sql = "INSERT INTO `pizza` (`name`,`url`) VALUES ('$namePizza','$fileName')";
//        $statement = $db->prepare($sql);
//        $statement->execute();
//    }
//}
//$db = null;

//-------------------------------------------------------------------------------------------

//Получите массив всех названий пицц этого сайта pizzatempo.by/menu/pizza.html. Учтите, что там снизу пагинация, на странице не все пиццы, а первые N штук. Количество ссылок пагинации может меняться, ваш парсер не должен пасовать перед этим.
//Сохраните полученный пиццы в базу данных.
//$page = getPageByUrl('https://www.pizzatempo.by/menu/pizza.html');
//$pq = phpQuery::newDocument($page);
//$elems = $pq->find('.item');
//$db = DB::getConnect();
//foreach ($elems as $elem) {
//    $pq = pq($elem);
//    $name = $pq->find('h3 span')->text();
//    $img = $pq->find('img')->attr('src');
//    $extension = substr(strrchr($img, '.'), 1, 3);
//    $fileName = 'images/pizzatempo/' . str_replace('"', '', $name) . '.' . $extension;
//    if (file_exists($fileName)) {
//        echo "Файл существует " . $fileName . "<br>";
//    } else {
//        file_put_contents($fileName, file_get_contents($img));
//    }
//    $sqlCheck = "SELECT * FROM `pizzatempo` WHERE `name`='$name'";
//    $statement = $db->prepare($sqlCheck);
//    $statement->execute();
//    $isBusyCountryName = $statement->fetchAll(PDO::FETCH_ASSOC);
//    if (!$isBusyCountryName) {
//        $sql = "INSERT INTO `pizzatempo` (`name`,`url`) VALUES ('$name','$fileName')";
//        $statement = $db->prepare($sql);
//        $statement->execute();
//    }
//}
//$db = null;

//-------------------------------------------------------------------------------------------

//Спарсите статьи с этого сайта zadolba.li.
//Сохраните в базу название статьи, текст статьи, категорию статьи, дату выхода статьи (именно дату, для новых статей там написано, к примеру, 'сегодня в 12.00' - вы должны преобразовать это в дату).
//$page = getPageByUrl('https://zadolba.li/20200120');
//$pq = phpQuery::newDocument($page);
//$elems = $pq->find('.story');
//$db = DB::getConnect();
//foreach ($elems as $elem) {
//    $pq = pq($elem);
//    $name = $pq->find('h2 a')->text();
//    $text = $pq->find('.text')->text();
//    $category = $pq->find('li a')->text();
//    $date = $pq->find('.date-time')->text();
//    $dates = preg_replace("#(Сегодня, \d{2}:\d{2})#su", date('d:m:Y'), $date);
//    $sql = "INSERT INTO `ubogiysite` (`name`,`text`,`category`,`date`) VALUES ('$name','$text','$category','$dates')";
//    $statement = $db->prepare($sql);
//    $statement->execute();
//}
//$db = null;

//-------------------------------------------------------------------------------------------

//Сделайте парсер, который будет заходить на форум html.by раз в час и проверять наличие новых тем в этом форуме. Если новые темы есть - пошлите сообщение на заданный email со списком новых тем.
//$page = getPageByUrl('http://www.html.by/');
//$pq = phpQuery::newDocument($page);
//$elems = $pq->find('.titleline h2 a');
//$db = DB::getConnect();
//foreach ($elems as $elem) {
//    $pq = pq($elem);
//    $title[] = array_shift(explode('?', $pq->Attr('href')));
//}
//foreach ($title as $topic) {
//    $page = getPageByUrl('http://www.html.by/' . $topic);
//    $pq = phpQuery::newDocument($page);
//    $topics = $pq->find('.title');
//    foreach ($topics as $a) {
//        $arr = pq($a)->text();
//        $arr = str_replace('\'', '', $arr);
//        $sqlCheck = "SELECT * FROM `htmlby` WHERE `name`='$arr'";
//        $statement = $db->prepare($sqlCheck);
//        $statement->execute();
//        $isBusyCountryName = $statement->fetchAll(PDO::FETCH_ASSOC);
//        if (!$isBusyCountryName) {
//            $sql = "INSERT INTO `htmlby` (`name`) VALUES ('$arr')";
//            $statement = $db->prepare($sql);
//            $statement->execute();
//            echo $arr . "<br>";
////            $message .= "Новая тема: ".$arr."<br>";
////            $headers ="Content-type:text/html;charset = utf-8 \r\n";
////            $headers .= "xxxx@gmail.com \r\n";
////            mail("xxxx@gmail.com ","Новые темы HTML.BY",$message);
//        }
//    }
//}
//$db = null;

//-------------------------------------------------------------------------------------------

//Спарсите все организации с этого сайта smolensk.jsprav.ru.
//Сохраните в базу название организации, категорию, адрес, телефон, время работы.
//$page = getPageByUrl('https://smolensk.jsprav.ru/');
//$pq = phpQuery::newDocument($page);
//$elems = $pq->find('div h3 a');
//$db = DB::getConnect();
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$hrefs = [];
//foreach ($elems as $elem) {
//    $pq = pq($elem);
//    // ссылки на главные категориии по типу "/avto-moto/"
//    $hrefs[] = $pq->attr('href');
//}
//var_dump($hrefs);
//$subCategoryHrefs = [];
//foreach ($hrefs as $href) {
//    $page = getPageByUrl('https://smolensk.jsprav.ru' . $href);
//    $pq = phpQuery::newDocument($page);
//    // ссылки на подкатегории по типу "/avtoatele/"
//    $subCategoryHref2 = $pq->find('.cat-item a');
//    foreach ($subCategoryHref2 as $sub) {
//        $pq = pq($sub);
//        $subCategoryHrefs[] = $pq->attr('href');
//    }
//}
//foreach ($subCategoryHrefs as $subCategoryHref) {
//    $page = getPageByUrl('https://smolensk.jsprav.ru' . $subCategoryHref);
//    $pq = phpQuery::newDocument($page);
//    $companies = $pq->find('.org');
//    $companies = [];
//    foreach ($companies as $company) {
//        $pq = pq($company);
//        $name = trim($pq->find('.name h3')->text());
//        $category = trim($pq->find('.subcategories span')->text());
//        $address = trim($pq->find('span.address')->text());
//        $phone = trim($pq->find('.phone')->text());
//        $time = trim($pq->find('.time')->text());
//        /* $sqlCheck = "SELECT * FROM `jsprav` WHERE `name`='$name'";
//         $statement = $db->prepare($sqlCheck);
//         $statement->execute();
//         $isBusyCountryName = $statement->fetchAll(PDO::FETCH_ASSOC);
//         if (!$isBusyCountryName) {
//             $sql = "INSERT INTO `jsprav` (`name`,`category`,`address`,`phone`,`time`) VALUES ('$name','$category', '$address', '$phone', '$time')";
//             $statement = $db->prepare($sql);
//             $statement->execute();
//         }*/
//    }
//}
//var_dump($subCategoryHrefs);

//-------------------------------------------------------------------------------------------

//Спарсите все отели с сайта tury.ru/hotel.
//Сохраните название отеля, описание отеля, картинку отеля, категории и подкатегорию отеля в базу данных.
//$header = ['X-Requested-With:XMLHttpRequest'];
//$page = getPageByUrl('https://www.tury.ru/hotel/', null, null, null, null);
//$pq = phpQuery::newDocument($page);
//$elems = $pq->find('.best_hotels ul li');
//$db = DB::getConnect();
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$hotelsHrefs = [];
//foreach ($elems as $elem) {
//    $pq = pq($elem);
//    $categoryName = $pq->text();
//    $hotelsHrefs[$categoryName] = substr(strchr($pq->find('.img')->attr('style'), 'hcat/'), 5, 4);
//}
//foreach ($hotelsHrefs as $mainCategoryName => $href) {
//    $page2 = getPageByUrl('https://api.rsrv.me/hc.php?a=hc&most_id=' . $href . '&l=ru&sort=most&hotel_link=/hotel/id/%HOTEL_ID%&r=1131344154',
//        null, '/cookie.txt', null, null);
//    $pq2 = phpQuery::newDocument($page2);
//    $hotelsCards = $pq2->find('.hotel_card_dv');
//    foreach ($hotelsCards as $hotelHref) {
//        $pq = pq($hotelHref);
//        $hotelsDescription = $pq->find('.hotel_descr')->text();
//        $hotelName = $pq->find('.hotel_name')->text();
//        $hotelImg = $pq->find('.hotel_photo_dv img')->attr('src');
//
//        $extension = substr(strrchr($hotelImg, '.'), 1);
//        $hotelNameWithoutStar = preg_replace("#\*#", "", $hotelName);
//        $fileName = 'images/tury/' . $hotelNameWithoutStar . '.' . $extension;
//        $img = file_get_contents($hotelImg);
//        if (file_exists($fileName)) {
//            echo "Файл существует " . $fileName . "<br>";
//        } else {
//            file_put_contents($fileName, $img);
//        }
//
//        $sqlCheck = "SELECT * FROM `tury` WHERE `name`='$hotelName'";
//            $statement = $db->prepare($sqlCheck);
//            $statement->execute();
//            $isBusyCountryName = $statement->fetchAll(PDO::FETCH_ASSOC);
//            if (!$isBusyCountryName) {
//                $sql = "INSERT INTO `tury` (`name`,`category`,`description`,`image`) VALUES ('$hotelName','$mainCategoryName','dsad', '$fileName')";
//                $statement = $db->prepare($sql);
//                $statement->execute();
//        }
//    }
//}
//$db = null;
//var_dump($hotelsHrefs);                //string(20) "/hotel/most_luxe.php"
//var_dump($categoryName);               //string(16) "Люксовые"
//var_dump($hotelsDescription);          //string(304) "Отель Atrium Platinum Resort & Spa (Атриум Платинум...
//var_dump($hotelName);                  //string(44) "Atrium Platinum Luxury Resort Hotel & Spa 5*"
//var_dump($hotelImg);                   //https://m01.rsrv.me/hotel_pics/96/62296/157479_700.jpg

