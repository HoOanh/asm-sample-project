<?php
require '../../global.php';
require '../../daos/pdo__product_type.php';
extract($_REQUEST);

$page_size = 10;

// ======== thêm danh mục =========

if (exist_param("btn_add")) {
    $categoryList = category__selectAll();
    $VIEW_NAME = "new.php";
} else if (exist_param("btn_insert")) {
    //lấy dữ liệu
    $idCategory = $_POST['idCategory'];
    $nameType = $_POST['nameType'];
    $showHide = $_POST['showHide'];
    $ordinal = $_POST['ordinal'];


    //Thêm dữ liệu mới
    type__addNew($nameType, $showHide, $ordinal, $idCategory);

    // Show danh sách các danh mục

    $typeList = type__selectLimt($page_size);
    $VIEW_NAME = "list.php";

    // chỉnh sữa danh mục
} else if (exist_param("btn_edit")) {
    $categoryList = category__selectAll();
    $idType = $_REQUEST['idPrt'];
    $typeInfo = type__selectByID($idType);
    extract($typeInfo);
    $VIEW_NAME = "edit.php";

    // update
} else if (exist_param("btn_update")) {
    $idType = $_POST['idType'];
    $nameType = $_POST['nameType'];
    $showHide = $_POST['showHide'];
    $ordinal = $_POST['ordinal'];
    $idCategory = $_POST['idCategory'];

    //Thêm dữ liệu mới
    type__update($idType, $nameType, $showHide, $ordinal, $idCategory);

    // Show danh sách các danh mục

    $typeList = type__selectLimt($page_size);
    $VIEW_NAME = "list.php";

    //======= xóa danh mục ============
} else if (exist_param("btn_del")) {
    $idType = $_REQUEST['idPrt'];
    type__del($idType);


    // hiển thị lại danh sách các danh mục

    $typeList = type__selectLimt($page_size);
    $VIEW_NAME = "list.php";
    header('location: ../productType/');

    // ========= Danh sách danh mục===========
} else if (exist_param("btn_viewAll")) {
    // Hiển thị toàn bộ danh sách
    $typeList = type__selectAll();
    $VIEW_NAME = "list.php";


    // ========= Danh sách danh mục===========
} else {
    // Hiển thị theo số lượng yêu cầu
    $typeList = type__selectLimt($page_size);
    $VIEW_NAME = 'list.php';
}

require '../layout.php';
