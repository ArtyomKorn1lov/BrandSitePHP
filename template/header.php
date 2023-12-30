<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/php_interface/init.php";
use lib\SiteHelper;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="<?=SiteHelper::getFullUrl(false);?>/template/styles/site.css" rel="stylesheet">
    <script src="<?=SiteHelper::getFullUrl(false);?>/template/scripts/jquery.js"></script>
    <script src="<?=SiteHelper::getFullUrl(false);?>/template/scripts/site.js"></script>
    <title>Онлайн магазин</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Brand</div>
        <div id="navWrap">
            <a href="#">
                Главная
            </a>
            <a href="#">
                Магазин
            </a>
        </div>
    </div>
</header>