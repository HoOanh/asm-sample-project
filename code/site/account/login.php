<?php
require "../../global.php";
require "../../daos/pdo__user.php";

$u = $_POST['username'];
$p = $_POST['password'];

$user = users__checkUser($u, $p);


if ($user) {
    $_SESSION['user'] = $user;

    header("location: ../home/");
} else {
    header("location: ../home/?login_err");
}
