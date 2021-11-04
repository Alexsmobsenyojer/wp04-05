<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width={device-width}, initial-scale=1.0">
    <title>Bagetomat</title>
</head>
<body>
<?php
require_once 'bagetomat.php';

$purchase1  = new Bagetomat(5,50,100);

try
{$purchase1->insertCoin(60);}
catch (\Throwable $th) {
    echo  $th->getMessage();}
?>
</body>
</html>
