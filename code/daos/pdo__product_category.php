<?php
require_once 'pdo.php';

// truy vấn danh sách danh mục đang có
// theo thứ tự và hiện trên website

function category__selectAll()
{
    $sql = "select * from productCategory order by ordinal";
    return pdo_query($sql);
}

function category__selectShow()
{
    $sql = "select * from productCategory where showHide = 1 order by ordinal";
    return pdo_query($sql);
}

function category__selectLimt($page_size)
{

    $sql = "select * from productCategory order by ordinal limit 0,$page_size";
    return pdo_query($sql);
}


function category__selectByID($idCategory)
{
    $sql = "select * from productCategory where idCategory = $idCategory";
    return pdo_query_one($sql);
}


function category__addNew($name, $showHide, $ordinal)
{
    $sql = "INSERT INTO productCategory ( nameCategory , showHide , ordinal)
    VALUES (? , ?, ?)";
    pdo_execute($sql, $name, $showHide, $ordinal);
}

function category__update($idCategory, $nameCategory, $showHide, $ordinal)
{
    $sql = "UPDATE productCategory SET nameCategory =?, showHide=?, ordinal=? WHERE idCategory = ?";
    pdo_execute($sql, $nameCategory, $showHide, $ordinal, $idCategory);
}

function category__del($idCategory)
{
    $sql = "DELETE FROM productCategory WHERE idCategory = $idCategory";
    pdo_execute($sql);
}
