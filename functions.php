<?php
include_once 'db_connect.php';
require_once 'phpQuery/phpQuery-onefile.php';
function getPageByUrl($url, $array = null, $cookieFileFullPath = null, $referer = null, $header = null)
{
    //Инициализируем сеанс
    $curl = curl_init();
    //Указываем адрес страницы
    curl_setopt($curl, CURLOPT_URL, $url);
    //Ответ сервера сохранять в переменную, а не на экран
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    //Переходить по редиректам
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    //остановки cURL от проверки сертификата узла сети
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36');
    curl_setopt($curl, CURLOPT_ENCODING, "");
    if ($array) {
        //использования обычного HTTP POST.
        curl_setopt($curl, CURLOPT_POST, true);
        //данные, передаваемые в HTTP POST-запросе
        curl_setopt($curl, CURLOPT_POSTFIELDS, $array);
    }
    if ($cookieFileFullPath) {
        //принимать и сохранять куки в файл
        curl_setopt($curl, CURLOPT_COOKIEFILE, $cookieFileFullPath);
        //выполнить сохранение куки в файл
        curl_exec($curl);
        //отправлять сохраненные куки на сервер
        curl_setopt($curl, CURLOPT_COOKIEJAR, $cookieFileFullPath);
    }
    if ($referer) {
        //Содержимое заголовка "Referer: ", который будет использован в HTTP-запросе.
        curl_setopt($curl, CURLOPT_REFERER, $referer);
    }
    //заголовки CURLOPT_HTTPHEADER будут отсылаться только на сервер
    if ($header) {
        //вывод заголовков
        curl_setopt($curl, CURLOPT_HEADER, false);
        //Массив устанавливаемых HTTP-заголовков, в формате array('Content-type: text/plain', 'Content-length: 100')
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
    }
    //Выполняем запрос:
    $result = curl_exec($curl);
    //Отлавливаем ошибки подключения
    if ($result === false) {
        echo "Ошибка CURL: " . curl_error($curl);
        curl_close($curl);
        return false;
    } else {
        curl_close($curl);
        return $result;
    }
}

function setCurlOptions($url, $array = null, $cookieFileFullPath = null, $referer = null, $header = null)
{
    //Инициализируем сеанс
    $curl = curl_init();
    //Указываем адрес страницы
    curl_setopt($curl, CURLOPT_URL, $url);
    //Ответ сервера сохранять в переменную, а не на экран
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    //Переходить по редиректам
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    //остановки cURL от проверки сертификата узла сети
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36');
    if ($array) {
        //использования обычного HTTP POST.
        curl_setopt($curl, CURLOPT_POST, true);
        //данные, передаваемые в HTTP POST-запросе
        curl_setopt($curl, CURLOPT_POSTFIELDS, $array);
    }
    if ($cookieFileFullPath) {
        //принимать и сохранять куки в файл
        curl_setopt($curl, CURLOPT_COOKIEFILE, $cookieFileFullPath);
        //выполнить сохранение куки в файл
        curl_exec($curl);
        //отправлять сохраненные куки на сервер
        curl_setopt($curl, CURLOPT_COOKIEJAR, $cookieFileFullPath);
    }
    if ($referer) {
        //Содержимое заголовка "Referer: ", который будет использован в HTTP-запросе.
        curl_setopt($curl, CURLOPT_REFERER, $referer);
    }
    //заголовки CURLOPT_HTTPHEADER будут отсылаться только на сервер
    if ($header) {
        //вывод заголовков
        curl_setopt($curl, CURLOPT_HEADER, false);
        //Массив устанавливаемых HTTP-заголовков, в формате array('Content-type: text/plain', 'Content-length: 100')
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
    }
    return $curl;
}

function getPageByMultipleUrl($urls, $arr = null, $cookie = null, $referer = null, $header = null)
{
    $result = [];                                       //данные html с каждого url
    $mh = curl_multi_init();                            //инициализация множественного обработчика
    $aCurlHandles = [];                                 //url и настройки curl_setopt
    foreach ($urls as $url) {                    //для каждого url
        $ch = setCurlOptions($url, $arr, $cookie, $referer, $header); //устанавливаем настройки
        $aCurlHandles[$url] = $ch;                      //записываем url с настройками в массив
        curl_multi_add_handle($mh, $ch);                //добавляем обычные обработчики в набор обработчиков
    }
    $active = null;                                     //количество активных потоков
    do {                                                //инициализация выполнения
        $mrc = curl_multi_exec($mh, $active); //curl_multi_exec одновременно отправляет на выполнение все объявленные потоки; в переменную $active заносится количество выполняемых потоков
    } while ($mrc == CURLM_CALL_MULTI_PERFORM); //пока возвращенное значение является константой ‘CURLM_CALL_MULTI_PERFORM’, значит ответ от сервера еще не получен
    while ($active && $mrc == CURLM_OK) {               //основной цикл
        if (curl_multi_select($mh) != -1) {             //curl_multi_select блокирует выполнение скрипта, пока какое-либо из curl_multi соединений не станет активным.
            do {
                $mrc = curl_multi_exec($mh, $active);
            } while ($mrc == CURLM_CALL_MULTI_PERFORM);
        }
    }
    foreach ($aCurlHandles as $url => $ch) {
        $result[] = curl_multi_getcontent($ch);         //Возвращает результат операции, если была установлена опция CURLOPT_RETURNTRANSFER
        curl_multi_remove_handle($mh, $ch);             //Удаляет cURL дескриптор из набора cURL дескрипторов
        curl_close($ch);
    }
    curl_multi_close($mh);                              //Закрывает набор cURL-дескрипторов
    return $result;
}