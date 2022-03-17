<?php
require_once 'pdo.php';


function type__selectAll()
{
    $sql = "select * from productType order by ordinal";
    return pdo_query($sql);
}

function type__selectByID($idType)
{
    $sql = "select * from productType where idType = $idType";
    return pdo_query_one($sql);
}

function product__selectRealted($idType, $page_size)
{
    $sql = "select * from product where idType = $idType limit 0 ,$page_size";
    return pdo_query($sql);
}


function product__selectAll()
{
    $sql = "select * from product order by date";
    return pdo_query($sql);
}

function product__selectLimt($page_size)
{

    $sql = "select * from product order by date limit 0,$page_size";
    return pdo_query($sql);
}

function product__selectHighlight($page_size)
{

    $sql = "select * from product where highLight = 1 limit 0,$page_size";
    return pdo_query($sql);
}

function product__selectByID($idProduct)
{
    $sql = "select * from product where idProduct = $idProduct";
    return pdo_query_one($sql);
}

function product__addNew($nameProduct, $price, $content, $highlight, $idType)
{
    $sql = "INSERT INTO product ( nameProduct , price , content, highlight,date, idType)
    VALUES (? , ?, ?, ?, Now(), ?)";
    pdo_execute($sql, $nameProduct, $price, $content, $highlight, $idType);
}

function product__update($idProduct, $nameProduct, $price, $content, $highlight, $idType)
{
    $sql = "UPDATE product SET nameProduct = ?, price= ?, content= ?, highlight= ?, date = Now(), idType=? WHERE idProduct = ?";
    pdo_execute($sql, $nameProduct, $price, $content, $highlight, $idType, $idProduct);
}

function product__del($idProduct)
{
    $sql = "DELETE FROM product WHERE idProduct = $idProduct";
    pdo_execute($sql);
}
