<?php

namespace lib;

/**
 * Вспомогательный класс для работы с сайтом
*/
class SiteHelper
{
    /**
     * Получить URL сайта
     * @param bool $isRequestURI
     * @return string
     */
    public static function getFullUrl(bool $isRequestURI): string {
        $full_url = "http://";
        if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on") {
            $full_url = "https://";
        }
        $full_url .= $_SERVER["SERVER_NAME"];
        return $isRequestURI ? $full_url.$_SERVER["REQUEST_URI"] : $full_url;
    }
}