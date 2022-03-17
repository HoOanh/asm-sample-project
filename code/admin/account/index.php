<?php
require '../../global.php';
require '../../daos/pdo__user.php';
extract($_REQUEST);

$page_size = 10;

// ======== thêm danh mục =========

if (exist_param("btn_add")) {
    $VIEW_NAME = "new.php";
} else if (exist_param("btn_insert")) {
    //lấy dữ liệu
    $name = $_POST['fullName'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];


    //Thêm dữ liệu mới

    users__addNew($name, $username, $pass, $email, $phone, $gender, $role);
    // Show danh sách các danh mục

    $userList = users__selectLimt($page_size);
    $VIEW_NAME = "list.php";



    // chỉnh sữa danh mục
} else if (exist_param("btn_edit")) {
    $idUser = $_REQUEST['idUs'];
    $userInfo = users__selectByID($idUser);
    extract($userInfo);
    $VIEW_NAME = "edit.php";

    // update
} else if (exist_param("btn_update")) {
    $idUser = $_POST['idUser'];
    $name = $_POST['fullName'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];

    //Thêm dữ liệu mới
    users__update($idUser, $name, $username, $pass, $email, $phone, $gender, $role);

    // Show danh sách các danh mục

    $userList = users__selectLimt($page_size);
    $VIEW_NAME = "list.php";

    //======= xóa danh mục ============
} else if (exist_param("btn_del")) {
    $idUser = $_REQUEST['idUs'];
    users__del($idUser);


    // hiển thị lại danh sách các danh mục

    $userList = users__selectLimt($page_size);
    $VIEW_NAME = "list.php";
    header('location: ../account/');

    // ========= Danh sách danh mục===========
} else if (exist_param("btn_viewAll")) {
    // Hiển thị toàn bộ danh sách
    $userList = users__selectAll();
    $VIEW_NAME = "list.php";


    // ========= Danh sách danh mục===========
} else {
    // Hiển thị theo số lượng yêu cầu
    $userList = users__selectLimt($page_size);
    $VIEW_NAME = 'list.php';
}

require '../layout.php';
