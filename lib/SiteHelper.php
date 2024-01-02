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
    public static function getFullUrl(bool $isRequestURI): string
    {
        $full_url = Constants::PROTOCOLE_HTTP;
        if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on") {
            $full_url = Constants::PROTOCOLE_HTTPS;
        }
        $full_url .= $_SERVER["SERVER_NAME"];
        return $isRequestURI ? $full_url . $_SERVER["REQUEST_URI"] : $full_url;
    }

    /**
     * Подключить файл с включаемой областью
     * @param string $filePath
     * @return bool
     */
    public static function includeArea(string $filePath): bool
    {
        if (!file_exists($_SERVER["DOCUMENT_ROOT"] . $filePath)) {
            echo "The file $filePath does not exist";
            return false;
        }
        include $_SERVER["DOCUMENT_ROOT"] . $filePath;
        return true;
    }

    /**
     * Обрезать текст
     * @param string $text
     * @param int $chars
     * @return string
     */
    public static function truncateString(string $text, int $chars = 50): string
    {
        if (strlen($text) <= $chars) {
            return $text;
        }
        $text = $text." ";
        $text = substr($text,0,$chars);
        $text = substr($text,0,strrpos($text,' '));
        return $text."...";
    }
}