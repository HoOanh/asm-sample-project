<?php
require '../../global.php';
require "../../daos/pdo__product.php";

extract($_REQUEST);

$page_size = 5;

$idProduct = $_GET['idProduct'];
$mainProduct = product__selectByID($idProduct);
extract($mainProduct);

$typeInfo = type__selectByID($idType);
extract($typeInfo);


$productList = product__selectRealted($idType, $page_size);


$VIEW_NAME = "details/product_details.php";

require "../layout.php";
