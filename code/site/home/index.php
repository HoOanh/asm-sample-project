<?php
require '../../global.php';
require "../../daos/pdo__product_category.php";
require "../../daos/pdo__product.php";

extract($_REQUEST);

$page_size = 10;

if (exist_param("shop")) {

    $productList = product__selectAll($page_size);
    $VIEW_NAME = "home/shop.php";
} else if (exist_param("about")) {

    $VIEW_NAME = "home/about.php";
} else if (exist_param("services")) {

    $VIEW_NAME = "home/services.php";
} else if (exist_param("blog")) {

    $VIEW_NAME = "home/blog.php";
} else if (exist_param("contact")) {

    $VIEW_NAME = "home/contact.php";
} else {
    $showCategory = category__selectShow();
    $productList = product__selectHighlight($page_size);

    $VIEW_NAME = "home/main.php";
}
require '../layout.php';
