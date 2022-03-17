<?php
require '../../global.php';
require '../../daos/pdo__product.php';
extract($_REQUEST);

$page_size = 10;

// ======== thêm danh mục =========

if (exist_param("btn_add")) {
    $typeList = type__selectAll();
    $VIEW_NAME = "new.php";
} else if (exist_param("btn_insert")) {
    //lấy dữ liệu
    $nameProduct = $_POST['nameProduct'];
    $price = $_POST['price'];
    $content = $_POST['content'];
    $highlight = $_POST['highlight'];
    $idType = $_POST['idType'];


    //Thêm dữ liệu mới

    product__addNew($nameProduct, $price, $content, $highlight, $idType);

    // Show danh sách các danh mục

    $productList = product__selectLimt($page_size);
    $VIEW_NAME = "list.php";

    // chỉnh sữa danh mục
} else if (exist_param("btn_edit")) {
    $typeList = type__selectAll();
    $idProduct = $_REQUEST['idPr'];
    $productInfo = product__selectByID($idProduct);
    extract($productInfo);
    $VIEW_NAME = "edit.php";

    // update
} else if (exist_param("btn_update")) {
    $idProduct = $_POST['idProduct'];
    $nameProduct = $_POST['nameProduct'];
    $price = $_POST['price'];
    $content = $_POST['content'];
    $highlight = $_POST['highlight'];
    $idType = $_POST['idType'];


    //Thêm dữ liệu mới
    product__update($idProduct, $nameProduct, $price, $content, $highlight, $idType);

    // Show danh sách các danh mục

    $productList = product__selectLimt($page_size);
    $VIEW_NAME = "list.php";

    //======= xóa danh mục ============
} else if (exist_param("btn_del")) {
    $idProduct = $_REQUEST['idPr'];
    product__del($idProduct);


    // hiển thị lại danh sách các danh mục

    $productList = product__selectLimt($page_size);
    $VIEW_NAME = "list.php";
    header('location: ../products/');

    // ========= Danh sách danh mục===========
} else if (exist_param("btn_viewAll")) {
    // Hiển thị toàn bộ danh sách
    $productList = product__selectAll();
    $VIEW_NAME = "list.php";


    // ========= Danh sách danh mục===========
} else {
    // Hiển thị theo số lượng yêu cầu
    $productList = product__selectLimt($page_size);
    $VIEW_NAME = 'list.php';
}

require '../layout.php';
