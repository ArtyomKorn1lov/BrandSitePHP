<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/php_interface/init.php";
use lib\SiteHelper;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?=SiteHelper::getFullUrl(false);?>/template/images/origami-logo.svg" type="image/x-icon">
    <link href="<?=SiteHelper::getFullUrl(false);?>/template/styles/site.css" rel="stylesheet">
    <script src="<?=SiteHelper::getFullUrl(false);?>/template/scripts/jquery.js"></script>
    <script src="<?=SiteHelper::getFullUrl(false);?>/template/scripts/site.js"></script>
    <title>Онлайн магазин смартфонов</title>
</head>
<body>
<header>
    <div id="headerInside">
        <a href="<?=SiteHelper::getFullUrl(false);?>">
            <div id="logo"></div>
            <div id="companyName">Brand</div>
        </a>
        <div id="navWrap">
            <a href="<?=SiteHelper::getFullUrl(false);?>">
                Главная
            </a>
            <a href="<?=SiteHelper::getFullUrl(false);?>/catalog">
                Магазин
            </a>
        </div>
    </div>
</header>
<div id="content">