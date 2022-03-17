<?php
require '../../global.php';
require '../../daos/pdo__product_category.php';
extract($_REQUEST);

$page_size = 10;

// ======== thêm danh mục =========

if (exist_param("btn_add")) {
    $VIEW_NAME = "new.php";
} else if (exist_param("btn_insert")) {
    //lấy dữ liệu
    $nameCategory = $_POST['nameCategory'];
    $showHide = $_POST['showHide'];
    $ordinal = $_POST['ordinal'];


    //Thêm dữ liệu mới
    category__addNew($nameCategory, $showHide, $ordinal);

    // Show danh sách các danh mục

    $categoryList = category__selectLimt($page_size);
    $VIEW_NAME = "list.php";

    // chỉnh sữa danh mục
} else if (exist_param("btn_edit")) {
    $idCategory = $_REQUEST['idCtg'];
    $categoryInfo = category__selectByID($idCategory);
    extract($categoryInfo);
    $VIEW_NAME = "edit.php";

    // update
} else if (exist_param("btn_update")) {
    $idCategory = $_POST['idCategory'];
    $nameCategory = $_POST['nameCategory'];
    $showHide = $_POST['showHide'];
    $ordinal = $_POST['ordinal'];

    //Thêm dữ liệu mới
    category__update($idCategory, $nameCategory, $showHide, $ordinal);

    // Show danh sách các danh mục

    $categoryList = category__selectLimt($page_size);
    $VIEW_NAME = "list.php";

    //======= xóa danh mục ============
} else if (exist_param("btn_del")) {
    $idCategory = $_REQUEST['idCtg'];
    category__del($idCategory);


    // hiển thị lại danh sách các danh mục

    $categoryList = category__selectLimt($page_size);
    $VIEW_NAME = "list.php";
    header('location: ../category/');

    // ========= Danh sách danh mục===========
} else if (exist_param("btn_viewAll")) {
    // Hiển thị toàn bộ danh sách
    $categoryList = category__selectAll();
    $VIEW_NAME = "list.php";


    // ========= Danh sách danh mục===========
} else {
    // Hiển thị theo số lượng yêu cầu
    $categoryList = category__selectLimt($page_size);
    $VIEW_NAME = 'list.php';
}

require '../layout.php';
