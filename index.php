<?php
require($_SERVER["DOCUMENT_ROOT"]."/template/header.php");
use lib\SiteHelper;
?>
    <div id="promo">
        <h1 id="promoText">
            Купите телефон по самой выгодной цене!
        </h1>
    </div>

    <div id="mainTextWrap">
        <div id="mainText">
            <?php SiteHelper::includeArea("/include/main/main-text.php") ?>
        </div>
    </div>
<?php require($_SERVER["DOCUMENT_ROOT"]."/template/footer.php"); ?>