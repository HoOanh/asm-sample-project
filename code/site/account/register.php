<?php
require "../../global.php";
require "../../daos/pdo__user.php";

$name = $_POST['fullName'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$role = 0;


//Thêm dữ liệu mới

$User = checkUsername('username', $username);


if (count($User) >= 1) {
    header("location: ../home/?register_err");
} else {
    users__addNew($name, $username, $pass, $email, $phone, $gender, $role);
    header("location: ../home/?register");
}
