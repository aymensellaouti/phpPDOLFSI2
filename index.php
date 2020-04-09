<?php
 $name = "Aymen";
 $age = 37;
 $somme = 3 + 10;
 echo ($name);
//var_dump(count_chars($name, 1));
$date = "02/07/1982";
$dateInfo = explode('/', $date);
$dateWithoutDelimiter = implode('',$dateInfo);
echo  $dateWithoutDelimiter;
//var_dump($dateInfo);
 function presentYourSelf() {
//     echo 'Bonjour '.$GLOBALS['name'].' et tu as '.$GLOBALS['age'].' ans';
     echo "Bonjour ${GLOBALS['name']} et tu as ${GLOBALS['age']} ans";
 }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>  <?php
    presentYourSelf(); ?> </h1>
</body>
</html>