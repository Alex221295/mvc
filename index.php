<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\Product;
ini_set('display_errors', 'On');
error_reporting(E_ALL);

function de($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    exit();
}

$products = new Product();
$products->action();

require_once __DIR__ . '/router/routers.php';





