<a href="nodejs/start.html">Node JS</a>
<hr>
<?php
header("Refresh: 1");
$time = date("H:i:s");
echo $time;
/*$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'nodejs/start.html';
header("Location: http://$host$uri/$extra");
exit;*/
/*//Створення тимчасової куки
setcookie("name", "Bohdan");
//Створення куки на одну годину
setcookie("name", "Bohdan", time() + 3600);
// Створення куки на одну годину по шляху
setcookie("name", "Bohdan", time() + 3600, "/docs/");
// створення куки на одну годину по шляху для всіх піддоменів
setcookie("name", "Bohdan", time() + 3600, "/docs/", ".example.com");
// створення куки на одну годину по шляху для всіх піддоменів тільки при https
setcookie("name", "Bohdan", time() + 3600, "/docs/", ".example.com", true);
// Тільки коли використовується https
setcookie("name", "Bohdan", time() + 3600, "/docs/", ".example.com", flase, true);
*/

//setcookie("userName", "Bohdan");

//echo $_COOKIE['userName'];
//видалення куки
//setcookie("userName", "Bohdan", time()-3600);
/*
$user = [
    'name' => 'Bohdan',
    'city' => 'Chernivtsi',
    'age' => '21',
];

$str = serialize($user);
setcookie('userData', $str);

echo $str;*/

/*if (isset($_COOKIE['visitCounter']) and $_COOKIE['visitCounter'] != 0)
{
    $visitCounter = $_COOKIE['visitCounter'];
    $visitCounter++;
    setcookie('visitCounter', $visitCounter, time()+3600);
}
else {
    $visitCounter = 0;
    $visitCounter = $_COOKIE['visitCounter'];
    $visitCounter++;
    setcookie('visitCounter', $visitCounter, time()+3600);
}

echo $_COOKIE['visitCounter'];*/
/*
//setcookie('visitCounter', "", 1);
//Переадресація зі статусом 302
header("Location: http://www.google.com.ua");
// Переадресація зі статусом 302
header("HTTP/1.1 301 Moved Permanently");
header("Location: http://www.google.com.ua");
// Or
header("Location: http://www.google.com.ua", true, 301);

// Перезапрос ресурса
header("Refresh: 3");
header("Refresh: 3; url=http://www.google.com.ua");*/
