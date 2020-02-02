<?php
include_once 'db_connect.php';
require_once 'phpQuery/phpQuery-onefile.php';
include_once 'functions.php';

ini_set('max_execution_time', '10000');
set_time_limit(0);
ini_set('memory_limit', '2048M');


echo "<pre>";
//Зайдите на следующую страницу: перейдите по ссылке.
//Введите число в форму и нажмите на кнопку - под формой вы увидите квадрат этого числа.
//Напишите парсер, в котором будет дан массив чисел. Эти числа нужно будет возвести в квадрат с помощью данной страницы и вывести их квадраты на экран.
//$arr = [5, 6, 7, 8, 9, 10];
//foreach ($arr as $numberFromArray) {
//    $page = getPageByUrl('http://old.code.mu/exercises/advanced/php/parsing/avtomaticheskaya-otpravka-form-na-php-s-pomoshchyu-curl/1/1.php', ['num' => $numberFromArray]);
//    $pq = phpQuery::newDocument($page);
//    $elems = $pq->find('p');
//    foreach ($elems as $item) {
//        $elem = pq($item);
//        $text[] = $elem->text();
//    }
//}
//var_dump($text);

//-------------------------------------------------------------------------------------------

//Зайдите на следующую страницу: перейдите по ссылке.
//На этой странице в форму можно ввести ваше имя и сообщение для отправки на сайт.
//Напишите парсер, в котором будет массив имен и сообщений формата [['name'=>'', 'message'=>''], ['name'=>'', 'message'=>'']]. Отправьте все сообщения в эту форму.
//После отправки каждого сообщения убеждайтесь в том, что сообщение успешно отправлено (специально для задачи страница сделана так, чтобы ошибку выдавало каждая третья попытка отправки). Если это не так - повторите отправку данного сообщения.
//$arr = [
//    ['name' => 'пыня', 'text' => 'вор'],
//    ['name' => 'медведка', 'text' => 'дурак'],
//    ['name' => 'ведро', 'text' => 'сральное']
//];
//
//foreach ($arr as $numberFromArray) {
//    $flag = true;
//    while ($flag) {
//        $page = getPageByUrl('http://old.code.mu/exercises/advanced/php/parsing/avtomaticheskaya-otpravka-form-na-php-s-pomoshchyu-curl/2/1.php', $numberFromArray);
//        $pq = phpQuery::newDocument($page);
//        $text = $pq->find('p')->text();
//        if ($text == 'Ошибка отправки сообщения!') {
//            $flag = true;
//        } else {
//            $flag = false;
//        }
//        var_dump($text);
//    }
//}

//-------------------------------------------------------------------------------------------

//Зайдите на следующую страницу: перейдите по ссылке.
//На этой странице по нажатию на кнопку форма отдает случайное число. С помощью парсера получите 100 случайных чисел и рассчитайте их среднее арифметическое (сумма делить на количество).
//$arr = ['protection' => 'string', 'button' => 'Нажми на меня'];
//$text = [];
//for ($i = 0; $i < 100; ++$i) {
//    $page = getPageByUrl('http://old.code.mu/exercises/advanced/php/parsing/avtomaticheskaya-otpravka-form-na-php-s-pomoshchyu-curl/3/1.php', $arr);
//    $pq = phpQuery::newDocument($page);
//    $number = $pq->find('p')->text();
//    $text[] = +substr(strrchr($number,' '),1);
//}
//echo array_sum($text)/count($text);

//-------------------------------------------------------------------------------------------

//Зайдите на следующую страницу: перейдите по ссылке.
//На этой странице можно выбрать определенного пользователя и нажать на кнопку - и вы увидите его возраст.
//Сделайте парсер, который вначале зайдет на страницу, вытянет все данные из селекта и затем автоматически отправит эту форму столько раз, сколько пунктов в селекте, найдет всех пользователей и их возраста и сохранит все это в базу данных.
//Сделайте так, чтобы можно было провести повторный парсинг и в базу сохранились только новые пользователи.
//$page = getPageByUrl('http://old.code.mu/exercises/advanced/php/parsing/avtomaticheskaya-otpravka-form-na-php-s-pomoshchyu-curl/4/1.php');
//$pq = phpQuery::newDocument($page);
//$elems = $pq->find('option');
//$db = DB::getConnect();
//foreach ($elems as $elem) {
//    $text = pq($elem)->text();
//    $value[$text] = pq($elem)->attr('value');
//}
//foreach ($value as $name => $val) {
//    $arr = ['user' => $val, 'button' => 'Нажми на меня'];
//    $page = getPageByUrl('http://old.code.mu/exercises/advanced/php/parsing/avtomaticheskaya-otpravka-form-na-php-s-pomoshchyu-curl/4/1.php', $arr);
//    $pq = phpQuery::newDocument($page);
//    $age = +substr(strrchr($pq->find('p')->text(),' '),1);
//    $sqlCheck = "SELECT * FROM `formparse` WHERE `name`='$name'";
//    $statement = $db->prepare($sqlCheck);
//    $statement->execute();
//    $isBusyName = $statement->fetchAll(PDO::FETCH_ASSOC);
//    if (!$isBusyName) {
//        $sql = "INSERT INTO `formparse` (`name`,`value`,`age`) VALUES ('$name', '$val','$age')";
//        $statement = $db->prepare($sql);
//        $statement->execute();
//        var_dump($name);
//        var_dump($val);
//        var_dump($age);
//    }
//}
//$db = null;
