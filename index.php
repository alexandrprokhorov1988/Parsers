<?php
echo "<pre>";

//Получите содержимое head, title и body.
//$str = file_get_contents('http://old.code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/1/1.php');
//
//$result = preg_match('#<head>.*?</head>#su', $str, $matches);
//var_dump($matches[0]);
//echo "<pre>";
//
//preg_match_all('#<title.*>(.+?)</title>#su', $str, $res);
//var_dump($res[1][0]);


//Получите массив href всех ссылок.
//$result3 = preg_match_all('#href\s*=[^>]*?(["\'])(.+?)\1#su', $str, $matches3);
//var_dump($matches3[0]);


//Получите массив текстов всех ссылок.
/*preg_match_all('#<a.+?>(.+?)<#su', $str, $matches4);*/
//var_dump($matches4[1]);



//С помощью file_get_contents получите HTML код страницы по ссылке выше и для этой страницы с помощью регулярных выражений решите следующие задачи:
/*$str = file_get_contents('http://old.code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/2/1.php');*/


//Получите содержимое body.
/*preg_match('#<body[^>]*?>(.+?)</body>#su', $str, $matches);*/


//Получите кодировку документа (нового и старого типа).
//preg_match_all('#<meta\s*?(charset\s*?=[^>]*?|http-equiv\s*?=\s*?"Content-Type"\s*?content="text/html;\s*?charset\s*?=[^>]*?\s*?"\s*?)>#su', $str, $matches);


//Получите содержимое #content.
//preg_match('#<div[^>]*?id=(["\'])content\1[^>]*?(.*?)</div>#su', $str, $matches);


//Получите все ссылки из #content.
//preg_match_all('#<div[^>]*?id=(["\'])content\1[^>]*?(.*?)</div>#su', $str, $matches);


// Получите содержимое всех абзацев.
//preg_match_all('#href\s*?=\s*?(["\'])([^"\']+)\1#su',$matches[0][0],$matches2);
//print_r($matches2[2]);


// Получите содержимое всех абзацев из #content.
/*preg_match('#<div[^>]*?id=(["\'])content\1[^>]*?(.*?)</div>#su', $str, $matches);
preg_match_all('#<p[^>]*>(.+?)</p>#su', $matches[0], $matches2);
var_dump($matches2);*/


// Получите все абзацы с классом www.
/*$result = preg_match_all('#<a[^>]*?class\s*?=\s*?["\']www.+?</a>#su',$str,$matches);
var_dump($matches);*/


// Получите все ссылки с классом www (их href и анкоры).
/*preg_match_all('#<div[^>]*?id=(["\'])content\1[^>]*?(.*?)</div>#su', $str, $matches);
preg_match_all('#<a[^>]*?class\s*?=\s*?["\']www.+?</a>#su',$matches[0][0],$matches2);
var_dump($matches2);*/


// Получите содержимое абзаца с классом .eee из #footer.
/*preg_match_all('#<div[^>]*?id=(["\'])footer\1[^>]*?(.*?)</div>#su', $str, $matches);
preg_match_all('#<p[^>]*?class\s*?=\s*?(["\'])eee\1>(.+?)</p>#su',$matches[0][0],$matches2);
var_dump($matches2);*/



//С помощью file_get_contents получите HTML код страницы по ссылке выше и для этой страницы с помощью регулярных выражений решите следующие задачи:
//$str = file_get_contents('http://old.code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/3/1.php');

//Получите массив ссылок из меню.
/*preg_match_all('#<div[^>]+?id\s*?=\s*?(["\'])menu\1[^>]*?>(.+?)</div>#su', $str, $matches);
preg_match_all('#<a[^>]+?>(.+?)</a>#su', $matches[0][0], $matches2);
var_dump($matches2);*/


//Получите массив всех картинок.
/*preg_match_all('#<img(.+?)>#su', $str, $matches);
var_dump($matches);*/


//Получите содержимое контента.
/*preg_match_all('#<div[^>]+?id\s*?=\s*?(["\'])content(.+?)<div[^>]*?id\s*?=\s*?(["\'])footer\1\s*?>#su', $str, $matches);*/
//var_dump($matches[0]);


//Получите картинки контента.
//preg_match_all('#<img(.+?)>#su', $matches[0][0], $matches2);
//var_dump($matches2);


//Удалите скрипты из полученного контента.
//function removeScripts()
//{
//    return 'скрипт заменен функцией';
//}
/*$clearScript = preg_replace_callback('#<script[^>]*?>(.*?)</script>#su', 'removeScripts', $matches[0][0]);*/
////var_dump($clearScript);


//Удалите картинки из полученного контента.
//function removeImages()
//{
//    return 'картинка заменен функцией';
//}
//$clearImages = preg_replace_callback('#<img(.*?)>#su', 'removeImages', $matches[0][0]);
//var_dump($clearImages);


//Удалите абзацы с классом "more" из полученного контента.
//function removeParagraf()
//{
//    return 'абзац заменен функцией';
//}
/*$clearParagraf = preg_replace_callback('#<p[^>]*?class\s*?=\s*?(["\'])more\1\s*?>(.*?)</p>#su', 'removeParagraf', $matches[0][0]);*/
//var_dump($clearParagraf);


// Теги h2 из контента сделайте просто текстом, а не ссылками.
/*$a = preg_replace('#(<h2.*?)(<a.*?>)(.*?)(</a>)(.*?</h2>)#su', '<p>$3</p>', $matches[0][0]);*/
//var_dump($a);


// Удалите все атрибуты абзацев из полученного контента.
//$b = preg_replace('#<p(.*?)>#su', '<p>', $matches[0][0]);
//var_dump($b);


// Удалите все теги span из полученного контента.
/*$c = preg_replace('#<span[^>]*?>(.*?)</span>#su', '', $matches[0][0]);*/
//var_dump($c);