<?php
session_start();
$ROOT_URL = '../..';
$ASSETS_URL = "$ROOT_URL/assets";
$VENDOR_URL = "$ROOT_URL/vendor";
$ADMIN_URL = "$ROOT_URL/admin";
$SITE_URL = "$ROOT_URL/site";


function exist_param($fieldName)
{
    return array_key_exists($fieldName, $_REQUEST);
}

function save__file($fieldName, $target_dir)
{
    $file_uploaded = $_FILES[$fieldName];
    $file_name = basename($file_uploaded['name']);
    $target_path = $target_dir . $fieldName;
    move_uploaded_file($file_uploaded['tmp_name'], $target_path);
    return $file_name;
}
