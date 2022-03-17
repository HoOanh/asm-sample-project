<?php
require '../../global.php';
require '../../daos/pdo__invoice.php';
$VIEW_NAME = 'dashboard/home.php';

$invoiceList = invoice__selectAll();
extract($invoiceList);

$clientList = client__getClientNew();
extract($clientList);

require '../layout.php';
