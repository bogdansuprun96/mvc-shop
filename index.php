<a href="nodejs/start.html">Node JS</a>
<hr>
<?php
/*$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'nodejs/start.html';
header("Location: http://$host$uri/$extra");
exit;*/
//Створення тимчасової куки
setcookie("name", "Bohdan");
//Створення куки на
setcookie("name", "Bohdan", time() + 3600);
setcookie("name", "Bohdan", time() + 3600, "");