<!--<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/all.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>



    <script src="assets/js/jquery-3.6.0.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>-->

<?php

require_once 'vendor/autoload.php';
use App\classes\Calculator;

$calculator = new Calculator(['10','20','BITM',20,400,5444,4545,6465,56,56]);
$calculator->index();

