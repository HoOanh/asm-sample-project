<?php
require_once 'pdo.php';


function invoice__selectAll()
{
    $sql = "select nameProduct,Price,status from invoiceDetails";
    return pdo_query($sql);
}

function client__getClientNew()
{
    $sql = "select fullName, email from users where role = 0";
    return pdo_query($sql);
}
