<?php
include_once 'db_connect.php';
require_once 'phpQuery/phpQuery-onefile.php';
include_once 'functions.php';
ini_set('max_execution_time', '10000');
set_time_limit(0);
ini_set('memory_limit', '2048M');

echo "<pre>";
//Зайдите на следующую страницу: перейдите по ссылке.
//По заходу на эту страницу ее контент подгружается с помощью AJAX.
//Напишите парсер, который спарсит содержимое #content (подгружаемое аяксом, конечно же).
//$header = ['X-Requested-With:XMLHttpRequest'];
//$page = getPageByUrl('http://old.code.mu/exercises/advanced/php/parsing/parsing-javascript-i-ajax-na-php/1/ajax.php', null, null, null, null);
//var_dump($page);

//-------------------------------------------------------------------------------------------

//Зайдите на следующую страницу: перейдите по ссылке.
//Если на этой странице нажать на кнопку - подгрузится список пользователей.
//Напишите парсер, который спарсит этих пользователей и сохранит их в базу данных (каждого пользователя в свою запись).
//$page = getPageByUrl('http://old.code.mu/exercises/advanced/php/parsing/parsing-javascript-i-ajax-na-php/2/data.json', null, null, null, null);
//$db = DB::getConnect();
//$page=json_decode($page);
//foreach ($page as $nameUser) {
//    $sqlCheck = "SELECT * FROM `usersAjax` WHERE `name`='$nameUser'";
//    $statement = $db->prepare($sqlCheck);
//    $statement->execute();
//    $isBusyCountryName = $statement->fetchAll(PDO::FETCH_ASSOC);
//    if (!$isBusyCountryName) {
//        $sql = "INSERT INTO `usersAjax` (`name`) VALUES ('$name')";
//        $statement = $db->prepare($sql);
//        $statement->execute();
//    }
//}
//$db = null;
//var_dump($page);

//-------------------------------------------------------------------------------------------

//Зайдите на следующую страницу: перейдите по ссылке.
//По заходу на эту страницу ее контент подгружается с помощью AJAX.
//Напишите парсер, который спарсит подгружаемый контент страницы.
//$header = ['Content-Type:text/html', 'X-Requested-With:XMLHttpRequest'];
//$page = getPageByUrl('http://old.code.mu/exercises/advanced/php/parsing/parsing-javascript-i-ajax-na-php/3/page.php', null, null, null, $header);
//var_dump($page);

//-------------------------------------------------------------------------------------------

//Зайдите на следующую страницу: перейдите по ссылке.
//Если на этой странице нажать на кнопку - появится список пользователей. Спарсите всех пользователей и сохраните их в базу данных (каждого пользователя в новую строку в БД).
//Сделайте так, чтобы при повторном обращении парсера к станице, он сохранял только новых пользователей.
//$header = ['Content-Type:text/html', 'X-Requested-With:XMLHttpRequest'];
//$page = getPageByUrl('http://old.code.mu/exercises/advanced/php/parsing/parsing-javascript-i-ajax-na-php/4/1.php', null, null, null, $header);
//preg_match_all('#var\s*?users\s*?=\s*?\[(.+?)\]#su', $page, $match);
//$result = str_replace(["'", " "], ["", ""], $match[1][0]);
//$usersName = explode(",", $result);
//
//$db = DB::getConnect();
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$sqlCheck = "SELECT * FROM `users` WHERE `name`='$usersName'";
//$statement = $db->prepare($sqlCheck);
//$statement->execute();
//$isBusyCountryName = $statement->fetchAll(PDO::FETCH_ASSOC);
//if (!$isBusyCountryName) {
//    $sql = "INSERT INTO `users` (`name`) VALUES ('$usersName')";
//    $statement = $db->prepare($sql);
//    $statement->execute();
//}
//$db = null;