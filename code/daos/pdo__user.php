<?php
require_once 'pdo.php';

function users__selectAll()
{
    $sql = "select * from users order by date";
    return pdo_query($sql);
}

function users__selectLimt($page_size)
{
    $sql = "select * from users order by date limit 0,$page_size";
    return pdo_query($sql);
}


function users__selectByID($idUser)
{
    $sql = "select * from users where idUser = $idUser";
    return pdo_query_one($sql);
}

function users__checkUser($username, $pass)
{
    $sql = "select * from users where username = ? and pass = ?";
    return pdo_query_one($sql, $username, $pass);
}


function users__addNew($name, $username, $pass, $email, $phone, $gender,  $role)
{
    $sql = "INSERT INTO users ( fullName , username , pass, email, phone, gender,date, role)
    VALUES (? , ?, ?, ?, ?, ?, Now(), ?)";
    pdo_execute($sql, $name, $username, $pass, $email, $phone, $gender, $role);
}

function users__update($idUser, $name, $username, $pass, $email, $phone, $gender,  $role)
{
    $sql = "UPDATE users SET fullName =?, username=?, pass=?, email=?, phone=?, gender=?, date=Now(), role=? WHERE idUser = ?";
    pdo_execute($sql, $name, $username, $pass, $email, $phone, $gender, $role, $idUser);
}

function users__del($idUser)
{
    $sql = "DELETE FROM users WHERE idUser = $idUser";
    pdo_execute($sql);
}


function checkUsername($key, $value)
{
    $sql = "SELECT * FROM users WHERE $key = ?";
    return pdo_query($sql, $value);
}
