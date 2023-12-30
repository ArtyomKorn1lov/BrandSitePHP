<?php use lib\SiteHelper; ?>
<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="<?=SiteHelper::getFullUrl(false);?>/template/images/envelope.svg" class="contactIcon">
                info@brandshop.ru
            </div>
            <div class="contactWrap">
                <img src="<?=SiteHelper::getFullUrl(false);?>/template/images/phone-call.svg" class="contactIcon">
                8 800 555 00 00
            </div>
            <div class="contactWrap">
                <img src="<?=SiteHelper::getFullUrl(false);?>/template/images/placeholder.svg" class="contactIcon">
                Москва, пр-т Ленина, д. 1 офис 304
            </div>
        </div>

        <div id="footerNav">
            <a href="#">Главная</a>
            <a href="#">Магазин</a>
        </div>

        <div id="social">
            <img class="socialItem" src="<?=SiteHelper::getFullUrl(false);?>/template/images/vk-social-logotype.svg">
            <img class="socialItem" src="<?=SiteHelper::getFullUrl(false);?>/template/images/google-plus-social-logotype.svg">
            <img class="socialItem" src="<?=SiteHelper::getFullUrl(false);?>/template/images/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy; Brandshop</div>
    </div>
</footer>

</body>
</html>