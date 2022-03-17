<?php
require_once 'pdo.php';


function category__selectAll()
{
    $sql = "select * from productCategory order by ordinal";
    return pdo_query($sql);
}


function category__selectByID($idCategory)
{
    $sql = "select * from productCategory where idCategory = $idCategory";
    return pdo_query_one($sql);
}


function type__selectAll()
{
    $sql = "select * from productType order by ordinal";
    return pdo_query($sql);
}

function type__selectLimt($page_size)
{

    $sql = "select * from productType order by ordinal limit 0,$page_size";
    return pdo_query($sql);
}


function type__selectByID($idType)
{
    $sql = "select * from productType where idType = $idType";
    return pdo_query_one($sql);
}


function type__addNew($name, $showHide, $ordinal, $idCategory)
{
    $sql = "INSERT INTO productType ( nameType , showHide , ordinal,idCategory)
    VALUES (? , ?, ?, ?)";
    pdo_execute($sql, $name, $showHide, $ordinal, $idCategory);
}

function type__update($idType, $nameType, $showHide, $ordinal, $idCategory)
{
    $sql = "UPDATE productType SET nameType =?, showHide=?, ordinal=?,idCategory=? WHERE idType = ?";
    pdo_execute($sql, $nameType, $showHide, $ordinal, $idCategory, $idType);
}

function type__del($idType)
{
    $sql = "DELETE FROM productType WHERE idType = $idType";
    pdo_execute($sql);
}
