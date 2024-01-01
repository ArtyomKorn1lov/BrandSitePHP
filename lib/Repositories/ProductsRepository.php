<?php

namespace lib\Repositories;

use mysqli;
use lib\Constants;
use lib\Models\ProductListModel;

/**
 * Репозиторий каталога товаров
 */
class ProductsRepository
{
    private false|mysqli $conn;

    /**
     * Конструктор
     */
    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "brand_site_php");
        if (!$this->conn) {
            die("Ошибка: " . mysqli_connect_error());
        }
    }

    /**
     * Получить список всех товаров
     * @return array|bool
     */
    public function getAll(): array|bool
    {
        $sql = "SELECT * FROM " . Constants::PRODUCT_TABLE_NAME;
        $result = mysqli_query($this->conn, $sql);
        if (!$result) {
            die("Ошибка: " . mysqli_error($this->conn));
            return false;
        }
        $rowCount = mysqli_num_rows($result);
        if ($rowCount <= 0) {
            return false;
        }
        $products = [];
        foreach ($result as $item) {
            $name = false;
            if (isset($item["NAME"]) && !empty($item["NAME"])) {
                $name = $item["NAME"];
            }
            $price = false;
            if (isset($item["PRICE"]) && !empty($item["PRICE"])) {
                $price = $item["PRICE"];
            }
            $text = false;
            if (isset($item["TEXT"]) && !empty($item["TEXT"])) {
                $text = $item["TEXT"];
            }
            $picture = false;
            if (isset($item["PICTURE"]) && !empty($item["PICTURE"])) {
                $picture = $item["PICTURE"];
            }
            $products[] = new ProductListModel($item["ID"], $name, $price, $text, $picture, $item["PRODUCT_DAY"]);
        }
        return $products;
    }
}