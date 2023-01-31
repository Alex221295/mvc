<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Model\Arcticle;
use App\Model\User;
use App\Model\Product;
use App\View;

ini_set('display_errors', 'On');
error_reporting(E_ALL);

function de($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    exit();
}

$products = new \App\Controllers\Product();
$products->action();

//$view->display(__DIR__ . '/Templates/index.php');
require_once __DIR__ . '/router/routers.php';





