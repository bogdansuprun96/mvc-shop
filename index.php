<?php
$a = 0;
$b = 100017172041788;
$random = rand($a, $b);
$src = "https://www.facebook.com/profile.php?id=$random";
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VK - Random</title>
</head>
<body>
<a href="<?php echo $src; ?>"><?php echo $src; ?></a>
<br>

<iframe src="<?=$src?>" frameborder="1" align="center" width="1000" height="100%" scrolling="auto"></iframe>
</body>
</html>
