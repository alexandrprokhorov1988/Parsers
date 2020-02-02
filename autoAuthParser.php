<?php
include_once 'db_connect.php';
require_once 'phpQuery/phpQuery-onefile.php';
include_once 'functions.php';

ini_set('max_execution_time', '10000');
set_time_limit(0);
ini_set('memory_limit', '2048M');

echo "<pre>";
//Зайдите на следующую страницу: 1.php.
//По первому заходу на эту страницу в браузер устанавливается кука. По второму заходу она выводится на экран.
//Напишите парсер, который зайдет на страницу два раза - первый раз для установки куки, а второй - для того, чтобы получить ее значение со страницы.
//$page = getPageByUrl('http://old.code.mu/exercises/advanced/php/parsing/avtomaticheskaya-avtorizaciya-na-sajte-s-pomoshchyu-curl/1/1.php',null, 'D:\Downloads\OSPanel\domains\localhost\ParseCodeMu\cookie.txt');
//var_dump($page);

//-------------------------------------------------------------------------------------------

//Зайдите на следующую страницу: 1.php.
//По заходу на эту страницу в сессию пишется строка. По заходу на страницу 2.php эта строка выводится из сессии на страницу.
//Напишите парсер, который зайдет на первую страницу для установки переменной сессии, а затем зайдет на вторую страницу и спарсит строку, выведенную на экран из сессии.
//$page = getPageByUrl('http://old.code.mu/exercises/advanced/php/parsing/avtomaticheskaya-avtorizaciya-na-sajte-s-pomoshchyu-curl/2/1.php', null, 'D:\Downloads\OSPanel\domains\localhost\ParseCodeMu\cookie.txt');
//$pq = phpQuery::newDocument($page);
//$href = $pq->find('p a')->attr('href');
//
//$page = getPageByUrl('http://old.code.mu/exercises/advanced/php/parsing/avtomaticheskaya-avtorizaciya-na-sajte-s-pomoshchyu-curl/2/' . $href, null, 'D:\Downloads\OSPanel\domains\localhost\ParseCodeMu\cookie.txt');
//$pq = phpQuery::newDocument($page);
//$elems = $pq->find('p')->text();
//var_dump($elems);

//-------------------------------------------------------------------------------------------

//Зайдите на следующую страницу: auth.php.
//На данной странице находится форма авторизации. Логин: 'user', пароль '123'. Если вбить правильный логин и пароль, а затем зайти на страницы 1.php, 2.php, 3.php, 4.php, 5.php, - вы увидите содержимое, которое видит только авторизованный пользователь.
//Напишите парсер, который авторизуется на данной странице, а затем зайдет на 5 указанных страниц (спарсите ссылки на них со страницы auth.php), заберет оттуда содержимое для авторизованного пользователя и сохранит его в базу.
//$arr = ['login' => 'user', 'password' => '123'];
//$page = getPageByUrl('http://old.code.mu/exercises/advanced/php/parsing/avtomaticheskaya-avtorizaciya-na-sajte-s-pomoshchyu-curl/3/auth.php', $arr, 'D:\Downloads\OSPanel\domains\localhost\ParseCodeMu\cookie.txt');
//$pq = phpQuery::newDocument($page);
//$pages = $pq->find('p a');
//foreach ($pages as $page) {
//    $linksPages[] = pq($page)->attr('href');
//}
//foreach ($linksPages as $linksPage) {
//    $page = getPageByUrl('http://old.code.mu/exercises/advanced/php/parsing/avtomaticheskaya-avtorizaciya-na-sajte-s-pomoshchyu-curl/3/' . $linksPage, null, 'D:\Downloads\OSPanel\domains\localhost\ParseCodeMu\cookie.txt');
//    $pq = phpQuery::newDocument($page);
//    $pagesForRegister[] = $pq->find('p')->text();
//}
//var_dump($pagesForRegister);

//-------------------------------------------------------------------------------------------

//Зайдите на следующую страницу: start.php.
//По заходу на эту страницу устанавливается заголовок HTTP_REFERER. Если затем перейти на страницу target.php - вы увидите текст, который нужно спарсить.
//Напишите парсер, который зайдет спарсит целевой текст со страницы target.php.
//$page = getPageByUrl('http://old.code.mu/exercises/advanced/php/parsing/avtomaticheskaya-avtorizaciya-na-sajte-s-pomoshchyu-curl/4/target.php', null, 'D:\Downloads\OSPanel\domains\localhost\ParseCodeMu\cookie.txt', 'http://old.code.mu/exercises/advanced/php/parsing/avtomaticheskaya-avtorizaciya-na-sajte-s-pomoshchyu-curl/4/start.php');
//$pq = phpQuery::newDocument($page);
//$pages = $pq->find('body')->text();
//var_dump($pages);

//-------------------------------------------------------------------------------------------

//Зайдите на следующую страницу: перейдите по ссылке.
//В данной задаче нужно отправить какой-то заголовок (какой - ищите сами), чтобы увидеть текст страницы. Если этот заголовок не будет отправлен - страница выдаст ошибку. Спасите целевой текст со страницы.
//$header = Array("Content-Type: text/xml");
//$page = getPageByUrl('http://old.code.mu/exercises/advanced/php/parsing/avtomaticheskaya-avtorizaciya-na-sajte-s-pomoshchyu-curl/5/1.php', null, 'D:\Downloads\OSPanel\domains\localhost\ParseCodeMu\cookie.txt', null, $header);
//$pq = phpQuery::newDocument($page);
//$pages = $pq->find('body')->text();
//var_dump($pages);