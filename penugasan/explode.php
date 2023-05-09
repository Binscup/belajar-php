<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$stringTunggal = "syahru,alam, ilham, farhan";
$explode = explode(",", $stringTunggal);
print_r($explode) ;
?>
<br>
<?php
$stringTunggal = "html-css-javascript-php";
$explode = explode("-", $stringTunggal);
print_r($explode) ;
?>
</body>
</html>